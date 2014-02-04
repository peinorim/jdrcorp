<?php

namespace JdrCorp\GuildesBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class CDBController extends Controller {

    public function cdbAction() {
        $notice = null;
        $type = null;
        return $this->render('JdrCorpGuildesBundle:Guildes:cdb.html.twig', array('notice' => $notice, 'type' => $type));
    }
}
