<?php

namespace JdrCorp\ElricBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use JdrCorp\ElricBundle\Entity\Perso;

class ElricController extends Controller {

    public function indexAction() {
        $repositoryComp = $this->getDoctrine()->getManager()->getRepository('JdrCorpElricBundle:Competence');
        $repositoryMetier = $this->getDoctrine()->getManager()->getRepository('JdrCorpElricBundle:Metier');
        $repositoryArmes = $this->getDoctrine()->getManager()->getRepository('JdrCorpElricBundle:Arme');
        $repositoryArmure = $this->getDoctrine()->getManager()->getRepository('JdrCorpElricBundle:Armure');
        $listeComp = $repositoryComp->findAll();
        $listeMet = $repositoryMetier->findAll();
        $listeArmes = $repositoryArmes->findAll();
        $listeArmures = $repositoryArmure->findAll();
        return $this->render('JdrCorpElricBundle:Elric:index.html.twig', array('listeComp' => $listeComp, 'listeMet' => $listeMet, 'listeArmes' => $listeArmes, 'listeArmures' => $listeArmures));
    }

    public function getCompMetierAction($id) {
        $em = $this->getDoctrine()->getManager();

        $metier = $em->getRepository('JdrCorpElricBundle:Metier')->find($id);
        $repositoryComp = $this->getDoctrine()->getManager()->getRepository('JdrCorpElricBundle:Competence');
        $listeComp = $repositoryComp->findAll();

        if ($metier === null) {
            throw $this->createNotFoundException('Metier[id=' . $id . '] inexistant.');
        } else {
            $listeCompMetier = $em->getRepository('JdrCorpElricBundle:CompetenceMetier')->findByMetier($metier->getId());
            foreach ($listeCompMetier as $compMetier) {
                $allCompMetier[] = $compMetier->getCompetence();
            }
        }
        return $this->render('JdrCorpElricBundle:Elric:tableComp.html.twig', array('listeCompMetier' => $allCompMetier, 'listeComp' => $listeComp));
    }

    public function createAction() {
        $em = $this->getDoctrine()->getManager();
        $repositoryComp = $this->getDoctrine()->getManager()->getRepository('JdrCorpElricBundle:Competence');
        $listeComp = $repositoryComp->findAll();

        $request = $this->getRequest();

        if ($request->getMethod() === 'POST') {
            
            $repositoryComp = $this->getDoctrine()->getManager()->getRepository('JdrCorpElricBundle:Competence');
            foreach ($request->request->get('comp') as $id => $value) {
                $competences[] = $repositoryComp->find($id)->setTotal($value);
            }
            $perso = new Perso($request);
            $perso->setCompetences($competences);
            return $this->render('JdrCorpElricBundle:Elric:createPerso.html.twig', array('perso' => $perso, 'myComp' => $perso->getCompetences(), 'listeComp' => $listeComp));
        }
    }

}
