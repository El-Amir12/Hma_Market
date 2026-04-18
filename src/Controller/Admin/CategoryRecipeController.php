<?php
// src/Controller/Admin/CategoryRecipeController.php

namespace App\Controller\Admin;

use App\Entity\CategoryRecipe;
use App\Entity\HmaService;
use App\Form\CategoryRecipeType;
use App\Service\UniqueNameValidator;
use App\Repository\CategoryRecipeRepository;
use Doctrine\ORM\EntityManagerInterface;
use App\Entity\Promotion;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;
use Symfony\Component\Security\Core\Exception\AccessDeniedException;
use Symfony\Component\String\Slugger\SluggerInterface;

#[Route('/admin/category-recipe')]
final class CategoryRecipeController extends AbstractController
{
    public function __construct(
        private readonly SluggerInterface $slugger,
        private readonly UniqueNameValidator $uniqueNameValidator
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
        if (!$this->isGranted('ROLE_ADMIN') && !$this->isGranted('ROLE_MANAGER')) {
            throw new AccessDeniedException('Accès refusé. Vous devez être administrateur ou manager.');
        }
    }

    private function checkOwnership(CategoryRecipe $category, HmaService $hmaService): void
    {
        $catService = $category->getHmaService();
        if (!$catService || $catService->getId() !== $hmaService->getId()) {
            throw new AccessDeniedException('Cette catégorie ne vous appartient pas.');
        }
    }

    #[Route(name: 'app_admin_category_recipe_index', methods: ['GET'])]
    public function index(Request $request, CategoryRecipeRepository $repository, EntityManagerInterface $entityManager): Response
    {
        $this->checkAccess();

        $hmaService = $this->getCurrentHmaService();
        if (!$hmaService) {
            throw new AccessDeniedException('Aucun service associé à votre compte.');
        }

        $page = $request->query->getInt('page', 1);
        $limit = 12;
        $search = $request->query->get('search', '');
        $status = $request->query->get('status', 'all');
        $type = $request->query->get('type', 'all');
        $subStatus = $request->query->get('sub_status', 'active');
        $promotionId = $request->query->getInt('promotion', 0);

        $promotions = $entityManager->getRepository(Promotion::class)->findBy(
            ['hma_service' => $hmaService, 'is_active' => true],
            ['name' => 'ASC']
        );

        $paginator = $repository->findFilteredPaginated(
            $hmaService, $status, $type, $subStatus, $search, $page, $limit, $promotionId > 0 ? $promotionId : null
        );

        $totalFiltered = $repository->countFiltered($hmaService, $status, $type, $subStatus, $search, $promotionId > 0 ? $promotionId : null);
        $activeFiltered = $repository->countFiltered($hmaService, 'active', $type, $subStatus, $search, $promotionId > 0 ? $promotionId : null);
        $inactiveFiltered = $repository->countFiltered($hmaService, 'inactive', $type, $subStatus, $search, $promotionId > 0 ? $promotionId : null);
        $mainFiltered = $repository->countFiltered($hmaService, $status, 'main', $subStatus, $search, $promotionId > 0 ? $promotionId : null);
        $subFiltered = $repository->countFiltered($hmaService, $status, 'sub', $subStatus, $search, $promotionId > 0 ? $promotionId : null);
        $subscriptionActiveFiltered = $repository->countFiltered($hmaService, $status, $type, 'active', $search, $promotionId > 0 ? $promotionId : null);
        $subscriptionInactiveFiltered = $repository->countFiltered($hmaService, $status, $type, 'inactive', $search, $promotionId > 0 ? $promotionId : null);

        $activeCount = $repository->countSubscriptionActive($hmaService);
        $limits = $hmaService->getCurrentLimits();
        $quota = $limits['max_categories_recipes'] ?? PHP_INT_MAX;
        $quotaReached = $quota !== PHP_INT_MAX && $activeCount >= $quota;
        $availableSlots = $quota === PHP_INT_MAX ? PHP_INT_MAX : max(0, $quota - $activeCount);
        $subscriptionInactiveCount = $repository->countSubscriptionInactive($hmaService);
        $plan = $hmaService->getCurrentPlan();

        $totalItems = $paginator->count();
        $totalPages = ceil($totalItems / $limit);

        return $this->render('admin/category_recipe/index.html.twig', [
            'categories' => $paginator,
            'currentPage' => $page,
            'totalPages' => $totalPages,
            'search' => $search,
            'status' => $status,
            'type' => $type,
            'subStatus' => $subStatus,
            'totalItems' => $totalItems,
            'totalFiltered' => $totalFiltered,
            'activeFiltered' => $activeFiltered,
            'inactiveFiltered' => $inactiveFiltered,
            'mainFiltered' => $mainFiltered,
            'subFiltered' => $subFiltered,
            'subscriptionActiveFiltered' => $subscriptionActiveFiltered,
            'subscriptionInactiveFiltered' => $subscriptionInactiveFiltered,
            'activeCount' => $activeCount,
            'quota' => $quota === PHP_INT_MAX ? 'Illimité' : $quota,
            'quotaReached' => $quotaReached,
            'availableSlots' => $availableSlots,
            'subscriptionInactiveCount' => $subscriptionInactiveCount,
            'plan' => $plan,
            'promotions' => $promotions,
            'selectedPromotion' => $promotionId,
            'companyType' => $hmaService->getType(),
        ]);
    }

    #[Route('/new', name: 'app_admin_category_recipe_new', methods: ['GET', 'POST'])]
    public function new(Request $request, EntityManagerInterface $entityManager): Response
    {
        $this->checkAccess();

        /** @var \App\Entity\User $user */
        $user = $this->getUser();
        if (!$user) {
            throw new AccessDeniedException('Utilisateur non connecté.');
        }

        // Recharger l'utilisateur depuis l'entity manager pour garantir qu'il est géré
        $user = $entityManager->getRepository(\App\Entity\User::class)->find($user->getId());
        if (!$user) {
            throw new AccessDeniedException('Utilisateur introuvable.');
        }

        $hmaService = $user->getHmaService();
        if (!$hmaService) {
            throw new AccessDeniedException('Aucun service associé à votre compte.');
        }

        // Recharger le service (optionnel, mais sécurise)
        $hmaService = $entityManager->getRepository(HmaService::class)->find($hmaService->getId());
        if (!$hmaService) {
            throw new AccessDeniedException('Service introuvable.');
        }

        // Vérification quota
        $activeCount = $entityManager->getRepository(CategoryRecipe::class)->countActive($hmaService);
        $limits = $hmaService->getCurrentLimits();
        $quota = $limits['max_categories_recipes'] ?? PHP_INT_MAX;
        if ($quota !== PHP_INT_MAX && $activeCount >= $quota) {
            $this->addFlash('error', "Vous avez atteint votre limite de {$quota} catégories de plats actives.");
            return $this->redirectToRoute('app_admin_category_recipe_index');
        }

        $category = new CategoryRecipe();
        $category->setUser($user)
                ->setHmaService($hmaService)
                ->setCreatedAt(new \DateTimeImmutable());

        $form = $this->createForm(CategoryRecipeType::class, $category);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            // ✅ Vérification de l'unicité du nom
            $validation = $this->uniqueNameValidator->validate($category, CategoryRecipe::class, 'catégorie de plat', $hmaService->getId());
            
            if (!$validation['valid']) {
                $this->addFlash('error', $validation['message']);
                return $this->render('admin/category_recipe/new.html.twig', [
                    'form' => $form->createView(),
                    'category' => $category
                ]);
            }
            if (!$category->getSlug()) {
                $slug = $this->slugger->slug($category->getName())->lower();
                $category->setSlug($slug);
            }

            $imageFile = $form->get('image')->getData();
            if ($imageFile) {
                $newFilename = uniqid().'.'.$imageFile->guessExtension();
                $imageFile->move($this->getParameter('categories_plats_directory'), $newFilename);
                $category->setImage($newFilename);
            }

            $entityManager->persist($category);
            $entityManager->flush();
            $this->addFlash('success', 'Catégorie de plats créée avec succès.');
            return $this->redirectToRoute('app_admin_category_recipe_index');
        }

        return $this->render('admin/category_recipe/new.html.twig', [
            'category' => $category,
            'form' => $form,
        ]);
    }

    #[Route('/{id}', name: 'app_admin_category_recipe_show', methods: ['GET'])]
    public function show(CategoryRecipe $category): Response
    {
        $this->checkAccess();
        $hmaService = $this->getCurrentHmaService();
        if (!$hmaService) throw new AccessDeniedException('Aucun service associé.');
        $this->checkOwnership($category, $hmaService);
        return $this->render('admin/category_recipe/show.html.twig', ['category' => $category, 'companyType' => $hmaService->getType(),]);
    }

    #[Route('/{id}/edit', name: 'app_admin_category_recipe_edit', methods: ['GET', 'POST'])]
    public function edit(Request $request, CategoryRecipe $category, EntityManagerInterface $entityManager): Response
    {
        $this->checkAccess();
        $hmaService = $this->getCurrentHmaService();
        if (!$hmaService) throw new AccessDeniedException('Aucun service associé.');
        $this->checkOwnership($category, $hmaService);

        $oldImage = $category->getImage();
        $form = $this->createForm(CategoryRecipeType::class, $category);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            // ✅ Vérification de l'unicité du nom
            $validation = $this->uniqueNameValidator->validate($category, CategoryRecipe::class, 'catégorie de plat', $hmaService->getId());
            
            if (!$validation['valid']) {
                $this->addFlash('error', $validation['message']);
                return $this->render('admin/category_recipe/edit.html.twig', [
                    'form' => $form->createView(),
                    'category' => $category
                ]);
            }
            $newSlug = $this->slugger->slug($category->getName())->lower();
            $category->setSlug($newSlug);

            $imageFile = $form->get('image')->getData();
            if ($imageFile) {
                if ($oldImage) {
                    $oldPath = $this->getParameter('categories_plats_directory').'/'.$oldImage;
                    if (file_exists($oldPath)) unlink($oldPath);
                }
                $newFilename = uniqid().'.'.$imageFile->guessExtension();
                $imageFile->move($this->getParameter('categories_plats_directory'), $newFilename);
                $category->setImage($newFilename);
            }

            $category->setUpdatedAt(new \DateTimeImmutable());
            $entityManager->flush();
            $this->addFlash('success', 'Catégorie de plats modifiée avec succès.');
            return $this->redirectToRoute('app_admin_category_recipe_show', ['id' => $category->getId()]);
        }

        return $this->render('admin/category_recipe/edit.html.twig', [
            'category' => $category,
            'form' => $form,
        ]);
    }

    #[Route('/{id}/toggle-status', name: 'app_admin_category_recipe_toggle_status', methods: ['POST'])]
    public function toggleStatus(Request $request, CategoryRecipe $category, EntityManagerInterface $entityManager): Response
    {
        $this->checkAccess();
        $hmaService = $this->getCurrentHmaService();
        if (!$hmaService) throw new AccessDeniedException('Aucun service associé.');
        $this->checkOwnership($category, $hmaService);
        if (!$this->isCsrfTokenValid('toggle-status'.$category->getId(), $request->request->get('_token'))) {
            throw $this->createAccessDeniedException('Token CSRF invalide');
        }

        $category->setIsActive(!$category->isActive());
        $category->setUpdatedAt(new \DateTimeImmutable());
        $entityManager->flush();

        $status = $category->isActive() ? 'activée' : 'désactivée';
        $this->addFlash('success', "Catégorie de plats {$status} avec succès.");
        return $this->redirectToRoute('app_admin_category_recipe_index');
    }

    #[Route('/{id}/activate-from-quota', name: 'app_admin_category_recipe_activate_from_quota', methods: ['POST'])]
    public function activateFromQuota(Request $request, CategoryRecipe $category, EntityManagerInterface $entityManager): Response
    {
        $this->checkAccess();
        $hmaService = $this->getCurrentHmaService();
        if (!$hmaService) throw new AccessDeniedException('Aucun service associé.');
        $this->checkOwnership($category, $hmaService);
        if (!$this->isCsrfTokenValid('activate'.$category->getId(), $request->request->get('_token'))) {
            throw $this->createAccessDeniedException('Token CSRF invalide');
        }

        if ($category->isSubscriptionActive()) {
            $this->addFlash('error', 'Cette catégorie est déjà active.');
            return $this->redirectToRoute('app_admin_category_recipe_index');
        }

        $activeCount = $entityManager->getRepository(CategoryRecipe::class)->countActive($hmaService);
        $limits = $hmaService->getCurrentLimits();
        $quota = $limits['max_categories_recipes'] ?? PHP_INT_MAX;
        if ($quota !== PHP_INT_MAX && $activeCount >= $quota) {
            $this->addFlash('error', "Quota atteint ({$activeCount}/{$quota}). Désactivez d'abord une catégorie active.");
            return $this->redirectToRoute('app_admin_category_recipe_index');
        }

        $category->setSubscriptionActive(true);
        $category->setIsActive(true);
        $entityManager->flush();

        $this->addFlash('success', 'Catégorie de plats activée avec succès.');
        return $this->redirectToRoute('app_admin_category_recipe_index');
    }

    #[Route('/{id}/delete-image', name: 'app_admin_category_recipe_delete_image', methods: ['POST'])]
    public function deleteImage(Request $request, CategoryRecipe $category, EntityManagerInterface $entityManager): Response
    {
        $this->checkAccess();
        $hmaService = $this->getCurrentHmaService();
        if (!$hmaService) throw new AccessDeniedException('Aucun service associé.');
        $this->checkOwnership($category, $hmaService);

        if ($this->isCsrfTokenValid('delete-image'.$category->getId(), $request->request->get('_token'))) {
            $image = $category->getImage();
            if ($image) {
                $path = $this->getParameter('categories_plats_directory').'/'.$image;
                if (file_exists($path)) unlink($path);
                $category->setImage(null);
                $category->setUpdatedAt(new \DateTimeImmutable());
                $entityManager->flush();
                $this->addFlash('success', 'Image supprimée.');
            } else {
                $this->addFlash('warning', 'Aucune image.');
            }
        } else {
            $this->addFlash('error', 'Token CSRF invalide.');
        }
        return $this->redirectToRoute('app_admin_category_recipe_edit', ['id' => $category->getId()]);
    }

    #[Route('/{id}', name: 'app_admin_category_recipe_delete', methods: ['POST'])]
    public function delete(Request $request, CategoryRecipe $category, EntityManagerInterface $entityManager): Response
    {
        if (!$this->isGranted('ROLE_ADMIN')) {
            throw new AccessDeniedException('Seul l\'admin peut supprimer.');
        }
        $hmaService = $this->getCurrentHmaService();
        if (!$hmaService) throw new AccessDeniedException('Aucun service associé.');
        $this->checkOwnership($category, $hmaService);

        if ($this->isCsrfTokenValid('delete'.$category->getId(), $request->request->get('_token'))) {
            // 1. Mettre à null la catégorie des recettes associées
            $entityManager->createQueryBuilder()
                ->update('App\Entity\Recipe', 'r')
                ->set('r.category', 'null')
                ->where('r.category = :category')
                ->setParameter('category', $category)
                ->getQuery()
                ->execute();

            // 2. Mettre à null le parent des sous-catégories
            $entityManager->createQueryBuilder()
                ->update('App\Entity\CategoryRecipe', 'c')
                ->set('c.parent', 'null')
                ->where('c.parent = :parent')
                ->setParameter('parent', $category)
                ->getQuery()
                ->execute();

            // 3. Supprimer l'image si elle existe
            $image = $category->getImage();
            if ($image) {
                $path = $this->getParameter('categories_plats_directory').'/'.$image;
                if (file_exists($path)) unlink($path);
            }

            // 4. Supprimer la catégorie
            $entityManager->remove($category);
            $entityManager->flush();

            $this->addFlash('success', 'Catégorie de plats supprimée. Les plats et sous-catégories ont été désaffectés.');
        }
        return $this->redirectToRoute('app_admin_category_recipe_index');
    }

    #[Route('/{id}/recipes', name: 'app_admin_category_recipe_recipes', methods: ['GET'])]
    public function recipes(CategoryRecipe $category): Response
    {
        $this->checkAccess();
        $hmaService = $this->getCurrentHmaService();
        if (!$hmaService) throw new AccessDeniedException('Aucun service associé.');
        $this->checkOwnership($category, $hmaService);
        return $this->render('admin/category_recipe/recipes.html.twig', [
            'category' => $category,
            'recipes' => $category->getRecipes(),
        ]);
    }

    #[Route('/{id}/promotions', name: 'app_admin_category_recipe_promotions', methods: ['GET'])]
    public function promotions(CategoryRecipe $category): Response
    {
        $this->checkAccess();
        $hmaService = $this->getCurrentHmaService();
        if (!$hmaService) throw new AccessDeniedException('Aucun service associé.');
        $this->checkOwnership($category, $hmaService);
        return $this->render('admin/category_recipe/promotions.html.twig', [
            'category' => $category,
            'promotions' => $category->getPromotionCategoryRecipes(),
        ]);
    }
}