<?php

namespace GuildesBundle\Controller;

use GuildesBundle\Entity\Perso;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpKernel\Exception\AccessDeniedHttpException;
use Symfony\Component\Routing\Exception\MethodNotAllowedException;

class GuildesController extends Controller
{

    public function indexAction()
    {
        $tour = null;
        $machi = null;
        $cdb = null;
        $mes = null;
        $em = $this->getDoctrine()->getManager('guildes');
        $repositoryTour = $em->getRepository('GuildesBundle:Tour');
        $repositoryMachin = $em->getRepository('GuildesBundle:Machination');
        $repositoryCdbAll = $em->getRepository('GuildesBundle:CDBAll');
        $repositoryMesAll = $em->getRepository('GuildesBundle:MESAll');
        $count = $repositoryTour->createQueryBuilder('u')
            ->select('COUNT(u)')
            ->getQuery()
            ->getSingleScalarResult();

        $countMac = $repositoryMachin->createQueryBuilder('u')
            ->select('COUNT(u)')
            ->getQuery()
            ->getSingleScalarResult();

        $countCdb = $repositoryCdbAll->createQueryBuilder('u')
            ->select('COUNT(u)')
            ->getQuery()
            ->getSingleScalarResult();

        $countMes = $repositoryMesAll->createQueryBuilder('u')
            ->select('COUNT(u)')
            ->getQuery()
            ->getSingleScalarResult();
        while ($tour === null) {
            $tour = $repositoryTour->createQueryBuilder('t')->where('t.id =' . rand(1, $count - 1))->getQuery()->getOneOrNullResult();
        }
        while ($machi === null) {
            $machi = $repositoryMachin->createQueryBuilder('m')->where('m.id =' . rand(1, $countMac - 1))->getQuery()->getOneOrNullResult();
        }
        while ($cdb === null) {
            $cdb = $repositoryCdbAll->createQueryBuilder('c')->where('c.id =' . rand(1, $countCdb - 1))->getQuery()->getOneOrNullResult();
        }

        while ($mes === null) {
            $mes = $repositoryMesAll->createQueryBuilder('c')->where('c.id =' . rand(1, $countMes - 1))->getQuery()->getOneOrNullResult();
        }

        return $this->render('GuildesBundle:Guildes:index.html.twig', array('tour' => $tour, 'machi' => $machi, 'cdb' => $cdb, 'mes' => $mes));
    }

    public function diceAction()
    {
        $em = $this->getDoctrine()->getManager('guildes');
        $repositoryCarac = $em->getRepository('GuildesBundle:Carac');
        $repositoryComp = $em->getRepository('GuildesBundle:Competence');
        $listeCarac = $repositoryCarac->createQueryBuilder('c')->orderBy('c.nom', 'ASC')->getQuery()->getResult();
        $listeComp = $repositoryComp->createQueryBuilder('c')->orderBy('c.nom', 'ASC')->getQuery()->getResult();
        return $this->render('GuildesBundle:Guildes:dice.html.twig', array(
            'listeComp' => $listeComp,
            'listeCarac' => $listeCarac));
    }

    public function artefactsAction()
    {
        $em = $this->getDoctrine()->getManager('guildes');
        $repositoryMaison = $em->getRepository('GuildesBundle:Maison');
        $repositoryArtef = $em->getRepository('GuildesBundle:Artefact');
        $repositoryArteType = $em->getRepository('GuildesBundle:ArtefactType');
        $listeMaison = $repositoryMaison->createQueryBuilder('m')->orderBy('m.nom', 'ASC')->getQuery()->getResult();
        $listeArtefac = $repositoryArtef->createQueryBuilder('a')->orderBy('a.nom', 'ASC')->getQuery()->getResult();
        $listeArteType = $repositoryArteType->createQueryBuilder('t')->orderBy('t.nom', 'ASC')->getQuery()->getResult();
        return $this->render('GuildesBundle:Guildes:artefacts.html.twig', array(
            'listeArte' => $listeArtefac,
            'listemaison' => $listeMaison,
            'listeArteType' => $listeArteType));
    }

    public function caracsAction() {
        $em = $this->getDoctrine()->getManager('guildes');
        $repositoryCarac = $em->getRepository('GuildesBundle:Carac');

        $listeCaracPhys = $repositoryCarac->createQueryBuilder('c')
            ->leftJoin("GuildesBundle:CaracType", "ct", "WITH", "c.type=ct.id")
            ->where("ct.nom = 'Physique'")
            ->orderBy('c.nom', 'ASC')
            ->getQuery()->getResult();

        $listeCaracMent = $repositoryCarac->createQueryBuilder('c')
            ->leftJoin("GuildesBundle:CaracType", "ct", "WITH", "c.type=ct.id")
            ->where("ct.nom = 'Mentale'")
            ->orderBy('c.nom', 'ASC')
            ->getQuery()->getResult();

        $listeCaracArt = $repositoryCarac->createQueryBuilder('c')
            ->leftJoin("GuildesBundle:CaracType", "ct", "WITH", "c.type=ct.id")
            ->where("ct.nom = 'Art'")
            ->getQuery()->getResult();

        return $this->render('GuildesBundle:Guildes:caracs.html.twig', array(
            'listeCaracPhys' => $listeCaracPhys,
                'listeCaracMent' => $listeCaracMent,
                'listeCaracArt' => $listeCaracArt
            )
        );
    }

    public function loomAction()
    {
        $em = $this->getDoctrine()->getManager('guildes');
        $repositoryMaison = $em->getRepository('GuildesBundle:Maison');
        $repositoryTour = $em->getRepository('GuildesBundle:Tour');
        $repositorySort = $em->getRepository('GuildesBundle:Sort');
        $repositorySortilege = $em->getRepository('GuildesBundle:Sortilege');
        $listeMaison = $repositoryMaison->createQueryBuilder('m')->orderBy('m.nom', 'ASC')->getQuery()->getResult();
        $listeTour = $repositoryTour->createQueryBuilder('t')->orderBy('t.nom', 'ASC')->getQuery()->getResult();
        $listeSort = $repositorySort->createQueryBuilder('s')->orderBy('s.nom', 'ASC')->getQuery()->getResult();
        $listeSortilege = $repositorySortilege->createQueryBuilder('s')->orderBy('s.nom', 'ASC')->getQuery()->getResult();
        return $this->render('GuildesBundle:Guildes:loom.html.twig', array(
            'listemaison' => $listeMaison,
            'listeTour' => $listeTour,
            'listeSort' => $listeSort,
            'listeSortilege' => $listeSortilege));
    }

    public function armesAction()
    {
        $em = $this->getDoctrine()->getManager('guildes');
        $repositoryArmes = $em->getRepository('GuildesBundle:Arme');
        $repositoryArmures = $em->getRepository('GuildesBundle:Armure');
        $listeArmes = $repositoryArmes->createQueryBuilder('a')->orderBy('a.nom', 'ASC')->getQuery()->getResult();
        $listeArmures = $repositoryArmures->createQueryBuilder('a')->orderBy('a.nom', 'ASC')->getQuery()->getResult();

        $listeComp = array();

        foreach ($listeArmes as $arme) {
            $listeComp[$arme->getCompetence()->getId()] = $arme->getCompetence();
        }

        return $this->render('GuildesBundle:Guildes:armes.html.twig', array(
            'listeArmes' => $listeArmes,
            'listeArmures' => $listeArmures,
            'listeComp' => $listeComp));
    }

    public function equipementAction()
    {
        $em = $this->getDoctrine()->getManager('guildes');
        $repositoryEquip = $em->getRepository('GuildesBundle:Equipement');
        $repositoryEqCate = $em->getRepository('GuildesBundle:EquipCategorie');
        $listeEquip = $repositoryEquip->createQueryBuilder('e')->orderBy('e.nom', 'ASC')->getQuery()->getResult();
        $listeEqCate = $repositoryEqCate->createQueryBuilder('e')->orderBy('e.nom', 'ASC')->getQuery()->getResult();

        return $this->render('GuildesBundle:Guildes:equipement.html.twig', array(
            'listeEquip' => $listeEquip,
            'listeEqCate' => $listeEqCate));
    }

    public function machinationAction()
    {
        $em = $this->getDoctrine()->getManager('guildes');
        $repositoryMachin = $em->getRepository('GuildesBundle:Machination');
        $repositoryChap = $em->getRepository('GuildesBundle:Chapitre');
        $listeMachination = $repositoryMachin->createQueryBuilder('m')->orderBy('m.nom', 'ASC')->getQuery()->getResult();
        $listeChap = $repositoryChap->createQueryBuilder('c')->orderBy('c.nom', 'ASC')->getQuery()->getResult();

        return $this->render('GuildesBundle:Guildes:machinations.html.twig', array(
            'listeMachination' => $listeMachination,
            'listeChap' => $listeChap));
    }

    public function reviewAction($id, $format)
    {
        $request = Request::createFromGlobals();

        if ($request->getMethod() === 'POST') {
            $em = $this->getDoctrine()->getManager('guildes');
            $repositoryFiche = $em->getRepository('GuildesBundle:Fiche');
            $fiche = $repositoryFiche->find($id);
            /* @var Perso $perso */
            $perso = $fiche->getPerso();
            if ($perso !== null) {

                if ($this->get('security.authorization_checker')->isGranted('ROLE_ADMIN') || $this->getUser()->getId() == $fiche->getUser()->getId() ) {

                    $html = $this->renderView('GuildesBundle:Guildes/Create:generate.html.twig', array('perso' => $perso));
                    if ($format === 'jpg') {
                        return new Response($this->get('knp_snappy.image')->getOutputFromHtml($html), 200, array('Content-Type' => 'image/jpg', 'Content-Disposition' => 'filename="Guildes.jpg"'));
                    } else {
                        return new Response($this->get('knp_snappy.pdf')->getOutputFromHtml($html), 200, array('Content-Type' => 'application/pdf'));
                    }
                } else {
                    throw new AccessDeniedHttpException("Vous n'avez pas accès à cette fiche.");
                }
            } else {
                throw new AccessDeniedHttpException("Cette fiche n'existe pas");
            }
        } else {
            throw new MethodNotAllowedException(array("POST"), "Méthode non autorisée");
        }
    }

    public function deleteAction($id)
    {
        $request = Request::createFromGlobals();

        if ($request->getMethod() === 'POST') {
            $em = $this->getDoctrine()->getManager('guildes');
            $repositoryFiche = $em->getRepository('GuildesBundle:Fiche');
            $fiche = $repositoryFiche->find($id);

            if (($fiche->getUserId() === null && $this->get('security.authorization_checker')->isGranted('ROLE_ADMIN')) || $this->getUser()->getId() == $fiche->getUserId() || $this->get('security.authorization_checker')->isGranted('ROLE_ADMIN')) {
                $em->remove($fiche);
                $em->remove($fiche->getPerso());
                $em->flush();
            } else {
                throw new AccessDeniedHttpException("Vous n'avez pas accès à cette fiche.");
            }
            return $this->redirect($this->generateUrl('elric_profile'));
        } else {
            throw new MethodNotAllowedException(array("POST"), "Méthode non autorisée");
        }
    }

}
