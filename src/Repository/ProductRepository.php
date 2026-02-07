<?php
// src/Repository/ProductRepository.php

namespace App\Repository;

use App\Entity\Category;
use App\Entity\Product;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;
use Doctrine\ORM\Tools\Pagination\Paginator;

/**
 * @extends ServiceEntityRepository<Product>
 */
class ProductRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, Product::class);
    }

    public function findAllPaginated(int $page = 1, int $limit = 12): Paginator
    {
        $query = $this->createQueryBuilder('p')
            ->leftJoin('p.category', 'c')
            ->addSelect('c')
            ->orderBy('p.created_at', 'DESC')
            ->getQuery();

        return $this->paginate($query, $page, $limit);
    }

    public function search(string $term, int $page = 1, int $limit = 12): Paginator
    {
        $query = $this->createQueryBuilder('p')
            ->leftJoin('p.category', 'c')
            ->addSelect('c')
            ->where('p.name LIKE :term')
            ->orWhere('p.barcode LIKE :term')
            ->orWhere('p.description LIKE :term')
            ->orWhere('c.name LIKE :term')
            ->setParameter('term', '%' . $term . '%')
            ->orderBy('p.created_at', 'DESC')
            ->getQuery();

        return $this->paginate($query, $page, $limit);
    }

    public function findActivePaginated(int $page = 1, int $limit = 12): Paginator
    {
        $query = $this->createQueryBuilder('p')
            ->leftJoin('p.category', 'c')
            ->addSelect('c')
            ->where('p.is_active = true')
            ->orderBy('p.created_at', 'DESC')
            ->getQuery();

        return $this->paginate($query, $page, $limit);
    }

    public function findInactivePaginated(int $page = 1, int $limit = 12): Paginator
    {
        $query = $this->createQueryBuilder('p')
            ->leftJoin('p.category', 'c')
            ->addSelect('c')
            ->where('p.is_active = false')
            ->orderBy('p.created_at', 'DESC')
            ->getQuery();

        return $this->paginate($query, $page, $limit);
    }

    public function findLowStockPaginated(int $page = 1, int $limit = 12): Paginator
    {
        $query = $this->createQueryBuilder('p')
            ->leftJoin('p.category', 'c')
            ->addSelect('c')
            ->where('p.min_quantity > 0')
            ->andWhere('p.stock_quantity <= p.min_quantity')
            ->orderBy('p.stock_quantity', 'ASC')
            ->getQuery();

        return $this->paginate($query, $page, $limit);
    }

    public function findPerishablePaginated(int $page = 1, int $limit = 12): Paginator
    {
        $query = $this->createQueryBuilder('p')
            ->leftJoin('p.category', 'c')
            ->addSelect('c')
            ->where('p.has_expiry_date = true')
            ->orderBy('p.created_at', 'DESC')
            ->getQuery();

        return $this->paginate($query, $page, $limit);
    }

    public function findNonPerishablePaginated(int $page = 1, int $limit = 12): Paginator
    {
        $query = $this->createQueryBuilder('p')
            ->leftJoin('p.category', 'c')
            ->addSelect('c')
            ->where('p.has_expiry_date = false')
            ->orderBy('p.created_at', 'DESC')
            ->getQuery();

        return $this->paginate($query, $page, $limit);
    }

    public function findByCategoryPaginated(int $categoryId, int $page = 1, int $limit = 12): Paginator
    {
        // Récupérer la catégorie
        $entityManager = $this->getEntityManager();
        $category = $entityManager->getRepository(Category::class)->find($categoryId);
        
        // Si la catégorie n'existe pas, retourner un paginator vide
        if (!$category) {
            return new Paginator(new \Doctrine\ORM\Query($entityManager));
        }
        
        // Récupérer tous les IDs des catégories (la catégorie parent + ses enfants)
        $categoryIds = $this->getAllCategoryIds($category);
        
        $query = $this->createQueryBuilder('p')
            ->leftJoin('p.category', 'c')
            ->addSelect('c')
            ->where('c.id IN (:categoryIds)')
            ->setParameter('categoryIds', $categoryIds)
            ->orderBy('p.created_at', 'DESC')
            ->getQuery();

        return $this->paginate($query, $page, $limit);
    }

    public function findByCategoryAndStatusPaginated(int $categoryId, string $status, int $page = 1, int $limit = 12): Paginator
    {
        $entityManager = $this->getEntityManager();
        $categoryIds = [];
        
        // Si categoryId n'est pas 0 (Toutes catégories)
        if ($categoryId > 0) {
            $category = $entityManager->getRepository(Category::class)->find($categoryId);
            if ($category) {
                $categoryIds = $this->getAllCategoryIds($category);
            }
        }
        
        $queryBuilder = $this->createQueryBuilder('p')
            ->leftJoin('p.category', 'c')
            ->addSelect('c')
            ->orderBy('p.created_at', 'DESC');
        
        // Appliquer le filtre de catégorie si nécessaire
        if (!empty($categoryIds)) {
            $queryBuilder->where('c.id IN (:categoryIds)')
                ->setParameter('categoryIds', $categoryIds);
        }
        
        // Appliquer le filtre de statut
        switch ($status) {
            case 'active':
                $queryBuilder->andWhere('p.is_active = true');
                break;
            case 'inactive':
                $queryBuilder->andWhere('p.is_active = false');
                break;
            case 'low-stock':
                $queryBuilder->andWhere('p.min_quantity > 0')
                    ->andWhere('p.stock_quantity <= p.min_quantity');
                break;
            case 'perishable':
                $queryBuilder->andWhere('p.has_expiry_date = true');
                break;
            case 'non-perishable':
                $queryBuilder->andWhere('p.has_expiry_date = false');
                break;
        }
        
        return $this->paginate($queryBuilder->getQuery(), $page, $limit);
    }

    public function findAllCategoriesWithCount(): array
    {
        return $this->createQueryBuilder('p')
            ->select('c.id, c.name, COUNT(p.id) as productCount')
            ->leftJoin('p.category', 'c')
            ->groupBy('c.id')
            ->orderBy('c.name', 'ASC')
            ->getQuery()
            ->getResult();
    }

    public function findHierarchicalCategories(): array
    {
        $entityManager = $this->getEntityManager();
        $categories = $entityManager->getRepository(Category::class)->findBy(['parent' => null], ['name' => 'ASC']);
        
        $result = [];
        foreach ($categories as $category) {
            $result[] = [
                'id' => $category->getId(),
                'name' => $category->getName(),
                'productCount' => $this->countProductsInCategoryHierarchy($category),
                'children' => $this->getChildCategories($category),
                'isParent' => true,
                'level' => 0
            ];
        }
        
        return $result;
    }

    private function getChildCategories(Category $category): array
    {
        $children = [];
        foreach ($category->getChildren() as $child) {
            $children[] = [
                'id' => $child->getId(),
                'name' => $child->getName(),
                'productCount' => $this->countProductsInCategoryHierarchy($child),
                'children' => $this->getChildCategories($child),
                'isParent' => !$child->getChildren()->isEmpty(),
                'level' => 1
            ];
        }
        return $children;
    }

    private function countProductsInCategoryHierarchy(Category $category): int
    {
        $categoryIds = $this->getAllCategoryIds($category);
        
        return $this->createQueryBuilder('p')
            ->select('COUNT(p.id)')
            ->join('p.category', 'c')
            ->where('c.id IN (:categoryIds)')
            ->setParameter('categoryIds', $categoryIds)
            ->getQuery()
            ->getSingleScalarResult();
    }

    private function getAllCategoryIds(Category $category): array
    {
        $categoryIds = [$category->getId()];
        
        // Ajouter tous les IDs des enfants récursivement
        foreach ($category->getChildren() as $child) {
            $categoryIds = array_merge($categoryIds, $this->getAllCategoryIds($child));
        }
        
        return $categoryIds;
    }

    private function paginate($query, int $page, int $limit): Paginator
    {
        $paginator = new Paginator($query);
        $paginator->getQuery()
            ->setFirstResult($limit * ($page - 1))
            ->setMaxResults($limit);

        return $paginator;
    }

    public function searchActiveProducts(string $query, int $limit = 10): array
    {
        return $this->createQueryBuilder('p')
            ->where('p.is_active = :active')
            ->andWhere('(p.name LIKE :query OR p.barcode LIKE :query)')
            ->setParameter('active', true)
            ->setParameter('query', '%' . $query . '%')
            ->orderBy('p.name', 'ASC')
            ->setMaxResults($limit)
            ->getQuery()
            ->getResult();
    }
}