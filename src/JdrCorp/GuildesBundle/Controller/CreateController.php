<?php

namespace JdrCorp\GuildesBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Response;
use JdrCorp\GuildesBundle\Entity\Perso;

class CreateController extends Controller {

    public function indexAction() {
        $notice = null;
        $type = null;

        $em = $this->getDoctrine()->getManager('guildes');
        $repositoryMaison = $em->getRepository('JdrCorpGuildesBundle:Maison');
        $repositoryMetier = $em->getRepository('JdrCorpGuildesBundle:Metier');
        $repositoryComp = $em->getRepository('JdrCorpGuildesBundle:Competence');
        $repositoryArme = $em->getRepository('JdrCorpGuildesBundle:Arme');
        $repositoryArmure = $em->getRepository('JdrCorpGuildesBundle:Armure');
        $repositoryEquip = $em->getRepository('JdrCorpGuildesBundle:Equipement');
        $repositoryTour = $em->getRepository('JdrCorpGuildesBundle:Tour');
        $repositorySort = $em->getRepository('JdrCorpGuildesBundle:Sort');
        $repositorySortilege = $em->getRepository('JdrCorpGuildesBundle:Sortilege');

        $listeMaison = $repositoryMaison->findBy(array(), array('nom' => 'asc'));
        $listeMetier = $repositoryMetier->findBy(array(), array('nom' => 'asc'));
        $listeArme = $repositoryArme->findBy(array(), array('nom' => 'asc'));
        $listeArmure = $repositoryArmure->findBy(array(), array('nom' => 'asc'));

        $listeTour = $repositoryTour->createQueryBuilder('c')->orderBy('c.maison')->getQuery()->getResult();
        $listeSort = $repositorySort->createQueryBuilder('c')->orderBy('c.maison')->getQuery()->getResult();
        $listeSortilege = $repositorySortilege->createQueryBuilder('c')->orderBy('c.maison')->getQuery()->getResult();

        $listeComp = $repositoryComp->createQueryBuilder('c')->where('c.apprenti = 1')->orderBy('c.nom', 'ASC')->getQuery()->getResult();
        $listeEquip = $repositoryEquip->createQueryBuilder('c')->where('c.rarete < 12')->orderBy('c.nom', 'ASC')->getQuery()->getResult();

        return $this->render('JdrCorpGuildesBundle:Guildes/Create:index.html.twig', array('notice' => $notice,
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
            $metier = $em->getRepository('JdrCorpGuildesBundle:Metier')->find($id);
            if ($metier === null) {
                throw $this->createNotFoundException('Metier[id=' . $id . '] inexistant.');
            } else {
                $listeCompMetier = $em->getRepository('JdrCorpGuildesBundle:CompetenceMetier')->findByMetier($metier->getId());
                $repositoryComp = $em->getRepository('JdrCorpGuildesBundle:Competence');
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

        $request = $this->getRequest();

        if ($request->getMethod() === 'POST') {

            $em = $this->getDoctrine()->getManager('guildes');
            $metier = $em->getRepository('JdrCorpGuildesBundle:Metier')->find($request->request->get('metiers'));
            $repositoryComp = $em->getRepository('JdrCorpGuildesBundle:Competence');
            $repositoryArmes = $em->getRepository('JdrCorpGuildesBundle:Arme');
            $repositoryArmures = $em->getRepository('JdrCorpGuildesBundle:Armure');
            $repositoryEquip = $em->getRepository('JdrCorpGuildesBundle:Equipement');
            $competencesCpg = Array();

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

            $perso = new Perso($request);
            $perso->setMetier($metier->getNom());
            $perso->setCompetences($competences);
            $perso->setCompetencesCpg($competencesCpg);
            $perso->setLoom($loom);
            $perso->setArmes($armes);
            $perso->setArmures($armures);
            $perso->setEquip($equip);

            $html = $this->renderView('JdrCorpGuildesBundle:Guildes/Create:generate.html.twig', array('perso' => $perso,));
            if ($request->request->get('options') === 'jpg') {
                return new Response($this->get('knp_snappy.image')->getOutputFromHtml($html), 200, array('Content-Type' => 'image/jpg', 'Content-Disposition' => 'filename="' . str_replace(" ", "_", $perso->getNom()) . ".jpg"));
            } else {
                return new Response($this->get('knp_snappy.pdf')->getOutputFromHtml($html), 200, array('Content-Type' => 'application/pdf', 'Content-Disposition' => 'filename="' . str_replace(" ", "_", $perso->getNom()) . '.pdf'));
            }
        }
    }

}
