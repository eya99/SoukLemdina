<?php

namespace LocalBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\Form\Extension\Core\Type\FileType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\Extension\Core\Type\TextareaType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\HttpFoundation\File\MimeType\FileinfoMimeTypeGuesser;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\HttpFoundation\File\File;
use Vich\UploaderBundle\Form\Type\VichFileType;


class LocalType extends AbstractType
{
    /**
     * {@inheritdoc}
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('image',FileType::class,(array('required'=>'true','attr'=>array('class'=>'form-control'))))
            ->add('superficie',TextareaType::class,array('label'=>'Superficie','attr'=>array('class'=>'form-control')))
            ->add('adresse',TextareaType::class,array('label'=>'Adresse','attr'=>array('class'=>'form-control')))
            ->add('telephone',TextareaType::class,array('label'=>'Téléphone','attr'=>array('class'=>'form-control')))
            ->add('prix',TextareaType::class,array('label'=>'Prix','attr'=>array('class'=>'form-control')))
            ->add('type',ChoiceType::class,array('choices'=>array('Espace vide'=>'Espace vide','Boutique'=>'Boutique','Restaurant'=>'Restaurant','Café'=>'Cafe'),'multiple'=>false,'label'=>'Type','attr'=>array('class'=>'form-control')))
            ->add('description',TextareaType::class,array('label'=>'Description','attr'=>array('class'=>'form-control')))


           ;
    }/**
     * {@inheritdoc}
     */
    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'LocalBundle\Entity\Local'
        ));
    }

    /**
     * {@inheritdoc}
     */
    public function getBlockPrefix()
    {
        return 'localbundle_local';
    }


}
