<?php
// src/Form/CustomerRegistrationType.php
namespace App\Form;

use App\Entity\Customer;
use App\Form\Type\CountryType;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\CheckboxType;
use Symfony\Component\Form\Extension\Core\Type\EmailType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Validator\Constraints\Email;
use Symfony\Component\Validator\Constraints\Length;
use Symfony\Component\Validator\Constraints\NotBlank;

class CustomerRegistrationType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
            ->add('email', EmailType::class, [
                'label' => 'Email *',
                'attr' => [
                    'class' => 'form-control form-control-lg',
                    'placeholder' => 'votre@email.com',
                    'autocomplete' => 'email'
                ],
                'constraints' => [
                    new NotBlank(['message' => 'L\'email est obligatoire.']),
                    new Email(['message' => 'Veuillez saisir un email valide.']),
                ]
            ])
            ->add('full_name', TextType::class, [
                'label' => 'Nom complet *',
                'attr' => [
                    'class' => 'form-control form-control-lg',
                    'placeholder' => 'Votre nom complet',
                    'autocomplete' => 'name'
                ],
                'constraints' => [
                    new NotBlank(['message' => 'Le nom complet est obligatoire.']),
                    new Length([
                        'min' => 2,
                        'minMessage' => 'Le nom doit contenir au moins {{ limit }} caractères.',
                        'max' => 100,
                        'maxMessage' => 'Le nom ne doit pas dépasser {{ limit }} caractères.'
                    ]),
                ]
            ])
            ->add('phone', TextType::class, [
                'label' => 'Téléphone',
                'required' => false,
                'attr' => [
                    'class' => 'form-control form-control-lg',
                    'placeholder' => '+229 01 56 13 92 00'
                ],
                'constraints' => [
                    new Length([
                        'max' => 30,
                        'maxMessage' => 'Le numéro de téléphone ne doit pas dépasser {{ limit }} caractères.'
                    ]),
                ]
            ])
            ->add('address', TextType::class, [
                'label' => 'Adresse',
                'required' => false,
                'attr' => [
                    'class' => 'form-control form-control-lg',
                    'placeholder' => 'Votre adresse complète'
                ]
            ])
            ->add('city', TextType::class, [
                'label' => 'Ville',
                'required' => false,
                'attr' => [
                    'class' => 'form-control form-control-lg',
                    'placeholder' => 'Votre ville'
                ]
            ])
            ->add('country', CountryType::class, [
                'label' => 'Pays',
                'required' => false,
            ])
            ->add('terms', CheckboxType::class, [
                'label' => 'J\'accepte les conditions générales d\'utilisation *',
                'mapped' => false,
                'required' => true,
                'constraints' => [
                    new NotBlank(['message' => 'Vous devez accepter les conditions générales.']),
                ],
                'attr' => [
                    'class' => 'form-check-input'
                ]
            ]);
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => Customer::class,
            'csrf_protection' => true,
            'csrf_field_name' => '_csrf_token',
            'csrf_token_id' => 'customer_registration',
        ]);
    }
}