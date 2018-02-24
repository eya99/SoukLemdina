<?php
/**
 * Created by PhpStorm.
 * User: Wissal
 * Date: 2018-02-19
 * Time: 20:32
 */

namespace WorkshopBundle\Controller;

use Symfony\Component\HttpFoundation\File\UploadedFile;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Routing\Annotation\Route;
use SUserBundle\Entity\User;


use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\Validator\Constraints\DateTime;
use WorkshopBundle\Entity\ParticipantWork;
use WorkshopBundle\Entity\Workshop;
use WorkshopBundle\Form\WorkshopType;


class WorkshopController extends Controller
{
    /**
     * @Route("/Workshop/AjoutWorkshop", name="AjoutWorkshop")
     */

    public function AjoutWorkshopAction(Request $request)
    {
        //$user=$this->container->get('security.token_storage')->getToken()->getUser();
        //  $id=$user;

        $work = new Workshop;
        $form = $this->createForm(WorkshopType::class, $work);
        $form->handleRequest($request);
        if ($form->isSubmitted() && $form->isValid()) {
            //   $work->setIdUser($user);
            /**
             * @var UploadedFile $file
             */
            $file = $work->getImage();
            $fileName = md5(uniqid()) . '.' . $file->guessExtension();
            $file->move(
                $this->getParameter('image_directory'), $fileName
            );

            /*
             $work->setImage($fileName);
             $file1=$work->getPlanning();
             $fileName=md5(uniqid()).'.'.$file->guessExtension();
             $file->move(
                 $this->getParameter('brochures_directory'),$fileName
             );
             */
            $em = $this->getDoctrine()->getManager();
            $work->setIdUser($this->container->get('security.token_storage')->getToken()->getUser());
            $dateDebut = $form->getData()->getDateDebut()->getTimestamp();
            $dateFin = $form->getData()->getDateFin()->getTimestamp();

            if ( $dateDebut > $dateFin){

            }
//
//            $data = $em->getRepository("WorkshopBundle:Workshop")->getByDate($d);
//            $em->getRepository("WorkshopBundle:Workshop")->find($d);
//
//            if (d . dateDebut < d . dateFin) {
//                return $this->redirectToRoute("_AjoutWorkshop");
//
//                $em->persist($work);
//                $em->flush();
//                return $this->redirectToRoute("_AfficheWorkshop");
//            }
            $em->persist($work);
            $em->flush();
            return $this->redirectToRoute("_AfficheWorkshop");
        }
        return $this->render("WorkshopBundle:Workshop:AjoutWorkshop.html.twig", array('form' => $form->createView()));
    }

    public
    function AfficheVisitWorkshopAction(Request $request)
    {
        $em = $this->getDoctrine()->getManager();
        $work = $em->getRepository("WorkshopBundle:Workshop")
            ->findAll();
        return $this->render('WorkshopBundle:Workshop:AfficheVisitWorkshop.html.twig',
            array('w' => $work

            ));
    }

    /**
     * @Route ("Workshop/
     * AfficheWorkshop" , name="Affiche_Workshop")
     *
     */
    public
    function AfficheWorkshopAction(Request $request)
    {

        $user = $this->container->get('security.token_storage')->getToken()->getUser();

        $user = $this->getDoctrine()->getManager()->getRepository("SUserBundle:User")->findAll();

        $em = $this->getDoctrine()->getManager();
        $work = $em->getRepository("WorkshopBundle:Workshop")->findAll();

        return $this->render('WorkshopBundle:Workshop:AfficheWorkshop.html.twig',
            array(
                'u' => $user,
                'w' => $work             //'user'=>$user
            ));
    }


    public
    function UpdateWorkshopAction(Request $request, $id)
    {

        $user = $this->container->get('security.token_storage')->getToken()->getUser();
        if ($this->get('security.authorization_checker')->isGranted('ROLE_SUPER_ADMIN') || $this->get('security.authorization_checker')->isGranted('ROLE_USER')) {

            $em = $this->getDoctrine()->getManager();
            $work = $em->getRepository("WorkshopBundle:Workshop")->find($id);
            $user = $this->getDoctrine()->getManager()->getRepository("SUserBundle:User")->findAll();

            $form = $this->createForm(WorkshopType::class, $work);
            $form->handleRequest($request);
            if ($form->isSubmitted() && $form->isValid()) {

                $user = $this->getUser();
                $work->setIdUser($user);
                $em = $this->getDoctrine()->getManager();

                $em->persist($work);
                $em->flush();
                return $this->redirectToRoute("_AfficheWorkshop");
            }
            return $this->render("WorkshopBundle:Workshop:UpdateWorkshop.html.twig",
                array('form' => $form->createView(), 'user' => $user)
            );
        }
    }


    public
    function DeleteWorkshopAction(Request $request, $id)
    {
        $user = $this->container->get('security.token_storage')->getToken()->getUser();
        $work = new Workshop();
        $work->setIdUser($user);

        if ($this->get('security.authorization_checker')->isGranted('ROLE_SUPER_ADMIN') || $this->get('security.authorization_checker')->isGranted('ROLE_USER')) {
            $em = $this->getDoctrine()->getManager();
            $work = $em->getRepository("WorkshopBundle:Workshop")->find($id);
            $this->getDoctrine()->getManager()->remove($work);
            $em->remove($work);
            $em->flush();

            return $this->redirectToRoute("_AfficheWorkshop");
        } else
            return $this->redirectToRoute('fos_user_security_login');

    }

    public
    function DetailsWorkshopAction($id)
    {
        $em = $this->getDoctrine()->getManager();
        $work = $em->getRepository("WorkshopBundle:Workshop")->find($id);
        return $this->render('WorkshopBundle:Workshop:DetailsWorkshop.html.twig',
            array('w' => $work));

    }

    public
    function RechercheWorkshopAction(Request $request)
    {
        $em = $this->getDoctrine()->getManager();
        $user = $this->getUser();
        $work = $em->getRepository('WorkshopBundle:Workshop')->findAll();
        if ($request->isMethod('POST')) {
            $nom = $request->get('nomWorkshop');
            $work = $em->getRepository("WorkshopBundle:Workshop")->findBy(array("nomWorkshop" => $nom));

        }
        return $this->render('WorkshopBundle:Workshop:RechercheWorkshop.html.twig', array('w' => $work));
    }

    public
    function RedirectAction(Request $request, $id)
    {
        $user = $this->container->get('security.token_storage')->getToken()->getUser();//tester lid du session
        $em = $this->getDoctrine()->getManager();
//        $work = new Workshop();
//        $Form = $this->createForm(WorkshopType::class, $work);
//        $Form->handleRequest($request);
        $workshop = $em->getRepository("WorkshopBundle:Workshop")->find($id);
        $particip = $em->getRepository("WorkshopBundle:ParticipantWork")->findOneBy(array('idUser' => $user, 'idWorkshop' => $id));
//
//        if ($Form->isValid() && $Form->isSubmitted()) {
//            $em = $this->getDoctrine()->getManager();
//            $work->setIdUser($user);
//            $em->persist($work);
//            $em->flush();
//            return $this->redirectToRoute('_Redirect', array('id' => $id));
//        }


        return $this->render('WorkshopBundle:Workshop:Redirect.html.twig', array(
            'workshop' => $workshop,
            // 'participant' => 'set',
            'ParticipantWork' => $particip
        ));
    }


    public
    function Participer_workAction($id)
    {
        $user = $this->container->get('security.token_storage')->getToken()->getUser();
        $em = $this->getDoctrine()->getManager();
        $work = $em->getRepository("WorkshopBundle:Workshop")->find($id);
        $part = new ParticipantWork();
        $part->setIdWorkshop($work);
        $part->setIdUser($user);
        $em->persist($part);
        $em->flush();
        return $this->redirectToRoute('_Redirect', array('id' => $id));
    }

    public
    function PasParticiper_workAction($id)
    {
        $em = $this->getDoctrine()->getManager();
        $particip = $em->getRepository("WorkshopBundle:ParticipantWork")->find($id);
        $workshop = $em->getRepository("WorkshopBundle:Workshop")->find($particip->getIdWorkshop());
//        $part = new ParticipantWork();
//        $part->setIdWorkshop($work);
//        $part->setIdUser($particip);

        $em->remove($particip);
        $em->flush();
        return $this->redirectToRoute('_Redirect', array('id' => $workshop->getId()));
    }
    public function getNbParticipant()
    {
        return $this->createQueryBuilder('p')
            ->select('COUNT(*)from PartcipantWork
                   where p.idWorkshop =:id')
            ->getQuery()
            ->getSingleScalarResult();
    }


    public function ListeParticipantAction($id){

        $em = $this->getDoctrine()->getManager();
        $participants = $em->getRepository("WorkshopBundle:ParticipantWork")->findby(array('idWorkshop'=>$id));

        return $this->render('WorkshopBundle:Participant:ListeParticipant.html.twig', array(
            'p' => $participants,
            'w' => $id
        ));
    }
}
