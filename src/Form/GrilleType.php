<?php

namespace App\Form;

use App\Entity\Grille;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\IntegerType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class GrilleType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
            ->add('n1', null, [
                'label' => 'Premier numéro : ',
                'attr' => [
                    'class' => 'border border-blue-200 rounded-xl mt-5'
                ]
            ])
            ->add('n2', null, [
                'label' => 'Deuxième numéro : ',
                'attr' => [
                    'class' => 'border border-blue-200 rounded-xl'
                ]
            ])
            ->add('n3', null, [
                'label' => 'Troisième numéro : ',
                'attr' => [
                    'class' => 'border border-blue-200 rounded-xl'
                ]
            ])
            ->add('n4', null, [
                'label' => 'Quatrième numéro : ',
                'attr' => [
                    'class' => 'border border-blue-200 rounded-xl'
                ]
            ])
            ->add('n5', null, [
                'label' => 'Cinquième numéro : ',
                'attr' => [
                    'class' => 'border border-blue-200 rounded-xl'
                ]
            ])
            ->add('nchance', null, [
                'label' => 'Numéro chance : ',
                'attr' => [
                    'class' => 'border border-blue-100 rounded-xl'
                ]
            ]);
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => Grille::class,
        ]);
    }
}
