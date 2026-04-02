<?php

namespace App\Repository;

use App\Entity\Category;
use App\Entity\HmaService;
use App\Entity\Product;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\ORM\Tools\Pagination\Paginator;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @extends ServiceEntityRepository<Product>
 */
class ProductRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, Product::class);
    }

    /**
     * Retourne les produits paginés selon les filtres.
     */
    public function findFilteredPaginated(
        ?HmaService $hmaService,
        int $categoryId = 0,
        string $status = '',
        string $expiryType = '',
        string $subscriptionStatus = '',
        string $dosage = '',
        string $form = '',
        string $prescriptionRequired = '',
        string $search = '',
        int $page = 1,
        int $limit = 12,
        ?int $promotionId = null,
        string $unit = '' // Nouveau paramètre
    ): Paginator {
        $qb = $this->createQueryBuilder('p')
            ->leftJoin('p.category', 'c')
            ->addSelect('c')
            ->orderBy('p.created_at', 'DESC');

        if ($hmaService) {
            $qb->andWhere('p.hma_service = :hmaService')
               ->setParameter('hmaService', $hmaService);
        }

        // Filtre par catégorie (avec sous-catégories)
        if ($categoryId > 0) {
            $category = $this->getEntityManager()->getRepository(Category::class)->find($categoryId);
            if ($category) {
                $categoryIds = $this->getAllCategoryIds($category);
                $qb->andWhere('c.id IN (:categoryIds)')
                   ->setParameter('categoryIds', $categoryIds);
            }
        }

        // Filtre par recherche
        if ($search) {
            $qb->andWhere('(p.name LIKE :search OR p.barcode LIKE :search OR p.description LIKE :search)')
               ->setParameter('search', '%' . $search . '%');
        }

        // Filtre par statut (is_active)
        if ($status) {
            switch ($status) {
                case 'active':
                    $qb->andWhere('p.is_active = true');
                    break;
                case 'inactive':
                    $qb->andWhere('p.is_active = false');
                    break;
                case 'low-stock':
                    $qb->andWhere('p.min_quantity > 0')
                       ->andWhere('p.stock_quantity <= p.min_quantity');
                    break;
            }
        }

        // Filtre par type de date critique
        if ($expiryType) {
            switch ($expiryType) {
                case 'perishable':
                    $qb->andWhere('p.has_expiry_date = true');
                    break;
                case 'non-perishable':
                    $qb->andWhere('p.has_expiry_date = false');
                    break;
            }
        }

        // Filtre par abonnement (subscription_active)
        if ($subscriptionStatus) {
            if ($subscriptionStatus === 'active') {
                $qb->andWhere('p.subscription_active = true');
            } elseif ($subscriptionStatus === 'inactive') {
                $qb->andWhere('p.subscription_active = false');
            }
        }

        // Filtres supplémentaires : dosage, forme, prescription_required
        if ($dosage) {
            $qb->andWhere('p.dosage LIKE :dosage')
               ->setParameter('dosage', '%' . $dosage . '%');
        }
        if ($form) {
            $qb->andWhere('p.form LIKE :form')
               ->setParameter('form', '%' . $form . '%');
        }
        if ($prescriptionRequired !== '') {
            $qb->andWhere('p.prescription_required = :prescriptionRequired')
               ->setParameter('prescriptionRequired', filter_var($prescriptionRequired, FILTER_VALIDATE_BOOLEAN));
        }

        // Filtre par promotion (par ID)
        if ($promotionId) {
            $qb->leftJoin('p.promotionProducts', 'pp')
               ->leftJoin('pp.promotion', 'promo')
               ->andWhere('promo.id = :promoId')
               ->setParameter('promoId', $promotionId);
        }

        // Filtre par unité
        if ($unit) {
            $qb->andWhere('p.unit = :unit')
               ->setParameter('unit', $unit);
        }

        return $this->paginate($qb->getQuery(), $page, $limit);
    }

    /**
     * Compte les produits selon les filtres.
     */
    public function countFiltered(
        ?HmaService $hmaService,
        int $categoryId = 0,
        string $status = '',
        string $expiryType = '',
        string $subscriptionStatus = '',
        string $dosage = '',
        string $form = '',
        string $prescriptionRequired = '',
        string $search = '',
        ?int $promotionId = null,
        string $unit = '' // Nouveau paramètre
    ): int {
        $qb = $this->createQueryBuilder('p')
            ->select('COUNT(p.id)');

        if ($hmaService) {
            $qb->andWhere('p.hma_service = :hmaService')
               ->setParameter('hmaService', $hmaService);
        }

        if ($categoryId > 0) {
            $category = $this->getEntityManager()->getRepository(Category::class)->find($categoryId);
            if ($category) {
                $categoryIds = $this->getAllCategoryIds($category);
                $qb->join('p.category', 'c')
                   ->andWhere('c.id IN (:categoryIds)')
                   ->setParameter('categoryIds', $categoryIds);
            }
        }

        if ($search) {
            $qb->andWhere('(p.name LIKE :search OR p.barcode LIKE :search OR p.description LIKE :search)')
               ->setParameter('search', '%' . $search . '%');
        }

        if ($status) {
            switch ($status) {
                case 'active':
                    $qb->andWhere('p.is_active = true');
                    break;
                case 'inactive':
                    $qb->andWhere('p.is_active = false');
                    break;
                case 'low-stock':
                    $qb->andWhere('p.min_quantity > 0')
                       ->andWhere('p.stock_quantity <= p.min_quantity');
                    break;
            }
        }

        if ($expiryType) {
            switch ($expiryType) {
                case 'perishable':
                    $qb->andWhere('p.has_expiry_date = true');
                    break;
                case 'non-perishable':
                    $qb->andWhere('p.has_expiry_date = false');
                    break;
            }
        }

        if ($subscriptionStatus) {
            if ($subscriptionStatus === 'active') {
                $qb->andWhere('p.subscription_active = true');
            } elseif ($subscriptionStatus === 'inactive') {
                $qb->andWhere('p.subscription_active = false');
            }
        }

        if ($dosage) {
            $qb->andWhere('p.dosage LIKE :dosage')
               ->setParameter('dosage', '%' . $dosage . '%');
        }
        if ($form) {
            $qb->andWhere('p.form LIKE :form')
               ->setParameter('form', '%' . $form . '%');
        }
        if ($prescriptionRequired !== '') {
            $qb->andWhere('p.prescription_required = :prescriptionRequired')
               ->setParameter('prescriptionRequired', filter_var($prescriptionRequired, FILTER_VALIDATE_BOOLEAN));
        }

        if ($promotionId) {
            $qb->leftJoin('p.promotionProducts', 'pp')
               ->leftJoin('pp.promotion', 'promo')
               ->andWhere('promo.id = :promoId')
               ->setParameter('promoId', $promotionId);
        }

        // Filtre par unité
        if ($unit) {
            $qb->andWhere('p.unit = :unit')
               ->setParameter('unit', $unit);
        }

        return (int) $qb->getQuery()->getSingleScalarResult();
    }

    /**
     * Compte les produits actifs pour un service donné.
     */
    public function countActive(?HmaService $hmaService): int
    {
        $qb = $this->createQueryBuilder('p')
            ->select('COUNT(p.id)')
            ->where('p.is_active = true');

        if ($hmaService) {
            $qb->andWhere('p.hma_service = :hmaService')
               ->setParameter('hmaService', $hmaService);
        }

        return (int) $qb->getQuery()->getSingleScalarResult();
    }

    public function countSubscriptionActive(HmaService $hmaService): int
    {
        return $this->createQueryBuilder('p')
            ->select('COUNT(p.id)')
            ->andWhere('p.hma_service = :service')
            ->setParameter('service', $hmaService)
            ->andWhere('p.subscription_active = :subActive')
            ->setParameter('subActive', true)
            ->getQuery()
            ->getSingleScalarResult();
    }

    /**
     * Récupère tous les IDs d'une catégorie et de ses descendants.
     */
    private function getAllCategoryIds(Category $category): array
    {
        $ids = [$category->getId()];
        foreach ($category->getChildren() as $child) {
            $ids = array_merge($ids, $this->getAllCategoryIds($child));
        }
        return $ids;
    }

    /**
     * Applique la pagination à une requête.
     */
    private function paginate($query, int $page, int $limit): Paginator
    {
        $paginator = new Paginator($query);
        $paginator->getQuery()
            ->setFirstResult($limit * ($page - 1))
            ->setMaxResults($limit);

        return $paginator;
    }

     /**
     * Retourne la liste des unités distinctes utilisées par les produits de l'entreprise.
     *
     * @return array<string>
     */
    public function findDistinctUnits(HmaService $hmaService): array
    {
        $qb = $this->createQueryBuilder('p')
            ->select('DISTINCT p.unit')
            ->where('p.hma_service = :hmaService')
            ->andWhere('p.unit IS NOT NULL')
            ->setParameter('hmaService', $hmaService)
            ->orderBy('p.unit', 'ASC');

        $results = $qb->getQuery()->getScalarResult();
        return array_column($results, 'unit');
    }
}