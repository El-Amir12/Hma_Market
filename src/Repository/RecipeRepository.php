<?php

namespace App\Repository;

use App\Entity\HmaService;
use App\Entity\Recipe;
use App\Entity\CategoryRecipe;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\ORM\QueryBuilder;
use Doctrine\ORM\Tools\Pagination\Paginator;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @extends ServiceEntityRepository<Recipe>
 */
class RecipeRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, Recipe::class);
    }

    // ==================== MÉTHODES DE COMPTAGE ====================

    public function countActive(HmaService $hmaService): int
    {
        return $this->createQueryBuilder('r')
            ->select('COUNT(r.id)')
            ->andWhere('r.hma_service = :service')
            ->setParameter('service', $hmaService)
            ->andWhere('r.is_active = :isActive')
            ->setParameter('isActive', true)
            ->andWhere('r.subscription_active = :subActive')
            ->setParameter('subActive', true)
            ->getQuery()
            ->getSingleScalarResult();
    }

    public function countSubscriptionActive(HmaService $hmaService): int
    {
        return $this->createQueryBuilder('r')
            ->select('COUNT(r.id)')
            ->andWhere('r.hma_service = :service')
            ->setParameter('service', $hmaService)
            ->andWhere('r.subscription_active = :subActive')
            ->setParameter('subActive', true)
            ->getQuery()
            ->getSingleScalarResult();
    }

    public function countSubscriptionInactive(HmaService $hmaService): int
    {
        return $this->createQueryBuilder('r')
            ->select('COUNT(r.id)')
            ->andWhere('r.hma_service = :service')
            ->setParameter('service', $hmaService)
            ->andWhere('r.subscription_active = :subActive')
            ->setParameter('subActive', false)
            ->getQuery()
            ->getSingleScalarResult();
    }

    public function countFiltered(
        HmaService $hmaService,
        int $categoryId = 0,
        string $status = '',
        string $subscriptionStatus = '',
        string $search = '',
        string $type = '',
        int $promotionId = 0
    ): int {
        $qb = $this->getFilteredQueryBuilder($hmaService, $categoryId, $status, $subscriptionStatus, $search, $type, $promotionId);
        return (int) $qb->select('COUNT(r.id)')
            ->getQuery()
            ->getSingleScalarResult();
    }

    // ==================== MÉTHODES DE RECHERCHE PAGINÉE ====================

    private function getFilteredQueryBuilder(
        HmaService $hmaService,
        int $categoryId = 0,
        string $status = '',
        string $subscriptionStatus = '',
        string $search = '',
        string $type = '',
        int $promotionId = 0
    ): QueryBuilder {
        $qb = $this->createQueryBuilder('r')
            ->leftJoin('r.category', 'c')
            ->addSelect('c')
            ->where('r.hma_service = :service')
            ->setParameter('service', $hmaService);

        // Filtre par catégorie (avec sous-catégories)
        if ($categoryId > 0) {
            $category = $this->getEntityManager()->getRepository(CategoryRecipe::class)->find($categoryId);
            if ($category) {
                $categoryIds = $this->getAllCategoryIds($category);
                $qb->andWhere('c.id IN (:categoryIds)')
                   ->setParameter('categoryIds', $categoryIds);
            }
        }

        // Filtre par type de plat
        if (!empty($type)) {
            $qb->andWhere('r.type = :type')
               ->setParameter('type', $type);
        }

        // Filtre par statut (is_active)
        if ($status === 'active') {
            $qb->andWhere('r.is_active = true');
        } elseif ($status === 'inactive') {
            $qb->andWhere('r.is_active = false');
        }

        // Filtre par subscription_active
        if ($subscriptionStatus === 'active') {
            $qb->andWhere('r.subscription_active = true');
        } elseif ($subscriptionStatus === 'inactive') {
            $qb->andWhere('r.subscription_active = false');
        }

        // 🔥 Filtre par promotion (via les promotions de recettes)
        if ($promotionId > 0) {
            $qb->leftJoin('r.promotionRecipes', 'pr')
               ->leftJoin('pr.promotion', 'p')
               ->andWhere('p.id = :promotionId')
               ->setParameter('promotionId', $promotionId);
        }

        // Recherche textuelle
        if (!empty($search)) {
            $qb->andWhere('r.name LIKE :search OR r.description LIKE :search')
                ->setParameter('search', '%' . $search . '%');
        }

        return $qb;
    }

    public function findFilteredPaginated(
        HmaService $hmaService,
        int $categoryId = 0,
        string $status = '',
        string $subscriptionStatus = '',
        string $search = '',
        int $page = 1,
        int $limit = 12,
        string $type = '',
        int $promotionId = 0
    ): Paginator {
        $qb = $this->getFilteredQueryBuilder($hmaService, $categoryId, $status, $subscriptionStatus, $search, $type, $promotionId)
            ->orderBy('r.created_at', 'DESC')
            ->addOrderBy('r.id', 'DESC');

        return $this->paginate($qb->getQuery(), $page, $limit);
    }

    private function paginate($query, int $page, int $limit): Paginator
    {
        $paginator = new Paginator($query);
        $paginator->getQuery()
            ->setFirstResult($limit * ($page - 1))
            ->setMaxResults($limit);

        return $paginator;
    }

    // ==================== MÉTHODES HIÉRARCHIQUES POUR CATÉGORIES ====================

    private function getAllCategoryIds(CategoryRecipe $category): array
    {
        $ids = [$category->getId()];
        foreach ($category->getChildren() as $child) {
            $ids = array_merge($ids, $this->getAllCategoryIds($child));
        }
        return $ids;
    }

    // ==================== MÉTHODES SUPPLÉMENTAIRES ====================

    /**
     * Récupère les recettes actives pour la vente
     */
    public function findActiveForSale(HmaService $hmaService, string $search = ''): array
    {
        $qb = $this->createQueryBuilder('r')
            ->where('r.hma_service = :service')
            ->setParameter('service', $hmaService)
            ->andWhere('r.is_active = true')
            ->andWhere('r.subscription_active = true')
            ->orderBy('r.name', 'ASC');

        if (!empty($search)) {
            $qb->andWhere('r.name LIKE :search OR r.description LIKE :search')
                ->setParameter('search', '%' . $search . '%');
        }

        return $qb->getQuery()->getResult();
    }

    /**
     * Récupère les recettes par catégorie
     */
    public function findByCategory(CategoryRecipe $category): array
    {
        $categoryIds = $this->getAllCategoryIds($category);
        
        return $this->createQueryBuilder('r')
            ->where('r.category IN (:categoryIds)')
            ->setParameter('categoryIds', $categoryIds)
            ->andWhere('r.is_active = true')
            ->andWhere('r.subscription_active = true')
            ->orderBy('r.name', 'ASC')
            ->getQuery()
            ->getResult();
    }

    /**
     * Récupère les recettes par type
     */
    public function findByType(HmaService $hmaService, string $type): array
    {
        return $this->createQueryBuilder('r')
            ->where('r.hma_service = :service')
            ->setParameter('service', $hmaService)
            ->andWhere('r.type = :type')
            ->setParameter('type', $type)
            ->andWhere('r.is_active = true')
            ->andWhere('r.subscription_active = true')
            ->orderBy('r.name', 'ASC')
            ->getQuery()
            ->getResult();
    }

    /**
     * Récupère les statistiques par type pour un service
     */
    public function getStatsByType(HmaService $hmaService): array
    {
        return $this->createQueryBuilder('r')
            ->select('r.type, COUNT(r.id) as count')
            ->where('r.hma_service = :service')
            ->setParameter('service', $hmaService)
            ->groupBy('r.type')
            ->getQuery()
            ->getResult();
    }

    /**
     * Récupère toutes les recettes avec leurs relations
     */
    public function findAllWithRelations(HmaService $hmaService): array
    {
        return $this->createQueryBuilder('r')
            ->leftJoin('r.category', 'c')
            ->leftJoin('r.recipeItems', 'ri')
            ->leftJoin('ri.product', 'p')
            ->addSelect('c', 'ri', 'p')
            ->where('r.hma_service = :service')
            ->setParameter('service', $hmaService)
            ->orderBy('r.name', 'ASC')
            ->getQuery()
            ->getResult();
    }

    /**
     * Recherche les recettes par nom (pour l'autocomplétion)
     */
    public function searchByName(HmaService $hmaService, string $query, int $limit = 10): array
    {
        return $this->createQueryBuilder('r')
            ->select('r.id, r.name, r.selling_price, r.image, r.type')
            ->where('r.hma_service = :service')
            ->setParameter('service', $hmaService)
            ->andWhere('r.is_active = true')
            ->andWhere('r.subscription_active = true')
            ->andWhere('r.name LIKE :query')
            ->setParameter('query', '%' . $query . '%')
            ->orderBy('r.name', 'ASC')
            ->setMaxResults($limit)
            ->getQuery()
            ->getResult();
    }

    /**
     * Compte le nombre total de recettes par service
     */
    public function countByService(HmaService $hmaService): int
    {
        return $this->createQueryBuilder('r')
            ->select('COUNT(r.id)')
            ->where('r.hma_service = :service')
            ->setParameter('service', $hmaService)
            ->getQuery()
            ->getSingleScalarResult();
    }

    /**
     * Récupère les recettes avec leurs promotions actives
     */
    public function findWithActivePromotions(HmaService $hmaService): array
    {
        $now = new \DateTime();
        
        return $this->createQueryBuilder('r')
            ->leftJoin('r.promotionRecipes', 'pr')
            ->leftJoin('pr.promotion', 'p')
            ->addSelect('pr', 'p')
            ->where('r.hma_service = :service')
            ->setParameter('service', $hmaService)
            ->andWhere('r.is_active = true')
            ->andWhere('r.subscription_active = true')
            ->andWhere('p.is_active = true OR p IS NULL')
            ->andWhere('(p.start_date <= :now OR p IS NULL)')
            ->andWhere('(p.end_date >= :now OR p IS NULL)')
            ->setParameter('now', $now)
            ->orderBy('r.name', 'ASC')
            ->getQuery()
            ->getResult();
    }

    /**
     * Récupère les recettes les plus vendues
     */
    public function findMostSold(HmaService $hmaService, int $limit = 10): array
    {
        return $this->createQueryBuilder('r')
            ->select('r, COUNT(oi.id) as saleCount')
            ->leftJoin('r.orderItems', 'oi')
            ->where('r.hma_service = :service')
            ->setParameter('service', $hmaService)
            ->andWhere('r.is_active = true')
            ->andWhere('r.subscription_active = true')
            ->groupBy('r.id')
            ->orderBy('saleCount', 'DESC')
            ->setMaxResults($limit)
            ->getQuery()
            ->getResult();
    }

    /**
     * Récupère les recettes récemment ajoutées
     */
    public function findRecent(HmaService $hmaService, int $limit = 10): array
    {
        return $this->createQueryBuilder('r')
            ->where('r.hma_service = :service')
            ->setParameter('service', $hmaService)
            ->andWhere('r.is_active = true')
            ->andWhere('r.subscription_active = true')
            ->orderBy('r.created_at', 'DESC')
            ->setMaxResults($limit)
            ->getQuery()
            ->getResult();
    }

    /**
     * Vérifie si un nom de recette existe déjà pour un service
     */
    public function existsByName(HmaService $hmaService, string $name, ?int $excludeId = null): bool
    {
        $qb = $this->createQueryBuilder('r')
            ->select('COUNT(r.id)')
            ->where('r.hma_service = :service')
            ->setParameter('service', $hmaService)
            ->andWhere('r.name = :name')
            ->setParameter('name', $name);

        if ($excludeId) {
            $qb->andWhere('r.id != :excludeId')
               ->setParameter('excludeId', $excludeId);
        }

        return (int) $qb->getQuery()->getSingleScalarResult() > 0;
    }

    /**
     * Récupère les recettes par promotion
     */
    public function findByPromotion(HmaService $hmaService, int $promotionId): array
    {
        return $this->createQueryBuilder('r')
            ->leftJoin('r.promotionRecipes', 'pr')
            ->leftJoin('pr.promotion', 'p')
            ->where('r.hma_service = :service')
            ->setParameter('service', $hmaService)
            ->andWhere('p.id = :promotionId')
            ->setParameter('promotionId', $promotionId)
            ->orderBy('r.name', 'ASC')
            ->getQuery()
            ->getResult();
    }
}