<?php

namespace GuildesBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class CDBController extends Controller {

    public function cdbAction() {
        $em = $this->getDoctrine()->getManager('guildes');
        $repositoryCdbAll = $em->getRepository('GuildesBundle:CDBAll');
        $repositoryMesAll = $em->getRepository('GuildesBundle:MESAll');
        $repositoryCdbMaison = $em->getRepository('GuildesBundle:CDBMaison');
        $repositoryCdbAcademie = $em->getRepository('GuildesBundle:CDBAcademie');
        $repositoryMesAcademie = $em->getRepository('GuildesBundle:MESAcademie');
        $repositoryMaison = $em->getRepository('GuildesBundle:Maison');
        $listeCdball = $repositoryCdbAll->createQueryBuilder('c')->orderBy('c.nom', 'ASC')->getQuery()->getResult();
        $listeCdbMaison = $repositoryCdbMaison->createQueryBuilder('c')->orderBy('c.titre', 'ASC')->getQuery()->getResult();
        $listeCdbAcademie = $repositoryCdbAcademie->createQueryBuilder('c')->orderBy('c.nom', 'ASC')->getQuery()->getResult();
        $listeMesAcademie = $repositoryMesAcademie->createQueryBuilder('m')->orderBy('m.nom', 'ASC')->getQuery()->getResult();
        $listeMaison = $repositoryMaison->createQueryBuilder('m')->orderBy('m.nom', 'ASC')->getQuery()->getResult();
        $listeMesall = $repositoryMesAll->createQueryBuilder('m')->orderBy('m.nom', 'ASC')->getQuery()->getResult();
        return $this->render('GuildesBundle:Guildes:cdb.html.twig', array(
                    'listecdb_all' => $listeCdball,
                    'listecdbmaison' => $listeCdbMaison,
                    'listecdbacademie' => $listeCdbAcademie,
                    'listemesacademie' => $listeMesAcademie,
                    'listemaison' => $listeMaison,
                    'listemes_all' => $listeMesall));
    }

}
