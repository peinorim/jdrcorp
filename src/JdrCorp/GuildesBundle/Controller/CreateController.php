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

        $listeMaison = $repositoryMaison->findBy(array(), array('nom' => 'asc'));
        $listeMetier = $repositoryMetier->findBy(array(), array('nom' => 'asc'));


        return $this->render('JdrCorpGuildesBundle:Guildes/Create:index.html.twig', array('notice' => $notice,
                    'type' => $type,
                    'listemaison' => $listeMaison,
                    'listemetier' => $listeMetier,));
    }

    public function getMetierAction($id) {

        $em = $this->getDoctrine()->getManager('guildes');
        $allCompMetier = null;

        if ($id > 0) {
            $metier = $em->getRepository('JdrCorpGuildesBundle:Metier')->find($id);
            if ($metier === null) {
                throw $this->createNotFoundException('Metier[id=' . $id . '] inexistant.');
            } else {
                $listeCompMetier = $em->getRepository('JdrCorpGuildesBundle:CompetenceMetier')->findByMetier($metier->getId());
                foreach ($listeCompMetier as $compMetier) {
                    $allCompMetier[$compMetier->getId()] = $compMetier->getCompetence()->getNom();
                }
            }
        }
        $response = new Response(json_encode(array('comp' => $allCompMetier)));
        $response->headers->set('Content-Type', 'application/json');

        return $response;
    }

}
