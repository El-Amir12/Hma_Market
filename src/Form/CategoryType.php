<?php

namespace App\Form;

use App\Entity\Category;
use App\Entity\HmaService;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\CheckboxType;
use Symfony\Component\Form\Extension\Core\Type\FileType;
use Symfony\Component\Form\Extension\Core\Type\TextareaType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Validator\Constraints\Image;
use Symfony\Component\Validator\Constraints\Length;
use Symfony\Component\Validator\Constraints\NotBlank;

class CategoryType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $hmaService = $options['hma_service'] ?? null;

        $builder
            ->add('name', TextType::class, [
                'label' => 'Nom de la catégorie *',
                'attr' => [
                    'placeholder' => 'Ex: Électronique, Alimentaire, etc.',
                    'class' => 'form-control'
                ],
                'constraints' => [
                    new NotBlank(['message' => 'Le nom est obligatoire']),
                    new Length([
                        'max' => 50,
                        'maxMessage' => 'Le nom ne doit pas dépasser {{ limit }} caractères'
                    ])
                ]
            ])
            ->add('description', TextareaType::class, [
                'label' => 'Description',
                'required' => false,
                'attr' => [
                    'placeholder' => 'Description détaillée de la catégorie...',
                    'class' => 'form-control',
                    'rows' => 4
                ]
            ])
            ->add('image', FileType::class, [
                'label' => 'Image de la catégorie',
                'required' => false,
                'mapped' => false,
                'attr' => [
                    'class' => 'form-control',
                    'accept' => 'image/*'
                ],
                'constraints' => [
                    new Image([
                        'maxSize' => '2M',
                        'mimeTypes' => ['image/jpeg', 'image/png', 'image/webp', 'image/gif'],
                        'mimeTypesMessage' => 'Veuillez uploader une image valide (JPEG, PNG, WebP, GIF)'
                    ])
                ]
            ])
            ->add('is_active', CheckboxType::class, [
                'label' => 'Activer la catégorie',
                'required' => false,
                'attr' => [
                    'class' => 'form-check-input'
                ],
                'label_attr' => [
                    'class' => 'form-check-label'
                ]
            ])
            ->add('parent', EntityType::class, [
                'class' => Category::class,
                'choice_label' => 'displayName',
                'label' => 'Catégorie parente',
                'placeholder' => 'Aucune (catégorie principale)',
                'required' => false,
                'attr' => [
                    'class' => 'form-select select2-category',
                    'data-placeholder' => 'Rechercher une catégorie parente...'
                ],
                'query_builder' => function ($er) use ($hmaService) {
                    return $er->createQueryBuilder('c')
                        ->where('c.hma_service = :service')
                        ->setParameter('service', $hmaService)
                        ->orderBy('c.name', 'ASC');
                },
                'group_by' => function($choice) {
                    $level = $choice->getHierarchyLevel();
                    if ($level === 0) return 'Catégories principales';
                    return 'Sous-catégories (niveau ' . $level . ')';
                }
            ]);
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => Category::class,
            'hma_service' => null,
        ]);
    }
}