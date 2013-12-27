<?php

namespace JdrCorp\IndexBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class IndexController extends Controller
{
    public function indexAction()
    {
        return $this->render('JdrCorpIndexBundle:Index:index.html.twig');
    }
}
