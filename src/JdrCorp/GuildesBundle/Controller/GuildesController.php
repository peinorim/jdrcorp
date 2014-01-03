<?php

namespace JdrCorp\GuildesBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class GuildesController extends Controller
{
    public function indexAction()
    {
        return $this->render('JdrCorpGuildesBundle:Guildes:index.html.twig');
    }
}
