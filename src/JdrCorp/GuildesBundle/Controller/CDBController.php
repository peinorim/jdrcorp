<?php

namespace JdrCorp\GuildesBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class CDBController extends Controller {

    public function cdbAction() {
        $notice = null;
        $type = null;
        $em = $this->getDoctrine()->getManager('guildes');
        $repositoryCdbAll = $em->getRepository('JdrCorpGuildesBundle:CDBAll');
        $repositoryMesAll = $em->getRepository('JdrCorpGuildesBundle:MESAll');
        $repositoryCdbMaison = $em->getRepository('JdrCorpGuildesBundle:CDBMaison');
        $repositoryMaison = $em->getRepository('JdrCorpGuildesBundle:Maison');
        $listeCdball = $repositoryCdbAll->findAll();
        $listeCdbMaison = $repositoryCdbMaison->findAll();
        $listeMaison = $repositoryMaison->findAll();
        $listeMesall = $repositoryMesAll->findAll();
        return $this->render('JdrCorpGuildesBundle:Guildes:cdb.html.twig', array('notice' => $notice,
                    'type' => $type,
                    'listecdb_all' => $listeCdball,
                    'listecdbmaison' => $listeCdbMaison,
                    'listemaison' => $listeMaison,
                    'listemes_all' => $listeMesall));
    }

}
