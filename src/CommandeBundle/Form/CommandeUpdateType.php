<?php

namespace CommandeBundle\Form;

use Doctrine\DBAL\Types\DateType;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class CommandeUpdateType extends AbstractType
{
    /**
     * {@inheritdoc}
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder->add('adresse',null,array('label' => 'adresse 1','attr'   =>  array(
            'class'   => 'form-control')))
            ->add('adresse2',null,array('label' => 'adresse 2','attr'   =>  array(
                'class'   => 'form-control')))
            ->add('ville',null,array('attr'   =>  array(
                'class'   => 'form-control')))
            ->add('codePostal',null,array('attr'   =>  array(
                'class'   => 'form-control')))
            ->add('numTel',null,array('attr'   =>  array(
                'class'   => 'form-control')))
            ->add('nomPrenom',null,array('attr'   =>  array(
                'class'   => 'form-control')));


    }/**
 * {@inheritdoc}
 */
    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'CommandeBundle\Entity\Commande'
        ));
    }

    /**
     * {@inheritdoc}
     */
    public function getBlockPrefix()
    {
        return 'commandebundle_commande';
    }


}
