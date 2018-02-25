<?php

namespace StockBundle\Controller;

use StockBundle\Entity\LigneWishlist;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use StockBundle\Entity\Wishlist;
use StockBundle\Entity\Produit;

class WishlistController extends Controller
{


    public function afficheAction()
    {$user = $this->get('security.token_storage')->getToken()->getUser();
        $em = $this->getDoctrine()->getManager();
        $wishlist = $em->getRepository('StockBundle:Wishlist')->findby(array('idUser'=>$user));

        $lwishlist = $em->getRepository('StockBundle:LigneWishlist')->findby(array('idWishlist'=>$wishlist));
        return $this->render('StockBundle::wishlist.html.twig', array('lwishlist' => $lwishlist));


    }

    public function ajoutAction(Request $request, $id)
    {


        $user = $this->get('security.token_storage')->getToken()->getUser();


        $em = $this->getDoctrine()->getManager();


        $produit = $em->getRepository("StockBundle:Produit")->find($id);

        $wishlist = $em->getRepository("StockBundle:Wishlist")->findOneBy(array('idUser' => $user));
        if (!$wishlist) {
            $wishlist = new Wishlist();
            $wishlist->setIdUser($user);
            $em->persist($wishlist);
            $em->flush();
        }
        $lwishlist = new LigneWishlist();
        $lwishlist->setIdProduit($produit);

        $lwishlist->setIdWishlist($wishlist);
        $em->persist($lwishlist);
        $em->flush();
        return $this->redirectToRoute('affiche_wishlist');


        return $this->render("StockBundle::wishlist.html.twig");
    }

    public function supprimerAction(Request $request, $id)
    {

        $em = $this->getDoctrine()->getManager();
        $lwishlist = $em->getRepository(LigneWishlist::class)->find($id);
        $em->remove($lwishlist);
        $em->flush();
        //return new Response('Produit supprimé');
        return $this->redirectToRoute('affiche_wishlist');

    }

}
