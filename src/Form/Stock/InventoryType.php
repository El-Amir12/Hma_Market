<?php
// src/Form/Stock/InventoryType.php

namespace App\Form\Stock;

use App\Entity\Inventory;
use App\Entity\Location;
use Doctrine\ORM\EntityRepository;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\DateType;
use Symfony\Component\Form\Extension\Core\Type\TextareaType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class InventoryType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
            ->add('inventory_date', DateType::class, [
                'label' => 'Date de l\'inventaire',
                'widget' => 'single_text',
                'required' => true,
                'attr' => ['class' => 'form-control']
            ])
            ->add('location', EntityType::class, [
                'label' => 'Emplacement (optionnel)',
                'class' => Location::class,
                'query_builder' => function (EntityRepository $er) use ($options) {
                    return $er->createQueryBuilder('l')
                        ->where('l.hma_service = :hmaService')
                        ->setParameter('hmaService', $options['hma_service'])
                        ->orderBy('l.name', 'ASC');
                },
                'choice_label' => 'displayName',
                'placeholder' => '-- Tous les emplacements --',
                'required' => false,
                'attr' => ['class' => 'form-select select2-location']
            ])
            ->add('notes', TextareaType::class, [
                'label' => 'Notes',
                'required' => false,
                'attr' => [
                    'rows' => 3,
                    'class' => 'form-control',
                    'placeholder' => 'Instructions particulières, remarques...'
                ]
            ]);
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => Inventory::class,
            'hma_service' => null,
        ]);
        
        $resolver->setAllowedTypes('hma_service', ['App\Entity\HmaService', 'null']);
    }
}