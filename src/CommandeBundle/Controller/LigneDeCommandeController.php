<?php
/**
 * Created by PhpStorm.
 * User: hatem
 * Date: 2/16/2018
 * Time: 1:03 AM
 */

namespace CommandeBundle\Controller;

use CommandeBundle\Entity\Commande;
use CommandeBundle\Entity\LigneDeCommande;
use CommandeBundle\Form\LigneDeCommandeType;
use DateTime;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;

class LigneDeCommandeController extends Controller
{
    /*ligne_commande_ajouter:
    path:     /ajouterlc
    defaults: { _controller: CommandeBundle:LigneDeCommande:AjoutLigneDeCommande }*/
    public function PutInSessionAction(Request $request/*, $id*/)
    {
        $user = $this->get('security.token_storage')->getToken()->getUser();
        $lcommande = new LigneDeCommande();

        $form = $this->createForm(LigneDeCommandeType::class, $lcommande);
        $form->handleRequest($request);
        if ($form->isValid()) {
            //$this->get('session')->set('idprod', $id);

            $this->get('session')->set('addresse', $lcommande->getAdresse());
            $this->get('session')->set('addresse2', $lcommande->getAdresse2());
            $this->get('session')->set('ville', $lcommande->getVille());
            $this->get('session')->set('codepostal', $lcommande->getCodePostal());
            $this->get('session')->set('numtel', $lcommande->getNumTel());

            return $this->redirectToRoute('payement');

        }
        return $this->render("CommandeBundle:LigneDeCommande:AjoutLigneDeCommande.html.twig",
            array('lcommande' => $lcommande, 'form' => $form->createView()));
    }

    public function aAction()
    {
        return $this->render("CommandeBundle:LigneDeCommande:payement.html.twig",
            array());
    }

    public function AjoutLigneDeCommandeAction(Request $request)
    {
        $user = $this->get('security.token_storage')->getToken()->getUser();
        //$fstname = $user->getFirstname();
        //$lstname = $user->getLastname();
        //$_SESSION['a']=$user;
        $dateCommande = new DateTime();
        //$_SESSION[dateLivraison] = new DateTime('+2 day')  ;
        $dateLivraison = new DateTime('+2 day');    // ajouter 2 jour
        $datmax = new DateTime('+3 minute');


        $commande = new Commande();
        $lcommande = new LigneDeCommande();
        //$a=$lcommande->getAdresse();

        /*$form = $this->createForm(LigneDeCommandeType::class,$lcommande);
        $form->handleRequest($request);
        if ($form->isValid())
        {*/
        $em = $this->getDoctrine()->getManager();
        $commande->setDateCommande($dateCommande);
        $commande->setDateMax($datmax);
        $commande->setIdUser($user);
        $em->persist($commande);
        $em->flush();

        $commande = $em->getRepository("CommandeBundle:Commande", $user)->find($user);
        $this->get('session')->set('datemax', $commande->getDateMax());
//prix total !!!!!!!!!!!!!!!!!!!!!!!!!!
        $lcommande->setDateLivraison($dateLivraison);
        $lcommande->setAdresse($this->get('session')->get('addresse'));
        $lcommande->setAdresse2($this->get('session')->get('addresse2'));
        $lcommande->setVille($this->get('session')->get('ville'));
        $lcommande->setCodePostal($this->get('session')->get('codepostal'));
        $lcommande->setNumTel($this->get('session')->get('numtel'));
        //$lcommande->setIdProduit($request->getSession('idprod'));
        //$lcommande->setIdProduit();
        $lcommande->setIdCommande($commande);


        $em->persist($lcommande);
        $em->flush();
        return $this->redirectToRoute('ligne_commande_aff');

        //}
        return $this->render("CommandeBundle:LigneDeCommande:AjoutLigneDeCommande.html.twig",
            array('lcommande' => $lcommande, 'form' => $form->createView()));
    }

    public function AfficherLigneDeCommandeAction()
    {
        // $this->get('session')->set('datesys', $dateCommande);

        // $this->get('session')->set('datemax', $datmax);
        //   $dateLivraison = new DateTime('+5 minutes');
        $user = $this->get('security.token_storage')->getToken()->getUser();
        $em = $this->getDoctrine()->getManager();
        $commande = $em->getRepository("CommandeBundle:Commande", $user)->findby(array('idUser' => $user));
        //$idcomm = $commande->getId();
        $lcommande = $em->getRepository("CommandeBundle:LigneDeCommande", $commande)->findby(array('idCommande' => $commande));
        $dm = $this->get('session')->get('datemax');
        $datesys = new DateTime();
//        {{ d|date ("Y-m-d H:i:s") }}

        return $this->render('CommandeBundle:LigneDeCommande:afficheLigneDeCommande.html.twig', array(
            'commande' => $commande, 'lcommande' => $lcommande, 'dm' => $dm, 'datesys' => $datesys));
    }

    public function ModifierLigneDeCommandeAction(Request $request, $id)
    {
        $user = $this->get('security.token_storage')->getToken()->getUser();

        $em = $this->getDoctrine()->getManager();

        $lcommande = $em->getRepository("CommandeBundle:LigneDeCommande", $id)->find($id);
        $form = $this->createForm(LigneDeCommandeType::class, $lcommande);
        $form->handleRequest($request);

        if ($form->isValid()) {
            $em->persist($lcommande);
            $em->flush();
            return $this->redirectToRoute('ligne_commande_aff');
        }
        return $this->render("CommandeBundle:LigneDeCommande:modifierLigneDeCommande.html.twig",
            array('form' => $form->createView()));
    }

    public function SupprimerLigneDeCommandeAction(Request $request, $id)
    {

        $dm = $this->get('session')->get('datemax');
        $datesys = new DateTime();
        if ($datesys <= $dm) {
            $em = $this->getDoctrine()->getManager();
            $lcommande = $em->getRepository("CommandeBundle:LigneDeCommande")->find($id);

            $em->remove($lcommande);
            $em->flush();
            return $this->redirectToRoute('ligne_commande_aff');
        } else {
            return $this->redirectToRoute('ligne_commande_aff');

        }
        return $this->render("CommandeBundle:LigneDeCommande:afficheLigneDeCommande.html.twig", array('dm' => $dm, 'datesys' => $datesys));
    }


}