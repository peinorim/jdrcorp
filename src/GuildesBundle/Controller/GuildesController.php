<?php

namespace GuildesBundle\Controller;

use GuildesBundle\Entity\Perso;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpKernel\Exception\AccessDeniedHttpException;

class GuildesController extends Controller
{

    public function indexAction()
    {
        $notice = null;
        $type = null;
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

        return $this->render('GuildesBundle:Guildes:index.html.twig', array('notice' => $notice, 'type' => $type, 'tour' => $tour, 'machi' => $machi, 'cdb' => $cdb, 'mes' => $mes));
    }

    public function diceAction()
    {
        $notice = null;
        $type = null;
        $em = $this->getDoctrine()->getManager('guildes');
        $repositoryCarac = $em->getRepository('GuildesBundle:Carac');
        $repositoryComp = $em->getRepository('GuildesBundle:Competence');
        $listeCarac = $repositoryCarac->findAll();
        $listeComp = $repositoryComp->findBy(array(), array('nom' => 'asc'));
        return $this->render('GuildesBundle:Guildes:dice.html.twig', array('notice' => $notice,
            'type' => $type, 'liste',
            'listeComp' => $listeComp,
            'listeCarac' => $listeCarac));
    }

    public function artefactsAction()
    {
        $notice = null;
        $type = null;
        $em = $this->getDoctrine()->getManager('guildes');
        $repositoryMaison = $em->getRepository('GuildesBundle:Maison');
        $repositoryArtef = $em->getRepository('GuildesBundle:Artefact');
        $repositoryArteType = $em->getRepository('GuildesBundle:ArtefactType');
        $listeMaison = $repositoryMaison->findAll();
        $listeArtefac = $repositoryArtef->findAll();
        $listeArteType = $repositoryArteType->findAll();
        return $this->render('GuildesBundle:Guildes:artefacts.html.twig', array('notice' => $notice,
            'type' => $type, 'liste',
            'listeArte' => $listeArtefac,
            'listemaison' => $listeMaison,
            'listeArteType' => $listeArteType));
    }

    public function loomAction()
    {
        $notice = null;
        $type = null;
        $em = $this->getDoctrine()->getManager('guildes');
        $repositoryMaison = $em->getRepository('GuildesBundle:Maison');
        $repositoryTour = $em->getRepository('GuildesBundle:Tour');
        $repositorySort = $em->getRepository('GuildesBundle:Sort');
        $repositorySortilege = $em->getRepository('GuildesBundle:Sortilege');
        $listeMaison = $repositoryMaison->findAll();
        $listeTour = $repositoryTour->findAll();
        $listeSort = $repositorySort->findAll();
        $listeSortilege = $repositorySortilege->findAll();
        return $this->render('GuildesBundle:Guildes:loom.html.twig', array('notice' => $notice,
            'type' => $type,
            'listemaison' => $listeMaison,
            'listeTour' => $listeTour,
            'listeSort' => $listeSort,
            'listeSortilege' => $listeSortilege));
    }

    public function armesAction()
    {
        $notice = null;
        $type = null;
        $em = $this->getDoctrine()->getManager('guildes');
        $repositoryArmes = $em->getRepository('GuildesBundle:Arme');
        $repositoryArmures = $em->getRepository('GuildesBundle:Armure');
        $listeArmes = $repositoryArmes->findAll();
        $listeArmures = $repositoryArmures->findAll();

        foreach ($listeArmes as $arme) {
            $listeComp[$arme->getCompetence()->getId()] = $arme->getCompetence();
        }

        return $this->render('GuildesBundle:Guildes:armes.html.twig', array('notice' => $notice,
            'type' => $type,
            'listeArmes' => $listeArmes,
            'listeArmures' => $listeArmures,
            'listeComp' => $listeComp));
    }

    public function equipementAction()
    {
        $notice = null;
        $type = null;
        $em = $this->getDoctrine()->getManager('guildes');
        $repositoryEquip = $em->getRepository('GuildesBundle:Equipement');
        $repositoryEqCate = $em->getRepository('GuildesBundle:EquipCategorie');
        $listeEquip = $repositoryEquip->findAll();
        $listeEqCate = $repositoryEqCate->findAll();

        return $this->render('GuildesBundle:Guildes:equipement.html.twig', array('notice' => $notice,
            'type' => $type,
            'listeEquip' => $listeEquip,
            'listeEqCate' => $listeEqCate));
    }

    public function machinationAction()
    {
        $notice = null;
        $type = null;
        $em = $this->getDoctrine()->getManager('guildes');
        $repositoryMachin = $em->getRepository('GuildesBundle:Machination');
        $repositoryChap = $em->getRepository('GuildesBundle:Chapitre');
        $listeMachination = $repositoryMachin->findAll();
        $listeChap = $repositoryChap->findAll();

        return $this->render('GuildesBundle:Guildes:machinations.html.twig', array('notice' => $notice,
            'type' => $type,
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

                if ($this->getUser()->getId() == $fiche->getUserId() || $this->get('security.authorization_checker')->isGranted('ROLE_ADMIN')) {

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
        }
    }

    public function deleteAction($id)
    {
        $request = Request::createFromGlobals();

        if ($request->getMethod() === 'POST') {
            $em = $this->getDoctrine()->getManager('guildes');
            $repositoryFiche = $em->getRepository('GuildesBundle:Fiche');
            $nbFiches = count($repositoryFiche->findAll());
            $fiche = $repositoryFiche->find($id);

            if ($fiche->getUserId() === null || $this->getUser()->getId() == $fiche->getUserId() || $this->get('security.authorization_checker')->isGranted('ROLE_ADMIN')) {
                $em->remove($fiche);
                $em->remove($fiche->getPerso());
                $em->flush();
                return $this->redirect($this->generateUrl('elric_profile'));
            } else {
                return $this->render('IndexBundle:Index:profile.html.twig', array('notice' => 'Erreur ! Vous ne pouvez pas supprimer cette fiche.', 'type' => 'danger', 'myfiches' => $myfiches, 'nbFiches' => $nbFiches));
            }
        }
    }

}
