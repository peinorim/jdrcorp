<?php

namespace JdrCorp\GuildesBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Response;

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

            $nom = $request->request->get('nom');

            $html = $this->renderView('JdrCorpGuildesBundle:Guildes/Create:generate.html.twig', array('nom' => $nom,));
            if ($request->request->get('options') === 'jpg') {
                return new Response($this->get('knp_snappy.image')->getOutputFromHtml($html), 200, array('Content-Type' => 'image/jpg', 'Content-Disposition' => 'filename="guildes.jpg"'));
            } else {
                return new Response($this->get('knp_snappy.pdf')->getOutputFromHtml($html), 200, array('Content-Type' => 'application/pdf'));
            }
        }
    }

}
