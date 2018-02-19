<?php

namespace EvenementBundle\Controller;
use EvenementBundle\EvenementBundle;
use EvenementBundle\Form\RechercheForm;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\JsonResponse;
use EvenementBundle\Entity\Evenement;
use EvenementBundle\Form\EvenementType;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\Serializer\Normalizer\ObjectNormalizer;
use Symfony\Component\Serializer\Serializer;
use SUserBundle\Entity\User;
class EvenementController extends Controller
{

public function AjoutEventAction(Request $request){
    $user=$this->container->get('security.token_storage')->getToken()->getUser();
  //  $id=$user;

$event= new Evenement();
$form=$this->createForm(EvenementType::class,$event);
$form->handleRequest($request);
if($form->isSubmitted() && $form->isValid()){
    $event->setIdUser($user);
    $em=$this->getDoctrine()->getManager();
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
        $request->query->getInt('limit',2)
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

    public function AfficheVEventAction(Request $request){
        $em=$this->getDoctrine()->getManager();
        $event=$em->getRepository("EvenementBundle:Evenement")
            ->findAll();
        /**
         * @var $paginator\knp\Component\Pager\Paginator
         */
        $paginator  = $this->get('knp_paginator');
        $result=$paginator->paginate(
            $event,
            $request->query->getInt('page',1),
            $request->query->getInt('limit',2)
        );
        return $this ->render('EvenementBundle:Evenement:AfficheVEvent.html.twig',
            array(
                'ev'=>$result
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
$user=$this->getUser();
    $event->setIdUser($user);
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

   // $em->remove($event);
    $em->flush();
    return $this ->redirectToRoute("_AfficheEvent");
}}



    public function DetailsEventAction($id)
    {
        $em=$this->getDoctrine()->getManager();
        $event=$em->getRepository("EvenementBundle:Evenement")->find($id);
        return $this->render('EvenementBundle:Evenement:DetailsEvent.html.twig',
            array('e'=>$event));

    }



    public function RechercheEventAction(Request $request){
        $em = $this->getDoctrine()->getManager();
        $user=$this->getUser();
        $event= $em->getRepository('EvenementBundle:Evenement')->findAll();
        if($request->isMethod('POST')){
            $nom=$request->get('nomEvenement');
            $event=$em->getRepository("EvenementBundle:Evenement")->findBy(array("nomEvenement"=>$nom));

        }
        return $this->render('EvenementBundle:Evenement:RechercheEvent.html.twig',array('e'=>$event));
    }


    public function ParticiperEvent(){




    }


}
