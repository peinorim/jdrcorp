<?php

namespace JdrCorp\IndexBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction()
    {
        return $this->render('JdrCorpIndexBundle:Default:index.html.twig');
    }
}
