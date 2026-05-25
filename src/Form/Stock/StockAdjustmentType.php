<?php
// src/Form/Stock/StockAdjustmentType.php

namespace App\Form\Stock;

use App\Entity\StockAdjustment;
use App\Entity\StockBatch;
use Doctrine\ORM\EntityRepository;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\FileType;
use Symfony\Component\Form\Extension\Core\Type\IntegerType;
use Symfony\Component\Form\Extension\Core\Type\TextareaType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Validator\Constraints\File;
use Symfony\Component\Validator\Constraints\NotBlank;
use Symfony\Component\Validator\Constraints\Positive;

class StockAdjustmentType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
            // ❌ SUPPRIMER le champ 'type' car il est géré par les cartes JavaScript
            // ->add('type', ChoiceType::class, [...])

            ->add('stock_batch', EntityType::class, [
                'label' => 'Lot concerné',
                'class' => StockBatch::class,
                'query_builder' => function (EntityRepository $er) use ($options) {
                    $qb = $er->createQueryBuilder('sb')
                        ->innerJoin('sb.product', 'p')
                        ->addSelect('p')
                        ->where('sb.hma_service = :hmaService')
                        ->setParameter('hmaService', $options['hma_service'])
                        ->orderBy('p.name', 'ASC')
                        ->addOrderBy('sb.batch_number', 'ASC');
                    
                    return $qb;
                },
                'choice_label' => function (StockBatch $batch) {
                    return sprintf(
                        '%s - %s (Stock: %d unités, Prix: %s)',
                        $batch->getProduct()->getName(),
                        $batch->getBatchNumber(),
                        $batch->getCurrentQuantity(),
                        number_format((float)$batch->getUnitPrice(), 0, ',', ' ') . ' FCFA'
                    );
                },
                'placeholder' => '-- Sélectionner un lot --',
                'required' => true,
                'attr' => ['class' => 'form-select select2-batch']
            ])
            ->add('quantity', IntegerType::class, [
                'label' => 'Quantité',
                'required' => true,
                'constraints' => [
                    new NotBlank(['message' => 'La quantité est obligatoire.']),
                    new Positive(['message' => 'La quantité doit être positive.'])
                ],
                'attr' => [
                    'min' => 1,
                    'class' => 'form-control',
                    'placeholder' => 'Ex: 5'
                ]
            ])
            ->add('reason', TextareaType::class, [
                'label' => 'Raison de l\'ajustement',
                'required' => true,
                'constraints' => [
                    new NotBlank(['message' => 'La raison est obligatoire.'])
                ],
                'attr' => [
                    'rows' => 3,
                    'class' => 'form-control',
                    'placeholder' => 'Expliquez pourquoi cet ajustement est nécessaire...'
                ],
                'help' => 'Cette raison sera visible dans l\'historique et les notifications.'
            ])
            ->add('justification_file', FileType::class, [
                'label' => 'Justificatif (optionnel)',
                'required' => false,
                'constraints' => [
                    new File([
                        'maxSize' => '5M',
                        'mimeTypes' => [
                            'image/jpeg',
                            'image/png',
                            'image/gif',
                            'application/pdf',
                        ],
                        'mimeTypesMessage' => 'Veuillez uploader une image (JPEG, PNG, GIF) ou un PDF.',
                    ])
                ],
                'attr' => [
                    'accept' => 'image/jpeg,image/png,image/gif,application/pdf',
                    'class' => 'form-control'
                ],
                'help' => 'Formats acceptés : JPG, PNG, GIF, PDF (max 5Mo)'
            ]);
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => StockAdjustment::class,
            'hma_service' => null,
        ]);
        
        $resolver->setAllowedTypes('hma_service', ['App\Entity\HmaService', 'null']);
    }
}