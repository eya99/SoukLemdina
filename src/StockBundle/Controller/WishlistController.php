<?php

namespace StockBundle\Controller;

use StockBundle\Entity\LigneWishlist;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Request;
use StockBundle\Entity\Wishlist;
use StockBundle\Entity\Produit;
use Symfony\Component\Serializer\Normalizer\ObjectNormalizer;
use Symfony\Component\Serializer\Serializer;

class WishlistController extends Controller
{


    public function afficheAction()
    {
        $user = $this->get('security.token_storage')->getToken()->getUser();
        $em = $this->getDoctrine()->getManager();
        $wishlist = $em->getRepository('StockBundle:Wishlist')->findby(array('idUser' => $user));

        $lwishlist = $em->getRepository('StockBundle:LigneWishlist')->findby(array('idWishlist' => $wishlist));
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
        $lwishlist = $em->getRepository("StockBundle:LigneWishlist")->findOneBy(array('idProduit' => $id));
        if (!$lwishlist) {
            $lwishlist = new LigneWishlist();
            $lwishlist->setIdProduit($produit);

            $lwishlist->setIdWishlist($wishlist);
            $em->persist($lwishlist);
            $em->flush();
        } else {
            $this->get('session')->getFlashBag()->add('notice', 'Produit existe dejà dans votre wishlist');
        }
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

    public function ajoutLWishlistJsonAction(Request $request, $id, $idP)
    {


        // $user = $this->get('security.token_storage')->getToken()->getUser();


        $em = $this->getDoctrine()->getManager();
        $user = $em->getRepository("SUserBundle:User")->find($id);


        $produit = $em->getRepository("StockBundle:Produit")->find($idP);

        $wishlist = $em->getRepository("StockBundle:Wishlist")->findOneBy(array('idUser' => $user));
        if (!$wishlist) {
            $wishlist = new Wishlist();
            $wishlist->setIdUser($user);
            $em->persist($wishlist);
            $em->flush();
        }
        $lwishlist = $em->getRepository("StockBundle:LigneWishlist")->findOneBy(array('idProduit' => $idP));
        if (!$lwishlist) {
            $lwishlist = new LigneWishlist();
            $lwishlist->setIdProduit($produit);

            $lwishlist->setIdWishlist($wishlist);
            $em->persist($lwishlist);
            $em->flush();
        }
        $lwishlist = $em->getRepository("StockBundle:LigneWishlist")->findOneBy(array(
            'idProduit' => $idP,
            'idWishlist' => $wishlist->getId()
            ));
        $serializer = new Serializer([new ObjectNormalizer()]);
        $formated = $serializer->normalize($lwishlist);
        return new JsonResponse($formated);


    }

    public function supprimerLWishistAction(Request $request, $id)
    {

        $em = $this->getDoctrine()->getManager();
        $lwishlist = $em->getRepository(LigneWishlist::class)->find($id);
        $em->remove($lwishlist);
        $em->flush();
        //return new Response('Produit supprimé');

        return new JsonResponse("deleted");
    }

    public function afficheLWishlistJsonAction(Request $request, $id)
    {//$user = $this->get('security.token_storage')->getToken()->getUser();
        $em = $this->getDoctrine()->getManager();
        $user = $em->getRepository("SUserBundle:User")->find($id);

        $wishlist = $em->getRepository('StockBundle:Wishlist')->findOneBy(array('idUser' => $user));

        $lwishlist = $em->getRepository('StockBundle:LigneWishlist')->findBy(array('idWishlist' => $wishlist->getId()));

        foreach ($lwishlist as $l) {
            $produit = $em->getRepository('StockBundle:Produit')->findBy(array('id' => $l->getIdProduit()));
            foreach ($produit as $p) {

                $lw[] = array(
                    'idWishlist' => $l->getId(),
                    'libelle' => $p->getLibelle(),
                    'description' => $p->getDescription(),
                    'img' => $p->getImage(),
                    'qte' => (String)$p->getQuqntite(),
                    'idp' => $p->getId(),
                    'prix' => $p->getPrix()
                );

            }
        }
        $serializer = new Serializer([new ObjectNormalizer()]);
        $formated = $serializer->normalize($lw);
        return new JsonResponse($formated);

    }


}
