<?php
// src/Repository/CategoryRecipeRepository.php

namespace App\Repository;

use App\Entity\CategoryRecipe;
use App\Entity\HmaService;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\ORM\QueryBuilder;
use Doctrine\ORM\Tools\Pagination\Paginator;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @extends ServiceEntityRepository<CategoryRecipe>
 */
class CategoryRecipeRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, CategoryRecipe::class);
    }

    // ==================== MÉTHODES DE COMPTAGE ====================

    public function countActive(HmaService $hmaService): int
    {
        return $this->createQueryBuilder('c')
            ->select('COUNT(c.id)')
            ->andWhere('c.hma_service = :service')
            ->setParameter('service', $hmaService)
            ->andWhere('c.is_active = :isActive')
            ->setParameter('isActive', true)
            ->andWhere('c.subscription_active = :subActive')
            ->setParameter('subActive', true)
            ->getQuery()
            ->getSingleScalarResult();
    }

    public function countSubscriptionInactive(HmaService $hmaService): int
    {
        return $this->createQueryBuilder('c')
            ->select('COUNT(c.id)')
            ->andWhere('c.hma_service = :service')
            ->setParameter('service', $hmaService)
            ->andWhere('c.subscription_active = :subActive')
            ->setParameter('subActive', false)
            ->getQuery()
            ->getSingleScalarResult();
    }

    public function countSubscriptionActive(HmaService $hmaService): int
    {
        return $this->createQueryBuilder('c')
            ->select('COUNT(c.id)')
            ->andWhere('c.hma_service = :service')
            ->setParameter('service', $hmaService)
            ->andWhere('c.subscription_active = :subActive')
            ->setParameter('subActive', true)
            ->getQuery()
            ->getSingleScalarResult();
    }

    public function countFiltered(
        HmaService $hmaService,
        string $status = 'all',
        string $type = 'all',
        string $subStatus = 'all',
        string $search = '',
        ?int $promotionId = null
    ): int {
        $qb = $this->getFilteredQueryBuilder($hmaService, $status, $type, $subStatus, $search, $promotionId);
        return (int) $qb->select('COUNT(c.id)')
            ->getQuery()
            ->getSingleScalarResult();
    }

    // ==================== MÉTHODES DE RECHERCHE PAGINÉE ====================

    private function getFilteredQueryBuilder(
        HmaService $hmaService,
        string $status = 'all',
        string $type = 'all',
        string $subStatus = 'all',
        string $search = '',
        ?int $promotionId = null
    ): QueryBuilder {
        $qb = $this->createQueryBuilder('c')
            ->andWhere('c.hma_service = :service')
            ->setParameter('service', $hmaService);

        if ($status === 'active') {
            $qb->andWhere('c.is_active = :active')->setParameter('active', true);
        } elseif ($status === 'inactive') {
            $qb->andWhere('c.is_active = :active')->setParameter('active', false);
        }

        if ($type === 'main') {
            $qb->andWhere('c.parent IS NULL');
        } elseif ($type === 'sub') {
            $qb->andWhere('c.parent IS NOT NULL');
        }

        if ($subStatus === 'active') {
            $qb->andWhere('c.subscription_active = :subActive')->setParameter('subActive', true);
        } elseif ($subStatus === 'inactive') {
            $qb->andWhere('c.subscription_active = :subActive')->setParameter('subActive', false);
        }

        if (!empty($search)) {
            $qb->leftJoin('c.parent', 'p')
                ->andWhere('c.name LIKE :search OR c.description LIKE :search OR p.name LIKE :search')
                ->setParameter('search', '%' . $search . '%');
        }

        if ($promotionId) {
            $qb->leftJoin('c.promotionCategoryRecipes', 'pcr')
               ->leftJoin('pcr.promotion', 'promo')
               ->andWhere('promo.id = :promoId')
               ->setParameter('promoId', $promotionId);
        }

        return $qb;
    }

    public function findFilteredPaginated(
        HmaService $hmaService,
        string $status = 'all',
        string $type = 'all',
        string $subStatus = 'all',
        string $search = '',
        int $page = 1,
        int $limit = 12,
        ?int $promotionId = null
    ): Paginator {
        $qb = $this->getFilteredQueryBuilder($hmaService, $status, $type, $subStatus, $search, $promotionId)
            ->orderBy('c.created_at', 'DESC');

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

    // ==================== MÉTHODES HIÉRARCHIQUES ====================

    public function findHierarchicalCategoriesWithCount(): array
    {
        $categories = $this->findBy(['parent' => null], ['name' => 'ASC']);
        $result = [];

        foreach ($categories as $category) {
            $result[] = $this->buildCategoryNode($category);
        }

        return $result;
    }

    private function buildCategoryNode(CategoryRecipe $category): array
    {
        $node = [
            'id' => $category->getId(),
            'name' => $category->getName(),
            'recipeCount' => $this->countRecipesInCategoryHierarchy($category),
            'level' => $category->getHierarchyLevel(),
            'isParent' => $category->getChildren()->count() > 0,
            'children' => []
        ];

        foreach ($category->getChildren() as $child) {
            $node['children'][] = $this->buildCategoryNode($child);
        }

        return $node;
    }

    private function countRecipesInCategoryHierarchy(CategoryRecipe $category): int
    {
        $qb = $this->getEntityManager()->createQueryBuilder();
        $qb->select('COUNT(r.id)')
            ->from('App\Entity\Recipe', 'r')
            ->join('r.category', 'c')
            ->where($qb->expr()->in('c.id', $this->getCategoryIdsRecursive($category)));

        return (int) $qb->getQuery()->getSingleScalarResult();
    }

    private function getCategoryIdsRecursive(CategoryRecipe $category): array
    {
        $ids = [$category->getId()];
        foreach ($category->getChildren() as $child) {
            $ids = array_merge($ids, $this->getCategoryIdsRecursive($child));
        }
        return $ids;
    }
}