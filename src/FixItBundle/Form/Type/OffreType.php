<?php

namespace FixItBundle\Form\Type;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Lexik\Bundle\FormFilterBundle\Filter\Form\Type\EntityFilterType;

class OffreType extends AbstractType
{
    /**
     * {@inheritdoc}
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
        
            ->add('budget')
            ->add('Titre')
            ->add('Description')
            ->add('service', EntityFilterType::class, array('class' => 'FixItBundle\Entity\Service',
                'choice_label'=>'nom',
                'multiple'=>false))
            ->add('User', EntityFilterType::class, array('class' => 'AppBundle\Entity\User',
                'choice_label'=>'username',
                'multiple'=>false))
        ;
    }

    /**
     * {@inheritdoc}
     */
    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'FixItBundle\Entity\Offre',
        ));
    }

    /**
     * {@inheritdoc}
     */
    public function getName()
    {
        return 'offre';
    }
}
