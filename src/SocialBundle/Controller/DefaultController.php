<?php

namespace SocialBundle\Controller;

use SocialBundle\Entity\Follow;
use SocialBundle\Entity\Post;
use SocialBundle\Entity\Profile;
use SocialBundle\Form\PostForm;
use SocialBundle\Form\ProfileForm;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\BrowserKit\Response;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Serializer\Normalizer\ObjectNormalizer;
use Symfony\Component\Serializer\Serializer;

class DefaultController extends Controller
{
    public function indexAction(Request $request)
    {
        $em = $this->getDoctrine()->getManager();
        $user = $this->container->get('security.token_storage')->getToken()->getUser();
        if ($this->get('security.authorization_checker')->isGranted('ROLE_SUPER_ADMIN') || $this->get('security.authorization_checker')->isGranted('ROLE_USER')) {
            $profile_follower = $em->getRepository("SocialBundle:Profile")->findOneBy(array('idUser' => $user->getId()));
            $query = $em->createQuery(
                'SELECT p FROM SocialBundle:Post p
             WHERE p.idUser in ( SELECT IDENTITY (pr.idUser) FROM SocialBundle:Profile pr
                                  WHERE pr.id in ( SELECT IDENTITY (f.idProfileFollowed)
                                                   FROM SocialBundle:Follow f
                                                   WHERE f.idProfileFollower = :q))
             OR p.idUser = :i
             ORDER BY p.date DESC '
            )->setParameters(array('q' => $profile_follower->getId(), 'i' => $user->getId()));
            $posts = $query->getResult();
            $profiles = array();
            foreach ($posts as $p) {
                $id = $em->getRepository("SocialBundle:Profile")->findOneBy(array('idUser' => $p->getIdUser()));
                $profiles = array_merge($profiles, array($id));
            }
            $Post = new Post();
            $Form = $this->createForm(PostForm::class, $Post);
            $Form->handleRequest($request);
            if ($Form->isValid() && $Form->isSubmitted()) {
                $em = $this->getDoctrine()->getManager();
                $Post->setIdUser($user);
                $Post->setDate(new \DateTime('now'));
                $em->persist($Post);
                $em->flush();
                return $this->redirectToRoute('social_homepage', array('form' => $Form->createView()));
            }
            return $this->render('SocialBundle:Default:index.html.twig', array('posts' => $posts, 'profiles' => $profiles, 'form' => $Form->createView()));
        } else return $this->redirectToRoute('fos_user_security_login');
    }

    public function postsAction($deb, $fin)
    {
        $em = $this->getDoctrine()->getManager();
        $user = $this->container->get('security.token_storage')->getToken()->getUser();
        $profile_follower = $em->getRepository("SocialBundle:Profile")->findOneBy(array('idUser' => $user->getId()));
        $query = $em->createQuery(
            'SELECT p FROM SocialBundle:Post p
             WHERE p.idUser in ( SELECT IDENTITY (pr.idUser) FROM SocialBundle:Profile pr
                                  WHERE pr.id in ( SELECT IDENTITY (f.idProfileFollowed)
                                                   FROM SocialBundle:Follow f
                                                   WHERE f.idProfileFollower = :q))
             OR p.idUser = :i
             ORDER BY p.date DESC '
        )->setParameters(array('q' => $profile_follower->getId(), 'i' => $user->getId()));
        $posts = $query->getResult();
        $profiles = array();
        foreach ($posts as $p) {
            $id = $em->getRepository("SocialBundle:Profile")->findOneBy(array('idUser' => $p->getIdUser()));
            $profiles = array_merge($profiles, array($id));
        }
        return $this->render('SocialBundle:Post:posts.html.twig', array('posts' => $posts, 'profiles' => $profiles, 'deb' => $deb, 'fin' => $fin));
    }

    public function postsAXAction(Request $request, $deb, $fin)
    {
        if ($request->isXMLHttpRequest()) {
            $template = $this->forward('SocialBundle:Default:posts', array('deb' => $deb, 'fin' => $fin))->getContent();
            return new JsonResponse($template);
        }
        return new Response('Error!', 400);
    }

    public function postsHomeWSAction($userid)
    {
        $em = $this->getDoctrine()->getManager();
        $profile_follower = $em->getRepository("SocialBundle:Profile")->findOneBy(array('idUser' => $userid));
        $query = $em->createQuery(
            'SELECT p FROM SocialBundle:Post p
             ORDER BY p.date DESC ');
        $posts = $query->getResult();
        $mapprpos = array();
        foreach ($posts as $p) {
            $pr = $em->getRepository("SocialBundle:Profile")->findOneBy(array('idUser' => $p->getIdUser()));
            $Follow = $em->getRepository("SocialBundle:Follow")->findOneBy(array(
                'idProfileFollowed' => $pr->getId(),
                'idProfileFollower' => $profile_follower->getId()));
            if (isset($Follow)) {
                $mfollowi = true;
            } else {
                $mfollowi = false;
            }
            $mp = new MapPrPos($p,$pr,$pr->getIdUser()->getFirstname(),$pr->getIdUser()->getLastname(),$mfollowi);
            $mapprpos = array_merge($mapprpos,array($mp));
        }
        $serializer = new Serializer([new ObjectNormalizer()]);
        $formatted = $serializer->normalize($mapprpos);
        return new JsonResponse($formatted);
    }

    public function addAction(Request $request)
    {
        $user = $this->container->get('security.token_storage')->getToken()->getUser();
        $Profile = new Profile();

        $Form = $this->createForm(ProfileForm::class, $Profile);
        $Form->handleRequest($request);

        if ($Form->isValid() && $Form->isSubmitted()) {
            $em = $this->getDoctrine()->getManager();
            $Profile->setIdUser($user);
            $em->persist($Profile);
            $em->flush();
            return $this->redirectToRoute('fos_visitor_home');
        }
        return $this->render('SocialBundle:Profile:register.html.twig', array(
            'form' => $Form->createView()));
    }

    public function modifierAction(Request $request, $id)
    {
        $em = $this->getDoctrine()->getManager();
        $Profile = $em->getRepository("SocialBundle:Profile")->find($id);
        $Form = $this->createForm(ProfileForm::class, $Profile);

        $Form->handleRequest($request);
        if ($Form->isSubmitted() && $Form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($Profile);
            $em->flush();
            return $this->redirectToRoute('social_check_profile', array('id' => $Profile->getIdUser()->getId()));
        }

        return $this->render('SocialBundle:Profile:register.html.twig', array(
            'form' => $Form->createView(), 'created' => 's', 'profile' => $Profile));
    }

    public function delImageAction($id)
    {
        $em = $this->getDoctrine()->getManager();
        $Profile = $em->getRepository("SocialBundle:Profile")->find($id);
        $this->get('vich_uploader.upload_handler')->remove($Profile, 'imageFile');
        $em->persist($Profile);
        $em->flush();
        return $this->redirectToRoute('social_modifier_profile', array('id' => $Profile->getId()));
    }

    public function searchAction()
    {
        $profiles = array();
        $fst = $_POST['q'];
        $em = $this->getDoctrine()->getManager();
        if (isset($fst)) {
            $query = $em->createQuery(
                'SELECT u
                FROM SUserBundle:User u
                WHERE (u.firstname like :tag or u.lastname like :tag)'
            )->setParameter('tag', '%' . $fst . '%');

            $users = $query->getResult();
            foreach ($users as $u) {
//                $profile = $em->getRepository("SocialBundle:Profile")->findOneBy(array('idUser' => $u->getId()));
                $profile = $em->getRepository(Profile::class)->findProfileUserId($u->getId());
                $profiles = array_merge($profiles, $profile);
            }
        } else {
            $profiles = $em->getRepository("SocialBundle:Profile")->findAll();
        }

        return $this->render("@Social/Profile/search.html.twig", array('profiles' => $profiles));
    }

    public function checkAction(Request $request, $id)
    {
        $user = $this->container->get('security.token_storage')->getToken()->getUser();
        $em = $this->getDoctrine()->getManager();
        $Post = new Post();
        $Form = $this->createForm(PostForm::class, $Post);
        $Form->handleRequest($request);
        if ($Form->isValid() && $Form->isSubmitted()) {
            $em = $this->getDoctrine()->getManager();
            $Post->setIdUser($user);
            $Post->setDate(new \DateTime('now'));
            $em->persist($Post);
            $em->flush();
            return $this->redirectToRoute('social_check_profile', array('id' => $id));
        }
        $profile = $em->getRepository("SocialBundle:Profile")->findOneBy(array('idUser' => $id));
        $follower = $em->getRepository("SocialBundle:Profile")->findOneBy(array('idUser' => $user->getId()));
        $posts = $em->getRepository("SocialBundle:Post")->findBy(array('idUser' => $id), array('date' => 'DESC'));
        $follow = $em->getRepository("SocialBundle:Follow")->findOneBy(array('idProfileFollowed' => $profile->getId(), 'idProfileFollower' => $follower->getId()));
        if ($follow === null)
            return $this->render('SocialBundle:Profile:check.html.twig', array('posts' => $posts, 'profile' => $profile, 'form' => $Form->createView()));
        else
            return $this->render('SocialBundle:Profile:check.html.twig', array('posts' => $posts, 'profile' => $profile, 'form' => $Form->createView(), 'f' => 'set'));
    }

    public function followersAction($id)
    {
        $em = $this->getDoctrine()->getManager();
        $followers = $em->getRepository("SocialBundle:Follow")->findBy(array('idProfileFollowed' => $id));
        return $this->render('@Social/Profile/followers.html.twig', array('followers' => $followers));
    }

    public function deleteAction($id)
    {
        $em = $this->getDoctrine()->getManager();
        $user = $this->container->get('security.token_storage')->getToken()->getUser();
        if ($user) {
            $fols = $em->getRepository("SocialBundle:Follow")->findBy(array('idProfileFollowed' => $user->getId()));
            if ($fols) {
                foreach ($fols as $f) {
                    $em->remove($f);
                    $em->flush();
                }
            }

            $likes = $em->getRepository("SocialBundle:Jaime")->findBy(array('idUser' => $id));
            if ($likes)
                foreach ($likes as $j) {
                    $em->remove($j);
                    $em->flush();
                }

            $comms = $em->getRepository("SocialBundle:Comment")->findBy(array('idUser' => $id));
            if ($comms) {
                foreach ($comms as $c) {
                    $em->remove($c);
                    $em->flush();
                }
            }

            $posts = $em->getRepository("SocialBundle:Post")->findBy(array('idUser' => $id));
            if ($posts) {
                foreach ($posts as $p) {
                    $em->remove($p);
                    $em->flush();
                }
            }


            $Profile = $em->getRepository("SocialBundle:Profile")->findOneBy(array('idUser' => $id));
            $em->remove($Profile);
            $em->flush();

            $User = $em->getRepository("SUserBundle:User")->findOneBy(array('id' => $id));
            $em->remove($User);
            $em->flush();
        }


        return $this->redirectToRoute("fos_visitor_home");
    }

    public function followAction($id)
    {
        $user = $this->container->get('security.token_storage')->getToken()->getUser();
        $em = $this->getDoctrine()->getManager();
        $follower = $em->getRepository("SocialBundle:Profile")->findOneBy(array('idUser' => $user->getId()));
        $followed = $em->getRepository("SocialBundle:Profile")->find($id);
        $Follow = new Follow();
        $Follow->setIdProfileFollower($follower);
        $Follow->setIdProfileFollowed($followed);
        $em->persist($Follow);
        $em->flush();
        return $this->redirectToRoute('social_check_profile', array('id' => $followed->getIdUser()->getId()));
    }

    public function unfollowAction($id)
    {
        $em = $this->getDoctrine()->getManager();
        $user = $this->container->get('security.token_storage')->getToken()->getUser();
        $follower = $em->getRepository("SocialBundle:Profile")->findOneBy(array('idUser' => $user->getId()));
        $Follow = $em->getRepository("SocialBundle:Follow")->findOneBy(array('idProfileFollowed' => $id, 'idProfileFollower' => $follower->getId()));
        $followed = $em->getRepository("SocialBundle:Profile")->find($id);
        $em->remove($Follow);
        $em->flush();
        return $this->redirectToRoute('social_check_profile', array('id' => $followed->getIdUser()->getId()));
    }

    public function followAXAction(Request $request, $id)
    {
        if ($request->isXMLHttpRequest()) {
            $user = $this->container->get('security.token_storage')->getToken()->getUser();
            $em = $this->getDoctrine()->getManager();
            $follower = $em->getRepository("SocialBundle:Profile")->findOneBy(array('idUser' => $user->getId()));
            $followed = $em->getRepository("SocialBundle:Profile")->find($id);
            $Follow = new Follow();
            $Follow->setIdProfileFollower($follower);
            $Follow->setIdProfileFollowed($followed);
            $em->persist($Follow);
            $em->flush();
            $template = $this->forward('SocialBundle:Default:followers', array('id' => $id))->getContent();
            return new JsonResponse($template);
        }
        return new Response('Error!', 400);
    }

    public function unfollowAXAction(Request $request, $id)
    {
        if ($request->isXMLHttpRequest()) {
            $em = $this->getDoctrine()->getManager();
            $user = $this->container->get('security.token_storage')->getToken()->getUser();
            $follower = $em->getRepository("SocialBundle:Profile")->findOneBy(array('idUser' => $user->getId()));
            $Follow = $em->getRepository("SocialBundle:Follow")->findOneBy(array('idProfileFollowed' => $id, 'idProfileFollower' => $follower->getId()));
            $em->remove($Follow);
            $em->flush();
            $template = $this->forward('SocialBundle:Default:followers', array('id' => $id))->getContent();
            return new JsonResponse($template);
        }
        return new Response('Error!', 400);
    }

    public function followHomeSwitchWSAction($idProfileFollower, $idProfileFollowed)
    {
        $em = $this->getDoctrine()->getManager();
        $Follow = $em->getRepository("SocialBundle:Follow")->findOneBy(array(
            'idProfileFollowed' => $idProfileFollowed,
            'idProfileFollower' => $idProfileFollower));
        if (isset($Follow)) {
            $em->remove($Follow);
            $em->flush();
            return new JsonResponse("Unfollowed");
        } else {
            $Follow = new Follow();
            $follower = $em->getRepository("SocialBundle:Profile")->find($idProfileFollower);
            $followed = $em->getRepository("SocialBundle:Profile")->find($idProfileFollowed);
            $Follow->setIdProfileFollower($follower);
            $Follow->setIdProfileFollowed($followed);
            $em->persist($Follow);
            $em->flush();
            return new JsonResponse("followed");
        }
    }

    public function deleteHomeWSAction($id)
    {
        $em = $this->getDoctrine()->getManager();
        $likes = $em->getRepository("SocialBundle:Jaime")->findBy(array('idPost' => $id));
        if ($likes)
            foreach ($likes as $j) {
                $em->remove($j);
                $em->flush();
            }

        $comms = $em->getRepository("SocialBundle:Comment")->findBy(array('idPost' => $id));
        if ($comms) {
            foreach ($comms as $c) {
                $em->remove($c);
                $em->flush();
            }
        }

        $Post = $em->getRepository("SocialBundle:Post")->find($id);
        $em->remove($Post);
        $em->flush();
        return new JsonResponse("post deleted");
    }

    public function delPostAction($id)
    {
        $em = $this->getDoctrine()->getManager();
        $user = $this->container->get('security.token_storage')->getToken()->getUser();

        $likes = $em->getRepository("SocialBundle:Jaime")->findBy(array('idPost' => $id));
        if ($likes)
            foreach ($likes as $j) {
                $em->remove($j);
                $em->flush();
            }

        $comms = $em->getRepository("SocialBundle:Comment")->findBy(array('idPost' => $id));
        if ($comms) {
            foreach ($comms as $c) {
                $em->remove($c);
                $em->flush();
            }
        }

        $Post = $em->getRepository("SocialBundle:Post")->findOneBy(array('id' => $id));
        $em->remove($Post);
        $em->flush();

        return $this->redirectToRoute('social_check_profile', array('id' => $user->getId()));
    }

    public function delPost2Action($id)
    {
        $em = $this->getDoctrine()->getManager();

        $likes = $em->getRepository("SocialBundle:Jaime")->findBy(array('idPost' => $id));
        if ($likes)
            foreach ($likes as $j) {
                $em->remove($j);
                $em->flush();
            }

        $comms = $em->getRepository("SocialBundle:Comment")->findBy(array('idPost' => $id));
        if ($comms) {
            foreach ($comms as $c) {
                $em->remove($c);
                $em->flush();
            }
        }

        $Post = $em->getRepository("SocialBundle:Post")->findOneBy(array('id' => $id));
        $em->remove($Post);
        $em->flush();

        return $this->redirectToRoute('social_homepage');
    }

    public function modPostAction(Request $request, $id)
    {
        $em = $this->getDoctrine()->getManager();
        $user = $this->container->get('security.token_storage')->getToken()->getUser();
        $Post = $em->getRepository("SocialBundle:Post")->find($id);
        $Form = $this->createForm(PostForm::class, $Post);

        $Form->handleRequest($request);
        if ($Form->isSubmitted() && $Form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            if ($user->getId() === $Post->getIdUser()->getId()) {
                $em->persist($Post);
                $em->flush();
                return $this->redirectToRoute('social_check_profile', array('id' => $user->getId()));
            } else
                return $this->redirectToRoute('social_check_profile', array('id' => $Post->getIdUser()->getId()));
        }

        return $this->render('SocialBundle:Post:modifier.html.twig', array(
            'form' => $Form->createView()));
    }

    public function modPost2Action(Request $request, $id)
    {
        $em = $this->getDoctrine()->getManager();
        $user = $this->container->get('security.token_storage')->getToken()->getUser();
        $Post = $em->getRepository("SocialBundle:Post")->find($id);
        $Form = $this->createForm(PostForm::class, $Post);

        $Form->handleRequest($request);
        if ($Form->isSubmitted() && $Form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            if ($user->getId() === $Post->getIdUser()->getId()) {
                $em->persist($Post);
                $em->flush();
                return $this->redirectToRoute('social_homepage');
            }
            return $this->redirectToRoute('social_homepage');
        }

        return $this->render('SocialBundle:Post:modifier.html.twig', array(
            'form' => $Form->createView()));
    }

    public function modPostHomeWSAction($id,$titre,$texte)
    {
        $em = $this->getDoctrine()->getManager();
        $post = $em->getRepository("SocialBundle:Post")->find($id);
        $post->setTexte($texte);
        $post->setTitre($titre);
        $em->persist($post);
        $em->flush();
        return new JsonResponse("updated");
    }

    public function addPostHomeWSAction($id,$titre,$texte,$image)
    {
        $em = $this->getDoctrine()->getManager();
        $post = new Post();
        $user = $em->getRepository("SUserBundle:User")->find($id);
        $post->setIdUser($user);
        $post->setTexte($texte);
        $post->setTitre($titre);
        $post->setImage($image);
        $post->setUpdatedAt(new \DateTime());
        $post->setDate(new \DateTime());
        $post->setNbSignal(0);
        $em->persist($post);
        $em->flush();
        return new JsonResponse("post added");
    }

    public function getUniqWSAction(){
        return new JsonResponse(uniqid().".jpg");
    }

}
