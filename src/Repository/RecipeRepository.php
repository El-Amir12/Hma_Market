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
        string $search = ''
    ): int {
        $qb = $this->getFilteredQueryBuilder($hmaService, $categoryId, $status, $subscriptionStatus, $search);
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
        string $search = ''
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
        int $limit = 12
    ): Paginator {
        $qb = $this->getFilteredQueryBuilder($hmaService, $categoryId, $status, $subscriptionStatus, $search)
            ->orderBy('r.created_at', 'DESC');

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
}