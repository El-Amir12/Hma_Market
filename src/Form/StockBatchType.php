<?php
// src/Form/StockBatchType.php

namespace App\Form;

use App\Entity\StockBatch;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\CheckboxType;
use Symfony\Component\Form\Extension\Core\Type\DateType;
use Symfony\Component\Form\Extension\Core\Type\IntegerType;
use Symfony\Component\Form\Extension\Core\Type\MoneyType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Validator\Constraints\NotBlank;
use Symfony\Component\Validator\Constraints\Positive;
use Symfony\Component\Validator\Constraints\GreaterThanOrEqual;

class StockBatchType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
            ->add('batch_number', TextType::class, [
                'label' => 'Numéro de lot',
                'attr' => [
                    'placeholder' => 'Ex: LOT-001',
                    'class' => 'form-control'
                ],
                'constraints' => [
                    new NotBlank(['message' => 'Le numéro de lot est obligatoire'])
                ]
            ])
            ->add('purchase_price', MoneyType::class, [
                'label' => 'Prix d\'achat unitaire',
                'currency' => 'XAF',
                'scale' => 0,
                'attr' => [
                    'placeholder' => '0',
                    'class' => 'form-control',
                    'step' => '50'
                ],
                'constraints' => [
                    new NotBlank(['message' => 'Le prix d\'achat est obligatoire']),
                    new Positive(['message' => 'Le prix doit être positif'])
                ]
            ])
            ->add('quantity', IntegerType::class, [
                'label' => 'Quantité initiale',
                'attr' => [
                    'placeholder' => '0',
                    'class' => 'form-control',
                    'min' => 1
                ],
                'constraints' => [
                    new NotBlank(['message' => 'La quantité est obligatoire']),
                    new Positive(['message' => 'La quantité doit être positive'])
                ]
            ])
            ->add('remaining_quantity', IntegerType::class, [
                'label' => 'Quantité restante',
                'required' => false,
                'attr' => [
                    'placeholder' => 'Sera égale à la quantité initiale',
                    'class' => 'form-control',
                    'min' => 0
                ],
                'constraints' => [
                    new GreaterThanOrEqual(['value' => 0, 'message' => 'La quantité restante ne peut pas être négative'])
                ]
            ])
            ->add('manufacturing_date', DateType::class, [
                'label' => 'Date de fabrication',
                'widget' => 'single_text',
                'html5' => true,
                'attr' => [
                    'class' => 'form-control'
                ],
                'constraints' => [
                    new NotBlank(['message' => 'La date de fabrication est obligatoire'])
                ]
            ])
            ->add('expiry_date', DateType::class, [
                'label' => 'Date d\'expiration',
                'widget' => 'single_text',
                'html5' => true,
                'attr' => [
                    'class' => 'form-control'
                ],
                'constraints' => [
                    new NotBlank(['message' => 'La date d\'expiration est obligatoire'])
                ]
            ])
            ->add('is_active', CheckboxType::class, [
                'label' => 'Lot actif',
                'required' => false,
                'attr' => [
                    'class' => 'form-check-input'
                ],
                'data' => true
            ]);
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => StockBatch::class,
        ]);
    }
}