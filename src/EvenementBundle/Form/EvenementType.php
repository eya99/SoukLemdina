<?php

namespace EvenementBundle\Form;
use blackknight467\StarRatingBundle\Form\RatingType;
use Doctrine\DBAL\Types\TimeType;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use Symfony\Component\DomCrawler\Tests\Field\TextareaFormFieldTest;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\Form\Extension\Core\Type\DateTimeType;
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
use Symfony\Component\Validator\Constraints\DateTime;
use Symfony\Component\Validator\Constraints\Time;
use Symfony\Component\Validator\Constraints\TimeValidator;


class EvenementType extends AbstractType
{
    /**
     * {@inheritdoc}
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder->add('nomEvenement',TextType::class,array('label' => 'nom événement','attr'=>array('class' =>'form-control')))
            ->add('dateDebut',DateType::class,array('label' => 'Date début','attr'=>array('class' =>'form-control')))
            ->add('dateFin',DateType::class,array('label' => 'Date fin','attr'=>array('class' =>'form-control')))
           ->add('heure',\Symfony\Component\Form\Extension\Core\Type\TimeType::class,array('label' => 'Heure','attr'=>array('class' =>'form-control')))
            ->add('adresse',null,array('label' => 'adresse','attr'=>array('class' =>'form-control')))
            ->add('prix',null,array('label' => 'prix','attr'=>array('class' =>'form-control')))
            ->add('description',TextareaType::class,array('label' => 'Description','attr'=>array('class' =>'form-control')))
            ->add('nbPlace',null,array('label' => 'nombre de places ','attr'=>array('class' =>'form-control')))
            ->add('photo',FileType::class,array('label' => 'Photo','data_class'=>null,))
            ->add('type',ChoiceType::class,
            array('choices'=>array('musical'=>'musical','culturel'=>'culturel','vide dressing'=>'vide dressing','autres'=>'autres'),'attr'=>array('class'=>'form-control')))

        ->add('Ajouter',SubmitType::class,
            array('label'=>'Publier','attr' =>array('class'=>'button button-3d button-black nomargin')));
    }
    /**
     * {@inheritdoc}
     */
    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'EvenementBundle\Entity\Evenement'
        ));
    }

    /**
     * {@inheritdoc}
     */
    public function getBlockPrefix()
    {
        return 'evenementbundle_evenement';
    }


}
