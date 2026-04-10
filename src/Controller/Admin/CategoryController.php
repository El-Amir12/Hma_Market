<?php
// src/Controller/Admin/CategoryController.php

namespace App\Controller\Admin;

use App\Entity\Category;
use App\Entity\HmaService;
use App\Form\CategoryType;
use App\Repository\CategoryRepository;
use Doctrine\ORM\EntityManagerInterface;
use App\Entity\Promotion; 
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;
use Symfony\Component\Security\Core\Exception\AccessDeniedException;
use Symfony\Component\String\Slugger\SluggerInterface;

#[Route('/admin/category')]
final class CategoryController extends AbstractController
{
    public function __construct(
        private readonly SluggerInterface $slugger
    ) {}

    /**
     * Récupère le service HmaService associé à l'utilisateur connecté.
     */
    private function getCurrentHmaService(): ?HmaService
    {
        $user = $this->getUser();
        if (!$user) return null;
        if ($user instanceof HmaService) return $user;
        if ($user instanceof \App\Entity\User) return $user->getHmaService();
        return null;
    }

    /**
     * Vérifie que l'utilisateur a les droits nécessaires.
     */
    private function checkAccess(): void
    {
        if (!$this->isGranted('ROLE_ADMIN') && !$this->isGranted('ROLE_MANAGER')) {
            throw new AccessDeniedException('Accès refusé. Vous devez être administrateur ou manager.');
        }
    }

    /**
     * Vérifie que la catégorie appartient bien au service.
     */
    private function checkOwnership(Category $category, HmaService $hmaService): void
    {
        $catService = $category->getHmaService();
        if (!$catService || $catService->getId() !== $hmaService->getId()) {
            throw new AccessDeniedException('Cette catégorie ne vous appartient pas.');
        }
    }

    #[Route(name: 'app_admin_category_index', methods: ['GET'])]
    public function index(Request $request, CategoryRepository $categoryRepository, EntityManagerInterface $entityManager): Response
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

        $paginator = $categoryRepository->findFilteredPaginated(
            $hmaService, $status, $type, $subStatus, $search, $page, $limit, $promotionId > 0 ? $promotionId : null
        );

        $totalFiltered = $categoryRepository->countFiltered($hmaService, $status, $type, $subStatus, $search, $promotionId > 0 ? $promotionId : null);
        $activeFiltered = $categoryRepository->countFiltered($hmaService, 'active', $type, $subStatus, $search, $promotionId > 0 ? $promotionId : null);
        $inactiveFiltered = $categoryRepository->countFiltered($hmaService, 'inactive', $type, $subStatus, $search, $promotionId > 0 ? $promotionId : null);
        $mainFiltered = $categoryRepository->countFiltered($hmaService, $status, 'main', $subStatus, $search, $promotionId > 0 ? $promotionId : null);
        $subFiltered = $categoryRepository->countFiltered($hmaService, $status, 'sub', $subStatus, $search, $promotionId > 0 ? $promotionId : null);
        $subscriptionActiveFiltered = $categoryRepository->countFiltered($hmaService, $status, $type, 'active', $search, $promotionId > 0 ? $promotionId : null);
        $subscriptionInactiveFiltered = $categoryRepository->countFiltered($hmaService, $status, $type, 'inactive', $search, $promotionId > 0 ? $promotionId : null);

        $activeCount = $categoryRepository->countSubscriptionActive($hmaService);
        $limits = $hmaService->getCurrentLimits();
        $quota = $limits['max_categories'] ?? PHP_INT_MAX;
        $quotaReached = $quota !== PHP_INT_MAX && $activeCount >= $quota;
        $availableSlots = $quota === PHP_INT_MAX ? PHP_INT_MAX : max(0, $quota - $activeCount);
        $subscriptionInactiveCount = $categoryRepository->countSubscriptionInactive($hmaService);
        $plan = $hmaService->getCurrentPlan();

        $totalItems = $paginator->count();
        $totalPages = ceil($totalItems / $limit);

        return $this->render('admin/category/index.html.twig', [
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

    #[Route('/new', name: 'app_admin_category_new', methods: ['GET', 'POST'])]
    public function new(Request $request, EntityManagerInterface $entityManager): Response
    {
        $this->checkAccess();

        // Récupérer l'utilisateur connecté
        $user = $this->getUser();
        if (!$user) {
            throw new AccessDeniedException('Utilisateur non connecté.');
        }

        // S'assurer que c'est bien un utilisateur (et non HmaService)
        if (!$user instanceof \App\Entity\User) {
            throw new AccessDeniedException('Seuls les utilisateurs peuvent créer des catégories.');
        }

        // Recharger l'utilisateur pour qu'il soit géré par l'EntityManager
        $user = $entityManager->getRepository(\App\Entity\User::class)->find($user->getId());
        if (!$user) {
            throw new AccessDeniedException('Utilisateur introuvable.');
        }

        $hmaService = $user->getHmaService();
        if (!$hmaService) {
            throw new AccessDeniedException('Aucun service associé.');
        }

        // Recharger le service pour qu'il soit géré
        $hmaService = $entityManager->getRepository(HmaService::class)->find($hmaService->getId());
        if (!$hmaService) {
            throw new AccessDeniedException('Service introuvable.');
        }

        // Vérification du quota
        $activeCount = $entityManager->getRepository(Category::class)->countActive($hmaService);
        $quota = $hmaService->getMaxCategories();
        if ($quota !== PHP_INT_MAX && $activeCount >= $quota) {
            $this->addFlash('error', "Vous avez atteint votre limite de {$quota} catégories actives.");
            return $this->redirectToRoute('app_admin_category_index');
        }

        $category = new Category();
        $category->setUser($user)
                ->setHmaService($hmaService)
                ->setCreatedAt(new \DateTimeImmutable());

        $form = $this->createForm(CategoryType::class, $category, [
            'hma_service' => $hmaService,
        ]);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            // Slug
            if (!$category->getSlug()) {
                $slug = $this->slugger->slug($category->getName())->lower();
                $category->setSlug($slug);
            }

            // Image
            $imageFile = $form->get('image')->getData();
            if ($imageFile) {
                $newFilename = uniqid().'.'.$imageFile->guessExtension();
                $imageFile->move($this->getParameter('categories_directory'), $newFilename);
                $category->setImage($newFilename);
            }

            $entityManager->persist($category);
            $entityManager->flush();

            $this->addFlash('success', 'Catégorie créée avec succès.');
            return $this->redirectToRoute('app_admin_category_index');
        }

        return $this->render('admin/category/new.html.twig', [
            'category' => $category,
            'form' => $form,
        ]);
    }

    #[Route('/{id}', name: 'app_admin_category_show', methods: ['GET'])]
    public function show(Category $category): Response
    {
        $this->checkAccess();
        $hmaService = $this->getCurrentHmaService();
        if (!$hmaService) throw new AccessDeniedException('Aucun service associé.');
        $this->checkOwnership($category, $hmaService);
        return $this->render('admin/category/show.html.twig', ['category' => $category, 'companyType' => $hmaService->getType(),]);
    }

    #[Route('/{id}/edit', name: 'app_admin_category_edit', methods: ['GET', 'POST'])]
    public function edit(Request $request, Category $category, EntityManagerInterface $entityManager): Response
    {
        $this->checkAccess();
        $hmaService = $this->getCurrentHmaService();
        if (!$hmaService) throw new AccessDeniedException('Aucun service associé.');
        $this->checkOwnership($category, $hmaService);

        // Récupérer l'utilisateur connecté (pour éventuellement vérifier des droits)
        $user = $this->getUser();
        if (!$user) {
            throw new AccessDeniedException('Utilisateur non connecté.');
        }

        $oldImage = $category->getImage();
        $form = $this->createForm(CategoryType::class, $category, [
            'hma_service' => $hmaService,
        ]);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $newSlug = $this->slugger->slug($category->getName())->lower();
            $category->setSlug($newSlug);

            $imageFile = $form->get('image')->getData();
            if ($imageFile) {
                if ($oldImage) {
                    $oldPath = $this->getParameter('categories_directory').'/'.$oldImage;
                    if (file_exists($oldPath)) unlink($oldPath);
                }
                $newFilename = uniqid().'.'.$imageFile->guessExtension();
                $imageFile->move($this->getParameter('categories_directory'), $newFilename);
                $category->setImage($newFilename);
            }

            $category->setUpdatedAt(new \DateTimeImmutable());
            $entityManager->flush();
            $this->addFlash('success', 'Catégorie modifiée avec succès.');
            return $this->redirectToRoute('app_admin_category_show', ['id' => $category->getId()]);
        }

        return $this->render('admin/category/edit.html.twig', [
            'category' => $category,
            'form' => $form,
        ]);
    }

    #[Route('/{id}/toggle-status', name: 'app_admin_category_toggle_status', methods: ['POST'])]
    public function toggleStatus(Request $request, Category $category, EntityManagerInterface $entityManager): Response
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
        $this->addFlash('success', "Catégorie {$status} avec succès.");
        return $this->redirectToRoute('app_admin_category_index');
    }

    #[Route('/{id}/activate-from-quota', name: 'app_admin_category_activate_from_quota', methods: ['POST'])]
    public function activateFromQuota(Request $request, Category $category, EntityManagerInterface $entityManager): Response
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
            return $this->redirectToRoute('app_admin_category_index');
        }

        $activeCount = $entityManager->getRepository(Category::class)->countActive($hmaService);
        $quota = $hmaService->getMaxCategories();
        if ($quota !== PHP_INT_MAX && $activeCount >= $quota) {
            $this->addFlash('error', "Quota atteint ({$activeCount}/{$quota}). Désactivez d'abord une catégorie active.");
            return $this->redirectToRoute('app_admin_category_index');
        }

        $category->setSubscriptionActive(true);
        $category->setIsActive(true);
        $entityManager->flush();

        $this->addFlash('success', 'Catégorie activée avec succès.');
        return $this->redirectToRoute('app_admin_category_index');
    }

    #[Route('/{id}/delete-image', name: 'app_admin_category_delete_image', methods: ['POST'])]
    public function deleteImage(Request $request, Category $category, EntityManagerInterface $entityManager): Response
    {
        $this->checkAccess();
        $hmaService = $this->getCurrentHmaService();
        if (!$hmaService) throw new AccessDeniedException('Aucun service associé.');
        $this->checkOwnership($category, $hmaService);

        if ($this->isCsrfTokenValid('delete-image'.$category->getId(), $request->request->get('_token'))) {
            $image = $category->getImage();
            if ($image) {
                $path = $this->getParameter('categories_directory').'/'.$image;
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
        return $this->redirectToRoute('app_admin_category_edit', ['id' => $category->getId()]);
    }

    #[Route('/{id}', name: 'app_admin_category_delete', methods: ['POST'])]
    public function delete(Request $request, Category $category, EntityManagerInterface $entityManager): Response
    {
        if (!$this->isGranted('ROLE_ADMIN')) {
            throw new AccessDeniedException('Seul l\'admin peut supprimer.');
        }
        $hmaService = $this->getCurrentHmaService();
        if (!$hmaService) throw new AccessDeniedException('Aucun service associé.');
        $this->checkOwnership($category, $hmaService);

        if ($this->isCsrfTokenValid('delete'.$category->getId(), $request->request->get('_token'))) {
            // 1. Mettre à null la catégorie des produits associés
            $entityManager->createQueryBuilder()
                ->update('App\Entity\Product', 'p')
                ->set('p.category', 'null')
                ->where('p.category = :category')
                ->setParameter('category', $category)
                ->getQuery()
                ->execute();

            // 2. Mettre à null le parent des sous-catégories
            $entityManager->createQueryBuilder()
                ->update('App\Entity\Category', 'c')
                ->set('c.parent', 'null')
                ->where('c.parent = :parent')
                ->setParameter('parent', $category)
                ->getQuery()
                ->execute();

            // 3. Supprimer l'image (si elle existe)
            $image = $category->getImage();
            if ($image) {
                $path = $this->getParameter('categories_directory').'/'.$image;
                if (file_exists($path)) unlink($path);
            }

            // 4. Supprimer la catégorie
            $entityManager->remove($category);
            $entityManager->flush();

            $this->addFlash('success', 'Catégorie supprimée. Les produits et sous-catégories ont été désaffectés.');
        }
        return $this->redirectToRoute('app_admin_category_index');
    }

    #[Route('/{id}/products', name: 'app_admin_category_products', methods: ['GET'])]
    public function products(Category $category): Response
    {
        $this->checkAccess();
        $hmaService = $this->getCurrentHmaService();
        if (!$hmaService) throw new AccessDeniedException('Aucun service associé.');
        $this->checkOwnership($category, $hmaService);
        return $this->render('admin/category/products.html.twig', [
            'category' => $category,
            'products' => $category->getProducts(),
        ]);
    }

    #[Route('/{id}/promotions', name: 'app_admin_category_promotions', methods: ['GET'])]
    public function promotions(Category $category): Response
    {
        $this->checkAccess();
        $hmaService = $this->getCurrentHmaService();
        if (!$hmaService) throw new AccessDeniedException('Aucun service associé.');
        $this->checkOwnership($category, $hmaService);
        return $this->render('admin/category/promotions.html.twig', [
            'category' => $category,
            'promotions' => $category->getPromotionCategories(),
        ]);
    }
}