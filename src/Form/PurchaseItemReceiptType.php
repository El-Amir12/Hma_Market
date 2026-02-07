<?php

namespace App\Form;

use App\Entity\Product;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\DateType;

class PurchaseItemReceiptType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $product = $options['product'];
        
        $builder
            ->add('batch_number', TextType::class, [
                'label' => 'Numéro de lot',
                'required' => false,
                'attr' => [
                    'placeholder' => 'LOT-20240115-ABC123',
                    'class' => 'form-control',
                ],
                'help' => 'Laissez vide pour générer automatiquement',
            ]);
        
        // Afficher les dates seulement si le produit est périssable
        if ($product && $product->hasExpiryDate()) {
            $today = new \DateTime();
            $oneYearLater = (clone $today)->modify('+1 year');
            
            $builder
                ->add('manufacturing_date', DateType::class, [
                    'label' => 'Date de fabrication',
                    'widget' => 'single_text',
                    'required' => false,
                    'attr' => [
                        'class' => 'form-control',
                    ],
                    'data' => $today,
                ])
                ->add('expiry_date', DateType::class, [
                    'label' => 'Date d\'expiration',
                    'widget' => 'single_text',
                    'required' => false,
                    'attr' => [
                        'class' => 'form-control',
                    ],
                    'data' => $oneYearLater,
                ]);
        }
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => null,
            'product' => null,
        ]);
        
        $resolver->setAllowedTypes('product', ['null', Product::class]);
    }
}