<?php
// src/Form/PurchaseType.php
namespace App\Form;

use App\Entity\Purchase;
use App\Entity\Supplier;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\TextareaType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class PurchaseType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
            ->add('supplier', EntityType::class, [
                'class' => Supplier::class,
                'choice_label' => 'companyName',
                'placeholder' => 'Sélectionner un fournisseur',
                'required' => true,
                'attr' => [
                    'class' => 'form-select select2',
                    'data-placeholder' => 'Rechercher un fournisseur...'
                ]
            ])
            ->add('notes', TextareaType::class, [
                'required' => false,
                'attr' => [
                    'rows' => 3,
                    'placeholder' => 'Notes additionnelles (livraison, conditions particulières...)'
                ]
            ])
            ->add('bon_commande', TextType::class, [
                'required' => false,
                'attr' => [
                    'placeholder' => 'Référence bon de commande (optionnel)'
                ]
            ]);
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => Purchase::class,
        ]);
    }
}