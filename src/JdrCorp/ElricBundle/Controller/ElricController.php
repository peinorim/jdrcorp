<?php

namespace JdrCorp\ElricBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class ElricController extends Controller
{
    public function indexAction()
    {
        return $this->render('JdrCorpElricBundle:Elric:index.html.twig');
    }
}
