<?php

namespace App\Form;

use App\Entity\User;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\EmailType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\Form\Extension\Core\Type\PasswordType;
use Symfony\Component\Form\Extension\Core\Type\RepeatedType;
use Symfony\Component\Form\Extension\Core\Type\FileType;
use Symfony\Component\Form\Extension\Core\Type\CheckboxType;
use Symfony\Component\Validator\Constraints\Image;
use Symfony\Component\Form\CallbackTransformer;

class UserType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
            ->add('email', EmailType::class, [
                'label' => 'Email',
                'attr' => [
                    'class' => 'form-control',
                    'placeholder' => 'exemple@email.com'
                ],
                'row_attr' => ['class' => 'mb-3']
            ])
            ->add('roles', ChoiceType::class, [
                'label' => 'Rôle',
                'choices' => [
                    'Administrateur' => 'ROLE_ADMIN',
                    'Caissier' => 'ROLE_CASHIER',
                    'Gestionnaire' => 'ROLE_MANAGER',
                    'Gestionnaire de stock' => 'ROLE_STOCK_MANAGER',
                    'Utilisateur' => 'ROLE_USER',
                ],
                'multiple' => false,
                'expanded' => false,
                'attr' => [
                    'class' => 'form-select',
                    'data-control' => 'select2'
                ],
                'row_attr' => ['class' => 'mb-3']
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
            ->add('photo', FileType::class, [
                'label' => 'Photo de profil',
                'required' => false,
                'mapped' => false,
                'attr' => [
                    'class' => 'form-control',
                    'accept' => 'image/*'
                ],
                'constraints' => [
                    new Image([
                        'maxSize' => '2M',
                        'mimeTypes' => ['image/jpeg', 'image/png', 'image/gif', 'image/webp'],
                        'mimeTypesMessage' => 'Veuillez télécharger une image valide (JPEG, PNG, GIF, WebP)',
                    ])
                ],
                'row_attr' => ['class' => 'mb-3']
            ])
            // AJOUT DU CHAMP IS_ACTIVE ICI
            ->add('is_active', CheckboxType::class, [
                'label' => 'Utilisateur actif',
                'required' => false,
                'row_attr' => ['class' => 'mb-3 form-check form-switch'],
                'attr' => [
                    'class' => 'form-check-input',
                    'role' => 'switch'
                ],
                'label_attr' => ['class' => 'form-check-label']
            ]);
        
        // Ajouter le champ mot de passe seulement pour la création
        if ($options['is_new']) {
            $builder->add('plainPassword', RepeatedType::class, [
                'type' => PasswordType::class,
                'invalid_message' => 'Les mots de passe doivent correspondre.',
                'options' => ['attr' => ['class' => 'form-control password-toggle']],
                'required' => true,
                'first_options'  => [
                    'label' => 'Mot de passe',
                    'attr' => [
                        'class' => 'form-control password-toggle',
                        'placeholder' => 'Minimum 12 caractères'
                    ],
                    'row_attr' => ['class' => 'mb-3']
                ],
                'second_options' => [
                    'label' => 'Confirmer le mot de passe',
                    'attr' => [
                        'class' => 'form-control password-toggle',
                        'placeholder' => 'Répétez le mot de passe'
                    ],
                    'row_attr' => ['class' => 'mb-3']
                ],
                'mapped' => false,
            ]);
        } else {
            // Pour l'édition, champ optionnel
            $builder->add('plainPassword', RepeatedType::class, [
                'type' => PasswordType::class,
                'invalid_message' => 'Les mots de passe doivent correspondre.',
                'options' => ['attr' => ['class' => 'form-control password-toggle']],
                'required' => false,
                'first_options'  => [
                    'label' => 'Nouveau mot de passe',
                    'attr' => [
                        'class' => 'form-control password-toggle',
                        'placeholder' => 'Laisser vide pour ne pas changer'
                    ],
                    'row_attr' => ['class' => 'mb-3']
                ],
                'second_options' => [
                    'label' => 'Confirmer le nouveau mot de passe',
                    'attr' => [
                        'class' => 'form-control password-toggle',
                        'placeholder' => 'Répétez le nouveau mot de passe'
                    ],
                    'row_attr' => ['class' => 'mb-3']
                ],
                'mapped' => false,
            ]);
        }
        
        // Transformer pour les rôles
        $builder->get('roles')
            ->addModelTransformer(new CallbackTransformer(
                function ($rolesArray) {
                    if (null === $rolesArray || empty($rolesArray)) {
                        return 'ROLE_USER';
                    }
                    
                    if (is_string($rolesArray)) {
                        return $rolesArray;
                    }
                    
                    foreach ($rolesArray as $role) {
                        if ($role !== 'ROLE_USER') {
                            return $role;
                        }
                    }
                    
                    return 'ROLE_USER';
                },
                function ($roleString) {
                    if (!$roleString) {
                        return ['ROLE_USER'];
                    }
                    return [$roleString];
                }
            ));
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => User::class,
            'is_new' => true,
        ]);
        
        $resolver->setAllowedTypes('is_new', 'bool');
    }
}