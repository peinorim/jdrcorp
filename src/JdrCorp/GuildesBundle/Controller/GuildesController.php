<?php

namespace JdrCorp\GuildesBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Response;

class GuildesController extends Controller {

    public function indexAction() {
        $notice = null;
        $type = null;
        return $this->render('JdrCorpGuildesBundle:Guildes:index.html.twig', array('notice' => $notice, 'type' => $type));
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

}
