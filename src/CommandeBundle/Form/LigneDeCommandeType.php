<?php
/**
 * Created by PhpStorm.
 * User: hatem
 * Date: 2/16/2018
 * Time: 1:10 AM
 */

namespace CommandeBundle\Form;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\FormTypeInterface;

class LigneDeCommandeType extends AbstractType
{
    /**
     * {@inheritdoc}
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder->add('adresse',null,array('label' => 'Adresse','attr'   =>  array(
            'class'   => 'form-control', 'id' => 'user_input_autocomplete_address', 'placeholder' => 'Votre adresse...')))
            ->add('adresse2',null,array('label' => 'Adresse alternative','attr'   =>  array(
                'class'   => 'form-control','required'=>false, 'placeholder' => 'Votre deuxième adresse'
            )))
            ->add('ville',null,array('attr'   =>  array(
                'class'   => 'form-control', 'name'=>'locality',
                'id' => 'ville')))
            ->add('codePostal',null,array('attr'   =>  array(
                'class'   => 'form-control', 'id'=> 'codepostal')))
            ->add('numTel',null,array('label' => 'Numero de telephone','attr'   =>  array(
                'class'   => 'form-control')))
            ->add('save',SubmitType::class,array('label' => 'Livrer à cette adresse','attr'   =>  array(
                'class'   => 'button button-3d button-black')));
    }/**
 * {@inheritdoc}
 */
    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'CommandeBundle\Entity\LigneDeCommande'
        ));
    }

    /**
     * {@inheritdoc}
     */
    public function getBlockPrefix()
    {
        return 'commandebundle_lignedecommande';
    }




}