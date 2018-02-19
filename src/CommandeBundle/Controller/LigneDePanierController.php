<?php
/**
 * Created by PhpStorm.
 * User: hatem
 * Date: 2/12/2018
 * Time: 8:47 PM
 */

namespace CommandeBundle\Controller;


use CommandeBundle\Entity\LigneDeCommande;
use CommandeBundle\Entity\LigneDePanier;
use CommandeBundle\Form\LigneDePanierType;
use StockBundle\Entity\Produit;
use SUserBundle\Entity\User;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;


class LigneDePanierController extends Controller
{


    public function AjoutAction(Request $request)
    {

        $idproduit = $_GET['nchoufRahmaChsametLidProduitFelAffichageProduits'];
        $con2 = new LigneDePanier();
        $user = $this->get('security.token_storage')->getToken()->getUser();

        $em = $this->getDoctrine()->getManager();
        $emp = $em->getRepository('ProduitBundle:Produit',$user,$idproduit)->find($idproduit);
        // $con2->setLibelle($con->getLibelle());
        //$con2->setDescription($con->getDescription());
        $con3->setPrixUnitaire($con->getQuqntite());
        $con3->setRemise($con->getPromotion());
        //$type=$con->getType();
        //$categorie=$con->getCategorie();
        $con3->setPrixUnitaire($con->getPrix());

        $em->persist($con2);
        $em->flush();

        return $this->render("CommandeBundle:LigneDePanier:ajout.html.twig");
    }

    public function consulterPanierAction(Request $request)
    {

        //$user = $this->container->get('security.context')->getToken()->getUser();
        $user = $this->get('security.token_storage')->getToken()->getUser();
        $idprod = 1;
//    $user->getId();
        $em = $this->getDoctrine()->getManager();
        $demande = $em->getRepository('CommandeBundle:LigneDePanier', $user)->findBy(array('idUser' => $user));
        $demande2 = $em->getRepository('StockBundle:Produit', $user, $idprod)->findBy(array('idUser' => $user, 'id' => $idprod));

        return $this->render('CommandeBundle:Panier:consulterPanier.html.twig', array('demande' => $demande, 'demande2' => $demande2, 'user' => $user));
    }

    public function AfficherPanierAction(Request $request)
    {
        //$form->handleRequest($request);
        $con = new LigneDePanier();
        $user = $this->get('security.token_storage')->getToken()->getUser();
        $em = $this->getDoctrine()->getManager();

        $panier = $em->getRepository('CommandeBundle:LigneDePanier', $user)->findAll(array('idUser' => $user));
        $produits = array();

        foreach ($panier as $l) {
            $produit = $em->getRepository('StockBundle:Produit')->findOneBy(array('id' => $l->getIdProduit()));
            $produits = array_merge($produits, array($produit));
        }
        $c = sizeof($panier);


        return $this->render("CommandeBundle:Panier:modifierPanier.html.twig",
            array('produits' => $produits, 'panier' => $panier, 'c' => $c));

    }

    public function ModifierPanierAction(Request $request)
    {
        $em = $this->getDoctrine()->getManager();

        $panier = $em->getRepository("CommandeBundle:LigneDePanier")->find($_POST['id']);
        if (isset($_POST['recherche']))
        {$panier->setQte($_POST['recherche']);
        //var_dump($panier);
        //echo $gegege;
        $em->persist($panier);
        $em->flush();
        }

        return $this->redirectToRoute('panier_afficher');

    }


}