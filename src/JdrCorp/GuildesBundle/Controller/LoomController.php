<?php

namespace JdrCorp\GuildesBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Response;

class LoomController extends Controller {

    public function loomAction() {
        $notice = null;
        $type = null;
        $em = $this->getDoctrine()->getManager('guildes');
        $repositoryMaison = $em->getRepository('JdrCorpGuildesBundle:Maison');
        $repositoryTour = $em->getRepository('JdrCorpGuildesBundle:Tour');
        $repositorySort = $em->getRepository('JdrCorpGuildesBundle:Sort');
        $repositorySortilege = $em->getRepository('JdrCorpGuildesBundle:Sortilege');
        $listeMaison = $repositoryMaison->findAll();
        $listeTour = $repositoryTour->findAll();
        $listeSort = $repositorySort->findAll();
        $listeSortilege = $repositorySortilege->findAll();
        return $this->render('JdrCorpGuildesBundle:Guildes:loom.html.twig', array('notice' => $notice,
                    'type' => $type,
                    'listemaison' => $listeMaison,
                    'listeTour' => $listeTour,
                    'listeSort' => $listeSort,
                    'listeSortilege' => $listeSortilege));
    }

}
