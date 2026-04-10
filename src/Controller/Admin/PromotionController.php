<?php
// src/Controller/Admin/PromotionController.php

namespace App\Controller\Admin;

use App\Entity\Promotion;
use App\Entity\PromotionCategory;
use App\Entity\PromotionProduct;
use App\Entity\Category;
use App\Entity\Product;
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
use Doctrine\ORM\Tools\Pagination\Paginator;

#[Route('/admin/promotion')]
class PromotionController extends AbstractController
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
        
        // Si l'utilisateur est déjà un HmaService (cas rare)
        if ($user instanceof HmaService) {
            return $user;
        }
        
        // Si c'est un utilisateur standard
        if ($user instanceof User) {
            // La méthode getHmaService existe (alias de getHmaServiceId)
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
    
    #[Route('/', name: 'app_admin_promotion_index', methods: ['GET'])]
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

        return $this->render('admin/promotion/index.html.twig', [
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

    // ==================== GESTION DES CATÉGORIES DE PROMOTION ====================
    
    #[Route('/categories', name: 'app_admin_promotion_category_index', methods: ['GET'])]
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

        $qb = $em->getRepository(PromotionCategory::class)->createQueryBuilder('pc')
            ->join('pc.promotion', 'p')
            ->join('pc.category', 'c')
            ->where('p.hma_service = :hmaService')
            ->setParameter('hmaService', $hmaService);

        if ($search) {
            $qb->andWhere('c.name LIKE :search OR p.name LIKE :search')
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
        $totalCount = $totalItems->select('COUNT(pc.id)')->getQuery()->getSingleScalarResult();
        $totalPages = ceil($totalCount / $limit);

        $items = $qb->orderBy('p.created_at', 'DESC')
            ->setFirstResult(($page - 1) * $limit)
            ->setMaxResults($limit)
            ->getQuery()
            ->getResult();

        return $this->render('admin/promotion/category/index.html.twig', [
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

    #[Route('/categories/{id}', name: 'app_admin_promotion_category_show', methods: ['GET'])]
    public function categoryShow(PromotionCategory $promotionCategory): Response
    {
        $this->checkAccess();
        $hmaService = $this->getCurrentHmaService();
        if (!$hmaService) {
            throw new AccessDeniedException('Aucun service associé.');
        }
        
        $promotion = $promotionCategory->getPromotion();
        $category = $promotionCategory->getCategory();
        
        $this->checkOwnership($promotion, $hmaService);
        
        return $this->render('admin/promotion/category/show.html.twig', [
            'promotionCategory' => $promotionCategory,
            'promotion' => $promotion,
            'category' => $category,
            'products' => $category->getProducts(),
        ]);
    }

    #[Route('/categories/{id}/delete', name: 'app_admin_promotion_category_delete', methods: ['POST'])]
    public function categoryDelete(Request $request, PromotionCategory $promotionCategory, EntityManagerInterface $em): Response
    {
        $this->checkAccess();
        $hmaService = $this->getCurrentHmaService();
        if (!$hmaService) {
            throw new AccessDeniedException('Aucun service associé.');
        }
        
        $promotion = $promotionCategory->getPromotion();
        $this->checkOwnership($promotion, $hmaService);
        
        if ($this->isCsrfTokenValid('delete-category' . $promotionCategory->getId(), $request->request->get('_token'))) {
            $em->remove($promotionCategory);
            $em->flush();
            $this->addFlash('success', 'Association promotion-catégorie supprimée.');
        }
        return $this->redirectToRoute('app_admin_promotion_category_index');
    }

    // ==================== GESTION DES PRODUITS DE PROMOTION ====================
    
    #[Route('/products', name: 'app_admin_promotion_product_index', methods: ['GET'])]
    public function productIndex(Request $request, EntityManagerInterface $em): Response
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

        $qb = $em->getRepository(PromotionProduct::class)->createQueryBuilder('pp')
            ->join('pp.promotion', 'p')
            ->join('pp.product', 'pr')
            ->where('p.hma_service = :hmaService')
            ->setParameter('hmaService', $hmaService);

        if ($search) {
            $qb->andWhere('pr.name LIKE :search OR p.name LIKE :search')
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
        $totalCount = $totalItems->select('COUNT(pp.id)')->getQuery()->getSingleScalarResult();
        $totalPages = ceil($totalCount / $limit);

        $items = $qb->orderBy('p.created_at', 'DESC')
            ->setFirstResult(($page - 1) * $limit)
            ->setMaxResults($limit)
            ->getQuery()
            ->getResult();

        return $this->render('admin/promotion/product/index.html.twig', [
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

    #[Route('/products/{id}', name: 'app_admin_promotion_product_show', methods: ['GET'])]
    public function productShow(PromotionProduct $promotionProduct): Response
    {
        $this->checkAccess();
        $hmaService = $this->getCurrentHmaService();
        if (!$hmaService) {
            throw new AccessDeniedException('Aucun service associé.');
        }
        
        $promotion = $promotionProduct->getPromotion();
        $product = $promotionProduct->getProduct();
        
        $this->checkOwnership($promotion, $hmaService);
        
        return $this->render('admin/promotion/product/show.html.twig', [
            'promotionProduct' => $promotionProduct,
            'promotion' => $promotion,
            'product' => $product,
        ]);
    }

    #[Route('/products/{id}/delete', name: 'app_admin_promotion_product_delete', methods: ['POST'])]
    public function productDelete(Request $request, PromotionProduct $promotionProduct, EntityManagerInterface $em): Response
    {
        $this->checkAccess();
        $hmaService = $this->getCurrentHmaService();
        if (!$hmaService) {
            throw new AccessDeniedException('Aucun service associé.');
        }
        
        $promotion = $promotionProduct->getPromotion();
        $this->checkOwnership($promotion, $hmaService);
        
        if ($this->isCsrfTokenValid('delete-product' . $promotionProduct->getId(), $request->request->get('_token'))) {
            $em->remove($promotionProduct);
            $em->flush();
            $this->addFlash('success', 'Association promotion-produit supprimée.');
        }
        return $this->redirectToRoute('app_admin_promotion_product_index');
    }

    // ==================== CRUD PROMOTION ====================

    #[Route('/new', name: 'app_admin_promotion_new', methods: ['GET', 'POST'])]
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
            return $this->redirectToRoute('app_admin_promotion_show', ['id' => $promotion->getId()]);
        }

        return $this->render('admin/promotion/new.html.twig', [
            'form' => $form,
            'promotion' => $promotion,
            'companyType' => $companyType,
        ]);
    }

    #[Route('/{id}', name: 'app_admin_promotion_show', methods: ['GET'])]
    public function show(Promotion $promotion): Response
    {
        $this->checkAccess();
        $hmaService = $this->getCurrentHmaService();
        if (!$hmaService) {
            throw new AccessDeniedException('Aucun service associé.');
        }
        $this->checkOwnership($promotion, $hmaService);
        return $this->render('admin/promotion/show.html.twig', [
            'promotion' => $promotion,
            'companyType' => $hmaService->getType(),
        ]);
    }

    #[Route('/{id}/edit', name: 'app_admin_promotion_edit', methods: ['GET', 'POST'])]
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
            return $this->redirectToRoute('app_admin_promotion_show', ['id' => $promotion->getId()]);
        }

        return $this->render('admin/promotion/edit.html.twig', [
            'form' => $form,
            'promotion' => $promotion,
            'companyType' => $companyType,
        ]);
    }

    #[Route('/{id}/delete-image', name: 'app_admin_promotion_delete_image', methods: ['POST'])]
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
        return $this->redirectToRoute('app_admin_promotion_edit', ['id' => $promotion->getId()]);
    }

    #[Route('/{id}/toggle-status', name: 'app_admin_promotion_toggle_status', methods: ['POST'])]
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
        return $this->redirectToRoute('app_admin_promotion_index');
    }

    #[Route('/{id}', name: 'app_admin_promotion_delete', methods: ['POST'])]
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
        return $this->redirectToRoute('app_admin_promotion_index');
    }

    #[Route('/product/{id}/promotions', name: 'app_admin_product_promotions', methods: ['GET'])]
    public function productPromotions(Product $product, Request $request, EntityManagerInterface $entityManager): Response
    {
        $this->checkAccess();
        $hmaService = $this->getCurrentHmaService();
        if (!$hmaService || $product->getHmaService()->getId() !== $hmaService->getId()) {
            throw new AccessDeniedException('Accès non autorisé.');
        }

        // Filtres
        $search = $request->query->get('search', '');
        $status = $request->query->get('status', 'all');
        $period = $request->query->get('period', 'all');
        $page = $request->query->getInt('page', 1);
        $limit = 12;

        // Récupérer toutes les promotions associées à ce produit
        $queryBuilder = $entityManager->createQueryBuilder()
            ->select('p')
            ->from(Promotion::class, 'p')
            ->leftJoin('p.promotionProducts', 'pp')
            ->where('pp.product = :product')
            ->setParameter('product', $product)
            ->andWhere('p.hma_service = :hmaService')
            ->setParameter('hmaService', $hmaService);

        // Filtre par recherche
        if ($search) {
            $queryBuilder->andWhere('p.name LIKE :search')
                ->setParameter('search', '%' . $search . '%');
        }

        // Filtre par statut
        if ($status === 'active') {
            $queryBuilder->andWhere('p.is_active = true');
        } elseif ($status === 'inactive') {
            $queryBuilder->andWhere('p.is_active = false');
        }

        // Filtre par période
        $now = new \DateTime();
        if ($period === 'ongoing') {
            $queryBuilder->andWhere('p.startDate <= :now')
                ->andWhere('p.endDate IS NULL OR p.endDate >= :now')
                ->setParameter('now', $now);
        } elseif ($period === 'upcoming') {
            $queryBuilder->andWhere('p.startDate > :now')
                ->setParameter('now', $now);
        } elseif ($period === 'ended') {
            $queryBuilder->andWhere('p.endDate IS NOT NULL')
                ->andWhere('p.endDate < :now')
                ->setParameter('now', $now);
        }

        // Pagination
        $queryBuilder->orderBy('p.created_at', 'DESC');
        $query = $queryBuilder->getQuery();
        
        $paginator = new Paginator($query);
        $totalItems = count($paginator);
        $totalPages = ceil($totalItems / $limit);
        
        $paginator->getQuery()
            ->setFirstResult($limit * ($page - 1))
            ->setMaxResults($limit);

        $promotions = iterator_to_array($paginator);

        return $this->render('admin/promotion/product_promotions.html.twig', [
            'product' => $product,
            'promotions' => $promotions,
            'search' => $search,
            'status' => $status,
            'period' => $period,
            'currentPage' => $page,
            'totalPages' => $totalPages,
        ]);
    }

    #[Route('/category/{id}/promotions', name: 'app_admin_category_promotions', methods: ['GET'])]
    public function categoryPromotions(Category $category, Request $request, EntityManagerInterface $entityManager): Response
    {
        $this->checkAccess();
        $hmaService = $this->getCurrentHmaService();
        if (!$hmaService || $category->getHmaService()->getId() !== $hmaService->getId()) {
            throw new AccessDeniedException('Accès non autorisé.');
        }

        // Filtres
        $search = $request->query->get('search', '');
        $status = $request->query->get('status', 'all');
        $period = $request->query->get('period', 'all');
        $page = $request->query->getInt('page', 1);
        $limit = 12;

        // Récupérer toutes les promotions associées à cette catégorie
        $queryBuilder = $entityManager->createQueryBuilder()
            ->select('p')
            ->from(Promotion::class, 'p')
            ->leftJoin('p.promotionCategories', 'pc')
            ->where('pc.category = :category')
            ->setParameter('category', $category)
            ->andWhere('p.hma_service = :hmaService')
            ->setParameter('hmaService', $hmaService);

        // Filtre par recherche
        if ($search) {
            $queryBuilder->andWhere('p.name LIKE :search')
                ->setParameter('search', '%' . $search . '%');
        }

        // Filtre par statut
        if ($status === 'active') {
            $queryBuilder->andWhere('p.is_active = true');
        } elseif ($status === 'inactive') {
            $queryBuilder->andWhere('p.is_active = false');
        }

        // Filtre par période
        $now = new \DateTime();
        if ($period === 'ongoing') {
            $queryBuilder->andWhere('p.startDate <= :now')
                ->andWhere('p.endDate IS NULL OR p.endDate >= :now')
                ->setParameter('now', $now);
        } elseif ($period === 'upcoming') {
            $queryBuilder->andWhere('p.startDate > :now')
                ->setParameter('now', $now);
        } elseif ($period === 'ended') {
            $queryBuilder->andWhere('p.endDate IS NOT NULL')
                ->andWhere('p.endDate < :now')
                ->setParameter('now', $now);
        }

        // Tri et pagination
        $queryBuilder->orderBy('p.created_at', 'DESC');
        
        $totalItems = count($queryBuilder->getQuery()->getResult());
        $totalPages = ceil($totalItems / $limit);
        
        $promotions = $queryBuilder->setFirstResult($limit * ($page - 1))
            ->setMaxResults($limit)
            ->getQuery()
            ->getResult();

        // Récupérer les produits de cette catégorie pour les stats
        $productsCount = $entityManager->getRepository(Product::class)
            ->createQueryBuilder('pr')
            ->select('COUNT(pr.id)')
            ->where('pr.category = :category')
            ->setParameter('category', $category)
            ->getQuery()
            ->getSingleScalarResult();

        return $this->render('admin/promotion/category_promotions.html.twig', [
            'category' => $category,
            'promotions' => $promotions,
            'productsCount' => $productsCount,
            'search' => $search,
            'status' => $status,
            'period' => $period,
            'currentPage' => $page,
            'totalPages' => $totalPages,
        ]);
    }
}