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
use function Sodium\add;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Validator\Constraints\Date;

class LigneDeCommandeController extends Controller
{

    public function PutInSessionAction(Request $request, $id)
    {

        $user = $this->get('security.token_storage')->getToken()->getUser();
        if ($user=='anon.')
            return $this->redirectToRoute('fos_user_security_login');
        $session = $request->getSession();

        if ($session->has('panier'))

            $panier = $session->get('panier');
        $lcommande = new LigneDeCommande();
        $em = $this->getDoctrine()->getManager();

        $produit = $em->getRepository("StockBundle:Produit")->findArray(array_keys($session->get('panier')/*'id' => $panier*/));
        $form = $this->createForm(LigneDeCommandeType::class, $lcommande);
        $form->handleRequest($request);
        if ($form->isValid()) {
            $this->get('session')->set('idprod', $produit);
            $this->get('session')->set('prixtotal', $id);

            $this->get('session')->set('addresse', $lcommande->getAdresse());
            $this->get('session')->set('addresse2', $lcommande->getAdresse2());
            $this->get('session')->set('ville', $lcommande->getVille());
            $this->get('session')->set('codepostal', $lcommande->getCodePostal());
            $this->get('session')->set('numtel', $lcommande->getNumTel());

            return $this->redirectToRoute('ajout_ligne_commande');

        }
        return $this->render("CommandeBundle:LigneDeCommande:AjoutLigneDeCommande.html.twig",
            array('produit' => $produit, 'lcommande' => $lcommande, 'form' => $form->createView()));
    }

    public function AjoutLigneDeCommandeAction(Request $request)
    {
        $session = $request->getSession();

        $user = $this->get('security.token_storage')->getToken()->getUser();
        if ($user=='anon.')
            return $this->redirectToRoute('fos_user_security_login');

        $dateCommande = new \DateTime();
        $dateLivraison = new \DateTime('+2 day');


        $datmax = new DateTime('+ 1 minute');

        $commande = new Commande();

        $this->get('session')->set('datmax', $datmax);

        $em = $this->getDoctrine()->getManager();
        $commande->setDateCommande($dateCommande);
        $commande->setDateMax($datmax);

        $commande->setIdUser($user);
        $em->persist($commande);
        $em->flush();
        $panier = $this->get('session')->get('panier');

        $commande = $em->getRepository("CommandeBundle:Commande", $user)->findOneBy(array('idUser' => $user->getId()), array('id' => 'DESC'));
        $prod = $em->getRepository("StockBundle:Produit")->findArray(array_keys($session->get('panier')));
        $i = 0;

        ksort($panier);

        foreach ($prod as $p) {
            $lcommande = new LigneDeCommande();

            $lcommande->setDateLivraison($dateLivraison);

            $lcommande->setIdProduit($p);
            $lcommande->setPrixTotal(array_values($panier)[$i] * $p->getPrix());
            $lcommande->setQuntite(array_values($panier)[$i]);
            $prod->setQuqntite($prod->getQuqntite() - $lcommande->getQuntite());
            $lcommande->setAdresse($this->get('session')->get('addresse'));
            $lcommande->setAdresse2($this->get('session')->get('addresse2'));
            $lcommande->setVille($this->get('session')->get('ville'));
            $lcommande->setCodePostal($this->get('session')->get('codepostal'));
            $lcommande->setNumTel($this->get('session')->get('numtel'));

            $lcommande->setIdCommande($commande);


            $em->persist($lcommande);
            $em->flush();
            $i++;
            $em = $this->getDoctrine()->getManager();
            $commande = $em->getRepository("CommandeBundle:Commande", $user)->findOneBy(array('idUser' => $user->getId()), array('id' => 'DESC'));

            $message = \Swift_Message::newInstance()
                ->setSubject('Souk El Madina')
                ->setFrom('souklemdinaa@gmail.com')
                ->setTo('zeineb.laabidi.1@esprit.tn')
                ->setBody('Nous vous informons que votre commande N° '.$commande->getId().' a été prise en compte, vous avez au maximum 5 heures pour annuler votre commande - merci pour votre achat
            Cordialement l\'equipe CodeBusters ')

            ;
            $this->get('mailer')->send($message);
        }
        unset($panier);
        return $this->redirectToRoute('afficher_commande');

        return $this->render("CommandeBundle:LigneDeCommande:afficheLigneDeCommande.html.twig",array('lcommande' => $lcommande));
    }

    public function afficherCommandeAction()
    {
        $user = $this->get('security.token_storage')->getToken()->getUser();
        if ($user=='anon.')
            return $this->redirectToRoute('fos_user_security_login');

        $em = $this->getDoctrine()->getManager();
        $commande = $em->getRepository("CommandeBundle:Commande")->findby(array('idUser' => $user->getId()));


        return $this->render('CommandeBundle:LigneDeCommande:afficherCommande.html.twig', array(
            'commande' => $commande));
    }


    public function AfficherLigneDeCommandeAction($id)
    {
        $user = $this->get('security.token_storage')->getToken()->getUser();
        if ($user=='anon.')
            return $this->redirectToRoute('fos_user_security_login');

        $em = $this->getDoctrine()->getManager();

        $lcommande = $em->getRepository("CommandeBundle:LigneDeCommande")->findby(array('idCommande' => $id));


        $datesys = new DateTime();


        return $this->render('CommandeBundle:LigneDeCommande:afficheLigneDeCommande.html.twig', array(
            'lst' => $lcommande, 'datesys' => $datesys));
    }

    public function ModifierLigneDeCommandeAction(Request $request, $id)
    {
        $user = $this->get('security.token_storage')->getToken()->getUser();
        if ($user=='anon.')
            return $this->redirectToRoute('fos_user_security_login');

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
        $user = $this->get('security.token_storage')->getToken()->getUser();
        if ($user=='anon.')
            return $this->redirectToRoute('fos_user_security_login');

        $datesys = new DateTime();
        $em = $this->getDoctrine()->getManager();
        $lcommande = $em->getRepository("CommandeBundle:LigneDeCommande", $id)->find($id);
        $idC = $lcommande->getIdCommande();
        $dm = $this->get('session')->get('datmax');

        if ($datesys >= $dm)
            return $this->redirectToRoute('afficher_commande');


        else if ($datesys <= $dm) {
            $em->remove($lcommande);
            $em->flush();
        }

        $em->detach($lcommande);
        $lcommandee = $em->getRepository("CommandeBundle:LigneDeCommande", $id)->findBy(array('idCommande' => $idC));

        $commande = $em->getRepository("CommandeBundle:Commande")->find($idC);

        if (empty($lcommandee)) {
            $em->remove($commande);
            $em->flush();
        }
        return $this->redirectToRoute('afficher_commande');


        return $this->render("CommandeBundle:LigneDeCommande:afficheLigneDeCommande.html.twig", array('dm' => $dm, 'datesys' => $datesys));
    }


}