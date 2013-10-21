<?php

namespace JdrCorp\ElricBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class ElricController extends Controller {

    public function indexAction() {
        $repository = $this->getDoctrine()
                ->getManager()
                ->getRepository('JdrCorpElricBundle:Competence');
        $listeComp = $repository->findAll();
        return $this->render('JdrCorpElricBundle:Elric:index.html.twig',array('listeComp' => $listeComp));
    }

}
