<?php
// src/Form/PurchaseConfirmationType.php
namespace App\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\CheckboxType;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\Form\Extension\Core\Type\TextareaType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class PurchaseConfirmationType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
            ->add('notify_by_email', CheckboxType::class, [
                'label' => 'Envoyer la confirmation par email',
                'required' => false,
                'data' => true
            ])
            ->add('notify_by_whatsapp', CheckboxType::class, [
                'label' => 'Envoyer la confirmation par WhatsApp',
                'required' => false,
                'data' => true
            ])
            ->add('send_image', CheckboxType::class, [
                'label' => 'Inclure les images des produits (WhatsApp)',
                'required' => false,
                'data' => true
            ])
            ->add('confirmation_message', TextareaType::class, [
                'label' => 'Message personnalisé (optionnel)',
                'required' => false,
                'attr' => [
                    'rows' => 3,
                    'placeholder' => 'Ajouter un message personnalisé pour le fournisseur...'
                ]
            ]);
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'csrf_protection' => true,
            'csrf_field_name' => '_token',
            'csrf_token_id' => 'purchase_confirmation'
        ]);
    }
}