<?php

namespace StockBundle\Controller;

use StockBundle\Entity\Produit;
use StockBundle\Form\ProduitType;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
//use Symfony\Component\BrowserKit\Request;
use Symfony\Component\HttpFoundation\File\UploadedFile;
use Symfony\Component\HttpFoundation\Request;




class ProduitController extends Controller
{
    public function ajoutAction(Request $request)
    {   $message="Ajouter un produit";
        $produit= new Produit();
        $produit->setUpdatedAt(new \DateTime('now'));
        $form=$this->createForm('StockBundle\Form\ProduitType',$produit);
        $user = $this->container->get('security.token_storage')->getToken()->getUser();
        $form->handleRequest($request);




        if($form->isSubmitted() && $form->isValid())
        {
            /**
             * @var UploadedFile $file
             */
            $file=$produit->getImage();
            $fileName=md5(uniqid()).','.$file->guessExtension();

            $file->move(
              $this->getParameter('image_directory'),$fileName
            );



            $produit->setImage($fileName);
            $produit ->setIdUser($user);
            $em=$this->getDoctrine()->getManager();
            $em->persist($produit);
            $em->flush($produit);
            //$message="Succés!";
            $this->get('session')->getFlashBag()->add('success','Produit ajouté');
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
        $user = $this->container->get('security.token_storage')->getToken()->getUser();
        $profile = $em ->getRepository("SocialBundle:Profile")->findOneBy(array('idUser' => $user->getId()));
        $produit=$em->getRepository('StockBundle:Produit')->find($id);
        $query=$em->createQueryBuilder()
            ->select('p')->from('StockBundle:Produit','p')
            ->orderBy('p.updatedAt','DESC')
            ->getQuery();

        $produits=$query->getResult();
        return $this->render('StockBundle::produit.html.twig',array('produit'=>$produit,'profile'=>$profile,'produits'=>$produits));

    }



    public function modifierAction(Request $request, $id){

        $em=$this->getDoctrine()->getManager();
        $produit=$em->getRepository("StockBundle:Produit")->find($id);
        $Form=$this->createForm(ProduitType::class,$produit);
        $Form->handleRequest($request);

        if ($Form->isSubmitted() && $Form->isValid()) {
            /**
             * @var UploadedFile $file
             */
            $file=$produit->getImage();
            $fileName=md5(uniqid()).','.$file->guessExtension();

            $file->move(
                $this->getParameter('image_directory'),$fileName
            );

            // Update the 'brochure' property to store the PDF file name
            // instead of its contents
            $produit->setImage($fileName);
            $em->persist($produit);
            $em->flush();
            if($produit->getPromotion()>0 ){
                $manager = $this->get('mgilet.notification');
                $notif = $manager->createNotification('Il y a une promotion de - '.$produit->getPromotion().'% sur le produit '.$produit->getLibelle().'!');
                //$notif->set('This a notification.');
                //$notif->setLink('http://symfony.com/');
                $users=$em->getRepository('SUserBundle:User')->findAll();
                // or the one-line method :
                $manager->createNotification('Notification subject','Some random text','http://google.fr',getDate());

                // you can add a notification to a list of entities
                // the third parameter ``$flush`` allows you to directly flush the entities
                $manager->addNotification($users, $notif, true);
                $this->get('session')->getFlashBag()->add('success','Produit modifié');
            }
            return $this->redirectToRoute('affiche_produits');
        }

        return $this->render('StockBundle::modif.html.twig', array('produit'=>$produit,'form'=>$Form->CreateView()));

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

public function rechercheAction(Request $request){
$em=$this->getDoctrine()->getManager();
$motcle=$request->get('motcle');
$repository=$em->getRepository('StockBundle:Produit');
$query=$em->createQueryBuilder()
    ->select('p')->from('StockBundle:Produit','p')
    ->where('p.libelle like :libelle')
    ->setParameter('libelle','%'.$motcle.'%')
    ->orderBy('p.libelle','ASC')
    ->getQuery();

    $produits=$query->getResult();


    return $this->render('StockBundle::produits.html.twig',array('produits'=>$produits));
}

    public function artAction(Request $request){
        $em=$this->getDoctrine()->getManager();
        $repository=$em->getRepository('StockBundle:Produit');
        $query=$em->createQueryBuilder()
            ->select('p')->from('StockBundle:Produit','p')
            ->where('p.categorie like :categorie')
            ->setParameter('categorie','Arts de la table')
            ->getQuery();

        $produits=$query->getResult();


        return $this->render('StockBundle::produits.html.twig',array('produits'=>$produits));
}

    public function habillementAction(Request $request){
        $em=$this->getDoctrine()->getManager();
        $repository=$em->getRepository('StockBundle:Produit');
        $query=$em->createQueryBuilder()
            ->select('p')->from('StockBundle:Produit','p')
            ->where('p.categorie like :categorie')
            ->setParameter('categorie','Habillement')
            ->getQuery();

        $produits=$query->getResult();


        return $this->render('StockBundle::produits.html.twig',array('produits'=>$produits));
    }
    public function bijouxAction(Request $request){
        $em=$this->getDoctrine()->getManager();
        $repository=$em->getRepository('StockBundle:Produit');
        $query=$em->createQueryBuilder()
            ->select('p')->from('StockBundle:Produit','p')
            ->where('p.categorie like :categorie')
            ->setParameter('categorie','Bijoux')
            ->getQuery();

        $produits=$query->getResult();


        return $this->render('StockBundle::produits.html.twig',array('produits'=>$produits));
    }

    public function territoireAction(Request $request){
        $em=$this->getDoctrine()->getManager();
        $repository=$em->getRepository('StockBundle:Produit');
        $query=$em->createQueryBuilder()
            ->select('p')->from('StockBundle:Produit','p')
            ->where('p.categorie like :categorie')
            ->setParameter('categorie','Produits du Terroire')
            ->getQuery();

        $produits=$query->getResult();


        return $this->render('StockBundle::produits.html.twig',array('produits'=>$produits));
    }

    public function maroquinerieAction(Request $request){
        $em=$this->getDoctrine()->getManager();
        $repository=$em->getRepository('StockBundle:Produit');
        $query=$em->createQueryBuilder()
            ->select('p')->from('StockBundle:Produit','p')
            ->where('p.categorie like :categorie')
            ->setParameter('categorie','Maroquinerie')
            ->getQuery();

        $produits=$query->getResult();


        return $this->render('StockBundle::produits.html.twig',array('produits'=>$produits));
    }

    public function decorationAction(Request $request){
        $em=$this->getDoctrine()->getManager();
        $repository=$em->getRepository('StockBundle:Produit');
        $query=$em->createQueryBuilder()
            ->select('p')->from('StockBundle:Produit','p')
            ->where('p.categorie like :categorie')
            ->setParameter('categorie','Décoration')
            ->getQuery();

        $produits=$query->getResult();


        return $this->render('StockBundle::produits.html.twig',array('produits'=>$produits));
    }

    public function libsortAction(Request $request){
        $em=$this->getDoctrine()->getManager();
        $repository=$em->getRepository('StockBundle:Produit');
        $query=$em->createQueryBuilder()
            ->select('p')->from('StockBundle:Produit','p')
            ->orderBy('p.libelle','ASC')
            ->getQuery();

        $produits=$query->getResult();
        return $this->render('StockBundle::produits.html.twig',array('produits'=>$produits));
    }

    public function prixascAction(Request $request){
        $em=$this->getDoctrine()->getManager();
        $repository=$em->getRepository('StockBundle:Produit');
        $query=$em->createQueryBuilder()
            ->select('p')->from('StockBundle:Produit','p')
            ->orderBy('p.prix','ASC')
            ->getQuery();

        $produits=$query->getResult();
        return $this->render('StockBundle::produits.html.twig',array('produits'=>$produits));
    }

    public function prixdescAction(Request $request){
        $em=$this->getDoctrine()->getManager();
        $repository=$em->getRepository('StockBundle:Produit');
        $query=$em->createQueryBuilder()
            ->select('p')->from('StockBundle:Produit','p')
            ->orderBy('p.prix','DESC')
            ->getQuery();

        $produits=$query->getResult();
        return $this->render('StockBundle::produits.html.twig',array('produits'=>$produits));
    }


}
