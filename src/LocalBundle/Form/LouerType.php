<?php
/**
 * Created by PhpStorm.
 * User: ACER
 * Date: 20/02/2018
 * Time: 22:12
 */

namespace LocalBundle\Form;


use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\DateType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\FormBuilderInterface;

class LouerType extends AbstractType
{
    /**
     * {@inheritdoc}
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {

        $builder
            ->add('dateDeb',DateType::class,array('label'=>'Date début','widget'=>'choice','placeholder'=>array('year'=>'Année','month'=>'Mois','day'=>'Jour'),'attr'=>array('class'=>'form-control'),'required'=>true ))
            ->add('date',DateType::class,array('label'=>'Date fin','widget'=>'choice','placeholder'=>array('year'=>'Année','month'=>'Mois','day'=>'Jour'),'attr'=>array('class'=>'form-control'),'required'=>true ))
            ->add('Valider',SubmitType::class,array('attr'=>array('class'=>'button button-3d button-black nomargin','id'=>'btn')))


        ;
    }
}