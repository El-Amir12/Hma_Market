<?php
// src/Form/AnalysisPriceType.php

namespace App\Form;

use App\Entity\AnalysisPrice;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\CheckboxType;
use Symfony\Component\Form\Extension\Core\Type\IntegerType;
use Symfony\Component\Form\Extension\Core\Type\TextareaType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Validator\Constraints\GreaterThanOrEqual;
use Symfony\Component\Validator\Constraints\NotBlank;
use Symfony\Component\Validator\Constraints\PositiveOrZero;

class AnalysisPriceType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
            ->add('type', TextType::class, [
                'label' => 'Type (identifiant unique)',
                'help' => 'Ex: standard, powerbi, custom, subscription',
                'attr' => ['class' => 'form-control'],
                'constraints' => [
                    new NotBlank(['message' => 'Le type est obligatoire.']),
                ],
            ])
            ->add('label', TextType::class, [
                'label' => 'Libellé',
                'help' => 'Ex: Analyse Standard, Analyse Power BI',
                'attr' => ['class' => 'form-control'],
                'constraints' => [
                    new NotBlank(['message' => 'Le libellé est obligatoire.']),
                ],
            ])
            ->add('description', TextareaType::class, [
                'label' => 'Description',
                'required' => false,
                'attr' => ['class' => 'form-control', 'rows' => 3],
            ])
            ->add('price', IntegerType::class, [
                'label' => 'Prix (FCFA)',
                'attr' => ['class' => 'form-control'],
                'constraints' => [
                    new NotBlank(['message' => 'Le prix est obligatoire.']),
                    new GreaterThanOrEqual(['value' => 0, 'message' => 'Le prix doit être supérieur ou égal à 0.']),
                ],
            ])
            ->add('display_order', IntegerType::class, [
                'label' => "Ordre d'affichage",
                'required' => false,
                'attr' => ['class' => 'form-control', 'min' => 0],
                'constraints' => [
                    new PositiveOrZero(['message' => "L'ordre d'affichage doit être un nombre positif ou zéro."]),
                ],
            ])
            ->add('is_active', CheckboxType::class, [
                'label' => 'Actif',
                'required' => false,
                'attr' => ['class' => 'form-check-input'],
            ]);
    }
    
    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => AnalysisPrice::class,
        ]);
    }
}