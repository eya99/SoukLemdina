<?php
/**
 * Created by PhpStorm.
 * User: asus
 * Date: 12/02/2018
 * Time: 22:46
 */

namespace EvenementBundle\Form;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\Extension\Core\Type\TextareaType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;


class RechercheForm extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options){
        $builder->add('nomevenement')
            ->add('type')
            ->add('prix')
            ->add('RechercheDQL',SubmitType::class);

    }

}