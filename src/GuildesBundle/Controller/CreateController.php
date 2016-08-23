<?php

namespace GuildesBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use GuildesBundle\Entity\Perso;
use GuildesBundle\Entity\Fiche;

class CreateController extends Controller {

    public function indexAction() {
        $notice = null;
        $type = null;

        $em = $this->getDoctrine()->getManager('guildes');
        $repositoryMaison = $em->getRepository('GuildesBundle:Maison');
        $repositoryMetier = $em->getRepository('GuildesBundle:Metier');
        $repositoryComp = $em->getRepository('GuildesBundle:Competence');
        $repositoryArme = $em->getRepository('GuildesBundle:Arme');
        $repositoryArmure = $em->getRepository('GuildesBundle:Armure');
        $repositoryEquip = $em->getRepository('GuildesBundle:Equipement');
        $repositoryTour = $em->getRepository('GuildesBundle:Tour');
        $repositorySort = $em->getRepository('GuildesBundle:Sort');
        $repositorySortilege = $em->getRepository('GuildesBundle:Sortilege');

        $listeMaison = $repositoryMaison->findBy(array(), array('nom' => 'asc'));
        $listeMetier = $repositoryMetier->findBy(array(), array('nom' => 'asc'));
        $listeArme = $repositoryArme->findBy(array(), array('nom' => 'asc'));
        $listeArmure = $repositoryArmure->findBy(array(), array('nom' => 'asc'));

        $listeTour = $repositoryTour->createQueryBuilder('c')->orderBy('c.maison')->getQuery()->getResult();
        $listeSort = $repositorySort->createQueryBuilder('c')->orderBy('c.maison')->getQuery()->getResult();
        $listeSortilege = $repositorySortilege->createQueryBuilder('c')->orderBy('c.maison')->getQuery()->getResult();

        $listeComp = $repositoryComp->createQueryBuilder('c')->where('c.apprenti = 1')->orderBy('c.nom', 'ASC')->getQuery()->getResult();
        $listeEquip = $repositoryEquip->createQueryBuilder('c')->where('c.rarete < 12')->orderBy('c.nom', 'ASC')->getQuery()->getResult();

        return $this->render('GuildesBundle:Guildes/Create:index.html.twig', array('notice' => $notice,
                    'type' => $type,
                    'listemaison' => $listeMaison,
                    'listemetier' => $listeMetier,
                    'listecomp' => $listeComp,
                    'listearme' => $listeArme,
                    'listearmure' => $listeArmure,
                    'listeequip' => $listeEquip,
                    'listetour' => $listeTour,
                    'listesort' => $listeSort,
                    'listesortilege' => $listeSortilege,));
    }

    public function getMetierAction($id) {

        $em = $this->getDoctrine()->getManager('guildes');
        $allCompMetier = null;
        $allCompAca = null;

        if ($id > 0) {
            $metier = $em->getRepository('GuildesBundle:Metier')->find($id);
            if ($metier === null) {
                throw $this->createNotFoundException('Metier[id=' . $id . '] inexistant.');
            } else {
                $listeCompMetier = $em->getRepository('GuildesBundle:CompetenceMetier')->findByMetier($metier->getId());
                $repositoryComp = $em->getRepository('GuildesBundle:Competence');
                $listeCompAca = $repositoryComp->createQueryBuilder('c')->where('c.academie = 1')->orderBy('c.nom', 'ASC')->getQuery()->getResult();
                foreach ($listeCompMetier as $compMetier) {
                    $allCompMetier[$compMetier->getCompetence()->getId()] = $compMetier->getCompetence()->getNom();
                }
                foreach ($listeCompAca as $compAca) {
                    if (!in_array($compAca->getNom(), $allCompMetier)) {
                        $allCompAca[$compAca->getId()] = $compAca->getNom();
                    }
                }
            }
        }
        $response = new Response(json_encode(array('comp' => $allCompMetier, 'aca' => $allCompAca)));
        $response->headers->set('Content-Type', 'application/json');

        return $response;
    }

    public function createAction() {

        $request = Request::createFromGlobals();

        if ($request->getMethod() === 'POST') {

            $em = $this->getDoctrine()->getManager('guildes');
            $metier = $em->getRepository('GuildesBundle:Metier')->find($request->request->get('metiers'));
            $repositoryComp = $em->getRepository('GuildesBundle:Competence');
            $repositoryArmes = $em->getRepository('GuildesBundle:Arme');
            $repositoryArmures = $em->getRepository('GuildesBundle:Armure');
            $repositoryEquip = $em->getRepository('GuildesBundle:Equipement');
            $repositoryTour = $em->getRepository('GuildesBundle:Tour');
            $repositorySort = $em->getRepository('GuildesBundle:Sort');
            $repositorySortil = $em->getRepository('GuildesBundle:Sortilege');
            $competencesCpg = Array();
            $tours = array();
            $sorts = array();
            $sortils = array();

            if ($request->request->get('comp') !== null) {
                foreach ($request->request->get('comp') as $id => $niveau) {
                    $comp = $repositoryComp->find($id);
                    if ($comp->getApprenti() === 1) {
                        $competences[$comp->getNom()] = $niveau;
                    } else {
                        $competencesCpg[$comp->getNom()] = $niveau;
                    }
                }

                ksort($competences);
                ksort($competencesCpg);
            }

            $loom = ["jaune" => 0, "noir" => 0, "rouge" => 0, "vert" => 0, "violet" => 0];
            foreach ($loom as $couleur) {
                $loom[$couleur] = $request->request->get($couleur);
            }

            if ($request->request->get('armes') !== null) {
                foreach ($request->request->get('armes') as $id) {
                    $arme = $repositoryArmes->find($id);
                    if ($request->request->get('fort') >= $arme->getFort()) {
                        $armes[$arme->getId()] = $arme;
                    }
                }
            }

            if ($request->request->get('armures') !== null) {
                foreach ($request->request->get('armures') as $id) {
                    $armure = $repositoryArmures->find($id);
                    $armures[$armure->getId()] = $armure;
                }
            }

            if ($request->request->get('equip') !== null) {
                foreach ($request->request->get('equip') as $id) {
                    $item = $repositoryEquip->find($id);
                    $equip[$item->getId()] = $item;
                }
            }
            
            if ($request->request->get('tour') !== null) {
                foreach ($request->request->get('tour') as $id) {
                    $tour = $repositoryTour->find($id);
                    $tours[$tour->getId()] = $tour;
                }
            }
            
            if ($request->request->get('sort') !== null) {
                foreach ($request->request->get('sort') as $id) {
                    $sort = $repositorySort->find($id);
                    $sorts[$sort->getId()] = $sort;
                }
            }
            
            if ($request->request->get('sortil') !== null) {
                foreach ($request->request->get('sortil') as $id) {
                    $sortil = $repositorySortil->find($id);
                    $sortils[$sortil->getId()] = $sortil;
                }
            }

            $perso = new Perso($request);
            $fiche = new Fiche($perso, $this->getUser()->getId());
            $perso->setMetier($metier->getNom());
            $perso->setCompetences($competences);
            $perso->setCompetencesCpg($competencesCpg);
            $perso->setLoom($loom);
            $perso->setArmes($armes);
            $perso->setArmures($armures);
            $perso->setEquip($equip);
            $perso->setTours($tours);
            $perso->setSorts($sorts);
            $perso->setSortils($sortils);

            $em->persist($fiche);
            $em->persist($perso);
            $em->flush();

            $html = $this->renderView('GuildesBundle:Guildes/Create:generate.html.twig', array('perso' => $perso,));
            if ($request->request->get('options') === 'jpg') {
                return new Response($this->get('knp_snappy.image')->getOutputFromHtml($html), 200, array('Content-Type' => 'image/jpg', 'Content-Disposition' => 'filename="' . str_replace(" ", "_", $perso->getNom()) . ".jpg"));
            } else {
                return new Response($this->get('knp_snappy.pdf')->getOutputFromHtml($html), 200, array('Content-Type' => 'application/pdf', 'Content-Disposition' => 'filename="' . str_replace(" ", "_", $perso->getNom()) . '.pdf'));
            }
        }
    }

}
