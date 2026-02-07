<?php
// src/Form/PurchaseItemType.php

namespace App\Form;

use App\Entity\PurchaseItem;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\DateType;
use Symfony\Component\Form\Extension\Core\Type\NumberType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class PurchaseItemType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
            ->add('product', ProductAutocompleteType::class, [
                'label' => 'Produit',
                'required' => true,
                'attr' => ['class' => 'product-autocomplete'],
            ])
            ->add('batch_number', TextType::class, [
                'label' => 'Numéro de lot',
                'required' => true,
                'attr' => ['class' => 'form-control batch-number'],
            ])
            ->add('quantity', NumberType::class, [
                'label' => 'Quantité',
                'required' => true,
                'html5' => true,
                'attr' => ['class' => 'form-control quantity', 'min' => 1],
            ])
            ->add('unit_price', NumberType::class, [
                'label' => 'Prix unitaire (FCFA)',
                'required' => true,
                'html5' => true,
                'scale' => 2,
                'attr' => ['class' => 'form-control unit-price', 'min' => 0, 'step' => 0.01],
            ])
            ->add('expiry_date', DateType::class, [
                'label' => 'Date d\'expiration',
                'required' => false,
                'widget' => 'single_text',
                'html5' => true,
                'attr' => ['class' => 'form-control expiry-date'],
            ])
            ->add('manufacturing_date', DateType::class, [
                'label' => 'Date de fabrication',
                'required' => false,
                'widget' => 'single_text',
                'html5' => true,
                'attr' => ['class' => 'form-control manufacturing-date'],
            ]);
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => PurchaseItem::class,
        ]);
    }
}