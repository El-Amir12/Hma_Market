<?php
// src/Controller/Admin/RecipeController.php

namespace App\Controller\Admin;

use App\Entity\HmaService;
use App\Entity\Product;
use App\Entity\Promotion;
use App\Entity\Recipe;
use App\Entity\RecipeItem;
use App\Form\RecipeType;
use App\Service\UniqueNameValidator;
use App\Repository\CategoryRecipeRepository;
use App\Repository\PromotionRepository;
use App\Repository\RecipeRepository;
use App\Service\UnitConverter;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;
use Symfony\Component\Security\Core\Exception\AccessDeniedException;
use Symfony\Component\String\Slugger\SluggerInterface;
use Doctrine\ORM\Tools\Pagination\Paginator;

#[Route('/admin/recipe')]
final class RecipeController extends AbstractController
{
    private const DEFAULT_RECIPE_IMAGE = 'default-recipe.png';

    public function __construct(
        private readonly SluggerInterface $slugger,
        private readonly UnitConverter $unitConverter,
        private readonly UniqueNameValidator $uniqueNameValidator,
        private readonly EntityManagerInterface $entityManager
    ) {}

    private function getCurrentHmaService(): ?HmaService
    {
        $user = $this->getUser();
        if (!$user) return null;
        if ($user instanceof HmaService) return $user;
        if ($user instanceof \App\Entity\User) return $user->getHmaService();
        return null;
    }

    private function checkAccess(): void
    {
        $hmaService = $this->getCurrentHmaService();
        if (!$hmaService || $hmaService->getType() !== 'restaurant') {
            throw new AccessDeniedException('Accès réservé aux restaurants.');
        }
        if (!$this->isGranted('ROLE_ADMIN') && !$this->isGranted('ROLE_MANAGER')) {
            throw new AccessDeniedException('Accès refusé. Vous devez être administrateur ou manager.');
        }
    }

    private function checkOwnership(Recipe $recipe, HmaService $hmaService): void
    {
        if ($recipe->getHmaService()->getId() !== $hmaService->getId()) {
            throw new AccessDeniedException('Ce plat ne vous appartient pas.');
        }
    }

    #[Route(name: 'app_admin_recipe_index', methods: ['GET'])]
    public function index(Request $request, RecipeRepository $recipeRepository, CategoryRecipeRepository $categoryRepository, PromotionRepository $promotionRepository): Response
    {
        $this->checkAccess();
        $hmaService = $this->getCurrentHmaService();
        if (!$hmaService) {
            throw new AccessDeniedException('Aucun service associé.');
        }

        $page = $request->query->getInt('page', 1);
        $limit = 12;
        $search = $request->query->get('search', '');
        $status = $request->query->get('status', '');
        $categoryId = $request->query->getInt('category', 0);
        $type = $request->query->get('type', '');
        $subscriptionStatus = $request->query->get('subscription_status', '');
        $promotionId = $request->query->getInt('promotion', 0);

        // Récupérer les catégories pour le select
        $categoriesForSelect = $categoryRepository->getCategoriesForSelect($hmaService);
        
        // 🔥 Récupérer UNIQUEMENT les promotions qui concernent les recettes
        $promotions = $promotionRepository->findActiveForRecipes($hmaService);

        $paginator = $recipeRepository->findFilteredPaginated(
            $hmaService,
            $categoryId,
            $status,
            $subscriptionStatus,
            $search,
            $page,
            $limit,
            $type,
            $promotionId
        );

        $totalFiltered = $recipeRepository->countFiltered($hmaService, $categoryId, $status, $subscriptionStatus, $search, $type, $promotionId);
        $activeFiltered = $recipeRepository->countFiltered($hmaService, $categoryId, 'active', $subscriptionStatus, $search, $type, $promotionId);
        $inactiveFiltered = $recipeRepository->countFiltered($hmaService, $categoryId, 'inactive', $subscriptionStatus, $search, $type, $promotionId);
        $subscriptionActiveFiltered = $recipeRepository->countFiltered($hmaService, $categoryId, $status, 'active', $search, $type, $promotionId);
        $subscriptionInactiveFiltered = $recipeRepository->countFiltered($hmaService, $categoryId, $status, 'inactive', $search, $type, $promotionId);

        $activeCount = $recipeRepository->countSubscriptionActive($hmaService);
        $limits = $hmaService->getCurrentLimits();
        $quota = $limits['max_recipes'] ?? PHP_INT_MAX;
        $quotaReached = $quota !== PHP_INT_MAX && $activeCount >= $quota;

        $totalItems = $paginator->count();
        $totalPages = ceil($totalItems / $limit);

        $companyName = $hmaService->getCompanyName() ?? 'Restaurant';

        return $this->render('admin/recipe/index.html.twig', [
            'recipes' => $paginator,
            'currentPage' => $page,
            'totalPages' => $totalPages,
            'search' => $search,
            'categories' => $categoriesForSelect,
            'selectedCategory' => $categoryId,
            'selectedType' => $type,
            'selectedStatus' => $status,
            'selectedSubscriptionStatus' => $subscriptionStatus,
            'selectedPromotion' => $promotionId,
            'promotions' => $promotions,
            'totalItems' => $totalItems,
            'totalFiltered' => $totalFiltered,
            'activeFiltered' => $activeFiltered,
            'inactiveFiltered' => $inactiveFiltered,
            'subscriptionActiveFiltered' => $subscriptionActiveFiltered,
            'subscriptionInactiveFiltered' => $subscriptionInactiveFiltered,
            'activeCount' => $activeCount,
            'quota' => $quota === PHP_INT_MAX ? 'Illimité' : $quota,
            'quotaReached' => $quotaReached,
            'companyType' => $hmaService->getType(),
            'companyName' => $companyName,
        ]);
    }

    #[Route('/new', name: 'app_admin_recipe_new', methods: ['GET', 'POST'])]
    public function new(Request $request, EntityManagerInterface $entityManager): Response
    {
        $this->checkAccess();

        /** @var \App\Entity\User $user */
        $user = $this->getUser();
        if (!$user) {
            throw new AccessDeniedException('Utilisateur non connecté.');
        }

        $user = $entityManager->getRepository(\App\Entity\User::class)->find($user->getId());
        if (!$user) {
            throw new AccessDeniedException('Utilisateur introuvable.');
        }

        $hmaService = $user->getHmaService();
        if (!$hmaService) {
            throw new AccessDeniedException('Aucun service associé à votre compte.');
        }

        $hmaService = $entityManager->getRepository(HmaService::class)->find($hmaService->getId());
        if (!$hmaService) {
            throw new AccessDeniedException('Service introuvable.');
        }

        $activeCount = $entityManager->getRepository(Recipe::class)->countActive($hmaService);
        $limits = $hmaService->getCurrentLimits();
        $quota = $limits['max_recipes'] ?? PHP_INT_MAX;
        if ($quota !== PHP_INT_MAX && $activeCount >= $quota) {
            $this->addFlash('error', "Vous avez atteint votre limite de {$quota} plats actifs.");
            return $this->redirectToRoute('app_admin_recipe_index');
        }

        $recipe = new Recipe();
        $recipe->setUser($user)
               ->setHmaService($hmaService)
               ->setCreatedAt(new \DateTimeImmutable())
               ->setIsActive(true)
               ->setSubscriptionActive(true);

        $form = $this->createForm(RecipeType::class, $recipe, [
            'hma_service' => $hmaService,
        ]);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            // ✅ Vérification de l'unicité du nom
            $validation = $this->uniqueNameValidator->validate($recipe, Recipe::class, 'recette', $hmaService->getId());

            if (!$validation['valid']) {
                $this->addFlash('error', $validation['message']);
                return $this->render('admin/recipe/new.html.twig', [
                    'form' => $form->createView(),
                    'recipe' => $recipe
                ]);
            }
            if (!$this->validateUnitCompatibility($recipe)) {
                $availableProducts = $this->getProductsData($entityManager, $hmaService);
                return $this->render('admin/recipe/new.html.twig', [
                    'recipe' => $recipe,
                    'form' => $form,
                    'availableProducts' => $availableProducts,
                ]);
            }

            $imageFile = $form->get('image')->getData();
            if ($imageFile) {
                $newFilename = uniqid().'.'.$imageFile->guessExtension();
                $imageFile->move($this->getParameter('images_plats_directory'), $newFilename);
                $recipe->setImage($newFilename);
            }

            $entityManager->persist($recipe);
            $entityManager->flush();

            $this->addFlash('success', 'Plat créé avec succès.');
            return $this->redirectToRoute('app_admin_recipe_index');
        }

        $availableProducts = $this->getProductsData($entityManager, $hmaService);

        return $this->render('admin/recipe/new.html.twig', [
            'recipe' => $recipe,
            'form' => $form,
            'availableProducts' => $availableProducts,
        ]);
    }

    #[Route('/{id}', name: 'app_admin_recipe_show', methods: ['GET'])]
    public function show(Request $request, Recipe $recipe, EntityManagerInterface $entityManager): Response
    {
        $this->checkAccess();
        $hmaService = $this->getCurrentHmaService();
        if (!$hmaService) throw new AccessDeniedException('Aucun service associé.');
        $this->checkOwnership($recipe, $hmaService);

        $page = $request->query->getInt('page', 1);
        $limit = 10; // nombre d’ingrédients par page

        // Requête paginée pour les ingrédients
        $qb = $entityManager->createQueryBuilder()
            ->select('ri')
            ->from(RecipeItem::class, 'ri')
            ->where('ri.recipe = :recipe')
            ->orderBy('ri.id', 'ASC')
            ->setParameter('recipe', $recipe);

        $paginator = new Paginator($qb);
        $paginator->getQuery()
            ->setFirstResult($limit * ($page - 1))
            ->setMaxResults($limit);

        $totalItems = count($paginator);
        $totalPages = ceil($totalItems / $limit);

        return $this->render('admin/recipe/show.html.twig', [
            'recipe' => $recipe,
            'paginatedItems' => $paginator->getIterator(),
            'currentPage' => $page,
            'totalPages' => $totalPages,
            'companyType' => $hmaService->getType(),
        ]);
    }
    #[Route('/{id}/edit', name: 'app_admin_recipe_edit', methods: ['GET', 'POST'])]
    public function edit(Request $request, Recipe $recipe, EntityManagerInterface $entityManager): Response
    {
        $this->checkAccess();
        $hmaService = $this->getCurrentHmaService();
        if (!$hmaService) throw new AccessDeniedException('Aucun service associé.');
        $this->checkOwnership($recipe, $hmaService);

        $oldImage = $recipe->getImage();
        $form = $this->createForm(RecipeType::class, $recipe, [
            'hma_service' => $hmaService,
        ]);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            // ✅ Vérification de l'unicité du nom
            $validation = $this->uniqueNameValidator->validate($recipe, Recipe::class, 'recette', $hmaService->getId());

            if (!$validation['valid']) {
                $this->addFlash('error', $validation['message']);
                return $this->render('admin/recipe/edit.html.twig', [
                    'form' => $form->createView(),
                    'recipe' => $recipe
                ]);
            }
            if (!$this->validateUnitCompatibility($recipe)) {
                $availableProducts = $this->getProductsData($entityManager, $hmaService);
                return $this->render('admin/recipe/edit.html.twig', [
                    'recipe' => $recipe,
                    'form' => $form,
                    'availableProducts' => $availableProducts,
                ]);
            }

            $imageFile = $form->get('image')->getData();
            if ($imageFile) {
                if ($oldImage && $oldImage !== self::DEFAULT_RECIPE_IMAGE) {
                    $oldPath = $this->getParameter('images_plats_directory').'/'.$oldImage;
                    if (file_exists($oldPath)) {
                        unlink($oldPath);
                    }
                }
                $newFilename = uniqid().'.'.$imageFile->guessExtension();
                $imageFile->move($this->getParameter('images_plats_directory'), $newFilename);
                $recipe->setImage($newFilename);
            }

            $recipe->setUpdatedAt(new \DateTimeImmutable());
            $entityManager->flush();

            $this->addFlash('success', 'Plat modifié avec succès.');
            return $this->redirectToRoute('app_admin_recipe_show', ['id' => $recipe->getId()]);
        }

        $availableProducts = $this->getProductsData($entityManager, $hmaService);

        return $this->render('admin/recipe/edit.html.twig', [
            'recipe' => $recipe,
            'form' => $form,
            'availableProducts' => $availableProducts,
        ]);
    }

    #[Route('/{id}/toggle-status', name: 'app_admin_recipe_toggle_status', methods: ['POST'])]
    public function toggleStatus(Request $request, Recipe $recipe, EntityManagerInterface $entityManager): Response
    {
        $this->checkAccess();
        $hmaService = $this->getCurrentHmaService();
        if (!$hmaService) throw new AccessDeniedException('Aucun service associé.');
        $this->checkOwnership($recipe, $hmaService);

        if (!$this->isCsrfTokenValid('toggle-status'.$recipe->getId(), $request->request->get('_token'))) {
            throw $this->createAccessDeniedException('Token CSRF invalide');
        }

        $recipe->setIsActive(!$recipe->isActive());
        $recipe->setUpdatedAt(new \DateTimeImmutable());
        $entityManager->flush();

        $status = $recipe->isActive() ? 'activé' : 'désactivé';
        $this->addFlash('success', "Plat {$status} avec succès.");

        return $this->redirectToRoute('app_admin_recipe_show', ['id' => $recipe->getId()]);
    }

    #[Route('/{id}/delete-image', name: 'app_admin_recipe_delete_image', methods: ['POST'])]
    public function deleteImage(Request $request, Recipe $recipe, EntityManagerInterface $entityManager): Response
    {
        $this->checkAccess();
        $hmaService = $this->getCurrentHmaService();
        if (!$hmaService) throw new AccessDeniedException('Aucun service associé.');
        $this->checkOwnership($recipe, $hmaService);

        if ($this->isCsrfTokenValid('delete-image'.$recipe->getId(), $request->request->get('_token'))) {
            $image = $recipe->getImage();
            if ($image && $image !== self::DEFAULT_RECIPE_IMAGE) {
                $path = $this->getParameter('images_plats_directory').'/'.$image;
                if (file_exists($path)) {
                    unlink($path);
                }
                $recipe->setImage(null);
                $recipe->setUpdatedAt(new \DateTimeImmutable());
                $entityManager->flush();
                $this->addFlash('success', 'Image supprimée.');
            } else {
                $this->addFlash('warning', 'Aucune image personnalisée à supprimer.');
            }
        } else {
            $this->addFlash('error', 'Token CSRF invalide.');
        }
        return $this->redirectToRoute('app_admin_recipe_edit', ['id' => $recipe->getId()]);
    }

    #[Route('/{id}', name: 'app_admin_recipe_delete', methods: ['POST'])]
    public function delete(Request $request, Recipe $recipe, EntityManagerInterface $entityManager): Response
    {
        if (!$this->isGranted('ROLE_ADMIN')) {
            throw new AccessDeniedException('Seul l\'admin peut supprimer.');
        }
        $hmaService = $this->getCurrentHmaService();
        if (!$hmaService) throw new AccessDeniedException('Aucun service associé.');
        $this->checkOwnership($recipe, $hmaService);

        if ($this->isCsrfTokenValid('delete'.$recipe->getId(), $request->request->get('_token'))) {
            if ($recipe->getOrderItems()->count() > 0) {
                $this->addFlash('error', 'Impossible de supprimer ce plat (lié à des commandes).');
                return $this->redirectToRoute('app_admin_recipe_index');
            }
            $image = $recipe->getImage();
            if ($image && $image !== self::DEFAULT_RECIPE_IMAGE) {
                $path = $this->getParameter('images_plats_directory').'/'.$image;
                if (file_exists($path)) {
                    unlink($path);
                }
            }
            $entityManager->remove($recipe);
            $entityManager->flush();
            $this->addFlash('success', 'Plat supprimé.');
        }
        return $this->redirectToRoute('app_admin_recipe_index');
    }

    /**
     * Récupère les produits actifs avec leur type d'unité.
     */
    private function getProductsData(EntityManagerInterface $entityManager, HmaService $hmaService): array
    {
        $products = $entityManager->getRepository(Product::class)->findBy([
            'hma_service' => $hmaService,
            'is_active' => true,
            'subscription_active' => true,
        ]);

        $data = [];
        foreach ($products as $product) {
            $unit = $product->getUnit();
            $unitType = $unit ? $this->unitConverter->getUnitType($unit) : null;
            $data[] = [
                'id' => $product->getId(),
                'name' => $product->getName(),
                'unit' => $unit,
                'unitType' => $unitType,
            ];
        }
        return $data;
    }

    /**
     * Vérifie que l'unité de chaque ingrédient est compatible avec celle du produit associé.
     */
    private function validateUnitCompatibility(Recipe $recipe): bool
    {
        foreach ($recipe->getRecipeItems() as $item) {
            $product = $item->getProduct();
            if (!$product) continue;

            $productUnit = $product->getUnit();
            $itemUnit = $item->getUnit();

            if (!$productUnit || !$itemUnit) {
                continue;
            }

            try {
                $productType = $this->unitConverter->getUnitType($productUnit);
                $itemType = $this->unitConverter->getUnitType($itemUnit);
                if ($productType !== $itemType) {
                    $this->addFlash('error', "L'unité de l'ingrédient ($itemUnit) n'est pas compatible avec l'unité du produit ($productUnit).");
                    return false;
                }
            } catch (\InvalidArgumentException $e) {
                $this->addFlash('error', "Unité invalide : " . $e->getMessage());
                return false;
            }
        }
        return true;
    }
}