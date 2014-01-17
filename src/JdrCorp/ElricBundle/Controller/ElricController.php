<?php

namespace JdrCorp\ElricBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use JdrCorp\ElricBundle\Entity\Perso;
use JdrCorp\ElricBundle\Entity\Image;
use JdrCorp\ElricBundle\Entity\Fiche;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpKernel\Exception\AccessDeniedHttpException;
use Symfony\Component\Security\Core\SecurityContext;

class ElricController extends Controller {

    public function indexAction($notice = null, $type = null) {

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
        $repositoryFiche = $this->getDoctrine()->getManager()->getRepository('JdrCorpElricBundle:Fiche');
        $nbFiches = count($repositoryFiche->findAll());
        $listeComp = $repositoryComp->findAll();
        $listeMet = $repositoryMetier->findAll();
        $listeArmes = $repositoryArmes->findAll();
        return $this->render('JdrCorpElricBundle:Elric:index.html.twig', array('listeComp' => $listeComp, 'listeMet' => $listeMet, 'listeArmes' => $listeArmes, 'nbFiches' => $nbFiches,
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
        $repositoryArmure = $this->getDoctrine()->getManager()->getRepository('JdrCorpElricBundle:Armure');
        $listeComp = $repositoryComp->findAll();
        $listeArmures = $repositoryArmure->findAll();

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
            foreach ($listeArmures as $armure) {
                $armures[] = $repositoryArmure->find($armure->getId());
            }
            $perso = new Perso($request);
            $fiche = new Fiche($perso, $this->getUser());
            $perso->setCompetences($competences);
            $perso->setSorts($sorts);
            $perso->setArmes($armes);
            $perso->setArmure($armures);
            $em->persist($fiche);
            $em->persist($perso);
            $em->flush();
            $avatar = new Image($perso->getId(), $fiche->getId(), $request);

            $html = $this->renderView('JdrCorpElricBundle:Elric:createPerso.html.twig', array('perso' => $perso, 'myComp' => $perso->getCompetences(), 'mySorts' => $perso->getSorts(), 'listeComp' => $listeComp, 'image' => $avatar, 'myArmes' => $armes, 'myArmures' => $perso->getArmure()));
            if ($request->request->get('options') === 'jpg') {
                return new Response($this->get('knp_snappy.image')->getOutputFromHtml($html), 200, array('Content-Type' => 'image/jpg', 'Content-Disposition' => 'filename="elric.jpg"'));
            } else {
                return new Response($this->get('knp_snappy.pdf')->getOutputFromHtml($html), 200, array('Content-Type' => 'application/pdf'));
            }
        }
    }

    public function reviewAction($id, $format) {
        $repositoryPerso = $this->getDoctrine()->getManager()->getRepository('JdrCorpElricBundle:Perso');
        $repositoryFiche = $this->getDoctrine()->getManager()->getRepository('JdrCorpElricBundle:Fiche');
        $repositoryComp = $this->getDoctrine()->getManager()->getRepository('JdrCorpElricBundle:Competence');
        $persoFiche = $repositoryFiche->find($id)->getPerso();
        $perso = $repositoryPerso->find($persoFiche->getId());
        if ($perso !== null) {

            $repositoryComp = $this->getDoctrine()->getManager()->getRepository('JdrCorpElricBundle:Competence');
            $listeComp = $repositoryComp->findAll();
            $avatar = new Image($perso->getId(), $id, null);

            foreach ($perso->getCompetences() as $comp) {
                $myComp[] = $repositoryComp->find($comp->getId());
            }
            $listeSortMetier = $this->getDoctrine()->getManager()->getRepository('JdrCorpElricBundle:SortMetier')->findByMetier($perso->getMetier());
            foreach ($listeSortMetier as $id => $sort) {
                $sorts[] = $sort->getSort();
            }

            $html = $this->renderView('JdrCorpElricBundle:Elric:createPerso.html.twig', array('perso' => $perso, 'myComp' => $myComp, 'mySorts' => $sorts, 'listeComp' => $listeComp, 'image' => $avatar, 'myArmes' => $perso->getArmes(), 'myArmures' => $perso->getArmure()));
            if ($format === 'jpg') {
                return new Response($this->get('knp_snappy.image')->getOutputFromHtml($html), 200, array('Content-Type' => 'image/jpg', 'Content-Disposition' => 'filename="elric.jpg"'));
            } else {
                return new Response($this->get('knp_snappy.pdf')->getOutputFromHtml($html), 200, array('Content-Type' => 'application/pdf'));
            }
        } else {
            throw new AccessDeniedHttpException("Cette fiche n'existe pas");
        }
    }

    public function deleteAction($id) {

        $repositoryFiche = $this->getDoctrine()->getManager()->getRepository('JdrCorpElricBundle:Fiche');
        $nbFiches = count($repositoryFiche->findAll());
        $user_fiche = $repositoryFiche->find($id)->getUser();
        $fiche_suppr = $repositoryFiche->find($id);
        $user = $this->getUser();
        $myfiches = $this->getDoctrine()->getManager()->getRepository('JdrCorpElricBundle:Fiche')->findByUser($user->getId());

        if ($user !== null && $fiche_suppr !== null && $user->getId() === $user_fiche->getId()) {
            $this->getDoctrine()->getManager()->remove($fiche_suppr);
            $this->getDoctrine()->getManager()->flush();
            return $this->redirect($this->generateUrl('profile'));
        } else {
            return $this->render('JdrCorpIndexBundle:Index:profile.html.twig', array('notice' => 'Erreur ! Vous ne pouvez pas supprimer cette fiche.', 'type' => 'danger', 'myfiches' => $myfiches, 'nbFiches' => $nbFiches));
        }
    }

}
