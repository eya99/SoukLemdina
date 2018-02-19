<?php

namespace StockBundle\Controller;

use StockBundle\Entity\Produit;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
//use Symfony\Component\BrowserKit\Request;
use Symfony\Component\HttpFoundation\Request;




class ProduitController extends Controller
{
    public function ajoutAction(Request $request)
    {   $message="Ajouter un produit";
        $produit= new Produit();
        $form=$this->createForm('StockBundle\Form\ProduitType',$produit);
        $user = $this->container->get('security.token_storage')->getToken()->getUser();
        $form->handleRequest($request);
        if($form->isSubmitted() && $form->isValid())
        {
            $produit ->setIdUser($user);
            $em=$this->getDoctrine()->getManager();
            $em->persist($produit);
            $em->flush($produit);
            //$message="Succés!";
            return $this->redirectToRoute('affiche_produits');
        }
        return $this->render('StockBundle::ajouter.html.twig', array('produit'=>$produit,'form'=>$form->CreateView(),'msg'=>$message,));
    }

    public function afficheAction()
    {
        $em=$this->getDoctrine()->getManager();
        $produits=$em->getRepository('StockBundle:Produit')->findAll();
       return $this->render('StockBundle::produits.html.twig',array('produits'=>$produits));

    }
    public function produitAction($id)
    {
        $em=$this->getDoctrine()->getManager();
        $produit=$em->getRepository('StockBundle:Produit')->find($id);
        return $this->render('StockBundle::produit.html.twig',array('produit'=>$produit));

    }
    public function modifierAction(Request $request,$id){
        $message="Modifiez un produit";
        $em=$this->getDoctrine()->getManager();
        $produit=$em->getRepository('StockBundle:Produit')->find($id);
        $form=$this->createForm('StockBundle\Form\ProduitType',$produit);

if ($request->getMethod()=='POST'){
        $form->handleRequest($request);
        if($form->isSubmitted() && $form->isValid())
        {
            $em->flush($produit);
           // $message="Succés!";
            return $this->redirectToRoute('affiche_produits');
        }}
        return $this->render('StockBundle::modif.html.twig', array('produit'=>$produit,'form'=>$form->CreateView(),'msg'=>$message,));


}
    public function supprimerAction(Request $request,$id){

        $em=$this->getDoctrine()->getManager();
        $produit=$em->find('StockBundle:Produit',$id);
        if(!$produit){throw $this->createNotFoundException('Produit avec l\'id'.$id.'n\'existe pas');}
    $em->remove($produit);
    $em->flush();
    //return new Response('Produit supprimé');
        return $this->redirectToRoute('affiche_produits');

    }


}
