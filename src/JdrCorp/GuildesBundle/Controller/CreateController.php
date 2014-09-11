<?php

namespace JdrCorp\GuildesBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class CreateController extends Controller {

    public function indexAction() {
        $notice = null;
        $type = null;

        $em = $this->getDoctrine()->getManager('guildes');
        $repositoryTour = $em->getRepository('JdrCorpGuildesBundle:Tour');
        $repositoryMachin = $em->getRepository('JdrCorpGuildesBundle:Machination');
        $repositoryCdbAll = $em->getRepository('JdrCorpGuildesBundle:CDBAll');
        $repositoryMesAll = $em->getRepository('JdrCorpGuildesBundle:MESAll');
        

        return $this->render('JdrCorpGuildesBundle:Guildes/Create:index.html.twig', array('notice' => $notice, 'type' => $type));
    }

}
