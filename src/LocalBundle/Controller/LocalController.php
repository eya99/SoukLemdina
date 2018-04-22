<?php

namespace LocalBundle\Controller;

use LocalBundle\Entity\Commentaire;
use LocalBundle\Entity\Likes;
use LocalBundle\Entity\Local;
use LocalBundle\Entity\Location;
use LocalBundle\Form\CommType;
use LocalBundle\Form\HeureType;
use LocalBundle\Form\LocalType;
use LocalBundle\Form\LouerType;
use LocalBundle\Form\ModifierType;
use LocalBundle\Form\RechercheType;
use SUserBundle\Entity\User;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Output\OutputInterface;
use Symfony\Component\Console\Question\ChoiceQuestion;
use Symfony\Component\HttpFoundation\File\UploadedFile;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Console\Question\Question;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\Session\Flash\FlashBag;
use Symfony\Component\HttpFoundation\Session\Session;
use Symfony\Component\Serializer\Normalizer\ObjectNormalizer;
use Symfony\Component\Serializer\Serializer;
use Symfony\Component\Validator\Constraints\Date;

class LocalController extends Controller
{
    public function AfficheAction()
    {
        $user=$this->getUser();
        $em = $this->getDoctrine()->getManager();
        $local = $em->getRepository("LocalBundle:Local")->findAll();
        return $this->render('LocalBundle:Local:affiche.html.twig', array(
            'local' => $local,'user'=>$user
        ));
    }

    public function AfficheUserAction()
    {
        $this->get('session')->getFlashBag()->add(
            'notice',
            'Vous devez vous inscrire pour continuer!'
        );
        $user = $this->container->get('security.token_storage')->getToken()->getUser();
        $id = $user;
        $em = $this->getDoctrine()->getManager();
        $local = $em->getRepository("LocalBundle:Local")->findBy(array('idUser' => $id));
        return $this->render('LocalBundle:Local:afficheUser.html.twig', array('local' => $local));
    }

    public function AfficheUserTabAction()
    {
        $this->get('session')->getFlashBag()->add(
            'notice',
            'Vous devez vous inscrire pour continuer!'
        );
        $user = $this->container->get('security.token_storage')->getToken()->getUser();
        $id = $user;
        $em = $this->getDoctrine()->getManager();
        $local = $em->getRepository("LocalBundle:Local")->findBy(array('idUser' => $id));
        return $this->render('LocalBundle:Local:affTab.html.twig', array('local' => $local));
    }

    public function SupprimeAction($id)
    {
        $em = $this->getDoctrine()->getManager();
        $local = $em->find("LocalBundle:Local", $id);
        if (!$local) {
            throw $this->createNotFoundException('Local nexiste pas');
        }
        $em->remove($local);
        $em->flush();
        return $this->redirectToRoute('_afficheUser');

        //return $this->render('LocalBundle:Local:afficheUser.html.twig', array());


    }

    public function ModifieAction(Request $request, $id)
    {
        $em = $this->getDoctrine()->getManager();
        $local = $em->getRepository("LocalBundle:Local")->find($id);
        $form = $this->createForm(ModifierType::class);
        $form->handleRequest($request);

        $s = $local->getSuperficie();
        $a = $local->getAdresse();
        $t = $local->getTelephone();

        $p = $local->getPrix();
        $ty = $local->getType();
        $d = $local->getDescription();
        if ($form->isValid()) {

            if (empty($form->get('superficie')->getData())) {
                $local->setSuperficie($s);
            } else {
                $local->setSuperficie($form->get('superficie')->getData());
            }
            if (empty($form->get('adresse')->getData())) {
                $local->setAdresse($a);
            } else {
                $local->setAdresse($form->get('adresse')->getData());
            }
            if (empty($form->get('telephone')->getData())) {
                $local->setTelephone($t);
            } else {
                $local->setTelephone($form->get('telephone')->getData());
            }

            if (empty($form->get('prix')->getData())) {
                $local->setPrix($p);
            } else {
                $local->setPrix($form->get('prix')->getData());
            }
            if (empty($form->get('type')->getData())) {
                $local->setType($ty);
            } else {
                $local->setType($form->get('type')->getData());
            }
            if (empty($form->get('description')->getData())) {
                $local->setDescription($d);
            } else {
                $local->setDescription($form->get('description')->getData());
            }

            $em->persist($local);
            $em->flush();

            return $this->redirectToRoute('_afficheUser');
        }
        return $this->render('LocalBundle:Local:modifie.html.twig', array(
            'form' => $form->createView()

        ));
    }

    /**
     * @param Request $request
     * @return \Symfony\Component\HttpFoundation\RedirectResponse|\Symfony\Component\HttpFoundation\Response
     */
    public function AjoutAction(Request $request)
    {
        $local = new Local();
        $local->getNbSignal(0);
        $user = $this->container->get('security.token_storage')->getToken()->getUser();
        $local->setIdUser($user);
        $form = $this->createForm(LocalType::class, $local);
        $form->handleRequest($request);
        if ($form->isValid() && $form->isSubmitted()) {
            /**
             * @Var UploadedFile $file
             */
            $file = $local->getImage();
            $fileName = md5(uniqid()) . '.' . $file->guessExtension();
            $file->move(
                $this->getParameter('image_directory'), $fileName
            );
            $local->setImage($fileName);
            $em = $this->getDoctrine()->getManager();
            $em->persist($local);
            $em->flush();
            return $this->redirectToRoute('_affiche');
        }

        return $this->render('LocalBundle:Local:ajout.html.twig', array(
            'form' => $form->createView()
        ));
    }

    public function RechercheAction(Request $request)
    {

        $form = $this->createForm(RechercheType::class);
        $form->handleRequest($request);
        $em = $this->getDoctrine()->getManager();


        $prixMin = $form['prix']->getData();
        $prixMax = $form['a']->getData();
        $superficie = $form['superficie']->getData();
        $type = $form['type']->getData();
        $local = $em->getRepository("LocalBundle:Local")->recherche($prixMin, $prixMax, $type, $superficie);

        if (empty($prixMin) && (!empty($prixMax)) && (!empty($superficie)) && (!empty($type))) {
            $local = $em->getRepository("LocalBundle:Local")->recherche2($prixMax, $type, $superficie);
        }
        if (empty($prixMax) && (!empty($prixMin)) && (!empty($superficie)) && (!empty($type))) {
            $local = $em->getRepository("LocalBundle:Local")->recherche3($prixMin, $type, $superficie);
        }
        if (empty($superficie) && (!empty($prixMin)) && (!empty($prixMax)) && (!empty($type))) {
            $local = $em->getRepository("LocalBundle:Local")->recherche4($prixMin, $type, $prixMax);
        }
        if (empty($type) && (!empty($prixMin)) && (!empty($prixMax)) && (!empty($superficie))) {
            $local = $em->getRepository("LocalBundle:Local")->recherche5($prixMin, $superficie, $prixMax);
        }
        if (empty($type) && (empty($prixMin)) && (!empty($prixMax)) && (!empty($superficie))) {
            $local = $em->getRepository("LocalBundle:Local")->recherche6($superficie, $prixMax);
        }
        if (empty($type) && (empty($prixMax)) && (!empty($prixMin)) && (!empty($superficie))) {
            $local = $em->getRepository("LocalBundle:Local")->recherche7($superficie, $prixMin);
        }
        if (empty($type) && (empty($superficie)) && (!empty($prixMin)) && (!empty($prixMax))) {
            $local = $em->getRepository("LocalBundle:Local")->recherche8($prixMax, $prixMin);
        }
        if ((!empty($type)) && (!empty($prixMin)) && (empty($prixMax)) && (empty($superficie))) {
            $local = $em->getRepository("LocalBundle:Local")->recherche9($type, $prixMin);
        }
        if ((!empty($type)) && (!empty($prixMax)) && (empty($prixMin)) && (empty($superficie))) {
            $local = $em->getRepository("LocalBundle:Local")->recherche10($type, $prixMax);
        }
        if ((!empty($type)) && (!empty($superficie)) && (empty($prixMin)) && (empty($prixMax))) {
            $local = $em->getRepository("LocalBundle:Local")->recherche11($type, $superficie);
        }
        if ((empty($type)) && (empty($superficie)) && (empty($prixMin)) && (!empty($prixMax))) {
            $local = $em->getRepository("LocalBundle:Local")->recherche12($prixMax);
        }
        if ((empty($type)) && (empty($superficie)) && (!empty($prixMin)) && (empty($prixMax))) {
            $local = $em->getRepository("LocalBundle:Local")->recherche13($prixMin);
        }
        if ((empty($type)) && (!empty($superficie)) && (empty($prixMin)) && (empty($prixMax))) {
            $local = $em->getRepository("LocalBundle:Local")->recherche14($superficie);
        }
        if ((!empty($type)) && (empty($superficie)) && (empty($prixMin)) && (empty($prixMax))) {
            $local = $em->getRepository("LocalBundle:Local")->recherche15($type);
        }


        return $this->render('LocalBundle:Local:recherche.html.twig', array('local' => $local, 'form' => $form->createView()));
    }

    public function LouerAction(Request $request, $id)
    {
        $em = $this->getDoctrine()->getManager();
        $local = $em->getRepository("LocalBundle:Local")->find($id);





     $form = $this->createForm(LouerType::class);


        $form->handleRequest($request);
        $dateDeb = $form['dateDeb']->getData();
        $dateFin = $form['date']->getData();

        if ( ($form->isSubmitted()) && ($form->isValid()) && ($dateDeb < $dateFin)&&($dateDeb>new \DateTime())&&($dateFin>new \DateTime())) {

            $ok = $em->getRepository("LocalBundle:Location")->findDate($dateDeb, $dateFin);
            if ($ok == null) {
                $location = new Location();
                $location->setIdUser($this->container->get('security.token_storage')->getToken()->getUser());
                $location->setDateDebutLocation($dateDeb);
                $location->setDateFinLocation($dateFin);
                $location->setIdLocal($local);
                $em->persist($location);
                $em->flush();


                $this->get('session')->getFlashBag()->add(
                    'notice',
                    'Votre demande de location a été effectuée avec succés!'
                );
            } else {
                $this->get('session')->getFlashBag()->add(
                    'notice',
                    'Date non disponible!'
                );
            }
        } else {
            $this->get('session')->getFlashBag()->add(
                'notice',
                'Veuillez vérifier les données entrées!'
            );
        }
        return $this->render('LocalBundle:Local:louer.html.twig', array('local' => $local, 'form' => $form->createView()));

    }

    public function AfficheDetailAction(Request $request, $id)
    {
        $em = $this->getDoctrine()->getManager();
        $local = $em->getRepository("LocalBundle:Local")->find($id);
        $user = $this->getUser();

        $form = $this->createForm(CommType::class);
        $form->handleRequest($request);
        $contenu = $form['contenu']->getData();
        $rate= $form['rating']->getData();

        if ($form->isValid() && $form->isSubmitted()) {

            $commentaire = new Commentaire();
            $commentaire->setIdLocal($local);
            $commentaire->setIdUser($user);
            $commentaire->setContenu($contenu);
            $commentaire->setRate($rate);
            $commentaire->setDate(new \DateTime());
            $em->persist($commentaire);
            $em->flush();
        }

        $commentaires = $em->getRepository("LocalBundle:Commentaire")->findBy(array('idLocal' => $id));

        $like = $em->getRepository("LocalBundle:Likes")->findOneBy(array('idLocal' => $id, 'idUser' => $user->getId()));
        if ($like == null) {
            return $this->render('LocalBundle:Local:afficheDetail.html.twig', array( 'local' => $local, 'commentaires' => $commentaires, 'form' => $form->createView()));
        } else {
            return $this->render('LocalBundle:Local:afficheDetail.html.twig', array( 'local' => $local, 'commentaires' => $commentaires, 'form' => $form->createView(), 'f' => 'set'));

        }


    }

public function DeleteCommentaireAction($id)
{
 $em=$this->getDoctrine()->getManager();
 $like=$em->getRepository("LocalBundle:Commentaire")->find($id);
 $idLoc=$like->getIdLocal()->getId();
 $em->remove($like);
 $em->flush();
 return $this->redirectToRoute('_afficheDetail',array('id'=>$idLoc));
}



    public function SignalerAction($id)
    {
        $em = $this->getDoctrine()->getManager();
        $local = $em->getRepository("LocalBundle:Local")->find($id);
        $local->setNbSignal($local->getNbSignal() + 1);
        $em->persist($local);
        $em->flush();
        $this->get('session')->getFlashBag()->add(
            'notice',
            'Votre demande a été envoyée et sera traitée par l\'administrateur'
        );
        return $this->redirectToRoute('_afficheDetail', array('id' => $id));
    }


    public function LikeAction(Request $request, $id)
    {
        if ($request->isXmlHttpRequest()) {
            $user = $this->getUser();
            $em = $this->getDoctrine()->getManager();
            $local = $em->getRepository("LocalBundle:Local")->find($id);
            $like = new Likes();
            $like->setIdUser($user);
            $like->setIdLocal($local);
            $em->persist($like);
            $em->flush();
            return new JsonResponse($like);
        } else
            return new Response('Error!', 400);
    }

    public function DislikeAction(Request $request, $id)
    {
        if ($request->isXmlHttpRequest()) {
            $user = $this->getUser();
            $em = $this->getDoctrine()->getManager();
            $like = $em->getRepository("LocalBundle:Likes")->findOneBy(array(
                'idLocal' => $id,
                'idUser' => $user->getId()
            ));
            $em->remove($like);
            $em->flush();
            return new JsonResponse($like);
        } else
            return new Response('Error!', 400);
    }

public function recherchePrixAction()
{
    $em=$this->getDoctrine()->getManager();
    $query= $em->createQueryBuilder()
        ->select('l')
        ->from('LocalBundle:Local','l')
        ->orderBy('l.prix','asc')
        ->getQuery();
    $local=$query->getResult();
 return $this->render("LocalBundle:Local:recherchePrix.html.twig",array('local'=>$local));
}

    public function rechercheSuperficieAction()
    {
        $em=$this->getDoctrine()->getManager();
        $query= $em->createQueryBuilder()
            ->select('l')
            ->from('LocalBundle:Local','l')
            ->orderBy('l.superficie','asc')
            ->getQuery();
        $local=$query->getResult();
        return $this->render("LocalBundle:Local:rechercheSuperficie.html.twig",array('local'=>$local));
    }

    public function rechercheAdresseAction(Request $request)
    {
        $em=$this->getDoctrine()->getManager();
        $adr=$request->get('xyz');

        $local= $em->getRepository("LocalBundle:Local")->rechercheAjax($adr);
        $s=new Serializer(array(new ObjectNormalizer()));
        $a=$s->normalize($local,'json');
        $response=new JsonResponse();
        return $response->setData(array('x'=>$a));
    }
}
