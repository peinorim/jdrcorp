<?php

namespace JdrCorp\ElricBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use JdrCorp\ElricBundle\Entity\Perso;
use JdrCorp\ElricBundle\Entity\Image;
use JdrCorp\ElricBundle\Entity\Fiche;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Security\Core\SecurityContext;

class ElricController extends Controller {

    public function indexAction() {

        $request = $this->getRequest();
        $session = $request->getSession();

        if ($request->attributes->has(SecurityContext::AUTHENTICATION_ERROR)) {
            $notice = $request->attributes->get(SecurityContext::AUTHENTICATION_ERROR)->getMessage();
            $type = 'danger';
        } else {
            $error = $session->get(SecurityContext::AUTHENTICATION_ERROR);
            $notice = null;
            if ($error !== null) {
                $notice = "Erreur nom d'utilisateur / mot de passe";
            }
            $session->remove(SecurityContext::AUTHENTICATION_ERROR);
            $type = 'danger';
        }

        $repositoryComp = $this->getDoctrine()->getManager()->getRepository('JdrCorpElricBundle:Competence');
        $repositoryMetier = $this->getDoctrine()->getManager()->getRepository('JdrCorpElricBundle:Metier');
        $repositoryArmes = $this->getDoctrine()->getManager()->getRepository('JdrCorpElricBundle:Arme');
        $repositoryArmure = $this->getDoctrine()->getManager()->getRepository('JdrCorpElricBundle:Armure');
        $repositoryFiche = $this->getDoctrine()->getManager()->getRepository('JdrCorpElricBundle:Fiche');
        $nbFiches = count($repositoryFiche->findAll());
        $listeComp = $repositoryComp->findAll();
        $listeMet = $repositoryMetier->findAll();
        $listeArmes = $repositoryArmes->findAll();
        $listeArmures = $repositoryArmure->findAll();
        return $this->render('JdrCorpElricBundle:Elric:index.html.twig', array('listeComp' => $listeComp, 'listeMet' => $listeMet, 'listeArmes' => $listeArmes, 'listeArmures' => $listeArmures, 'nbFiches' => $nbFiches,
                    'notice' => $notice, 'type' => $type));
    }

    public function getCompMetierAction($id) {
        $em = $this->getDoctrine()->getManager();

        $metier = $em->getRepository('JdrCorpElricBundle:Metier')->find($id);
        $repositoryComp = $this->getDoctrine()->getManager()->getRepository('JdrCorpElricBundle:Competence');
        $listeComp = $repositoryComp->findAll();

        $repositoryArmes = $this->getDoctrine()->getManager()->getRepository('JdrCorpElricBundle:Arme');
        $listeArmes = $repositoryArmes->findAll();

        if ($metier === null) {
            throw $this->createNotFoundException('Metier[id=' . $id . '] inexistant.');
        } else {
            $listeCompMetier = $em->getRepository('JdrCorpElricBundle:CompetenceMetier')->findByMetier($metier->getId());
            foreach ($listeCompMetier as $compMetier) {
                $allCompMetier[] = $compMetier->getCompetence();
            }
        }
        return $this->render('JdrCorpElricBundle:Elric:tableComp.html.twig', array('listeCompMetier' => $allCompMetier, 'listeComp' => $listeComp, 'metier' => $metier, 'listeArmes' => $listeArmes));
    }

    public function createAction() {
        $em = $this->getDoctrine()->getManager();
        $repositoryComp = $this->getDoctrine()->getManager()->getRepository('JdrCorpElricBundle:Competence');
        $repositoryArme = $this->getDoctrine()->getManager()->getRepository('JdrCorpElricBundle:Arme');
        $listeComp = $repositoryComp->findAll();

        $request = $this->getRequest();

        if ($request->getMethod() === 'POST') {

            foreach ($request->request->get('comp') as $id => $value) {
                $competences[] = $repositoryComp->find($id)->setTotal($value);
            }
            $listeSortMetier = $em->getRepository('JdrCorpElricBundle:SortMetier')->findByMetier($request->request->get('metier'));
            foreach ($listeSortMetier as $id => $sort) {
                $sorts[] = $sort->getSort();
            }
            if (count($request->request->get('arme')) > 0) {
                foreach ($request->request->get('arme') as $id => $value) {
                    $armes[] = $repositoryArme->find($id)->setTotal($value);
                }
            } else {
                $armes = null;
            }
            $avatar = new Image($request);
            $perso = new Perso($request, $this->getUser());
            $fiche = new Fiche($perso);
            $em->persist($fiche);
            $em->persist($perso);
            $em->flush();
            $perso->setCompetences($competences);
            $perso->setSorts($sorts);

            $html = $this->renderView('JdrCorpElricBundle:Elric:createPerso.html.twig', array('perso' => $perso, 'myComp' => $perso->getCompetences(), 'mySorts' => $perso->getSorts(), 'listeComp' => $listeComp, 'image' => $avatar, 'myArmes' => $armes));
            if ($request->request->get('options') === 'jpg') {
                return new Response($this->get('knp_snappy.image')->getOutputFromHtml($html), 200, array('Content-Type' => 'image/jpg', 'Content-Disposition' => 'filename="elric.jpg"'));
            } else {
                return new Response($this->get('knp_snappy.pdf')->getOutputFromHtml($html), 200, array('Content-Type' => 'application/pdf'));
            }
        }
    }

}
