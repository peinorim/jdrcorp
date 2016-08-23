<?php

namespace IndexBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use IndexBundle\Entity\User;

class IndexController extends Controller
{

    public function indexAction()
    {
        return $this->render('IndexBundle:Index:index.html.twig');
    }

    public function profileAction()
    {
        if ($this->get('security.authorization_checker')->isGranted('IS_AUTHENTICATED_FULLY')) {
            $notice = null;
            $type = null;
            $fichesElric = null;
            $fichesGuildes = null;
            $user = $this->getUser();

            if (null !== $user) {
                $em = $this->getDoctrine()->getManager();
                $emGuildes = $this->getDoctrine()->getManager('guildes');

                $myfiches = $em->getRepository('ElricBundle:Fiche')->findByUser($user->getId());

                $myfichesGuildes = $emGuildes->getRepository('GuildesBundle:Fiche')->findByUserId($user->getId());
                $repositoryFicheGuildes = $emGuildes->getRepository('GuildesBundle:Fiche');

                if (count($myfiches) === 0 && count($myfichesGuildes) === 0) {
                    $type = "warning";
                    $notice = "Vous n'avez créé aucune fiche pour l'instant.";
                    $myfiches = null;
                }
                if ($this->get('security.authorization_checker')->isGranted('ROLE_ADMIN')) {
                    $fichesElric = $this->getDoctrine()->getManager()->getRepository('ElricBundle:Fiche')->findAll();
                    $fichesGuildes = $repositoryFicheGuildes->createQueryBuilder('p')->orderBy('p.date', 'DESC')->getQuery()->getResult();
                }
                return $this->render('IndexBundle:Index:profile.html.twig', array('notice' => $notice, 'type' => $type, 'myfiches' => $myfiches, 'myfichesGuildes' => $myfichesGuildes, 'fichesElric' => $fichesElric, "fichesGuildes" => $fichesGuildes));
            }
        }
        return $this->redirect($this->generateUrl('fos_user_security_login'));
    }

}
