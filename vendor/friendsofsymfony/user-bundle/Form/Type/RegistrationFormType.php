<?php

/*
 * This file is part of the FOSUserBundle package.
 *
 * (c) FriendsOfSymfony <http://friendsofsymfony.github.com/>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace FOS\UserBundle\Form\Type;

use FOS\UserBundle\Util\LegacyFormHelper;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\BirthdayType;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\Form\Extension\Core\Type\CountryType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class RegistrationFormType extends AbstractType
{
    /**
     * @var string
     */
    private $class;

    /**
     * @param string $class The User class name
     */
    public function __construct($class)
    {
        $this->class = $class;
    }

    /**
     * {@inheritdoc}
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('email', LegacyFormHelper::getType('Symfony\Component\Form\Extension\Core\Type\EmailType'), array('label' => 'form.email', 'translation_domain' => 'FOSUserBundle', 'attr'   =>  array(
                'class'   => 'form-control')))
            ->add('username', null, array('label' => 'form.username', 'translation_domain' => 'FOSUserBundle','attr'   =>  array(
                'class'   => 'form-control')))
            ->add('plainPassword', LegacyFormHelper::getType('Symfony\Component\Form\Extension\Core\Type\RepeatedType'), array(
                'type' => LegacyFormHelper::getType('Symfony\Component\Form\Extension\Core\Type\PasswordType'),
                'options' => array('translation_domain' => 'FOSUserBundle'),
                'first_options' => array('label' => 'form.password','attr'   =>  array(
                    'class'   => 'form-control')),
                'second_options' => array('label' => 'form.password_confirmation','attr'   =>  array(
                    'class'   => 'form-control')),
                'invalid_message' => 'fos_user.password.mismatch',
            ))
            ->add('firstname',null,array('label' => 'Prénom','attr'   =>  array(
                'class'   => 'form-control')))
            ->add('lastname',null,array('label' => 'Nom de Famille','attr'   =>  array(
                'class'   => 'form-control')))
            ->add('datenaiss', BirthdayType::class, array('label' => 'Date de naissance','attr' => array(
                'class' => 'form-control')))
            ->add('gender', ChoiceType::class, array(
                'choices'  => array(
                    'Other' => null,
                    'Homme' => 'Homme',
                    'Femme' => 'Femme',
                ),'label' => 'Sexe','attr'   =>  array(
                    'class'   => 'form-control')))
            ->add('rue',null,array('label' => 'rue','attr'   =>  array(
                'class'   => 'form-control')))
            ->add('zipCode',null,array('label' => 'zip code','attr'   =>  array(
                'class'   => 'form-control')))
            ->add('ville',null,array('label' => 'ville','attr'   =>  array(
                'class'   => 'form-control')))
            ->add('pays',CountryType::class,array('label' => 'Prénom','attr'   =>  array(
                'class'   => 'form-control')))
            ->add('phone',null,array('label' => 'Numéro de Téléphone','attr'   =>  array(
                'class'   => 'form-control')))
        ;
    }

    /**
     * {@inheritdoc}
     */
    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => $this->class,
            'csrf_token_id' => 'registration',
            // BC for SF < 2.8
            'intention' => 'registration',
        ));
    }

    // BC for SF < 3.0
    /**
     * {@inheritdoc}
     */
    public function getName()
    {
        return $this->getBlockPrefix();
    }

    /**
     * {@inheritdoc}
     */
    public function getBlockPrefix()
    {
        return 'fos_user_registration';
    }
}
