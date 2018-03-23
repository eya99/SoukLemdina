<?php
/**
 * Created by PhpStorm.
 * User: asus
 * Date: 26/02/2018
 * Time: 21:02
 */

namespace StockBundle\Form;
use StockBundle\Entity\Produit;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\IntegerType;
use Symfony\Component\Form\Extension\Core\Type\PercentType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\Form\Extension\Core\Type\HiddenType;
use Symfony\Component\Form\Extension\Core\Type\TextareaType;
use Doctrine\ORM\EntityRepository;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;

use Symfony\Component\Form\Extension\Core\Type\RangeType;


class ModProduitType extends AbstractType
{
    /**
     * {@inheritdoc}
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('libelle',null,array('label' => 'Libellé','attr'   =>  array('class'   => 'form-control')))
            ->add('description',TextareaType::class,array('label' => 'Description','attr'   =>  array('class'   => 'form-control')))
            ->add('type',ChoiceType::class,array( 'choices'  => array('Normal'=>'Normal','Sur commande'=>'Sur Commande'),'label' => 'Type','attr'   =>  array('class'   => 'form-control')))
            ->add('categorie',ChoiceType::class,array( 'choices'  => array('Arts de la table'=>'Arts de la table','Habillement'=>'Habillement','Bijoux'=>'Bijoux','Produits du Terroire'=>'Produits du Terroire','Maroquinerie'=>'Maroquinerie','Décoration'=>'Décoration'),'label' => 'Catégorie','attr'   =>  array('class'   => 'form-control')))
            ->add('prix',null,array('label' => 'Prix','attr'   =>  array('class'   => 'form-control')))
            ->add('promotion',RangeType::class,array('label' => 'Pourcentage de promotion','attr'   =>  array('min' =>0, 'max' =>100,'class'=>'range_02')))
            ->add('quqntite',null,array('label' => 'Quantité','attr'   =>  array('class'   => 'form-control')))
            ->add('save',SubmitType::class,array('label'=> 'Ajouter','attr' => array('onclick'=> 'return confirm("Are you sure?")','class'=>'button button-3d button-black')));
    }/**
 * {@inheritdoc}
 */
    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => Produit::class,
        ));
    }

    /**
     * {@inheritdoc}
     */
    public function getName()
    {
        return 'stock_bundle_produit_mod_form';
    }
}