<?php

namespace JdrCorp\ElricBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class ElricController extends Controller {

    public function indexAction() {
        $repositoryComp = $this->getDoctrine()->getManager()->getRepository('JdrCorpElricBundle:Competence');
        $repositoryMetier = $this->getDoctrine()->getManager()->getRepository('JdrCorpElricBundle:Metier');
        $listeComp = $repositoryComp->findAll();
        $listeMet = $repositoryMetier->findAll();
        return $this->render('JdrCorpElricBundle:Elric:index.html.twig', array('listeComp' => $listeComp, 'listeMet' => $listeMet));
    }

    public function getCompMetierAction() {
        return $this->render('JdrCorpElricBundle:Elric:tableComp.html.twig');
    }

}
