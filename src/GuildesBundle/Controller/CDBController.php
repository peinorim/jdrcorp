<?php

namespace GuildesBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class CDBController extends Controller {

    public function cdbAction() {
        $notice = null;
        $type = null;
        $em = $this->getDoctrine()->getManager('guildes');
        $repositoryCdbAll = $em->getRepository('GuildesBundle:CDBAll');
        $repositoryMesAll = $em->getRepository('GuildesBundle:MESAll');
        $repositoryCdbMaison = $em->getRepository('GuildesBundle:CDBMaison');
        $repositoryCdbAcademie = $em->getRepository('GuildesBundle:CDBAcademie');
        $repositoryMesAcademie = $em->getRepository('GuildesBundle:MESAcademie');
        $repositoryMaison = $em->getRepository('GuildesBundle:Maison');
        $listeCdball = $repositoryCdbAll->findAll();
        $listeCdbMaison = $repositoryCdbMaison->findAll();
        $listeCdbAcademie = $repositoryCdbAcademie->findAll();
        $listeMesAcademie = $repositoryMesAcademie->findAll();
        $listeMaison = $repositoryMaison->findAll();
        $listeMesall = $repositoryMesAll->findAll();
        return $this->render('GuildesBundle:Guildes:cdb.html.twig', array('notice' => $notice,
                    'type' => $type,
                    'listecdb_all' => $listeCdball,
                    'listecdbmaison' => $listeCdbMaison,
                    'listecdbacademie' => $listeCdbAcademie,
                    'listemesacademie' => $listeMesAcademie,
                    'listemaison' => $listeMaison,
                    'listemes_all' => $listeMesall));
    }

}
