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
use CommandeBundle\PHPfiles\CommandeJson;
use DateTime;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\Serializer\Serializer;
use Symfony\Component\Serializer\Normalizer\ObjectNormalizer;
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


        $datmax = new DateTime('+ 5 minute');

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
            $p->setQuqntite($p->getQuqntite() - $lcommande->getQuntite());
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

    public function AjoutCommandeJsonAction(Request $request, $id)
    {
        $em = $this->getDoctrine()->getManager();

        $user = $em->getRepository("SUserBundle:User")->find($id);


        $dateCommande = new \DateTime();
        $dateLivraison = new \DateTime('+2 day');


        $datmax = new DateTime('+ 5 minute');

        $commande = new Commande();

        //$this->get('session')->set('datmax', $datmax);

        $em = $this->getDoctrine()->getManager();
        $commande->setDateCommande($dateCommande);
        $commande->setDateMax($datmax);

        $commande->setIdUser($user);
        $em->persist($commande);
        $em->flush();
        $serializer=new Serializer([new ObjectNormalizer()]);
        $formatted=$serializer->normalize($commande);
        return new JsonResponse($formatted);
        // $panier = $this->get('session')->get('panier');


        //unset($panier);
        /* $serializer=new Serializer([new ObjectNormalizer()]);
         $formatted=$serializer->normalize($wrk);
         return new JsonResponse($formatted);
        */
    }

    public function AjoutLigneDeCommandeJsonAction(Request $request,$id,$idP)
    {
        $em = $this->getDoctrine()->getManager();

        $user = $em->getRepository("SUserBundle:User")->find($id);
        $dateLivraison = new \DateTime('+2 day');

        $commande = $em->getRepository("CommandeBundle:Commande", $user)->findOneBy(array('idUser' => $user->getId()), array('id' => 'DESC'));
        $prod = $em->getRepository("StockBundle:Produit")->findBy(array('id'=>$idP));
        $i = 0;

        //ksort($panier);

        foreach ($prod as $p) {
            $lcommande = new LigneDeCommande();

            $lcommande->setDateLivraison($dateLivraison);

            $lcommande->setIdProduit($p);
            $lcommande->setPrixTotal($request->get('prixtot'));
            $lcommande->setQuntite($request->get('qte'));

            $lcommande->setAdresse($request->get('adresse'));
            $lcommande->setAdresse2($request->get('adresse2'));
            $lcommande->setVille($request->get('ville'));
            $lcommande->setCodePostal($request->get('codepostal'));
            $lcommande->setNumTel($request->get('numtel'));

            $lcommande->setIdCommande($commande);

            $em->persist($lcommande);
            $em->flush();
            $i++;
            $em = $this->getDoctrine()->getManager();
            $commande = $em->getRepository("CommandeBundle:Commande", $user)->findOneBy(array('idUser' => $user->getId()), array('id' => 'DESC'));
            $headers = "\r\n" . "MIME-Version: 1.0" . "\r\n";
            $headers .= "Content-type:text/html;charset=iso-8859-1" . "\r\n";
            $headers .= "Message-ID: <" . time() . " TheSystem@" . $_SERVER['SERVER_NAME'] . ">\r\n";
            $headers .= "X-Mailer: PHP v" . phpversion() . "\r\n";
            $message = \Swift_Message::newInstance()
                ->setSubject('Souk El Madina')
                ->setFrom('souklemdinaa@gmail.com')
                ->setTo('zeineb.laabidi.1@esprit.tn')
                ->setBody('Nous vous informons que votre commande N° ' . $commande->getId() . ' a été prise en compte, vous avez au maximum 5 heures pour annuler votre commande - merci pour votre achat
            Cordialement l\'equipe CodeBusters ');
            $this->get('mailer')->send($message);

            $serializer=new Serializer([new ObjectNormalizer()]);
            $formatted=$serializer->normalize($commande);
            return new JsonResponse($formatted);
        }
    }

    public function ModifierLigneDeCommandeJsonAction(Request $request, $id)
    {


        $em = $this->getDoctrine()->getManager();

        $lcommande = $em->getRepository("CommandeBundle:LigneDeCommande", $id)->find($id);

        $lcommande->setAdresse($request->get('adresse'));
        $lcommande->setAdresse2($request->get('adresse2'));
        $lcommande->setVille($request->get('ville'));
        $lcommande->setCodePostal($request->get('codepostal'));
        $lcommande->setNumTel($request->get('numtel'));
        $em->persist($lcommande);
        $em->flush();
        $serializer=new Serializer([new ObjectNormalizer()]);

        $formatted=$serializer->normalize($lcommande);

        return new JsonResponse($formatted);
    }

    public function AfficherLigneDeCommandeJsonAction($id)
    {


        $em = $this->getDoctrine()->getManager();

        //$user = $em->getRepository("SUserBundle:User")->find($idU);

        $lcommande = $em->getRepository("CommandeBundle:LigneDeCommande")->findby(array('idCommande' => $id));


        $datesys = new DateTime();
        foreach ($lcommande as $l) {
            $produit = $em->getRepository("StockBundle:Produit")->findby(array('id' => $l->getIdProduit()));
            foreach ($produit as $p) {
                $lc[] = array(
                    'id'=>$l->getId(),
                    'libelle' => $p->getLibelle(),
                    'description' => $p->getDescription(),
                    'prixTotal' => $l->getPrixTotal(),
                    'dateLivraison' => $l->getDateLivraison()->getTimestamp() * 1000,
                    'qte'=>(String)$l->getQuntite(),
                    'adresse1' => $l->getAdresse(),
                    'adresse2' => $l->getAdresse2(),
                    'ville' => $l->getVille(),
                    'codePostal' => (String)$l->getCodePostal(),
                    'numTel' => $l->getNumTel());

            }


        }


        $serializer = new Serializer([new ObjectNormalizer()]);
        $formated = $serializer->normalize($lc);
        return new JsonResponse($formated);

    }

    public function afficherCommandeJsonAction($id)
    {
        $em = $this->getDoctrine()->getManager();

        $user = $em->getRepository("SUserBundle:User")->find($id);

        $commande = $em->getRepository("CommandeBundle:Commande")->findBy(array('idUser' => $user->getId()));
        $lstC = array();
        foreach ($commande as $c) {
            $cmd = new CommandeJson();
            $cmd->setId($c->getId());
            $cmd->setDateCommande($c->getDateCommande()->getTimestamp() * 1000);
            $cmd->setDateMax($c->getDateMax()->getTimestamp() * 1000);
            $lstC = array_merge($lstC,array($cmd));
        }
        $serializer = new Serializer([new ObjectNormalizer()]);
        $formated = $serializer->normalize($lstC);
        return new JsonResponse($formated);
    }
}