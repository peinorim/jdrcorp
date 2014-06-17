<?php

namespace JdrCorp\GuildesBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class GuildesController extends Controller {

    public function indexAction() {
        $notice = null;
        $type = null;
        $tour = null;
        $machi = null;
        $cdb = null;
        $mes = null;
        $em = $this->getDoctrine()->getManager('guildes');
        $repositoryTour = $em->getRepository('JdrCorpGuildesBundle:Tour');
        $repositoryMachin = $em->getRepository('JdrCorpGuildesBundle:Machination');
        $repositoryCdbAll = $em->getRepository('JdrCorpGuildesBundle:CDBAll');
        $repositoryMesAll = $em->getRepository('JdrCorpGuildesBundle:MESAll');
        $count = $repositoryTour->createQueryBuilder('u')
                ->select('COUNT(u)')
                ->getQuery()
                ->getSingleScalarResult();

        $countMac = $repositoryMachin->createQueryBuilder('u')
                ->select('COUNT(u)')
                ->getQuery()
                ->getSingleScalarResult();

        $countCdb = $repositoryCdbAll->createQueryBuilder('u')
                ->select('COUNT(u)')
                ->getQuery()
                ->getSingleScalarResult();
        
        $countMes = $repositoryMesAll->createQueryBuilder('u')
                ->select('COUNT(u)')
                ->getQuery()
                ->getSingleScalarResult();
        while ($tour === null) {
            $tour = $repositoryTour->createQueryBuilder('t')->where('t.id =' . rand(1, $count - 1))->getQuery()->getOneOrNullResult();
        }
        while ($machi === null) {
            $machi = $repositoryMachin->createQueryBuilder('m')->where('m.id =' . rand(1, $countMac - 1))->getQuery()->getOneOrNullResult();
        }
        while ($cdb === null) {
            $cdb = $repositoryCdbAll->createQueryBuilder('c')->where('c.id =' . rand(1, $countCdb - 1))->getQuery()->getOneOrNullResult();
        }
        
        while ($mes === null) {
            $mes = $repositoryMesAll->createQueryBuilder('c')->where('c.id =' . rand(1, $countMes - 1))->getQuery()->getOneOrNullResult();
        }

        return $this->render('JdrCorpGuildesBundle:Guildes:index.html.twig', array('notice' => $notice, 'type' => $type, 'tour' => $tour, 'machi' => $machi, 'cdb' => $cdb, 'mes' => $mes));
    }

    public function diceAction() {
        $notice = null;
        $type = null;
        $em = $this->getDoctrine()->getManager('guildes');
        $repositoryCarac = $em->getRepository('JdrCorpGuildesBundle:Carac');
        $repositoryComp = $em->getRepository('JdrCorpGuildesBundle:Competence');
        $listeCarac = $repositoryCarac->findAll();
        $listeComp = $repositoryComp->findBy(array(), array('nom' => 'asc'));
        return $this->render('JdrCorpGuildesBundle:Guildes:dice.html.twig', array('notice' => $notice,
                    'type' => $type, 'liste',
                    'listeComp' => $listeComp,
                    'listeCarac' => $listeCarac));
    }

    public function artefactsAction() {
        $notice = null;
        $type = null;
        $em = $this->getDoctrine()->getManager('guildes');
        $repositoryMaison = $em->getRepository('JdrCorpGuildesBundle:Maison');
        $repositoryArtef = $em->getRepository('JdrCorpGuildesBundle:Artefact');
        $repositoryArteType = $em->getRepository('JdrCorpGuildesBundle:ArtefactType');
        $listeMaison = $repositoryMaison->findAll();
        $listeArtefac = $repositoryArtef->findAll();
        $listeArteType = $repositoryArteType->findAll();
        return $this->render('JdrCorpGuildesBundle:Guildes:artefacts.html.twig', array('notice' => $notice,
                    'type' => $type, 'liste',
                    'listeArte' => $listeArtefac,
                    'listemaison' => $listeMaison,
                    'listeArteType' => $listeArteType));
    }

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

    public function armesAction() {
        $notice = null;
        $type = null;
        $em = $this->getDoctrine()->getManager('guildes');
        $repositoryArmes = $em->getRepository('JdrCorpGuildesBundle:Arme');
        $repositoryArmures = $em->getRepository('JdrCorpGuildesBundle:Armure');
        $listeArmes = $repositoryArmes->findAll();
        $listeArmures = $repositoryArmures->findAll();

        foreach ($listeArmes as $arme) {
            $listeComp[$arme->getCompetence()->getId()] = $arme->getCompetence();
        }

        return $this->render('JdrCorpGuildesBundle:Guildes:armes.html.twig', array('notice' => $notice,
                    'type' => $type,
                    'listeArmes' => $listeArmes,
                    'listeArmures' => $listeArmures,
                    'listeComp' => $listeComp));
    }

    public function equipementAction() {
        $notice = null;
        $type = null;
        $em = $this->getDoctrine()->getManager('guildes');
        $repositoryEquip = $em->getRepository('JdrCorpGuildesBundle:Equipement');
        $repositoryEqCate = $em->getRepository('JdrCorpGuildesBundle:EquipCategorie');
        $listeEquip = $repositoryEquip->findAll();
        $listeEqCate = $repositoryEqCate->findAll();

        return $this->render('JdrCorpGuildesBundle:Guildes:equipement.html.twig', array('notice' => $notice,
                    'type' => $type,
                    'listeEquip' => $listeEquip,
                    'listeEqCate' => $listeEqCate));
    }

    public function machinationAction() {
        $notice = null;
        $type = null;
        $em = $this->getDoctrine()->getManager('guildes');
        $repositoryMachin = $em->getRepository('JdrCorpGuildesBundle:Machination');
        $repositoryChap = $em->getRepository('JdrCorpGuildesBundle:Chapitre');
        $listeMachination = $repositoryMachin->findAll();
        $listeChap = $repositoryChap->findAll();

        return $this->render('JdrCorpGuildesBundle:Guildes:machinations.html.twig', array('notice' => $notice,
                    'type' => $type,
                    'listeMachination' => $listeMachination,
                    'listeChap' => $listeChap));
    }

}
