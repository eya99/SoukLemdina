<?php

namespace SocialBundle\Form;

use SocialBundle\Entity\Profile;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\BirthdayType;
use Symfony\Component\Form\Extension\Core\Type\FileType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\Extension\Core\Type\TextareaType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class ProfileForm extends AbstractType
{
    /**
     * (@inheritdoc)
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('imageFile', FileType::class, array('required'=>false,'label' => 'Image du profile','attr'   =>  array(
                'class'   => 'form-control')))
            ->add('tagline', null, array('label' => 'Slogan du profile','attr'   =>  array(
                'class'   => 'form-control')))
            ->add('aboutMe', TextareaType::class, array('label' => 'Parlez-nous de Vous','attr'   =>  array(
                'class'   => 'form-control')))
            ->add('datenaiss', BirthdayType::class, array('label' => 'Date de naissance','attr' => array(
                'class' => 'form-control')))
            ->add('save',SubmitType::class, array('label' => 'Enregistrer','attr' => array(
                'class' => 'button button-3d button-black'
            )))
        ;
    }

    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => Profile::class,
        ));
    }

    public function getName()
    {
        return 'social_bundle_profile_form';
    }
}
