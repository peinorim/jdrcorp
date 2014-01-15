<?php

namespace JdrCorp\IndexBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use JdrCorp\ElricBundle\Entity\User;
use JdrCorp\ElricBundle\Entity\Perso;

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
                $mypersos = $em->getRepository('JdrCorpElricBundle:Perso')->findByUser($user->getId());
                if (count($mypersos) > 0) {
                    foreach ($mypersos as $perso) {
                        $myfiches[] = $repositoryFiche->findByPerso($perso->getId());
                    }
                } else {
                    $type = "warning";
                    $notice = "Vous n'avez créé aucune fiche pour l'instant.";
                    $myfiches = null;
                }
                return $this->render('JdrCorpIndexBundle:Index:profile.html.twig', array('nbFiches' => $nbFiches, 'notice' => $notice, 'type' => $type, 'myfiches' => $myfiches, 'mypersos' => $mypersos));
            } else {
                throw new AccessDeniedHttpException('Accès limité aux inscrits');
            }
        } else {
            return $this->redirect($this->generateUrl('Elric'));
        }
    }

    public function registerAction() {
        if (!$this->get('security.context')->isGranted('ROLE_USER')) {
            return $this->render('JdrCorpIndexBundle:Index:register.html.twig');
        } else {
            return $this->redirect($this->generateUrl('jdr_corp_index_homepage'));
        }
    }

    public function register_submitAction() {

        $request = $this->getRequest();

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
        }
    }

}
