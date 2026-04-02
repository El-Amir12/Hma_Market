<?php
// src/Form/SupplierType.php

namespace App\Form;

use App\Entity\Supplier;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\CheckboxType;
use Symfony\Component\Form\Extension\Core\Type\EmailType;
use Symfony\Component\Form\Extension\Core\Type\TelType;
use Symfony\Component\Form\Extension\Core\Type\TextareaType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Validator\Constraints\Email;
use Symfony\Component\Validator\Constraints\Length;
use Symfony\Component\Validator\Constraints\NotBlank;
use Symfony\Component\Validator\Constraints\Regex;

class SupplierType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
            ->add('name', TextType::class, [
                'label' => 'Nom du fournisseur *',
                'attr' => [
                    'placeholder' => 'Ex: Société Générale, Camtel, etc.',
                    'class' => 'form-control'
                ],
                'constraints' => [
                    new NotBlank(['message' => 'Le nom est obligatoire']),
                    new Length(['max' => 100, 'maxMessage' => 'Le nom ne doit pas dépasser {{ limit }} caractères'])
                ]
            ])
            ->add('contact_person', TextType::class, [
                'label' => 'Personne de contact *',
                'attr' => [
                    'placeholder' => 'Nom du contact principal',
                    'class' => 'form-control'
                ],
                'constraints' => [
                    new NotBlank(['message' => 'Le nom du contact est obligatoire']),
                    new Length(['max' => 50, 'maxMessage' => 'Le nom ne doit pas dépasser {{ limit }} caractères'])
                ]
            ])
            ->add('phone', TelType::class, [
                'label' => 'Téléphone *',
                'attr' => [
                    'placeholder' => 'Ex: 691234567',
                    'class' => 'form-control'
                ],
                'constraints' => [
                    new NotBlank(['message' => 'Le téléphone est obligatoire']),
                    new Regex([
                        'pattern' => '/^[0-9+\-\s()]{6,20}$/',
                        'message' => 'Le numéro de téléphone n\'est pas valide'
                    ])
                ]
            ])
            ->add('email', EmailType::class, [
                'label' => 'Email *',
                'attr' => [
                    'placeholder' => 'contact@fournisseur.com',
                    'class' => 'form-control'
                ],
                'constraints' => [
                    new NotBlank(['message' => 'L\'email est obligatoire']),
                    new Email(['message' => 'L\'email n\'est pas valide']),
                    new Length(['max' => 100, 'maxMessage' => 'L\'email ne doit pas dépasser {{ limit }} caractères'])
                ]
            ])
            ->add('adress', TextareaType::class, [
                'label' => 'Adresse *',
                'attr' => [
                    'placeholder' => 'Adresse complète...',
                    'class' => 'form-control',
                    'rows' => 3
                ],
                'constraints' => [
                    new NotBlank(['message' => 'L\'adresse est obligatoire']),
                    new Length(['max' => 255, 'maxMessage' => 'L\'adresse ne doit pas dépasser {{ limit }} caractères'])
                ]
            ])
            ->add('is_active', CheckboxType::class, [
                'label' => 'Activer le fournisseur',
                'required' => false,
                'attr' => ['class' => 'form-check-input'],
                'label_attr' => ['class' => 'form-check-label']
            ]);
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => Supplier::class,
        ]);
    }
}