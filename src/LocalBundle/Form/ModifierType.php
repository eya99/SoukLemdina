<?php
/**
 * Created by PhpStorm.
 * User: ACER
 * Date: 24/02/2018
 * Time: 21:58
 */

namespace LocalBundle\Form;


use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\Form\Extension\Core\Type\FileType;
use Symfony\Component\Form\Extension\Core\Type\TextareaType;
use Symfony\Component\Form\FormBuilderInterface;

class ModifierType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('superficie',TextareaType::class,array('required'=>false,'label'=>'Superficie','attr'=>array('class'=>'form-control')))
            ->add('adresse',TextareaType::class,array('required'=>false,'label'=>'Adresse','attr'=>array('class'=>'form-control')))
            ->add('telephone',TextareaType::class,array('required'=>false,'label'=>'Téléphone','attr'=>array('class'=>'form-control')))
            ->add('prix',TextareaType::class,array('required'=>false,'label'=>'Prix','attr'=>array('class'=>'form-control')))
            ->add('type',ChoiceType::class,array('required'=>false,'choices'=>array('Espace vide'=>'Espace vide','Boutique'=>'Boutique','Restaurant'=>'Restaurant','Café'=>'Cafe'),'multiple'=>false,'label'=>'Type','attr'=>array('class'=>'form-control')))
            ->add('description',TextareaType::class,array('required'=>false,'label'=>'Description','attr'=>array('class'=>'form-control')))


        ;
    }

}