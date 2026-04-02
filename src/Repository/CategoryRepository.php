<?php
// src/Repository/CategoryRepository.php

namespace App\Repository;

use App\Entity\Category;
use App\Entity\HmaService;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\ORM\QueryBuilder;
use Doctrine\ORM\Tools\Pagination\Paginator;
use Doctrine\Persistence\ManagerRegistry;

class CategoryRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, Category::class);
    }

    // === Méthodes de comptage ===

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

    /**
     * Construit la requête de base sans les compteurs.
     */
    private function getBaseQueryBuilder(
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

        // Statut is_active
        if ($status === 'active') {
            $qb->andWhere('c.is_active = :active')->setParameter('active', true);
        } elseif ($status === 'inactive') {
            $qb->andWhere('c.is_active = :active')->setParameter('active', false);
        }

        // Type (principale / sous-catégorie)
        if ($type === 'main') {
            $qb->andWhere('c.parent IS NULL');
        } elseif ($type === 'sub') {
            $qb->andWhere('c.parent IS NOT NULL');
        }

        // Subscription active
        if ($subStatus === 'active') {
            $qb->andWhere('c.subscription_active = :subActive')->setParameter('subActive', true);
        } elseif ($subStatus === 'inactive') {
            $qb->andWhere('c.subscription_active = :subActive')->setParameter('subActive', false);
        }

        // Recherche textuelle
        if (!empty($search)) {
            $qb->andWhere('c.name LIKE :search OR c.description LIKE :search')
               ->setParameter('search', '%' . $search . '%');
        }

        // Filtre par promotion
        if ($promotionId) {
            $qb->leftJoin('c.promotionCategories', 'pc')
            ->leftJoin('pc.promotion', 'promo')
            ->andWhere('promo.id = :promoId')
            ->setParameter('promoId', $promotionId)
            ->groupBy('c.id'); // <-- AJOUT
        }

        return $qb;
    }

    public function countFiltered(
        HmaService $hmaService,
        string $status = 'all',
        string $type = 'all',
        string $subStatus = 'all',
        string $search = '',
        ?int $promotionId = null
    ): int {
        $qb = $this->getBaseQueryBuilder($hmaService, $status, $type, $subStatus, $search, $promotionId);
        return (int) $qb->select('COUNT(c.id)')
            ->getQuery()
            ->getSingleScalarResult();
    }

    /**
     * Récupère les catégories paginées et injecte les compteurs.
     */
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
        // 1. Récupérer les catégories paginées (sans compteurs)
        $qb = $this->getBaseQueryBuilder($hmaService, $status, $type, $subStatus, $search, $promotionId)
            ->orderBy('c.created_at', 'DESC');

        $query = $qb->getQuery();
        $paginator = new Paginator($query);
        $paginator->setUseOutputWalkers(false);
        $paginator->getQuery()
            ->setFirstResult($limit * ($page - 1))
            ->setMaxResults($limit);

        $categories = $paginator->getIterator();

        // 2. Récupérer les IDs des catégories de la page courante
        $ids = [];
        foreach ($categories as $category) {
            $ids[] = $category->getId();
        }

        if (empty($ids)) {
            return $paginator;
        }

        // 3. Récupérer le nombre de produits par catégorie
        $productCounts = $this->getEntityManager()->createQueryBuilder()
            ->select('IDENTITY(p.category) as categoryId, COUNT(p.id) as cnt')
            ->from('App\Entity\Product', 'p')
            ->where('p.category IN (:ids)')
            ->setParameter('ids', $ids)
            ->groupBy('p.category')
            ->getQuery()
            ->getResult();

        // 4. Récupérer le nombre de sous-catégories par catégorie
        $childrenCounts = $this->getEntityManager()->createQueryBuilder()
            ->select('IDENTITY(ch.parent) as parentId, COUNT(ch.id) as cnt')
            ->from('App\Entity\Category', 'ch')
            ->where('ch.parent IN (:ids)')
            ->setParameter('ids', $ids)
            ->groupBy('ch.parent')
            ->getQuery()
            ->getResult();

        // 5. Mapper les compteurs
        $productCountMap = [];
        foreach ($productCounts as $row) {
            $productCountMap[$row['categoryId']] = (int) $row['cnt'];
        }

        $childrenCountMap = [];
        foreach ($childrenCounts as $row) {
            $childrenCountMap[$row['parentId']] = (int) $row['cnt'];
        }

        // 6. Injecter dans les entités
        foreach ($categories as $category) {
            $category->setProductCount($productCountMap[$category->getId()] ?? 0);
            $category->setChildrenCount($childrenCountMap[$category->getId()] ?? 0);
        }

        return $paginator;
    }

    // === Méthodes hiérarchiques (inchangées) ===

    public function findHierarchicalCategoriesWithCount(): array
    {
        $categories = $this->findBy(['parent' => null], ['name' => 'ASC']);
        $result = [];
        foreach ($categories as $category) {
            $result[] = $this->buildCategoryNode($category);
        }
        return $result;
    }

    private function buildCategoryNode(Category $category): array
    {
        $node = [
            'id' => $category->getId(),
            'name' => $category->getName(),
            'productCount' => $this->countProductsInCategoryHierarchy($category),
            'level' => $category->getHierarchyLevel(),
            'isParent' => $category->getChildren()->count() > 0,
            'children' => []
        ];
        foreach ($category->getChildren() as $child) {
            $node['children'][] = $this->buildCategoryNode($child);
        }
        return $node;
    }

    private function countProductsInCategoryHierarchy(Category $category): int
    {
        $qb = $this->getEntityManager()->createQueryBuilder();
        $qb->select('COUNT(p.id)')
            ->from('App\Entity\Product', 'p')
            ->join('p.category', 'c')
            ->where($qb->expr()->in('c.id', $this->getCategoryIdsRecursive($category)));
        return (int) $qb->getQuery()->getSingleScalarResult();
    }

    private function getCategoryIdsRecursive(Category $category): array
    {
        $ids = [$category->getId()];
        foreach ($category->getChildren() as $child) {
            $ids = array_merge($ids, $this->getCategoryIdsRecursive($child));
        }
        return $ids;
    }
}