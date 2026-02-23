<?php
// src/Form/UserType.php

namespace App\Form;

use App\Entity\User;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\EmailType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\Form\Extension\Core\Type\FileType;
use Symfony\Component\Form\Extension\Core\Type\CheckboxType;
use Symfony\Component\Form\Extension\Core\Type\DateType;
use Symfony\Component\Validator\Constraints\Image;

class UserType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
            ->add('email', EmailType::class, [
                'label' => 'Email',
                'attr' => [
                    'class' => 'form-control' . (!$options['can_edit_email'] ? ' bg-light' : ''),
                    'placeholder' => 'exemple@email.com',
                    'readonly' => !$options['can_edit_email'],
                    'autocomplete' => 'email'
                ],
                'row_attr' => ['class' => 'mb-3'],
            ])
            ->add('full_name', TextType::class, [
                'label' => 'Nom complet',
                'attr' => [
                    'class' => 'form-control',
                    'placeholder' => 'Nom et prénom'
                ],
                'row_attr' => ['class' => 'mb-3']
            ])
            ->add('phone', TextType::class, [
                'label' => 'Téléphone',
                'required' => false,
                'attr' => [
                    'class' => 'form-control',
                    'placeholder' => '+212 6XX XX XX XX'
                ],
                'row_attr' => ['class' => 'mb-3']
            ])
            ->add('employment_date', DateType::class, [
                'label' => "Date d'embauche",
                'required' => false,
                'widget' => 'single_text',
                'attr' => ['class' => 'form-control'],
                'row_attr' => ['class' => 'mb-3']
            ])
            ->add('photo', FileType::class, [
                'label' => 'Photo de profil',
                'required' => false,
                'mapped' => false,
                'attr' => [
                    'class' => 'form-control d-none',
                    'accept' => 'image/*',
                    'id' => 'user_photo_input'
                ],
                'constraints' => [
                    new Image([
                        'maxSize' => '2M',
                        'mimeTypes' => ['image/jpeg', 'image/png', 'image/gif', 'image/webp'],
                    ])
                ],
                'row_attr' => ['class' => 'mb-3']
            ]);

        // ============================================
        // GESTION DES RÔLES - VERSION CORRIGÉE
        // ============================================
        
        /** @var User $targetUser */
        $targetUser = $builder->getData();
        
        // Déterminer le rôle actuel de l'utilisateur cible (sans ROLE_USER)
        $currentRole = 'ROLE_USER';
        if ($targetUser && $targetUser instanceof User) {
            $roles = $targetUser->getRoles();
            foreach ($roles as $role) {
                if ($role !== 'ROLE_USER') {
                    $currentRole = $role;
                    break;
                }
            }
        }
        
        // CONSTRUCTION DES CHOIX DE RÔLES DE BASE
        $roleChoices = [
            'Administrateur' => 'ROLE_ADMIN',
            'Gestionnaire' => 'ROLE_MANAGER',
            'Responsable Stock' => 'ROLE_STOCK_MANAGER',
            'Caissier' => 'ROLE_CASHIER',
        ];
        
        // ✅ SI L'UTILISATEUR CONNECTÉ EST SUPER ADMIN
        // On ajoute l'option Super Administrateur
        if ($options['is_super_admin']) {
            $roleChoices = ['Super Administrateur' => 'ROLE_SUPER_ADMIN'] + $roleChoices;
        }
        
        // ✅ SI L'UTILISATEUR CIBLE EST SUPER ADMIN MAIS L'ÉDITEUR NE L'EST PAS
        // On garde l'option mais en lecture seule
        if ($currentRole === 'ROLE_SUPER_ADMIN' && !$options['is_super_admin']) {
            $roleChoices = ['Super Administrateur' => 'ROLE_SUPER_ADMIN'] + $roleChoices;
            $options['can_edit_role'] = false;
        }
        
        // Ajout du champ rôle
        $builder->add('roles', ChoiceType::class, [
            'label' => 'Rôle',
            'choices' => $roleChoices,
            'multiple' => false,
            'expanded' => false,
            'attr' => [
                'class' => 'form-select' . (!$options['can_edit_role'] ? ' bg-light' : ''),
                'disabled' => !$options['can_edit_role'],
            ],
            'row_attr' => ['class' => 'mb-3'],
            'mapped' => true,
            'data' => $currentRole, // Valeur pré-sélectionnée
        ]);

        // Champ is_active uniquement si ce n'est pas l'utilisateur lui-même
        if (!$options['is_self'] || $options['is_super_admin']) {
            $builder->add('is_active', CheckboxType::class, [
                'label' => 'Utilisateur actif',
                'required' => false,
                'row_attr' => ['class' => 'mb-3 form-check form-switch'],
                'attr' => ['class' => 'form-check-input'],
                'label_attr' => ['class' => 'form-check-label']
            ]);
        }
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => User::class,
            'is_new' => true,
            'is_super_admin' => false, // ✅ TRUE si l'utilisateur connecté est SUPER_ADMIN
            'can_edit_email' => true,
            'can_edit_role' => true,
            'is_self' => false,        // ✅ TRUE si on édite son propre profil
        ]);
    }
}