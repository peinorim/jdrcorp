<?php

namespace GuildesBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Response;

class CompController extends Controller {

    public function indexAction() {
        $notice = null;
        $type = null;
        return $this->render('GuildesBundle:Guildes:index.html.twig', array('notice' => $notice, 'type' => $type));
    }

    public function compAction() {
        $notice = null;
        $type = null;
        $em = $this->getDoctrine()->getManager('guildes');
        $repositoryCarac = $em->getRepository('GuildesBundle:Carac');
        $repositoryChap = $em->getRepository('GuildesBundle:Chapitre');
        $repositoryComp = $em->getRepository('GuildesBundle:Competence');
        $repositoryMetier = $em->getRepository('GuildesBundle:Metier');

        $listeCarac = $repositoryCarac->findAll();
        $listeChap = $repositoryChap->findAll();
        $listeCompApp = $repositoryComp->createQueryBuilder('c')->where('c.apprenti = 1')->orderBy('c.nom', 'ASC')->getQuery()->getResult();
        $listeCompCpg = $repositoryComp->createQueryBuilder('c')->where('c.apprenti = 0')->orderBy('c.nom', 'ASC')->getQuery()->getResult();
        $listeMetier = $repositoryMetier->findBy(array(), array('nom' => 'asc'));

        return $this->render('GuildesBundle:Guildes:comp.html.twig', array('notice' => $notice,
                    'type' => $type,
                    'listeCarac' => $listeCarac,
                    'listeChap' => $listeChap,
                    'listeCompApp' => $listeCompApp,
                    'listeCompCpg' => $listeCompCpg,
                    'listeMetiers' => $listeMetier));
    }

    public function linksAction($type, $id) {

        $em = $this->getDoctrine()->getManager('guildes');
        $allCompMetier = null;
        $allMetierComp = null;
        $allCompCarac = null;
        $allCompChap = null;

        if ($type === 'metier' && $id > 0) {
            $metier = $em->getRepository('GuildesBundle:Metier')->find($id);
            if ($metier === null) {
                throw $this->createNotFoundException('Metier[id=' . $id . '] inexistant.');
            } else {
                $listeCompMetier = $em->getRepository('GuildesBundle:CompetenceMetier')->findByMetier($metier->getId());
                foreach ($listeCompMetier as $compMetier) {
                    $allCompMetier[$compMetier->getCompetence()->getId()] = $compMetier->getCompetence()->getNom();
                }
            }
        } else if ($type === 'comp' && $id > 0) {
            $comp = $em->getRepository('GuildesBundle:Competence')->find($id);
            if ($comp === null) {
                throw $this->createNotFoundException('Competence[id=' . $id . '] inexistante.');
            } else {
                $listeCompMetier = $em->getRepository('GuildesBundle:CompetenceMetier')->findByCompetence($comp->getId());
                foreach ($listeCompMetier as $compMetier) {
                    $allMetierComp[$compMetier->getMetier()->getId()] = $compMetier->getMetier()->getNom();
                }
            }
        } else if ($type === 'carac' && $id > 0) {
            $carac = $em->getRepository('GuildesBundle:Carac')->find($id);
            if ($carac === null) {
                throw $this->createNotFoundException('Carac[id=' . $id . '] inexistante.');
            } else {
                $listeCompCarac = $em->getRepository('GuildesBundle:Competence')->findByCarac($carac->getId());
                foreach ($listeCompCarac as $comp) {
                    $allCompCarac[$comp->getId()] = $comp->getNom();
                }
            }
        } else if ($type === 'chap' && $id > 0) {
            $chap = $em->getRepository('GuildesBundle:Chapitre')->find($id);
            if ($chap === null) {
                throw $this->createNotFoundException('Chapitre[id=' . $id . '] inexistant.');
            } else {
                $listeCompChap = $em->getRepository('GuildesBundle:Competence')->findByChapitre($chap->getId());
                foreach ($listeCompChap as $comp) {
                    $allCompChap[$comp->getId()] = $comp->getNom();
                }
            }
        }

        $response = new Response(json_encode(array('type' => $type, 'id' => $id, 'comp' => $allCompMetier, 'metier' => $allMetierComp, 'compCarac' => $allCompCarac, 'compChap' => $allCompChap)));
        $response->headers->set('Content-Type', 'application/json');

        return $response;
    }

}
