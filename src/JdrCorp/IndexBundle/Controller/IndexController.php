<?php

namespace JdrCorp\IndexBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpKernel\Exception\AccessDeniedHttpException;
use JdrCorp\ElricBundle\Entity\User;

class IndexController extends Controller {

    public function indexAction() {
        return $this->render('JdrCorpIndexBundle:Index:index.html.twig');
    }

    public function profileAction() {
        if ($this->get('security.context')->isGranted('ROLE_USER')) {
            $notice = null;
            $type = null;
            $user = $this->getUser();

            if (null !== $user) {
                $em = $this->getDoctrine()->getManager();
                $myfiches = $em->getRepository('JdrCorpElricBundle:Fiche')->findByUser($user->getId());
                $repositoryFiche = $this->getDoctrine()->getManager()->getRepository('JdrCorpElricBundle:Fiche');
                $nbFiches = count($repositoryFiche->findAll());
                if (count($myfiches) === 0) {
                    $type = "warning";
                    $notice = "Vous n'avez créé aucune fiche pour l'instant.";
                    $myfiches = null;
                }
                return $this->render('JdrCorpIndexBundle:Index:profile.html.twig', array('notice' => $notice, 'type' => $type, 'myfiches' => $myfiches, 'nbFiches' => $nbFiches));
            } else {
                throw new AccessDeniedHttpException('Accès limité aux inscrits');
            }
        } else {
            throw new AccessDeniedHttpException('Accès limité aux inscrits');
        }
    }

    public function registerAction() {
        if (!$this->get('security.context')->isGranted('ROLE_USER')) {
            $notice = null;
            $type = null;
            return $this->render('JdrCorpIndexBundle:Index:register.html.twig', array('notice' => $notice, 'type' => $type));
        } else {
            return $this->redirect($this->generateUrl('jdr_corp_index_homepage'));
        }
    }

    public function register_submitAction() {

        $request = $this->getRequest();
        $repositoryUser = $this->getDoctrine()->getManager()->getRepository('JdrCorpElricBundle:User');

        if (count(trim($request->request->get('email'))) > 0 && count(trim($request->request->get('pass'))) > 0 && count(trim($request->request->get('confirm'))) > 0) {

            if ($repositoryUser->findBy(array('username' => $request->request->get('email')))) {
                $notice = "Email déjà utilisé par un utilisateur.";
                $type = 'danger';
            } else {

                if ($request->getMethod() === 'POST' && $request->request->get('pass') === $request->request->get('confirm')) {
                    $factory = $this->get('security.encoder_factory');
                    $user = new User();

                    $encoder = $factory->getEncoder($user);
                    $password = $encoder->encodePassword($request->request->get('confirm'), $user->getSalt());
                    $user->setUsername($request->request->get('email'));
                    $user->setUseremail($request->request->get('email'));
                    $user->setPassword($password);
                    $manager = $this->getDoctrine()->getManager();
                    $manager->persist($user);
                    $manager->flush();

                    $repositoryComp = $this->getDoctrine()->getManager()->getRepository('JdrCorpElricBundle:Competence');
                    $repositoryMetier = $this->getDoctrine()->getManager()->getRepository('JdrCorpElricBundle:Metier');
                    $repositoryArmes = $this->getDoctrine()->getManager()->getRepository('JdrCorpElricBundle:Arme');
                    $repositoryFiche = $this->getDoctrine()->getManager()->getRepository('JdrCorpElricBundle:Fiche');
                    $nbFiches = count($repositoryFiche->findAll());
                    $listeComp = $repositoryComp->findAll();
                    $listeMet = $repositoryMetier->findAll();
                    $listeArmes = $repositoryArmes->findAll();
                    return $this->render('JdrCorpElricBundle:Elric:index.html.twig', array('listeComp' => $listeComp, 'listeMet' => $listeMet, 'listeArmes' => $listeArmes, 'nbFiches' => $nbFiches,
                                'notice' => 'Inscription réussie ! Vous pouvez maintenant vous connecter.', 'type' => 'success'));
                } else {
                    $type = 'danger';
                    $notice = 'Mot de passe différent de la confirmation.';
                }
            }
        } else {
            $notice = "Un ou plusieurs champs sont manquants.";
            $type = 'danger';
        }
        return $this->render('JdrCorpIndexBundle:Index:register.html.twig', array('notice' => $notice, 'type' => $type));
    }

}
