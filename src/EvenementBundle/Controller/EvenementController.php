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
class EvenementController extends Controller
{

public function AjoutEventAction(Request $request){

    $user=$this->container->get('security.token_storage')->getToken()->getUser();
  //  $id=$user;

$event= new Evenement();
$form=$this->createForm(EvenementType::class,$event);
$form->handleRequest($request);
if($form->isSubmitted() && $form->isValid()){
    /**
     * @var UploadedFile $file
     */
    $file=$event->getPhoto();
    $fileName=md5(uniqid()).'.'.$file->guessExtension();
    $file->move(
        $this->getParameter('image_directory'),$fileName
    );
    $event->setPhoto($fileName);
    $event->setIdUser($user);
    $event->setNbrrating(0);
    $event->setNbruser(0);
    $em=$this->getDoctrine()->getManager();

    $dateDebut=$form->getData()->getDateDebut()->getTimestamp();
    $dateFin=$form->getData()->getDateFin()->getTimestamp();

    if($dateDebut>$dateFin){
        echo '<script type="text/javascript">' . 'alert("date non valide ");' . '</script>';
    }
    $em->persist($event);
    $em->flush();
   return $this->redirectToRoute("_AfficheEvent");
}
    return $this->render("EvenementBundle:Evenement:AjoutEvent.html.twig",array('form'=>$form->createView(),'user'=>$user));
}


public function AfficheEventAction(Request $request){
    //$event=new Evenement();
    $user=$this->container->get('security.token_storage')->getToken()->getUser();

    $user=$this->getDoctrine()->getManager()->getRepository("SUserBundle:User")->findAll();

    $em=$this->getDoctrine()->getManager();
    $event=$em->getRepository("EvenementBundle:Evenement")->findAll();
   // $event->setIdUser($user);
    /**
     * @var $paginator\knp\Component\Pager\Paginator
     */
    $paginator  = $this->get('knp_paginator');
    $result=$paginator->paginate(
        $event,
        $request->query->getInt('page',1),
        $request->query->getInt('limit',4)
    );


/*$event=$em->getRepository("EvenementBundle:Evenement")
->findAll();*/

return $this ->render('EvenementBundle:Evenement:AfficheEvent.html.twig',
    array(
       'e'=>$result,
        'u'=>$user

        //'user'=>$user
    ));
}




 public function UpdateEventAction(Request $request,$id){
     $user=$this->container->get('security.token_storage')->getToken()->getUser();
  //   $user=$this-> getuser();
//$id=$user->setId(1);
     if ($user->hasRole('ROLE_USER')) {
    $em=$this->getDoctrine()->getManager();
   $event=$em->getRepository("EvenementBundle:Evenement")->find($id);
   $user=$this->getDoctrine()->getManager()->getRepository("SUserBundle:User")->findAll();

$form=$this->createForm(EvenementType::class,$event);
$form->handleRequest($request);
if($form->isSubmitted() && $form->isValid() ){
    /**
     * @var UploadedFile $file
     */
    $file=$event->getPhoto();
    $fileName=md5(uniqid()).'.'.$file->guessExtension();
    $file->move(
        $this->getParameter('image_directory'),$fileName
    );
    $event->setPhoto($fileName);
$user=$this->getUser();
    $event->setIdUser($user);
    $event->setNbrrating(0);
    $event->setNbruser(0);
    $em=$this->getDoctrine()->getManager();

    $em->persist($event);
    $em->flush();
    return $this->redirectToRoute("_AfficheEvent");
}
return $this->render("EvenementBundle:Evenement:UpdateEvent.html.twig",
    array('form'=>$form->createView(),'user'=>$user)
    );
}}



 public function DeleteEventAction(Request $request,$id){
     $user=$this->container->get('security.token_storage')->getToken()->getUser();
    $event=new Evenement();
    $event->setIdUser($user);

if($user=$this->getUser()){
     $em=$this->getDoctrine()->getManager();
    $event=$em->getRepository("EvenementBundle:Evenement")->find($id);
    $this->getDoctrine()->getManager()->remove($event);
    $this->get('session')->getFlashBag()->add(
        'notice',
        'etes vous sur de vouloir supprimer?'
    );
   $em->remove($event);
    $em->flush();
    return $this ->redirectToRoute("_AfficheEvent");
}}



    public function DetailsEventAction($id)
    {
        $user=$this->container->get('security.token_storage')->getToken()->getUser();

        $em=$this->getDoctrine()->getManager();
        $event=$em->getRepository("EvenementBundle:Evenement")->find($id);
        $participants=$em->getRepository("EvenementBundle:ParticipantEvents")->findOneBy(array('idUser'=>$user->getId(),
        'idEvenement'=>$id));
        return $this->render('EvenementBundle:Evenement:DetailsEvent.html.twig',
            array('e'=>$event,
                'participants'=>$participants));

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
    public function RechercheDQLAction(Request $request){
           $em = $this->getDoctrine()->getManager();
        $event= $em->getRepository('EvenementBundle:Evenement')
            ->RechercheEventType($request->get("motcle"));

        /**
         * @var $paginator\knp\Component\Pager\Paginator
         */
        $paginator  = $this->get('knp_paginator');
        $result=$paginator->paginate(
            $event,
            $request->query->getInt('page',1),
            $request->query->getInt('limit',4)
        );
return $this->render('EvenementBundle:Evenement:RechercheDQL.html.twig',
    array(
    'e'=>$result
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


    public function ratingAction(Request $request, $id) {
        $em= $this->getDoctrine()->getManager();
        $event = $em->getRepository("EvenementBundle:Evenement")->find($id);
        $r=$event->getNbrrating();
        $form = $this->createForm(RatingEventType::class, $event);
        $form->handleRequest($request);
        if ($form->isSubmitted()) {
            $event->setNbruser($event->getNbruser()+1);
            $event->setNbrrating($event->getRating()+$r);
            $a=($form['rating']->getData()+$r)/$event->getNbruser();
            $event->setRating($a);
            $em->persist($event);
            $em->flush();
            return $this->redirectToRoute("_AfficheEvent");

        }

        return $this->render('EvenementBundle:Evenement:RatingEvent.html.twig', array('form' => $form->createView()));
    }


    public function RechercheAction(Request $request,$nom){
        $em = $this->getDoctrine()->getManager();
        $event= $em->getRepository('EvenementBundle:Evenement')
            ->RechercheEventType($nom);

        /**
         * @var $paginator\knp\Component\Pager\Paginator
         */
        $paginator  = $this->get('knp_paginator');
        $result=$paginator->paginate(
            $event,
            $request->query->getInt('page',1),
            $request->query->getInt('limit',4)
        );

          $s=new Serializer(array(new ObjectNormalizer()));
          $e=$s->normalize($result,'json');
          $response=new JsonResponse();
          return $response->setData(array('x'=>$e));
    }



    public function AfficheProfilAction(Request $request ,$id){

        $em=$this->getDoctrine()->getManager();
        $event=$em->getRepository("EvenementBundle:Evenement")->findBy(array('idUser'=>$id));

        return $this ->render('EvenementBundle:Evenement:AfficheProfil.html.twig',
            array(
                'e'=>$event,
               // 'p'=>$profile
            ));
    }


    public function AfficheTabEvAction(Request $request ,$id){

        $em=$this->getDoctrine()->getManager();
        $event=$em->getRepository("EvenementBundle:Evenement")->findBy(array('idUser'=>$id));

        return $this ->render('@Evenement/Evenement/affTabEv.html.twig',
            array(
                'e'=>$event,
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
}
