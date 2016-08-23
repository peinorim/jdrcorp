<?php

namespace IndexBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpKernel\Exception\AccessDeniedHttpException;
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

    public function registerAction()
    {
        if (!$this->get('security.authorization_checker')->isGranted('ROLE_USER')) {
            $notice = null;
            $type = null;
            $repositoryFiche = $this->getDoctrine()->getManager()->getRepository('ElricBundle:Fiche');
            $nbFiches = count($repositoryFiche->findAll());
            return $this->render('IndexBundle:Index:register.html.twig', array('notice' => $notice, 'type' => $type, 'nbFiches' => $nbFiches));
        } else {
            return $this->redirect($this->generateUrl('jdr_corp_index_homepage'));
        }
    }

    public function register_submitAction()
    {

        $request = $this->getRequest();
        $repositoryUser = $this->getDoctrine()->getManager()->getRepository('ElricBundle:User');

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

                    $repositoryComp = $this->getDoctrine()->getManager()->getRepository('ElricBundle:Competence');
                    $repositoryMetier = $this->getDoctrine()->getManager()->getRepository('ElricBundle:Metier');
                    $repositoryArmes = $this->getDoctrine()->getManager()->getRepository('ElricBundle:Arme');
                    $repositoryFiche = $this->getDoctrine()->getManager()->getRepository('ElricBundle:Fiche');
                    $nbFiches = count($repositoryFiche->findAll());
                    $listeComp = $repositoryComp->findAll();
                    $listeMet = $repositoryMetier->findAll();
                    $listeArmes = $repositoryArmes->findAll();
                    return $this->render('ElricBundle:Elric:index.html.twig', array('listeComp' => $listeComp, 'listeMet' => $listeMet, 'listeArmes' => $listeArmes, 'nbFiches' => $nbFiches,
                        'notice' => 'Inscription réussie ! Vous pouvez maintenant vous connecter.', 'type' => 'success'));
                } else {
                    $type = 'danger';
                    $notice = 'Mot de passe différent de la confirmation.';
                }
            }
        } else {
            $notice = "Un ou plusieurs champs sont manquants.";
            $type = 'danger';
        }
        return $this->render('IndexBundle:Index:register.html.twig', array('notice' => $notice, 'type' => $type));
    }

}
