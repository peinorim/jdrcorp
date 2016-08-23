<?php

namespace ElricBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use ElricBundle\Entity\Perso;
use ElricBundle\Entity\Image;
use ElricBundle\Entity\Fiche;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpKernel\Exception\AccessDeniedHttpException;
use Symfony\Component\HttpFoundation\Request;

class ElricController extends Controller {

    public function indexAction($notice = null, $type = null) {

        $repositoryComp = $this->getDoctrine()->getRepository('ElricBundle:Competence');
        $repositoryMetier = $this->getDoctrine()->getRepository('ElricBundle:Metier');
        $repositoryArmes = $this->getDoctrine()->getRepository('ElricBundle:Arme');
        $repositoryFiche = $this->getDoctrine()->getRepository('ElricBundle:Fiche');
        $nbFiches = count($repositoryFiche->findAll());
        $listeComp = $repositoryComp->findAll();
        $listeMet = $repositoryMetier->findAll();
        $listeArmes = $repositoryArmes->findAll();
        return $this->render('ElricBundle:Elric:index.html.twig', array('listeComp' => $listeComp, 'listeMet' => $listeMet, 'listeArmes' => $listeArmes, 'nbFiches' => $nbFiches,
                    'notice' => $notice, 'type' => $type));
    }

    public function getCompMetierAction($id) {
        $em = $this->getDoctrine();

        $metier = $em->getRepository('ElricBundle:Metier')->find($id);
        $repositoryComp = $this->getDoctrine()->getRepository('ElricBundle:Competence');
        $listeComp = $repositoryComp->findAll();

        $repositoryArmes = $this->getDoctrine()->getRepository('ElricBundle:Arme');
        $listeArmes = $repositoryArmes->findAll();

        if ($metier === null) {
            throw $this->createNotFoundException('Metier[id=' . $id . '] inexistant.');
        } else {
            $listeCompMetier = $em->getRepository('ElricBundle:CompetenceMetier')->findByMetier($metier->getId());
            foreach ($listeCompMetier as $compMetier) {
                $allCompMetier[] = $compMetier->getCompetence();
            }
        }
        return $this->render('ElricBundle:Elric:tableComp.html.twig', array('listeCompMetier' => $allCompMetier, 'listeComp' => $listeComp, 'metier' => $metier, 'listeArmes' => $listeArmes));
    }

    public function createAction() {
        $em = $this->getDoctrine()->getManager();
        $repositoryComp = $this->getDoctrine()->getRepository('ElricBundle:Competence');
        $repositoryArme = $this->getDoctrine()->getRepository('ElricBundle:Arme');
        $repositoryArmure = $this->getDoctrine()->getRepository('ElricBundle:Armure');
		$repositoryMetier = $this->getDoctrine()->getRepository('ElricBundle:Metier');
        $listeComp = $repositoryComp->findAll();
        $listeArmures = $repositoryArmure->findAll();

        $request = Request::createFromGlobals();

        if ($request->getMethod() === 'POST') {

            foreach ($request->request->get('comp') as $id => $value) {
				$compTot[$id] = $value;
                $competences[] = $repositoryComp->find($id);
            }
			
            $metier = $repositoryMetier->find($request->request->get('metier'));
            foreach ($metier->getSorts() as $id => $sort) {
                $sorts[] = $sort;
            }
            if (count($request->request->get('arme')) > 0) {
                foreach ($request->request->get('arme') as $id => $value) {
                    $armes[] = $repositoryArme->find($id)->setTotal($value);
                }
            } else {
                $armes = null;
            }
            foreach ($listeArmures as $armure) {
                $armures[] = $repositoryArmure->find($armure->getId());
            }
            /* @var Perso $perso */
            $perso = new Perso($request);
            $fiche = new Fiche($perso, $this->getUser());
            $perso->setCompetences($competences);
            $perso->setSorts($sorts);
            $perso->setArmes($armes);
            $perso->setArmure($armures);
			$perso->setCompTot($compTot);
            $em->persist($fiche);
            $em->persist($perso);
            $em->flush();
            $avatar = new Image($perso->getId(), $fiche->getId(), $request);

            $html = $this->renderView('ElricBundle:Elric:createPerso.html.twig', array('perso' => $perso, 'myComp' => $perso->getCompetences(), 'mySorts' => $perso->getSorts(), 'listeComp' => $listeComp, 'compTot' => $compTot, 'image' => $avatar, 'myArmes' => $armes, 'myArmures' => $perso->getArmure()));
            if ($request->request->get('options') === 'jpg') {
                return new Response($this->get('knp_snappy.image')->getOutputFromHtml($html), 200, array('Content-Type' => 'image/jpg', 'Content-Disposition' => 'filename="elric.jpg"'));
            } else {
                return new Response($this->get('knp_snappy.pdf')->getOutputFromHtml($html), 200, array('Content-Type' => 'application/pdf'));
            }
        }
    }

    public function reviewAction($id, $format) {
        $repositoryPerso = $this->getDoctrine()->getRepository('ElricBundle:Perso');
        $repositoryFiche = $this->getDoctrine()->getRepository('ElricBundle:Fiche');

        $fiche = $repositoryFiche->find($id);
        $persoFiche = $fiche->getPerso();
        /* @var Perso $perso */
        $perso = $repositoryPerso->find($persoFiche->getId());

        if ($this->getUser() && $perso !== null) {

            if ($this->getUser()->getId() == $fiche->getUser()->getId() || $this->get('security.authorization_checker')->isGranted('ROLE_ADMIN')) {

                $repositoryComp = $this->getDoctrine()->getRepository('ElricBundle:Competence');
                $listeComp = $repositoryComp->findAll();
                $avatar = new Image($perso->getId(), $id, null);

                foreach ($perso->getCompetences() as $comp) {
                    $myComp[] = $repositoryComp->find($comp->getId());
                }

                $sorts = $this->getDoctrine()->getRepository('ElricBundle:Metier')->find($perso->getMetier())->getSorts();
                $compTot = $perso->getCompTot();

                $html = $this->renderView('ElricBundle:Elric:createPerso.html.twig', array('perso' => $perso, 'myComp' => $myComp, 'mySorts' => $sorts, 'listeComp' => $listeComp, 'compTot' => $compTot, 'image' => $avatar, 'myArmes' => $perso->getArmes(), 'myArmures' => $perso->getArmure()));
                if ($format === 'jpg') {
                    return new Response($this->get('knp_snappy.image')->getOutputFromHtml($html), 200, array('Content-Type' => 'image/jpg', 'Content-Disposition' => 'filename="elric.jpg"'));
                } else {
                    return new Response($this->get('knp_snappy.pdf')->getOutputFromHtml($html), 200, array('Content-Type' => 'application/pdf'));
                }
            } else {
                throw new AccessDeniedHttpException("Vous n'avez pas accès à cette fiche.");
            }
        } else {
            throw new AccessDeniedHttpException("Cette fiche n'existe pas.");
        }
    }

    public function deleteAction($id) {

        $em = $this->getDoctrine()->getManager();
        $repositoryFiche = $em->getRepository('ElricBundle:Fiche');
        $nbFiches = count($repositoryFiche->findAll());
        $fiche_suppr = $repositoryFiche->find($id);

        if ($fiche_suppr->getUser() === null || $this->getUser()->getId() == $fiche_suppr->getUser()->getId() || $this->get('security.authorization_checker')->isGranted('ROLE_ADMIN')) {
            $em->remove($fiche_suppr);
            $em->remove($fiche_suppr->getPerso());
            $em->flush();
            return $this->redirect($this->generateUrl('elric_profile'));
        } else {
            return $this->render('IndexBundle:Index:profile.html.twig', array('notice' => 'Erreur ! Vous ne pouvez pas supprimer cette fiche.', 'type' => 'danger', 'myfiches' => $myfiches, 'nbFiches' => $nbFiches));
        }
    }

}
