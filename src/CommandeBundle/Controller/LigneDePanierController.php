<?php
/**
 * Created by PhpStorm.
 * User: hatem
 * Date: 2/12/2018
 * Time: 8:47 PM
 */

namespace CommandeBundle\Controller;



use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;



class LigneDePanierController extends Controller
{
    public function menuAction()
    {
        $session = $this->getRequest()->getSession();
        if (!$session->has('panier'))
            $articles = 0;
        else
            $articles = count($session->get('panier'));

        return $this->render('CommandeBundle:Panier:panier.html.twig', array('articles' => $articles));
    }
    public function ajouterAction(Request $request,$id)
    {

        $session = $request->getSession();
        if (!$session->has('panier')) $session->set('panier',array());
        $panier = $session->get('panier');
        if (array_key_exists($id, $panier)) {
            if ($request->query->get('qte') != null)
            $panier[$id] = $request->query->get('qte');
            $this->get('session')->getFlashBag()->add('success','Quantité modifié avec succès');
        } else
            if ($request->query->get('qte') != null){
                $panier[$id] = $request->query->get('qte');
            }
        else if (!array_key_exists($id, $panier)){
                $panier[$id] = 1;
            $this->get('session')->getFlashBag()->add('success','Article ajouté avec succès');
        }

        $session->set('panier',$panier);



        return $this->redirect($this->generateUrl('panier'));

    }
    public function panierAction(Request $request)
    {
      $session = $request->getSession();

        if (!$session->has('panier')) $session->set('panier', array());


        $em = $this->getDoctrine()->getManager();
        $produit = $em->getRepository('StockBundle:Produit')->findArray(array_keys($session->get('panier')));

        return $this->render('CommandeBundle:Panier:afficherPanier.html.twig', array('produits' => $produit,
            'panier' => $session->get('panier')));

    }

    public function supprimerAction(Request $request,$id)
    {
        $session = $request->getSession();
        $panier = $session->get('panier');

        if (array_key_exists($id, $panier))
        {
            unset($panier[$id]);
            $session->set('panier',$panier);
            $this->get('session')->getFlashBag()->add('success','Article supprimé avec succès');
        }

        return $this->redirect($this->generateUrl('panier'));
    }







}