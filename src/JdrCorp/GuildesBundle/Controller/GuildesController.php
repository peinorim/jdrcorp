<?php

namespace JdrCorp\GuildesBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Response;

class GuildesController extends Controller {

    public function indexAction() {
        $notice = null;
        $type = null;
        $em = $this->getDoctrine()->getManager('guildes');
        $repositoryCarac = $em->getRepository('JdrCorpGuildesBundle:Carac');
        $repositoryChap = $em->getRepository('JdrCorpGuildesBundle:Chapitre');
        $repositoryComp = $em->getRepository('JdrCorpGuildesBundle:Competence');
        $repositoryMetier = $em->getRepository('JdrCorpGuildesBundle:Metier');

        $listeCarac = $repositoryCarac->findAll();
        $listeChap = $repositoryChap->findAll();
        $listeComp = $repositoryComp->findBy(array(), array('nom' => 'asc'));
        $listeMetier = $repositoryMetier->findBy(array(), array('nom' => 'asc'));

        return $this->render('JdrCorpGuildesBundle:Guildes:index.html.twig', array('notice' => $notice,
                    'type' => $type,
                    'listeCarac' => $listeCarac,
                    'listeChap' => $listeChap,
                    'listeComp' => $listeComp,
                    'listeMetiers' => $listeMetier));
    }

    public function linksAction($type, $id) {

        $em = $this->getDoctrine()->getManager('guildes');
        $allCompMetier = null;
        $allMetierComp = null;

        if ($type === 'metier' && $id > 0) {
            $metier = $em->getRepository('JdrCorpGuildesBundle:Metier')->find($id);
            if ($metier === null) {
                throw $this->createNotFoundException('Metier[id=' . $id . '] inexistant.');
            } else {
                $listeCompMetier = $em->getRepository('JdrCorpGuildesBundle:CompetenceMetier')->findByMetier($metier->getId());
                foreach ($listeCompMetier as $compMetier) {
                    $allCompMetier[$compMetier->getCompetence()->getId()] = $compMetier->getCompetence()->getNom();
                }
            }
        } else if ($type === 'comp' && $id > 0) {
            $comp = $em->getRepository('JdrCorpGuildesBundle:Competence')->find($id);
            if ($comp === null) {
                throw $this->createNotFoundException('Competence[id=' . $id . '] inexistante.');
            } else {
                $listeCompMetier = $em->getRepository('JdrCorpGuildesBundle:CompetenceMetier')->findByCompetence($comp->getId());
                foreach ($listeCompMetier as $compMetier) {
                    $allMetierComp[$compMetier->getMetier()->getId()] = $compMetier->getMetier()->getNom();
                }
            }
        }


        $response = new Response(json_encode(array('type' => $type, 'id' => $id, 'comp' => $allCompMetier, 'metier' => $allMetierComp)));
        $response->headers->set('Content-Type', 'application/json');

        return $response;
    }

}
