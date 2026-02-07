<?php
// src/Form/ProductAutocompleteType.php

namespace App\Form;

use App\Entity\Product;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\OptionsResolver\OptionsResolver;

class ProductAutocompleteType extends AbstractType
{
    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'class' => Product::class,
            'choice_label' => function(Product $product) {
                return sprintf('%s (%s)', $product->getName(), $product->getBarcode());
            },
            'placeholder' => 'Sélectionner un produit...',
            'attr' => ['class' => 'form-control product-autocomplete'],
        ]);
    }

    public function getParent(): string
    {
        return EntityType::class;
    }
}