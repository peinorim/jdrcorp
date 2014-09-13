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

        $listeMaison = $repositoryMaison->findBy(array(), array('nom' => 'asc'));
        $listeMetier = $repositoryMetier->findBy(array(), array('nom' => 'asc'));
        $listeComp = $repositoryComp->createQueryBuilder('c')->where('c.apprenti = 1')->orderBy('c.nom', 'ASC')->getQuery()->getResult();

        return $this->render('JdrCorpGuildesBundle:Guildes/Create:index.html.twig', array('notice' => $notice,
                    'type' => $type,
                    'listemaison' => $listeMaison,
                    'listemetier' => $listeMetier,
                    'listecomp' => $listeComp,));
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

}
