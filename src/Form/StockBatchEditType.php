<?php
// src/Form/StockBatchEditType.php

namespace App\Form;

use App\Entity\Location;
use App\Entity\Product;
use App\Entity\StockBatch;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\CheckboxType;
use Symfony\Component\Form\Extension\Core\Type\DateType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class StockBatchEditType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
            ->add('locationEntity', EntityType::class, [
                'class' => Location::class,
                'label' => 'Emplacement',
                'required' => false,
                'placeholder' => '-- Sélectionner un emplacement --',
                'choice_label' => 'displayName',
                'attr' => [
                    'class' => 'form-select select2-location',
                    'data-placeholder' => 'Rechercher un emplacement...'
                ],
                'help' => 'Sélectionnez l\'emplacement physique du lot'
            ])
            ->add('is_active', CheckboxType::class, [
                'label' => 'Lot actif (disponible à la vente)',
                'required' => false,
                'help' => 'Désactiver un lot le rend indisponible à la vente',
                'attr' => ['class' => 'form-check-input']
            ]);
        
        // Ajouter le champ date d'expiration UNIQUEMENT si le produit est périssable
        if (isset($options['product']) && $options['product'] instanceof Product && $options['product']->hasExpiryDate()) {
            $helpText = 'Modifiable uniquement si aucune vente n\'a été effectuée';
            
            // Si des ventes sont associées, ajouter une information supplémentaire
            if (isset($options['has_sales']) && $options['has_sales'] === true) {
                $helpText = '❌ Non modifiable car des ventes sont déjà associées à ce lot';
            }
            
            $builder->add('expiry_date', DateType::class, [
                'label' => 'Date d\'expiration',
                'required' => false,
                'widget' => 'single_text',
                'help' => $helpText,
                'attr' => [
                    'class' => 'form-control',
                    'disabled' => isset($options['has_sales']) && $options['has_sales'] === true
                ]
            ]);
        }
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => StockBatch::class,
            'product' => null,      // Passage du produit pour savoir s'il est périssable
            'has_sales' => false,   // Indique si des ventes sont associées au lot
        ]);
    }
}