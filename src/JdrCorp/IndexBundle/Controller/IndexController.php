<?php

namespace JdrCorp\IndexBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use JdrCorp\ElricBundle\Entity\User;

class IndexController extends Controller {

    public function indexAction() {
        return $this->render('JdrCorpIndexBundle:Index:index.html.twig');
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
        
        if ($request->getMethod() === 'POST' && $request->request->get('pass') === $request->request->get('confirm') ) {
            $factory = $this->get('security.encoder_factory');
            $user = new User();

            $encoder = $factory->getEncoder($user);
            $password = $encoder->encodePassword($request->request->get('confirm') , $user->getSalt());
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
