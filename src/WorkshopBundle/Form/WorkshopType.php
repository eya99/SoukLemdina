<?php

namespace WorkshopBundle\Form;

use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use Symfony\Component\DomCrawler\Tests\Field\TextareaFormFieldTest;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\Form\Extension\Core\Type\FileType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\Extension\Core\Type\TextareaType;
use Symfony\Component\Form\Extension\Core\Type\DateType;
use Symfony\Component\HttpFoundation\File\UploadedFile;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\Form\FormInterface;

use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Validator\Constraints\Date;

class WorkshopType extends AbstractType
{
    /**
     * {@inheritdoc}
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('nomWorkshop',null,array('label' => 'Nom du workshop','attr'=>array('class' =>'form-control')))
            ->add('dateDebut',DateType::class,array('label' => 'Date début','attr'=>array('class' =>'form-control')))
            ->add('dateFin',DateType::class,array('label' => 'Date fin','attr'=>array('class' =>'form-control')))
            ->add('adresse',null,array('label' => 'adresse','attr'=>array('class' =>'form-control')))
            ->add('prix',null,array('label' => 'prix','attr'=>array('class' =>'form-control')))
            ->add('description',TextareaType::class,array('label' => 'Description','attr'=>array('class' =>'form-control')))
            ->add('nbPlace',null,array('label' => 'nombre de places ','attr'=>array('class' =>'form-control')))
            ->add('imageFile', FileType::class, array('required'=>false,'label' => 'Image du profile','attr'   =>  array(
                'class'   => 'form-control')))
            //->add('planning',FileType::class,array('label' => 'Planning (versionpdf) ','attr'=>array('class' =>'form-control')))
           // ->add('idUser',null,array('label' => 'n ','attr'=>array('class' =>'form-control')))
            //->add('nbSignal',null,array('label' => 's ','attr'=>array('class' =>'form-control')))

            ->add('type',ChoiceType::class,
                array('choices'=>array('patisserie Traditionnelle'=>'patisserie Traditionnelle','couture et borderie'=>'couture et borderie','autres'=>'autres'),'attr'=>array('class'=>'form-control')))

            ->add('Ajouter',SubmitType::class,
                array('label'=>'Publier','attr' =>array('class'=>'button button-3d button-black nomargin')));
    }/**
     * {@inheritdoc}
     */
    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'WorkshopBundle\Entity\Workshop'
        ));
    }

    /**
     * {@inheritdoc}
     */
    public function getBlockPrefix()
    {
        return 'workshopbundle_workshop';
    }


}
