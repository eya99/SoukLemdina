<?php
/**
 * Created by PhpStorm.
 * User: ACER
 * Date: 14/02/2018
 * Time: 16:35
 */

namespace LocalBundle\Form;


use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\Form\Extension\Core\Type\TextareaType;
use Symfony\Component\Form\FormBuilderInterface;

class RechercheType extends AbstractType

{
    /**
     * {@inheritdoc}
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {

        $builder
            ->add('superficie',TextareaType::class,array('label'=>'Superficie','attr'=>array('class'=>'form-control'),'required'=>false ))
            ->add('prix',TextareaType::class,array('label'=>'Prix de','attr'=>array('class'=>'form-control'),'required'=>false))
            ->add('a',TextareaType::class,array('label'=>'A','attr'=>array('class'=>'form-control'),'required'=>false))
            ->add('type',ChoiceType::class,array('choices'=>array('Espace vide'=>'Espace vide','Boutique'=>'Boutique','Restaurant'=>'Restaurant','Café'=>'Cafe'),'multiple'=>false,'label'=>'Type','attr'=>array('class'=>'form-control')))



        ;
    }

}