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
            $repositoryFiche = $this->getDoctrine()->getManager()->getRepository('JdrCorpElricBundle:Fiche');
            $nbFiches = count($repositoryFiche->findAll());
            $notice = null;
            $type = null;
            $user = $this->getUser();

            if (null !== $user) {
                $em = $this->getDoctrine()->getManager();
                $myfiches = $em->getRepository('JdrCorpElricBundle:Fiche')->findByUser($user->getId());
                if (count($myfiches) === 0) {
                    $type = "warning";
                    $notice = "Vous n'avez créé aucune fiche pour l'instant.";
                    $myfiches = null;
                }
                return $this->render('JdrCorpIndexBundle:Index:profile.html.twig', array('nbFiches' => $nbFiches, 'notice' => $notice, 'type' => $type, 'myfiches' => $myfiches));
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
                    return $this->redirect($this->generateUrl('Elric'));
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
