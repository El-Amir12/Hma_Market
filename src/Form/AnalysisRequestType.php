<?php
// src/Form/AnalysisRequestType.php

namespace App\Form;

use App\Entity\AnalysisPrice;
use App\Entity\AnalysisRequest;
use App\Repository\AnalysisPriceRepository;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\Form\Extension\Core\Type\DateType;
use Symfony\Component\Form\Extension\Core\Type\TextareaType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Validator\Constraints\Callback;
use Symfony\Component\Validator\Constraints\GreaterThan;
use Symfony\Component\Validator\Constraints\LessThanOrEqual;
use Symfony\Component\Validator\Constraints\NotBlank;
use Symfony\Component\Validator\Context\ExecutionContextInterface;

class AnalysisRequestType extends AbstractType
{
    public function __construct(private AnalysisPriceRepository $priceRepository)
    {
    }

    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        // Récupérer les prix actifs
        $prices = $this->priceRepository->findBy(['is_active' => true], ['display_order' => 'ASC']);
        
        // Construire les choix dynamiquement
        $choices = [];
        foreach ($prices as $price) {
            $label = sprintf(
                '%s - %s',
                $price->getLabel(),
                $price->getPriceFormatted()
            );
            if ($price->getType() === 'subscription') {
                $label .= ' / mois';
            }
            $choices[$label] = $price->getType();
        }
        
        $builder
            ->add('type', ChoiceType::class, [
                'label' => 'Type d\'analyse',
                'choices' => $choices,
                'expanded' => false,
                'multiple' => false,
                'required' => true,
                'attr' => ['class' => 'form-select'],
            ])
            ->add('period_start', DateType::class, [
                'label' => 'Date de début',
                'widget' => 'single_text',
                'required' => true,
                'attr' => ['class' => 'form-control'],
                'constraints' => [
                    new NotBlank(['message' => 'La date de début est obligatoire.']),
                    new LessThanOrEqual([
                        'value' => 'today',
                        'message' => 'La date de début ne peut pas être dans le futur.',
                    ]),
                ],
            ])
            ->add('period_end', DateType::class, [
                'label' => 'Date de fin',
                'widget' => 'single_text',
                'required' => true,
                'attr' => ['class' => 'form-control'],
                'constraints' => [
                    new NotBlank(['message' => 'La date de fin est obligatoire.']),
                    new LessThanOrEqual([
                        'value' => 'today',
                        'message' => 'La date de fin ne peut pas être dans le futur.',
                    ]),
                    new GreaterThan([
                        'propertyPath' => 'parent.all[period_start].data',
                        'message' => 'La date de fin doit être postérieure à la date de début.',
                    ]),
                ],
            ])
            ->add('notes', TextareaType::class, [
                'label' => 'Notes / Instructions particulières',
                'required' => false,
                'attr' => [
                    'rows' => 4,
                    'class' => 'form-control',
                    'placeholder' => 'Informations complémentaires pour l\'analyse...',
                ],
            ]);
    }
    
    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => AnalysisRequest::class,
            'constraints' => [
                new Callback([$this, 'validatePeriod']),
            ],
        ]);
    }
    
    /**
     * ✅ Validation personnalisée de la période
     */
    public function validatePeriod($object, ExecutionContextInterface $context): void
    {
        $periodStart = $object->getPeriodStart();
        $periodEnd = $object->getPeriodEnd();
        
        if (!$periodStart || !$periodEnd) {
            return;
        }
        
        $diff = $periodStart->diff($periodEnd);
        $days = $diff->days;
        
        // Vérifier que la période ne dépasse pas 365 jours
        if ($days > AnalysisRequest::MAX_PERIOD_DAYS) {
            $context->buildViolation(sprintf(
                'La période ne peut pas dépasser %d jours (environ %d an%s). Période sélectionnée : %d jours.',
                AnalysisRequest::MAX_PERIOD_DAYS,
                AnalysisRequest::MAX_PERIOD_YEARS,
                AnalysisRequest::MAX_PERIOD_YEARS > 1 ? 's' : '',
                $days
            ))
            ->atPath('period_end')
            ->addViolation();
        }
        
        // Vérifier que la période ne commence pas avant la création de l'entreprise
        $company = $object->getCompany();
        if ($company && $periodStart < $company->getCreatedAt()) {
            $context->buildViolation(sprintf(
                'La date de début ne peut pas être antérieure à la création de votre entreprise (%s).',
                $company->getCreatedAt()->format('d/m/Y')
            ))
            ->atPath('period_start')
            ->addViolation();
        }
    }
}