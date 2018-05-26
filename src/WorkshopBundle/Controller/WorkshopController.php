<?php
/**
 * Created by PhpStorm.
 * User: Wissal
 * Date: 2018-02-19
 * Time: 20:32
 */

namespace WorkshopBundle\Controller;

use Symfony\Component\HttpFoundation\File\UploadedFile;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Routing\Annotation\Route;
use SUserBundle\Entity\User;


use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\Serializer\Normalizer\ObjectNormalizer;
use Symfony\Component\Serializer\Serializer;
use Symfony\Component\Validator\Constraints\DateTime;
use WorkshopBundle\Entity\ParticipantWork;
use WorkshopBundle\Entity\Workshop;
use WorkshopBundle\Form\WorkshopType;
use WorkshopBundle\WorkshopBundle;
use WorkshopBundle\JsonEntities\WorkshopJson;


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
//            //   $work->setIdUser($user);
//            /**
//             * @var UploadedFile $file
//             */
//            $file = $work->getImage();
//            $fileName = md5(uniqid()) . '.' . $file->guessExtension();
//            $file->move(
//                $this->getParameter('image_directory'), $fileName
//            );
//
//            /*
//             $work->setImage($fileName);
//             $file1=$work->getPlanning();
//             $fileName=md5(uniqid()).'.'.$file->guessExtension();
//             $file->move(
//                 $this->getParameter('brochures_directory'),$fileName
//             );
//             */
            $em = $this->getDoctrine()->getManager();
            $work->setIdUser($this->container->get('security.token_storage')->getToken()->getUser());
            $dateDebut = $form->getData()->getDateDebut()->getTimestamp();
            $dateFin = $form->getData()->getDateFin()->getTimestamp();

            if ($dateDebut > $dateFin) {

                return $this->render("WorkshopBundle:Workshop:AjoutWorkshop.html.twig", array('fdate' => 'set',
                    'form' => $form->createView()));
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
            ->FiltreDQL();
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
//        $user = $this->container->get('security.token_storage')->getToken()->getUser();
//        $work = new Workshop();
//        $work->setIdUser($user);

        if ($this->get('security.authorization_checker')->isGranted('ROLE_SUPER_ADMIN') || $this->get('security.authorization_checker')->isGranted('ROLE_USER')) {
            $em = $this->getDoctrine()->getManager();

            $part = $em->getRepository("WorkshopBundle:ParticipantWork")->findBy(array('idWorkshop' => $id));
            if ($part)
                foreach ($part as $j) {
                    $em->remove($j);
                    $em->flush();
                }
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
        $nom = $_POST['valeur'];

        $work = $em->getRepository('WorkshopBundle:Workshop')->RechercheAv($nom);
        //$this->redirectToRoute('_AfficheWorkshop');

        /*if ($request->isMethod('POST')) {
            $nom = $request->get('nomWorkshop');
            $work = $em->getRepository("WorkshopBundle:Workshop")->findBy(array("nomWorkshop" => $nom));

        }*/

        return $this->render('WorkshopBundle:Workshop:AfficheWorkshop.html.twig', array('w' => $work));
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
        $nb = $em->getRepository("WorkshopBundle:ParticipantWork")->findBy(array('idWorkshop' => $id));
        $nbparticip = count($nb);
        $profile = $em->getRepository("SocialBundle:Profile")->findOneBy(array('idUser' => $workshop->getIdUser()));
        return $this->render('WorkshopBundle:Workshop:Redirect.html.twig', array(
            'workshop' => $workshop,
            // 'participant' => 'set',
            'ParticipantWork' => $particip,
            'nbparticip' => $nbparticip,
            'profile' => $profile
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
        $nb = $em->getRepository("WorkshopBundle:ParticipantWork")->findBy(array('idWorkshop' => $id));
        $nbplace = count($nb);
        $em->persist($part);
        $em->flush();

        /* var_dump($nbplace);
         echo $aaa;*/
        return $this->redirectToRoute('_Redirect', array('id' => $id, 'ParticipantWork' => $work));


    }

    public
    function PasParticiper_workAction($id)
    {
        $em = $this->getDoctrine()->getManager();
        $particip = $em->getRepository("WorkshopBundle:ParticipantWork")->find($id);
        $idw = $particip->getIdWorkshop();

        $workshop = $em->getRepository("WorkshopBundle:Workshop")->find($idw);

//        $part = new ParticipantWork();
//        $part->setIdWorkshop($work);
//        $part->setIdUser($particip);

        $em->remove($particip);
        $em->flush();

        // $nb= $em->getRepository("WorkshopBundle:ParticipantWork")->findBy(array('idWorkshop'=>$id));
        //  $nbplace=count($nb);
        return $this->redirectToRoute('_AfficheWorkshop', array('id' => $id, 'ParticipantWork' => $workshop));

    }

    /*  public function getNbParticipantAction()
      {
          return $this->createQueryBuilder('v')
              ->select('COUNT(*)from PartcipantWork
                     where p.idWorkshop =:id')
              ->getQuery()
              ->getSingleScalarResult();

      }
  */

    public function ListeParticipantAction($id)
    {

        $em = $this->getDoctrine()->getManager();
        $participants = $em->getRepository("WorkshopBundle:ParticipantWork")->findby(array('idWorkshop' => $id));

        return $this->render('WorkshopBundle:Participant:ListeParticipant.html.twig', array(
            'p' => $participants,
            'w' => $id
        ));
    }

    public function FiltreDQL()
    {
        $em = $this->getDoctrine()->getManager();
        $work = $em->getRepository("WorkshopBundle:Workshop")->FiltreDQL();
        return $this->render("WorkshopBundle:AfficheVisitWorkshop.html.twig",
            array(
                'w' => $work
            ));
    }

    public function FiltrePrix()
    {
        $em = $this->getDoctrine()->getManager();
        $work = $em->getRepository("WorkshopBundle:Workshop")->findBy(array(), array('prix' => 'ASC'));
        $a = "aaaaaaaaaaaaaa";
        var_dump($a);
        echo $rr;
        return $this->render("WorkshopBundle:AfficheVisitWorkshop.html.twig",
            array(
                'w' => $work
            ));
    }

    public function RechercheDynamiqAction(Request $request, $var)
    {
        $em = $this->getDoctrine()->getManager();
        $work = $em->getRepository('WorkshopBundle:Workshop')->RechercheAv($var);
        $zz = new Serializer(array(new ObjectNormalizer()));
        $a = $zz->normalize($work, 'json');
        $response = new JsonResponse();
        return $response->setData(array('y' => $a));
    }

    public function AfficheProfileAction(Request $request, $id)
    {

        $em = $this->getDoctrine()->getManager();
        $work = $em->getRepository("WorkshopBundle:Workshop")->findBy(array('idUser' => $id));
        return $this->render('WorkshopBundle:Workshop:AfficheProfile.html.twig',
            array(
                'w' => $work,
            ));
    }

    public function getUniqWSAction()
    {
        return new JsonResponse(uniqid() . ".jpg");
    }

    public function nbParticipantswAction(Request $request, $id)
    {
        $em = $this->getDoctrine()->getManager();
        $work = $em->getRepository('WorkshopBundle:Workshop')->nbParticipants($id);
        $respone = null;
        if ($work) {
            $zz = new Serializer(array(new ObjectNormalizer()));
            $a = $zz->normalize($work, 'json');
            $response = new JsonResponse($a);
        }
        return $response;
    }

    public function DeleteMobAction($id, $idW)
    {
        $em = $this->getDoctrine()->getManager();
        $user = $em->getRepository("SUserBundle:User")->find($id);
        $w = $em->getRepository("WorkshopBundle:Workshop")
            ->findOneBy(array('id' => $idW));

        if ($user == $w->getIdUser()) {
            $em = $this->getDoctrine()->getManager();
            $this->getDoctrine()->getManager()->remove($w);
            $em->remove($w);
            $em->flush();
        }
        $serializer = new Serializer([new ObjectNormalizer()]);
        $formatted = $serializer->normalize($w);
        return new JsonResponse($formatted);
    }

    public function SwitchWSAction($idW, $idU)
    {
        $em = $this->getDoctrine()->getManager();
        $part = $em->getRepository("WorkshopBundle:ParticipantWork")->findOneBy(array(
            'idWorkshop' => $idW,
            'idUser' => $idU));
        if (isset($part)) {
            $em->remove($part);
            $em->flush();

            return new JsonResponse(true);
        } else {
            $user = $em->getRepository("SUserBundle:User")->find($idU);

            $PartW = new ParticipantWork();
            $work = $em->getRepository("WorkshopBundle:Workshop")->find($idW);
            // $partP = $em->getRepository("WorkshopBundle:Workshop")->find($idW);
            $PartW->setIdUser($user);
            $PartW->setIdWorkshop($work);
            $em->persist($PartW);
            $em->flush();
            return new JsonResponse(false);
        }
    }

    public function SwitchBTnAction($idW, $idU)
    {
        $em = $this->getDoctrine()->getManager();
        $part = $em->getRepository("WorkshopBundle:ParticipantWork")->findOneBy(array(
            'idWorkshop' => $idW,
            'idUser' => $idU));
        if (isset($part)) {
            $hatem = array(
                'zeineb' => true
            );
        } else {
            $hatem = array(
                'zeineb' => false
            );
        }
        $serializer = new Serializer([new ObjectNormalizer()]);
        $formatted = $serializer->normalize($hatem);
        return new JsonResponse($formatted);

    }

    public function PasParticiperWSAction($id)
    {
        $em = $this->getDoctrine()->getManager();
        $user = $em->getRepository("SUserBundle:User")->find($id);
        $parti = $em->getRepository("WorkshopBundle:ParticipantWork")->find($id);
        $wrk = $em->getRepository('WorkshopBundle:Workshop')->find($parti->getIdWorkshop());
        $em->remove($parti);
        $em->flush();
        $serializer = new Serializer([new ObjectNormalizer()]);
        $formatted = $serializer->normalize($wrk);
        return new JsonResponse($formatted);
    }

    public function ParticiperWSAction(Request $request, $id, $idU)
    {
        $user = $this->container->get('security.token_storage')->getToken()->getUser();

        $em = $this->getDoctrine()->getManager();
        $user = $em->getRepository("SUserBundle:User")->find($idU);

        $wrk = $em->getRepository("WorkshopBundle:Workshop")->find($id);
        $particip = new ParticipantWork();
        $particip->setIdWorkshop($wrk);
        $particip->setIdUser($user);
        $em->persist($particip);
        $em->flush();
        $serializer = new Serializer([new ObjectNormalizer()]);
        $formatted = $serializer->normalize($wrk);
        return new JsonResponse($formatted);
    }

    public function UpdateWorkshopWSAction(Request $request, $id)
    {
        $em = $this->getDoctrine()->getManager();
        // $wrk = new Workshop();
        $user = $em->getRepository("SUserBundle:User")->find($id);
        $wrk = $this->getDoctrine()->getManager()->getRepository('WorkshopBundle:Workshop')->findOneBy(array('id' => $id));
        $wrk->setIdUser($user);
        $wrk->setNomWorkshop($request->get('nomWorkshop'));
        $wrk->setDateDebut(new \DateTime($request->get('dateDebut')));
        $wrk->setDateFin(new \DateTime($request->get('dateFin')));
        $wrk->setAdresse($request->get('adresse'));
        $wrk->setPrix($request->get('prix'));
        $wrk->setDescription($request->get('description'));
        $wrk->setNbPlace($request->get('nbPlace'));
        $wrk->setType($request->get('type'));
        $wrk->setImage($request->get('image'));
        $wrk->setNbrrating(0);
        $wrk->setPlanning(null);
        $wrk->setVideo(null);
        $wrk->setNbSignal(0);
        $wrk->setUpdatedAt(null);
        $em->persist($wrk);
        $em->flush();
        $serializer = new Serializer([new ObjectNormalizer()]);
        $formatted = $serializer->normalize($wrk);
        return new JsonResponse($formatted);
    }

    public function AfficheWorkshopWSAction(Request $request)
    {
        $em = $this->getDoctrine()->getManager();
        $work = $em->getRepository("WorkshopBundle:Workshop")->findAll();

        $lstW = array();
        foreach ($work as $w) {
            $user = $em->getRepository("SUserBundle:User")->find($w->getIdUser());

            $workJson = new WorkshopJson();
            $workJson->setIdUser($user->getId());
            $workJson->setId($w->getId());
            $workJson->setNomWorkshop($w->getNomWorkshop());
            $workJson->setDateDebut($w->getDateDebut()->getTimestamp() * 1000);
            $workJson->setImage($w->getImage());
            $workJson->setPrix($w->getPrix());
            $workJson->setNbPlace($w->getNbPlace());
            $workJson->setDateFin($w->getDateFin()->getTimestamp() * 1000);
            $workJson->setDescription($w->getDescription());
            $workJson->setAdresse($w->getAdresse());
            $workJson->setType($w->getType());
            $lstW[] = $workJson;
        }
        $serializer = new Serializer([new ObjectNormalizer()]);
        $formatted = $serializer->normalize($lstW);
        return new JsonResponse($formatted);
    }

    public function AjoutWorkshopWSAction(Request $request,$id)
    {
        $em=$this->getDoctrine()->getManager();
        $wrk = new Workshop();
        $user = $em->getRepository("SUserBundle:User")->find($id);
        $wrk->setIdUser($user);
        $wrk->setNomWorkshop($request->get('nomWorkshop'));
        $wrk->setDateDebut(new \DateTime($request->get('dateDebut')));
        $wrk->setDateFin(new \DateTime($request->get('dateFin')));
        $wrk->setAdresse($request->get('adresse'));
        $wrk->setPrix($request->get('prix'));
        $wrk->setDescription($request->get('description'));
        $wrk->setNbPlace($request->get('nbPlace'));
        $wrk->setType($request->get('type'));
        $wrk->setImage($request->get('image'));
        $wrk->setNbrrating(0);
        $wrk->setPlanning(null);
        $wrk->setVideo(null);
        $wrk->setNbSignal(0);
        $wrk->setUpdatedAt(null);
        $em->persist($wrk);
        $em->flush();
        $serializer=new Serializer([new ObjectNormalizer()]);
        $formatted=$serializer->normalize($wrk);
        return new JsonResponse($formatted);
    }

}

