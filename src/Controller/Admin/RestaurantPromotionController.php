<?php
// src/Controller/Admin/RestaurantPromotionController.php

namespace App\Controller\Admin;

use App\Entity\Promotion;
use App\Entity\PromotionCategoryRecipe;
use App\Entity\PromotionRecipe;
use App\Entity\CategoryRecipe;
use App\Entity\Recipe;
use App\Entity\HmaService;
use App\Entity\User;
use App\Entity\TypePromotion;
use App\Form\PromotionType;
use App\Repository\PromotionRepository;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;
use Symfony\Component\Security\Core\Exception\AccessDeniedException;
use Psr\Log\LoggerInterface;

#[Route('/admin/restaurant/promotion')]
class RestaurantPromotionController extends AbstractController
{
    private LoggerInterface $logger;

    public function __construct(LoggerInterface $logger)
    {
        $this->logger = $logger;
    }

    /**
     * Récupère le service HmaService associé à l'utilisateur connecté
     */
    private function getCurrentHmaService(): ?HmaService
    {
        $user = $this->getUser();
        if (!$user) {
            return null;
        }
        
        if ($user instanceof HmaService) {
            return $user;
        }
        
        if ($user instanceof User) {
            return $user->getHmaService();
        }
        
        return null;
    }

    private function checkAccess(): void
    {
        if (!$this->isGranted('ROLE_ADMIN') && !$this->isGranted('ROLE_MANAGER')) {
            throw new AccessDeniedException('Accès refusé.');
        }
    }

    private function checkOwnership(Promotion $promotion, HmaService $hmaService): void
    {
        $promotionService = $promotion->getHmaService();
        if (!$promotionService) {
            throw new AccessDeniedException('Cette promotion n\'a pas de service associé.');
        }
        if ($promotionService->getId() !== $hmaService->getId()) {
            throw new AccessDeniedException('Cette promotion ne vous appartient pas.');
        }
    }

    // ==================== INDEX DES PROMOTIONS ====================
    
    #[Route('/', name: 'app_restaurant_promotion_index', methods: ['GET'])]
    public function index(Request $request, PromotionRepository $repository, EntityManagerInterface $em): Response
    {
        $this->checkAccess();
        
        $hmaService = $this->getCurrentHmaService();
        if (!$hmaService) {
            throw new AccessDeniedException('Aucun service associé.');
        }

        $page = $request->query->getInt('page', 1);
        $limit = 12;
        $search = $request->query->get('search', '');
        $status = $request->query->get('status', 'all');
        $period = $request->query->get('period', 'all');
        $typeId = $request->query->getInt('type', 0);

        $types = $em->getRepository(TypePromotion::class)->findByHmaService($hmaService);
        $paginator = $repository->findFilteredPaginated($hmaService, $search, $status, $period, $typeId, $page, $limit);

        $totalFiltered = $repository->countFiltered($hmaService, $search, $status, $period, $typeId);
        $activeFiltered = $repository->countFiltered($hmaService, $search, 'active', $period, $typeId);
        $inactiveFiltered = $repository->countFiltered($hmaService, $search, 'inactive', $period, $typeId);
        $ongoingFiltered = $repository->countFiltered($hmaService, $search, $status, 'ongoing', $typeId);
        $upcomingFiltered = $repository->countFiltered($hmaService, $search, $status, 'upcoming', $typeId);
        $endedFiltered = $repository->countFiltered($hmaService, $search, $status, 'ended', $typeId);

        $totalItems = $paginator->count();
        $totalPages = ceil($totalItems / $limit);

        return $this->render('admin/restaurant/promotion/index.html.twig', [
            'promotions' => $paginator,
            'currentPage' => $page,
            'totalPages' => $totalPages,
            'search' => $search,
            'status' => $status,
            'period' => $period,
            'selectedType' => $typeId,
            'types' => $types,
            'totalFiltered' => $totalFiltered,
            'activeFiltered' => $activeFiltered,
            'inactiveFiltered' => $inactiveFiltered,
            'ongoingFiltered' => $ongoingFiltered,
            'upcomingFiltered' => $upcomingFiltered,
            'endedFiltered' => $endedFiltered,
        ]);
    }

    // ==================== GESTION DES CATÉGORIES DE PLATS ====================
    
    #[Route('/categories', name: 'app_restaurant_promotion_category_index', methods: ['GET'])]
    public function categoryIndex(Request $request, EntityManagerInterface $em): Response
    {
        $this->checkAccess();
        
        $hmaService = $this->getCurrentHmaService();
        if (!$hmaService) {
            throw new AccessDeniedException('Aucun service associé.');
        }

        $page = $request->query->getInt('page', 1);
        $limit = 12;
        $search = $request->query->get('search', '');
        $status = $request->query->get('status', 'all');
        $promotionId = $request->query->getInt('promotion', 0);

        $promotions = $em->getRepository(Promotion::class)->findBy([
            'hma_service' => $hmaService,
            'is_active' => true
        ], ['name' => 'ASC']);

        $qb = $em->getRepository(PromotionCategoryRecipe::class)->createQueryBuilder('pcr')
            ->join('pcr.promotion', 'p')
            ->join('pcr.categoryRecipe', 'cr')
            ->where('p.hma_service = :hmaService')
            ->setParameter('hmaService', $hmaService);

        if ($search) {
            $qb->andWhere('cr.name LIKE :search OR p.name LIKE :search')
               ->setParameter('search', '%' . $search . '%');
        }
        if ($status === 'active') {
            $qb->andWhere('p.is_active = true');
        } elseif ($status === 'inactive') {
            $qb->andWhere('p.is_active = false');
        }
        if ($promotionId > 0) {
            $qb->andWhere('p.id = :promotionId')
               ->setParameter('promotionId', $promotionId);
        }

        $totalItems = clone $qb;
        $totalCount = $totalItems->select('COUNT(pcr.id)')->getQuery()->getSingleScalarResult();
        $totalPages = ceil($totalCount / $limit);

        $items = $qb->orderBy('p.created_at', 'DESC')
            ->setFirstResult(($page - 1) * $limit)
            ->setMaxResults($limit)
            ->getQuery()
            ->getResult();

        return $this->render('admin/restaurant/promotion/category_recipe/index.html.twig', [
            'items' => $items,
            'currentPage' => $page,
            'totalPages' => $totalPages,
            'search' => $search,
            'status' => $status,
            'selectedPromotion' => $promotionId,
            'promotions' => $promotions,
            'totalCount' => $totalCount,
        ]);
    }

    #[Route('/categories/{id}', name: 'app_restaurant_promotion_category_show', methods: ['GET'])]
    public function categoryShow(PromotionCategoryRecipe $promotionCategoryRecipe): Response
    {
        $this->checkAccess();
        
        $hmaService = $this->getCurrentHmaService();
        if (!$hmaService) {
            throw new AccessDeniedException('Aucun service associé.');
        }
        
        $promotion = $promotionCategoryRecipe->getPromotion();
        $this->checkOwnership($promotion, $hmaService);
        
        $categoryRecipe = $promotionCategoryRecipe->getCategoryRecipe();
        
        return $this->render('admin/restaurant/promotion/category_recipe/show.html.twig', [
            'promotionCategoryRecipe' => $promotionCategoryRecipe,
            'promotion' => $promotion,
            'categoryRecipe' => $categoryRecipe,
            'recipes' => $categoryRecipe->getRecipes(),
        ]);
    }

    #[Route('/categories/{id}/delete', name: 'app_restaurant_promotion_category_delete', methods: ['POST'])]
    public function categoryDelete(Request $request, PromotionCategoryRecipe $promotionCategoryRecipe, EntityManagerInterface $em): Response
    {
        $this->checkAccess();
        
        $hmaService = $this->getCurrentHmaService();
        if (!$hmaService) {
            throw new AccessDeniedException('Aucun service associé.');
        }
        
        $promotion = $promotionCategoryRecipe->getPromotion();
        $this->checkOwnership($promotion, $hmaService);
        
        if ($this->isCsrfTokenValid('delete-category-recipe' . $promotionCategoryRecipe->getId(), $request->request->get('_token'))) {
            $em->remove($promotionCategoryRecipe);
            $em->flush();
            $this->addFlash('success', 'Association promotion-catégorie de plats supprimée.');
        }
        return $this->redirectToRoute('app_restaurant_promotion_category_index');
    }

    // ==================== GESTION DES PLATS ====================
    
    #[Route('/recipes', name: 'app_restaurant_promotion_recipe_index', methods: ['GET'])]
    public function recipeIndex(Request $request, EntityManagerInterface $em): Response
    {
        $this->checkAccess();
        
        $hmaService = $this->getCurrentHmaService();
        if (!$hmaService) {
            throw new AccessDeniedException('Aucun service associé.');
        }

        $page = $request->query->getInt('page', 1);
        $limit = 12;
        $search = $request->query->get('search', '');
        $status = $request->query->get('status', 'all');
        $promotionId = $request->query->getInt('promotion', 0);

        $promotions = $em->getRepository(Promotion::class)->findBy([
            'hma_service' => $hmaService,
            'is_active' => true
        ], ['name' => 'ASC']);

        $qb = $em->getRepository(PromotionRecipe::class)->createQueryBuilder('pr')
            ->join('pr.promotion', 'p')
            ->join('pr.recipe', 'r')
            ->where('p.hma_service = :hmaService')
            ->setParameter('hmaService', $hmaService);

        if ($search) {
            $qb->andWhere('r.name LIKE :search OR p.name LIKE :search')
               ->setParameter('search', '%' . $search . '%');
        }
        if ($status === 'active') {
            $qb->andWhere('p.is_active = true');
        } elseif ($status === 'inactive') {
            $qb->andWhere('p.is_active = false');
        }
        if ($promotionId > 0) {
            $qb->andWhere('p.id = :promotionId')
               ->setParameter('promotionId', $promotionId);
        }

        $totalItems = clone $qb;
        $totalCount = $totalItems->select('COUNT(pr.id)')->getQuery()->getSingleScalarResult();
        $totalPages = ceil($totalCount / $limit);

        $items = $qb->orderBy('p.created_at', 'DESC')
            ->setFirstResult(($page - 1) * $limit)
            ->setMaxResults($limit)
            ->getQuery()
            ->getResult();

        return $this->render('admin/restaurant/promotion/recipe/index.html.twig', [
            'items' => $items,
            'currentPage' => $page,
            'totalPages' => $totalPages,
            'search' => $search,
            'status' => $status,
            'selectedPromotion' => $promotionId,
            'promotions' => $promotions,
            'totalCount' => $totalCount,
        ]);
    }

    #[Route('/recipes/{id}', name: 'app_restaurant_promotion_recipe_show', methods: ['GET'])]
    public function recipeShow(PromotionRecipe $promotionRecipe): Response
    {
        $this->checkAccess();
        
        $hmaService = $this->getCurrentHmaService();
        if (!$hmaService) {
            throw new AccessDeniedException('Aucun service associé.');
        }
        
        $promotion = $promotionRecipe->getPromotion();
        $this->checkOwnership($promotion, $hmaService);
        
        $recipe = $promotionRecipe->getRecipe();
        
        return $this->render('admin/restaurant/promotion/recipe/show.html.twig', [
            'promotionRecipe' => $promotionRecipe,
            'promotion' => $promotion,
            'recipe' => $recipe,
        ]);
    }

    #[Route('/recipes/{id}/delete', name: 'app_restaurant_promotion_recipe_delete', methods: ['POST'])]
    public function recipeDelete(Request $request, PromotionRecipe $promotionRecipe, EntityManagerInterface $em): Response
    {
        $this->checkAccess();
        
        $hmaService = $this->getCurrentHmaService();
        if (!$hmaService) {
            throw new AccessDeniedException('Aucun service associé.');
        }
        
        $promotion = $promotionRecipe->getPromotion();
        $this->checkOwnership($promotion, $hmaService);
        
        if ($this->isCsrfTokenValid('delete-recipe' . $promotionRecipe->getId(), $request->request->get('_token'))) {
            $em->remove($promotionRecipe);
            $em->flush();
            $this->addFlash('success', 'Association promotion-plat supprimée.');
        }
        return $this->redirectToRoute('app_restaurant_promotion_recipe_index');
    }

    // ==================== CRUD PROMOTION ====================

    #[Route('/new', name: 'app_restaurant_promotion_new', methods: ['GET', 'POST'])]
    public function new(Request $request, EntityManagerInterface $em): Response
    {
        $this->checkAccess();

        /** @var User $user */
        $user = $this->getUser();
        if (!$user) {
            throw new AccessDeniedException('Utilisateur non connecté.');
        }

        $hmaService = $user->getHmaService();
        if (!$hmaService) {
            throw new AccessDeniedException('Aucun service associé.');
        }

        $companyType = $hmaService->getType();

        $promotion = new Promotion();
        $promotion->setHmaService($hmaService)
                  ->setUser($user)
                  ->setCreatedAt(new \DateTime())
                  ->setIsActive(true);

        $form = $this->createForm(PromotionType::class, $promotion, [
            'hma_service' => $hmaService,
            'company_type' => $companyType
        ]);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $imageFile = $form->get('image')->getData();
            if ($imageFile) {
                $newFilename = uniqid() . '.' . $imageFile->guessExtension();
                $imageFile->move($this->getParameter('promotions_directory'), $newFilename);
                $promotion->setImage($newFilename);
            }

            $em->persist($promotion);
            $em->flush();
            
            $this->addFlash('success', 'Promotion créée avec succès.');
            return $this->redirectToRoute('app_restaurant_promotion_show', ['id' => $promotion->getId()]);
        }

        return $this->render('admin/restaurant/promotion/new.html.twig', [
            'form' => $form,
            'promotion' => $promotion,
            'companyType' => $companyType,
        ]);
    }

    #[Route('/{id}', name: 'app_restaurant_promotion_show', methods: ['GET'])]
    public function show(Promotion $promotion): Response
    {
        $this->checkAccess();
        
        $hmaService = $this->getCurrentHmaService();
        if (!$hmaService) {
            throw new AccessDeniedException('Aucun service associé.');
        }
        
        $this->checkOwnership($promotion, $hmaService);
        
        return $this->render('admin/restaurant/promotion/show.html.twig', [
            'promotion' => $promotion,
            'companyType' => $hmaService->getType(),
        ]);
    }

    #[Route('/{id}/edit', name: 'app_restaurant_promotion_edit', methods: ['GET', 'POST'])]
    public function edit(Request $request, Promotion $promotion, EntityManagerInterface $em): Response
    {
        $this->checkAccess();
        
        $hmaService = $this->getCurrentHmaService();
        if (!$hmaService) {
            throw new AccessDeniedException('Aucun service associé.');
        }
        
        $this->checkOwnership($promotion, $hmaService);

        $companyType = $hmaService->getType();
        $oldImage = $promotion->getImage();
        
        $form = $this->createForm(PromotionType::class, $promotion, [
            'hma_service' => $hmaService,
            'company_type' => $companyType
        ]);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $imageFile = $form->get('image')->getData();
            if ($imageFile) {
                if ($oldImage) {
                    $oldPath = $this->getParameter('promotions_directory') . '/' . $oldImage;
                    if (file_exists($oldPath)) {
                        unlink($oldPath);
                    }
                }
                $newFilename = uniqid() . '.' . $imageFile->guessExtension();
                $imageFile->move($this->getParameter('promotions_directory'), $newFilename);
                $promotion->setImage($newFilename);
            }

            $promotion->setUpdatedAt(new \DateTime());
            $em->flush();
            
            $this->addFlash('success', 'Promotion modifiée avec succès.');
            return $this->redirectToRoute('app_restaurant_promotion_show', ['id' => $promotion->getId()]);
        }

        return $this->render('admin/restaurant/promotion/edit.html.twig', [
            'form' => $form,
            'promotion' => $promotion,
            'companyType' => $companyType,
        ]);
    }

    #[Route('/{id}/delete-image', name: 'app_restaurant_promotion_delete_image', methods: ['POST'])]
    public function deleteImage(Request $request, Promotion $promotion, EntityManagerInterface $em): Response
    {
        $this->checkAccess();
        
        $hmaService = $this->getCurrentHmaService();
        if (!$hmaService) {
            throw new AccessDeniedException('Aucun service associé.');
        }
        
        $this->checkOwnership($promotion, $hmaService);

        if ($this->isCsrfTokenValid('delete-image' . $promotion->getId(), $request->request->get('_token'))) {
            $image = $promotion->getImage();
            if ($image) {
                $path = $this->getParameter('promotions_directory') . '/' . $image;
                if (file_exists($path)) {
                    unlink($path);
                }
                $promotion->setImage(null);
                $em->flush();
                $this->addFlash('success', 'Image supprimée.');
            }
        }
        return $this->redirectToRoute('app_restaurant_promotion_edit', ['id' => $promotion->getId()]);
    }

    #[Route('/{id}/toggle-status', name: 'app_restaurant_promotion_toggle_status', methods: ['POST'])]
    public function toggleStatus(Request $request, Promotion $promotion, EntityManagerInterface $em): Response
    {
        $this->checkAccess();
        
        $hmaService = $this->getCurrentHmaService();
        if (!$hmaService) {
            throw new AccessDeniedException('Aucun service associé.');
        }
        
        $this->checkOwnership($promotion, $hmaService);

        if ($this->isCsrfTokenValid('toggle-status' . $promotion->getId(), $request->request->get('_token'))) {
            $promotion->setIsActive(!$promotion->isActive());
            $em->flush();
            $this->addFlash('success', 'Statut modifié.');
        }
        return $this->redirectToRoute('app_restaurant_promotion_index');
    }

    #[Route('/{id}', name: 'app_restaurant_promotion_delete', methods: ['POST'])]
    public function delete(Request $request, Promotion $promotion, EntityManagerInterface $em): Response
    {
        if (!$this->isGranted('ROLE_ADMIN')) {
            throw new AccessDeniedException('Seul l\'admin peut supprimer.');
        }
        
        $hmaService = $this->getCurrentHmaService();
        if (!$hmaService) {
            throw new AccessDeniedException('Aucun service associé.');
        }
        
        $this->checkOwnership($promotion, $hmaService);

        if ($this->isCsrfTokenValid('delete' . $promotion->getId(), $request->request->get('_token'))) {
            $image = $promotion->getImage();
            if ($image) {
                $path = $this->getParameter('promotions_directory') . '/' . $image;
                if (file_exists($path)) {
                    unlink($path);
                }
            }
            $em->remove($promotion);
            $em->flush();
            $this->addFlash('success', 'Promotion supprimée.');
        }
        return $this->redirectToRoute('app_restaurant_promotion_index');
    }
}