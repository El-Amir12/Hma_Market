<?php

namespace App\Repository;

use App\Entity\Category;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\ORM\Tools\Pagination\Paginator;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @extends ServiceEntityRepository<Category>
 */
class CategoryRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, Category::class);
    }

    public function search(string $searchTerm, int $page = 1, int $limit = 10): Paginator
    {
        if ($page < 1) {
            $page = 1;
        }
        
        $query = $this->createQueryBuilder('c')
            ->leftJoin('c.parent', 'p')
            ->where('c.name LIKE :search')
            ->orWhere('c.description LIKE :search')
            ->orWhere('p.name LIKE :search')
            ->setParameter('search', '%' . $searchTerm . '%')
            ->orderBy('c.created_at', 'DESC')
            ->getQuery();

        $paginator = new Paginator($query);
        $paginator->getQuery()
            ->setFirstResult($limit * ($page - 1))
            ->setMaxResults($limit);

        return $paginator;
    }

    public function findAllPaginated(int $page = 1, int $limit = 10): Paginator
    {
        if ($page < 1) {
            $page = 1;
        }
        
        $query = $this->createQueryBuilder('c')
            ->orderBy('c.created_at', 'DESC')
            ->getQuery();

        $paginator = new Paginator($query);
        $paginator->getQuery()
            ->setFirstResult($limit * ($page - 1))
            ->setMaxResults($limit);

        return $paginator;
    }

    public function findActivePaginated(int $page = 1, int $limit = 10): Paginator
    {
        if ($page < 1) {
            $page = 1;
        }
        
        $query = $this->createQueryBuilder('c')
            ->where('c.is_active = :active')
            ->setParameter('active', true)
            ->orderBy('c.created_at', 'DESC')
            ->getQuery();

        $paginator = new Paginator($query);
        $paginator->getQuery()
            ->setFirstResult($limit * ($page - 1))
            ->setMaxResults($limit);

        return $paginator;
    }

    public function findInactivePaginated(int $page = 1, int $limit = 10): Paginator
    {
        if ($page < 1) {
            $page = 1;
        }
        
        $query = $this->createQueryBuilder('c')
            ->where('c.is_active = :active')
            ->setParameter('active', false)
            ->orderBy('c.created_at', 'DESC')
            ->getQuery();

        $paginator = new Paginator($query);
        $paginator->getQuery()
            ->setFirstResult($limit * ($page - 1))
            ->setMaxResults($limit);

        return $paginator;
    }

    public function findMainCategoriesPaginated(int $page = 1, int $limit = 10): Paginator
    {
        if ($page < 1) {
            $page = 1;
        }
        
        $query = $this->createQueryBuilder('c')
            ->where('c.parent IS NULL')
            ->orderBy('c.created_at', 'DESC')
            ->getQuery();

        $paginator = new Paginator($query);
        $paginator->getQuery()
            ->setFirstResult($limit * ($page - 1))
            ->setMaxResults($limit);

        return $paginator;
    }

    public function findSubCategoriesPaginated(int $page = 1, int $limit = 10): Paginator
    {
        if ($page < 1) {
            $page = 1;
        }
        
        $query = $this->createQueryBuilder('c')
            ->where('c.parent IS NOT NULL')
            ->orderBy('c.created_at', 'DESC')
            ->getQuery();

        $paginator = new Paginator($query);
        $paginator->getQuery()
            ->setFirstResult($limit * ($page - 1))
            ->setMaxResults($limit);

        return $paginator;
    }

    public function findActiveCategories()
    {
        return $this->createQueryBuilder('c')
            ->where('c.is_active = :active')
            ->setParameter('active', true)
            ->orderBy('c.name', 'ASC')
            ->getQuery()
            ->getResult();
    }

    public function countActive(): int
    {
        return $this->createQueryBuilder('c')
            ->select('COUNT(c.id)')
            ->where('c.is_active = :active')
            ->setParameter('active', true)
            ->getQuery()
            ->getSingleScalarResult();
    }

    public function countInactive(): int
    {
        return $this->createQueryBuilder('c')
            ->select('COUNT(c.id)')
            ->where('c.is_active = :active')
            ->setParameter('active', false)
            ->getQuery()
            ->getSingleScalarResult();
    }

    public function findCategoriesHierarchy()
    {
        $query = $this->createQueryBuilder('c')
            ->addOrderBy('c.parent', 'ASC')
            ->addOrderBy('c.name', 'ASC')
            ->getQuery();

        return $query->getResult();
    }

    public function findMainCategories()
    {
        return $this->createQueryBuilder('c')
            ->where('c.parent IS NULL')
            ->orderBy('c.name', 'ASC')
            ->getQuery()
            ->getResult();
    }

    public function findHierarchicalCategories(): array
    {
        $categories = $this->findBy(['parent' => null], ['name' => 'ASC']);
        
        $hierarchical = [];
        foreach ($categories as $category) {
            $hierarchical[] = [
                'id' => $category->getId(),
                'name' => $category->getName(),
                'children' => $this->getChildrenHierarchy($category)
            ];
        }
        
        return $hierarchical;
    }

    private function getChildrenHierarchy(Category $category): array
    {
        $children = [];
        foreach ($category->getChildren() as $child) {
            $children[] = [
                'id' => $child->getId(),
                'name' => $child->getName(),
                'children' => $this->getChildrenHierarchy($child)
            ];
        }
        return $children;
    }

    public function findHierarchicalCategoriesWithCount(): array
    {
        $categories = $this->findBy(['parent' => null], ['name' => 'ASC']);
        
        $result = [];
        foreach ($categories as $category) {
            $result[] = [
                'id' => $category->getId(),
                'name' => $category->getName(),
                'productCount' => $this->countProductsInCategoryHierarchy($category),
                'children' => $this->getChildCategoriesWithCount($category),
                'isParent' => true,
                'level' => 0
            ];
        }
        
        return $result;
    }

    private function getChildCategoriesWithCount(Category $category): array
    {
        $children = [];
        foreach ($category->getChildren() as $child) {
            $children[] = [
                'id' => $child->getId(),
                'name' => $child->getName(),
                'productCount' => $this->countProductsInCategoryHierarchy($child),
                'children' => $this->getChildCategoriesWithCount($child),
                'isParent' => !$child->getChildren()->isEmpty(),
                'level' => 1
            ];
        }
        return $children;
    }

    private function countProductsInCategoryHierarchy(Category $category): int
    {
        $entityManager = $this->getEntityManager();
        
        // Compter tous les produits dans cette catégorie et ses sous-catégories
        $categoryIds = $this->getAllCategoryIds($category);
        
        return $entityManager->createQueryBuilder()
            ->select('COUNT(p.id)')
            ->from('App\Entity\Product', 'p')
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
}