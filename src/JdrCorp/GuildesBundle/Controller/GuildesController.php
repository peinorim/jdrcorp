<?php

namespace JdrCorp\GuildesBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class GuildesController extends Controller {

    public function indexAction() {
        $notice = null;
        $type = null;
        return $this->render('JdrCorpGuildesBundle:Guildes:index.html.twig', array('notice' => $notice, 'type' => $type));
    }

}
