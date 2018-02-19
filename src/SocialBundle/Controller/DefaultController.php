<?php

namespace SocialBundle\Controller;

use SocialBundle\Entity\Follow;
use SocialBundle\Entity\Post;
use SocialBundle\Entity\Profile;
use SocialBundle\Form\PostForm;
use SocialBundle\Form\ProfileForm;
use SUserBundle\Entity\User;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;

class DefaultController extends Controller
{
    public function indexAction()
    {
//        $em = $this->getDoctrine()->getManager();
//        $user = $this->container->get('security.token_storage')->getToken()->getUser();
//        $profile = $em->getRepository("SocialBundle:Profile")->findOneBy(array('idUser' => $user->getId()));
//        //$posts = $em->getRepository()
//        return $this->render('SocialBundle:Default:index.html.twig', array('profile' => $profile));
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
            return $this->redirectToRoute('fos_visitor_home');
        }

        return $this->render('SocialBundle:Profile:register.html.twig', array(
            'form' => $Form->createView(),'created' => 's','profile'=>$Profile));
    }

    public function delImageAction(Request $request, $id)
    {
        $em = $this->getDoctrine()->getManager();
        $Profile = $em->getRepository("SocialBundle:Profile")->find($id);
        $this->get('vich_uploader.upload_handler')->remove($Profile, 'imageFile');
        $em->persist($Profile);
        $em->flush();
        return $this->redirectToRoute('social_modifier_profile',array('id'=>$Profile->getId()));
    }

    public function searchAction(Request $request)
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
                $profile = $em->getRepository("SocialBundle:Profile")->findOneBy(array('idUser' => $u->getId()));
                $profiles = array_merge($profiles, array($profile));
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
        $posts = $em->getRepository("SocialBundle:Post")->findBy(array('idUser' => $id));
        $follow = $em->getRepository("SocialBundle:Follow")->findOneBy(array('idProfileFollowed' => $profile->getId(),'idProfileFollower' => $follower->getId()));
        $followers = $em->getRepository("SocialBundle:Follow")->findBy(array('idProfileFollowed' => $profile->getId()));
        if ($follow === null)
            return $this->render('SocialBundle:Profile:check.html.twig', array('posts' => $posts, 'profile' => $profile, 'form' => $Form->createView(), 'followers' => $followers));
        else
            return $this->render('SocialBundle:Profile:check.html.twig', array('posts' => $posts, 'profile' => $profile, 'form' => $Form->createView(), 'followers' => $followers, 'f' => 'set'));
    }

    public function deleteAction($id)
    {
        $em = $this->getDoctrine()->getManager();
        $user = $this->container->get('security.token_storage')->getToken()->getUser();
        if ($user){
        $fols = $em->getRepository("SocialBundle:Follow")->findBy(array('idProfileFollowed'=>$user->getId()));
        if ($fols){
            foreach ($fols as $f){
                $em->remove($f);
                $em->flush();
            }}

        $likes = $em->getRepository("SocialBundle:Jaime")->findBy(array('idUser'=>$id));
        if ($likes)
        foreach ($likes as $j){
            $em->remove($j);
            $em->flush();
        }

        $comms = $em->getRepository("SocialBundle:Comment")->findBy(array('idUser'=>$id));
        if ($comms){
        foreach ($comms as $c){
            $em->remove($c);
            $em->flush();
        }}

        $posts = $em->getRepository("SocialBundle:Post")->findBy(array('idUser'=>$id));
        if ($posts){
        foreach ($posts as $p){
            $em->remove($p);
            $em->flush();
        }}


        $Profile = $em->getRepository("SocialBundle:Profile")->findOneBy(array('idUser'=>$id));
        $em->remove($Profile);
        $em->flush();

        $User = $em->getRepository("SUserBundle:User")->findOneBy(array('id'=>$id));
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
        $Follow = $em->getRepository("SocialBundle:Follow")->findOneBy(array('idProfileFollowed' => $id,'idProfileFollower' => $follower->getId()));
        $followed = $em->getRepository("SocialBundle:Profile")->find($id);
        $em->remove($Follow);
        $em->flush();
        return $this->redirectToRoute('social_check_profile', array('id' => $followed->getIdUser()->getId()));
    }

    public function delPostAction($id)
    {
        $em = $this->getDoctrine()->getManager();
        $user = $this->container->get('security.token_storage')->getToken()->getUser();

        $likes = $em->getRepository("SocialBundle:Jaime")->findBy(array('idPost'=>$id));
        if ($likes)
            foreach ($likes as $j){
                $em->remove($j);
                $em->flush();
            }

        $comms = $em->getRepository("SocialBundle:Comment")->findBy(array('idPost'=>$id));
        if ($comms){
            foreach ($comms as $c){
                $em->remove($c);
                $em->flush();
            }}

        $Post = $em->getRepository("SocialBundle:Post")->findOneBy(array('id'=>$id));
        $em->remove($Post);
        $em->flush();

        return $this->redirectToRoute('social_check_profile', array('id' => $user->getId()));
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
            if ($user->getId() === $Post->getIdUser()) {
                $em->persist($Post);
                $em->flush();
                return $this->redirectToRoute('social_check_profile', array('id' => $user->getId()));
            }
            else
                return $this->redirectToRoute('social_check_profile', array('id' => $Post->getIdUser()));
        }

        return $this->render('SocialBundle:Post:modifier.html.twig', array(
            'form' => $Form->createView()));
    }
}
