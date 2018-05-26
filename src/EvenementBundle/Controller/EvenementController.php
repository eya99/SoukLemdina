<?php

namespace EvenementBundle\Controller;

use EvenementBundle\Entity\ParticipantEvents;
use EvenementBundle\Form\RatingEventType;
//use function PHPSTORM_META\type;
use Symfony\Component\HttpFoundation\File\UploadedFile;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\JsonResponse;
use EvenementBundle\Entity\Evenement;
use EvenementBundle\Form\EvenementType;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\Serializer\Normalizer\ObjectNormalizer;
use Symfony\Component\Serializer\Serializer;
use EvenementBundle\JsonEntities\EventJson;

class EvenementController extends Controller
{

    public function AjoutEventAction(Request $request)
    {

        $user = $this->container->get('security.token_storage')->getToken()->getUser();
        //  $id=$user;

        $event = new Evenement();
        $form = $this->createForm(EvenementType::class, $event);
        $form->handleRequest($request);
        if ($form->isSubmitted() && $form->isValid()) {
            /**
             * @var UploadedFile $file
             */
            $file = $event->getPhoto();
            $fileName = md5(uniqid()) . '.' . $file->guessExtension();
            $file->move(
                $this->getParameter('image_directory'), $fileName
            );
            $event->setPhoto($fileName);
            $event->setIdUser($user);
            $event->setNbrrating(0);
            $event->setNbruser(0);
            $em = $this->getDoctrine()->getManager();

            $dateDebut = $form->getData()->getDateDebut()->getTimestamp();
            $dateFin = $form->getData()->getDateFin()->getTimestamp();

            if ($dateDebut > $dateFin) {
                echo '<script type="text/javascript">' . 'alert("date non valide ");' . '</script>';
            }
            $em->persist($event);
            $em->flush();
            return $this->redirectToRoute("_AfficheEvent");
        }
        return $this->render("EvenementBundle:Evenement:AjoutEvent.html.twig", array('form' => $form->createView(), 'user' => $user));
    }


    public function AfficheEventAction(Request $request)
    {
        //$event=new Evenement();
        $user = $this->container->get('security.token_storage')->getToken()->getUser();

        $user = $this->getDoctrine()->getManager()->getRepository("SUserBundle:User")->findAll();

        $em = $this->getDoctrine()->getManager();
        $event = $em->getRepository("EvenementBundle:Evenement")->findAll();
        // $event->setIdUser($user);
        /**
         * @var $paginator\knp\Component\Pager\Paginator
         */
        $paginator = $this->get('knp_paginator');
        $result = $paginator->paginate(
            $event,
            $request->query->getInt('page', 1),
            $request->query->getInt('limit', 4)
        );


        /*$event=$em->getRepository("EvenementBundle:Evenement")
        ->findAll();*/

        return $this->render('EvenementBundle:Evenement:AfficheEvent.html.twig',
            array(
                'e' => $result,
                'u' => $user

                //'user'=>$user
            ));
    }


    public function UpdateEventAction(Request $request, $id)
    {
        $user = $this->container->get('security.token_storage')->getToken()->getUser();
        //   $user=$this-> getuser();
//$id=$user->setId(1);
        if ($user->hasRole('ROLE_USER')) {
            $em = $this->getDoctrine()->getManager();
            $event = $em->getRepository("EvenementBundle:Evenement")->find($id);
            $user = $this->getDoctrine()->getManager()->getRepository("SUserBundle:User")->findAll();

            $form = $this->createForm(EvenementType::class, $event);
            $form->handleRequest($request);
            if ($form->isSubmitted() && $form->isValid()) {
                /**
                 * @var UploadedFile $file
                 */
                $file = $event->getPhoto();
                $fileName = md5(uniqid()) . '.' . $file->guessExtension();
                $file->move(
                    $this->getParameter('image_directory'), $fileName
                );
                $event->setPhoto($fileName);
                $user = $this->getUser();
                $event->setIdUser($user);
                $event->setNbrrating(0);
                $event->setNbruser(0);
                $em = $this->getDoctrine()->getManager();

                $em->persist($event);
                $em->flush();
                return $this->redirectToRoute("_AfficheEvent");
            }
            return $this->render("EvenementBundle:Evenement:UpdateEvent.html.twig",
                array('form' => $form->createView(), 'user' => $user)
            );
        }
    }


    public function DeleteEventAction(Request $request, $id)
    {
        if ($this->get('security.authorization_checker')->isGranted('ROLE_SUPER_ADMIN') || $this->get('security.authorization_checker')->isGranted('ROLE_USER')) {
            $em = $this->getDoctrine()->getManager();

            $part = $em->getRepository("EvenementBundle:ParticipantEvents")->findBy(array('idEvenement' => $id));
            if ($part)
                foreach ($part as $j) {
                    $em->remove($j);
                    $em->flush();
                }
            $work = $em->getRepository("EvenementBundle:Evenement")->find($id);
            $this->getDoctrine()->getManager()->remove($work);
            $em->remove($work);
            $em->flush();

            return $this->redirectToRoute("_AfficheEvent");
        } else
            return $this->redirectToRoute('fos_user_security_login');
       /* $user = $this->container->get('security.token_storage')->getToken()->getUser();
        $event = new Evenement();
        $event->setIdUser($user);


        if ($user = $this->getUser()) {
            $em = $this->getDoctrine()->getManager();
            $event = $em->getRepository("EvenementBundle:Evenement")->find($id);
            $this->getDoctrine()->getManager()->remove($event);
            $this->get('session')->getFlashBag()->add(
                'notice',
                'etes vous sur de vouloir supprimer?'
            );
            $em->remove($event);
            $em->flush();
            return $this->redirectToRoute("_AfficheEvent");
        }*/
    }


    public function DetailsEventAction($id)
    {
        $user = $this->container->get('security.token_storage')->getToken()->getUser();

        $em = $this->getDoctrine()->getManager();
        $event = $em->getRepository("EvenementBundle:Evenement")->find($id);
        $participants = $em->getRepository("EvenementBundle:ParticipantEvents")->findOneBy(array('idUser' => $user->getId(),
            'idEvenement' => $id));
        return $this->render('EvenementBundle:Evenement:DetailsEvent.html.twig',
            array('e' => $event,
                'participants' => $participants));

    }


    /* public function RechercheEventAction(Request $request){
         $em = $this->getDoctrine()->getManager();
         $user=$this->getUser();
         $event= $em->getRepository('EvenementBundle:Evenement')->findAll();
         if($request->isMethod('POST')){
             $nom=$request->get('nomEvenement');
             $event=$em->getRepository("EvenementBundle:Evenement")->findBy(array("nomEvenement"=>$nom));

         }
         return $this->render('EvenementBundle:Evenement:RechercheEvent.html.twig',array('e'=>$event));
     }
 */
    public function RechercheDQLAction(Request $request)
    {
        $em = $this->getDoctrine()->getManager();
        $event = $em->getRepository('EvenementBundle:Evenement')
            ->RechercheEventType($request->get("motcle"));

        /**
         * @var $paginator\knp\Component\Pager\Paginator
         */
        $paginator = $this->get('knp_paginator');
        $result = $paginator->paginate(
            $event,
            $request->query->getInt('page', 1),
            $request->query->getInt('limit', 4)
        );
        return $this->render('EvenementBundle:Evenement:RechercheDQL.html.twig',
            array(
                'e' => $result
            ));
    }


    /* public function ParticiperEventAction(Request $request,$idEvenement)
     {

         $user = $this->container->get('security.token_storage')->getToken()->getUser();

             $participants = new ParticipantEvents();
             $participants->setIdUser($user);
             $form = $this->createForm( ParticipantEventsType::class, $participants);
         $em = $this->getDoctrine()->getManager();

             $particip=$em->getRepository('EvenementBundle:Evenement')
                 ->find($idEvenement);


        // if ($form->handleRequest($request)->isValid() ){

                 if (($participants->getNbParticipants()
                     <= $particip->getNbPlace()) ) {
          $particip->setNbPlace($particip->getNbPlace() - $participants->getNbParticipants());

                     $em = $this->getDoctrine()->getManager();
                     $em->persist($participants);
                     $em->flush();
                     $participants->setIdUser($user);

                     $particip->setIdEvenement($user);
                     $participants->setNbParticipants($idEvenement);

                     $em->persist($participants);
                     $em->flush();
                     return $this->redirectToRoute('_ParticiperEvent');

                 }
                 else {
                     echo '<script type="text/javascript">' . 'alert("Nombre de places Insuffisants ");' . '</script>';
                 }
          //   }

             return $this->render(
                 'EvenementBundle:Evenement:ParticiperEvent.html.twig',
                 array('form' => $form->createView(),'event'=>$idEvenement)
             );
         }
 */
    public function participerEventAction($id)
    {

        $user = $this->container->get('security.token_storage')->getToken()->getUser();

        $em = $this->getDoctrine()->getManager();
        $event = $em->getRepository("EvenementBundle:Evenement")->find($id);
        $particip = new ParticipantEvents();
        $particip->setIdEvenement($event);
        $particip->setIdUser($user);
        $em->persist($particip);
        $em->flush();
        return $this->redirectToRoute('_DetailsEvent', array('id' => $id));


    }

    public function nParticierEventAction($id)
    {

        $user = $this->container->get('security.token_storage')->getToken()->getUser();
        $em = $this->getDoctrine()->getManager();
        $parti = $em->getRepository("EvenementBundle:ParticipantEvents")->find($id);
        $event = $em->getRepository('EvenementBundle:Evenement')->find($parti->getIdEvenement());
        $em->remove($parti);
        $em->flush();
        return $this->redirectToRoute('_DetailsEvent', array('id' => $event->getId()));
    }


    public function ratingAction(Request $request, $id)
    {
        $em = $this->getDoctrine()->getManager();
        $event = $em->getRepository("EvenementBundle:Evenement")->find($id);
        $r = $event->getNbrrating();
        $form = $this->createForm(RatingEventType::class, $event);
        $form->handleRequest($request);
        if ($form->isSubmitted()) {
            $event->setNbruser($event->getNbruser() + 1);
            $event->setNbrrating($event->getRating() + $r);
            $a = ($form['rating']->getData() + $r) / $event->getNbruser();
            $event->setRating($a);
            $em->persist($event);
            $em->flush();
            return $this->redirectToRoute("_AfficheEvent");

        }

        return $this->render('EvenementBundle:Evenement:RatingEvent.html.twig', array('form' => $form->createView()));
    }


    public function RechercheAction(Request $request, $nom)
    {
        $em = $this->getDoctrine()->getManager();
        $event = $em->getRepository('EvenementBundle:Evenement')
            ->RechercheEventType($nom);

        /**
         * @var $paginator\knp\Component\Pager\Paginator
         */
        $paginator = $this->get('knp_paginator');
        $result = $paginator->paginate(
            $event,
            $request->query->getInt('page', 1),
            $request->query->getInt('limit', 4)
        );

        $s = new Serializer(array(new ObjectNormalizer()));
        $e = $s->normalize($result, 'json');
        $response = new JsonResponse();
        return $response->setData(array('x' => $e));
    }


    public function AfficheProfilAction(Request $request, $id)
    {

        $em = $this->getDoctrine()->getManager();
        $event = $em->getRepository("EvenementBundle:Evenement")->findBy(array('idUser' => $id));

        return $this->render('EvenementBundle:Evenement:AfficheProfil.html.twig',
            array(
                'e' => $event,
                // 'p'=>$profile
            ));
    }


    public function AfficheTabEvAction(Request $request, $id)
    {

        $em = $this->getDoctrine()->getManager();
        $event = $em->getRepository("EvenementBundle:Evenement")->findBy(array('idUser' => $id));

        return $this->render('@Evenement/Evenement/affTabEv.html.twig',
            array(
                'e' => $event,
            ));
    }


    public function RecentDqlAction()
    {
        $em = $this->getDoctrine()->getManager();
        $event = $em->getRepository('EvenementBundle:Evenement')->RecentDql();
        return
            $this->render("EvenementBundle:Evenement:recentEvents.html.twig",
                array(
                    'e' => $event
                ));
    }

    public function allAction(Request $request)
    {
        //$user = $this->container->get('security.token_storage')->getToken()->getUser();
        $em = $this->getDoctrine()->getManager();

        $event = $this->getDoctrine()->getManager()->getRepository('EvenementBundle:Evenement')->findAll();
        $lstEv = array();
        foreach ($event as $ev) {
            $user = $em->getRepository("SUserBundle:User")->find($ev->getIdUser());

            $eventJson = new EventJson();
            $eventJson->setIdUser($user->getId());
            $eventJson->setId($ev->getId());
            $eventJson->setNomEvenement($ev->getNomEvenement());
            $eventJson->setPhoto($ev->getPhoto());
            $eventJson->setPrix($ev->getPrix());
            $eventJson->setDescription($ev->getDescription());
            $eventJson->setType($ev->getType());

            $eventJson->setNbPlace($ev->getNbPlace());
            $eventJson->setRating($ev->getRating());
            $eventJson->setDateDebut($ev->getDateDebut()->getTimeStamp() * 1000);
            $eventJson->setDateFin($ev->getDateFin()->getTimeStamp() * 1000);
            $lstEv[] = $eventJson;
        }
        $serializer = new Serializer([new ObjectNormalizer()]);
        $formatted = $serializer->normalize($lstEv);
        return new JsonResponse($formatted);
    }


    public function findAction($id)
    {
        $event = $this->getDoctrine()->getManager()->getRepository('EvenementBundle:Evenement')->find($id);
        $serializer = new Serializer([new ObjectNormalizer()]);
        $formatted = $serializer->normalize($event);
        return new JsonResponse($formatted);
    }


    public function addMAction(Request $request, $id)
    {

        $em = $this->getDoctrine()->getManager();
        $event = new Evenement();
        $user = $em->getRepository("SUserBundle:User")->find($id);
        $event->setIdUser($user);


        $event->setNomEvenement($request->get('nomEvenement'));
        $event->setDateDebut(new \DateTime($request->get('dateDebut')));
        $event->setDateFin(new \DateTime($request->get('dateFin')));
        $event->setHeure(new \DateTime($request->get('heure')));
        $event->setAdresse($request->get('adresse'));
        $event->setPrix($request->get('prix'));
        $event->setDescription($request->get('description'));
        $event->setNbPlace($request->get('nbPlace'));
        $event->setType($request->get('type'));
        $event->setPhoto($request->get('photo'));
        $event->setRating($request->get('rating'));

        $event->setNbrrating(0);
        $event->setNbruser(0);
        /* $event->setDateFin(null);
           $event->setDateDebut(null);
        $event->setHeure(null);
           $event->setPhoto(null);*/
//var_dump($event);
//echo $pp;
        $em->persist($event);
        $em->flush();
        $serializer = new Serializer([new ObjectNormalizer()]);
        $formatted = $serializer->normalize($event);
        return new JsonResponse($formatted);

    }


    public function modMAction(Request $request, $id, $rat)
    {

        $em = $this->getDoctrine()->getManager();
        $event = new Evenement();
        $user = $em->getRepository("SUserBundle:User")->find($id);

        $event->setIdUser($user);
        $event = $this->getDoctrine()->getManager()->getRepository('EvenementBundle:Evenement')->findOneBy(array('id' => $id));
        if ($rat == false) {
            $event->setNomEvenement($request->get('nomEvenement'));
            $event->setDateDebut(new \DateTime($request->get('dateDebut')));
            $event->setDateFin(new \DateTime($request->get('dateFin')));
            $event->setHeure(new \DateTime($request->get('heures')));
            $event->setAdresse($request->get('adresse'));
            $event->setPrix($request->get('prix'));
            $event->setDescription($request->get('description'));
            $event->setNbPlace($request->get('nbPlace'));
            $event->setType($request->get('type'));
            $event->setPhoto($request->get('photo'));
            // $event->setRating($request->get('rating'));

            $event->setNbrrating(0);
            $event->setNbruser(0);
        } else
            $event->setRating($request->get('rating'));

        $em->persist($event);
        $em->flush();
        $serializer = new Serializer([new ObjectNormalizer()]);
        $formatted = $serializer->normalize($event);
        return new JsonResponse($formatted);

    }


    public function getUniqEPAction()
    {
        return new JsonResponse(uniqid() . ".jpg");
    }


    public function participerEMAction($idU, $id)
    {

        $user = $this->container->get('security.token_storage')->getToken()->getUser();

        $em = $this->getDoctrine()->getManager();
        $user = $em->getRepository("SUserBundle:User")->find($idU);

        $event = $em->getRepository("EvenementBundle:Evenement")->find($id);
        $particip = new ParticipantEvents();
        $particip->setIdEvenement($event);
        $particip->setIdUser($user);
        $em->persist($particip);
        $em->flush();
        $serializer = new Serializer([new ObjectNormalizer()]);
        $formatted = $serializer->normalize($event);
        return new JsonResponse($formatted);
    }


    public function nParticierEMAction($id)
    {

        //$user = $this->container->get('security.token_storage')->getToken()->getUser();
        $em = $this->getDoctrine()->getManager();
        $parti = $em->getRepository("EvenementBundle:ParticipantEvents")->find($id);
        $event = $em->getRepository('EvenementBundle:Evenement')->find($parti->getIdEvenement());
        $em->remove($parti);
        $em->flush();
        $serializer = new Serializer([new ObjectNormalizer()]);
        $formatted = $serializer->normalize($event);
        return new JsonResponse($formatted);
    }


    public function SwitchEVAction($idE, $idU)
    {
        $em = $this->getDoctrine()->getManager();
        $part = $em->getRepository("EvenementBundle:ParticipantEvents")->findOneBy(array(
            'idEvenement' => $idE,
            'idUser' => $idU));
        if (isset($part)) {
            $em->remove($part);
            $em->flush();

            return new JsonResponse(true);
        } else {
            $user = $em->getRepository("SUserBundle:User")->find($idU);

            $PartE = new ParticipantEvents();
            $event = $em->getRepository("EvenementBundle:Evenement")->find($idE);
            $PartE->setIdUser($user);
            $PartE->setIdEvenement($event);
            $em->persist($PartE);
            $em->flush();
            return new JsonResponse(false);
        }
    }


    public function SwitchBTnAction($idE, $idU)
    {
        $em = $this->getDoctrine()->getManager();
        $part = $em->getRepository("EvenementBundle:ParticipantEvents")->findOneBy(array(
            'idEvenement' => $idE,
            'idUser' => $idU));
        if (isset($part)) {
            $sev = array(
                'saf' => true
            );
        } else {
            $sev = array(
                'saf' => false
            );
        }
        $serializer = new Serializer([new ObjectNormalizer()]);
        $formatted = $serializer->normalize($sev);
        return new JsonResponse($formatted);

    }


    public function DeleteMobAction($id, $idE)
    {
        $em = $this->getDoctrine()->getManager();
        $event = new Evenement();
        $user = $em->getRepository("SUserBundle:User")->find($id);
        $event = $em->getRepository("EvenementBundle:Evenement")->findOneBy(array('id' => $idE));

        // $event->setIdUser($user);

        if ($user = $event->getIdUser()) {
            $em = $this->getDoctrine()->getManager();
            $this->getDoctrine()->getManager()->remove($event);
            $em->remove($event);
            $em->flush();
            // return $this ->redirectToRoute("_AfficheEvent");
        }
        $serializer = new Serializer([new ObjectNormalizer()]);
        $formatted = $serializer->normalize($event);
        return new JsonResponse($formatted);
    }
}
