<?php
/**
 * Created by PhpStorm.
 * User: ACER
 * Date: 26/02/2018
 * Time: 16:50
 */

namespace LocalBundle\Form;


use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\Extension\Core\Type\TextareaType;
use Symfony\Component\Form\FormBuilderInterface;

class CommType extends AbstractType
{
    /**
     * {@inheritdoc}
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {

        $builder
            ->add('rating',ChoiceType::class,array('choices'=>array('1'=>'1','2'=>'2','3'=>'3','4'=>'4','5'=>'5'),'multiple'=>false,'label'=>'Rating','attr'=>array('class'=>'form-control')))
            ->add('contenu',TextareaType::class,array('label'=>'Contenu','attr'=>array('class'=>'form-control'),'required'=>false))
            ->add('Commenter',SubmitType::class,array('label'=>'Commenter','attr'=>array('class'=>'button button-circle')))


        ;
    }
}