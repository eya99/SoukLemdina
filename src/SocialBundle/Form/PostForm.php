<?php

namespace SocialBundle\Form;

use SocialBundle\Entity\Post;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\FileType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\Extension\Core\Type\TextareaType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class PostForm extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('imageFile', FileType::class, array('required'=>false,'label' => 'Image du profile','attr'   =>  array(
                'class'   => 'form-control')))
            ->add('titre', null, array('label' => 'Titre de la publication','attr'   =>  array(
                'class'   => 'form-control')))
            ->add('texte',TextareaType::class, array('label' => 'Écrire Ici','attr'   =>  array(
                'class'   => 'form-control', 'placeholder' => 'Manifestez-Vous!')))
            ->add('save',SubmitType::class, array('label' => 'Publier','attr' => array(
                'class' => 'button button-3d button-black'
            )))
            ;
    }

    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => Post::class,
        ));
    }

    public function getName()
    {
        return 'social_bundle_post_form';
    }
}
