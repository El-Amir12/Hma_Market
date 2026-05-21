<?php
// src/Repository/StockBatchRepository.php

namespace App\Repository;

use App\Entity\HmaService;
use App\Entity\Product;
use App\Entity\StockBatch;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;
use Doctrine\ORM\Tools\Pagination\Paginator;
use Doctrine\ORM\QueryBuilder;

/**
 * @extends ServiceEntityRepository<StockBatch>
 */
class StockBatchRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, StockBatch::class);
    }

    // ... (toutes les méthodes existantes restent inchangées)

    /**
     * Récupère les lots filtrés pour un produit spécifique (avec filtres avoir)
     */
    public function findFilteredForProduct(
        Product $product,
        string $search = '',
        string $status = '',
        string $expiryStatus = '',
        ?\DateTimeInterface $dateFrom = null,
        ?\DateTimeInterface $dateTo = null,
        bool $lowStock = false,
        string $location = '',
        string $hasIssue = '',
        string $issueStatus = '',
        string $sort = 'expiry_date',
        string $direction = 'asc'
    ): array {
        $qb = $this->createQueryBuilder('b')
            ->where('b.product = :product')
            ->setParameter('product', $product);

        // Recherche par numéro de lot
        if ($search) {
            $qb->andWhere('b.batch_number LIKE :search')
               ->setParameter('search', '%' . $search . '%');
        }

        // Filtre par statut
        if ($status === 'active') {
            $qb->andWhere('b.is_active = true');
        } elseif ($status === 'inactive') {
            $qb->andWhere('b.is_active = false');
        }

        // Filtre par expiration
        $now = new \DateTime();
        if ($expiryStatus === 'expired') {
            $qb->andWhere('b.expiry_date IS NOT NULL')
               ->andWhere('b.expiry_date < :now')
               ->setParameter('now', $now);
        } elseif ($expiryStatus === 'expiring_soon') {
            $thirtyDays = (clone $now)->modify('+30 days');
            $qb->andWhere('b.expiry_date IS NOT NULL')
               ->andWhere('b.expiry_date BETWEEN :now AND :thirtyDays')
               ->setParameter('now', $now)
               ->setParameter('thirtyDays', $thirtyDays);
        } elseif ($expiryStatus === 'not_expiring') {
            $qb->andWhere('b.expiry_date IS NULL OR b.expiry_date > :now')
               ->setParameter('now', $now);
        }

        // Filtre par plage de dates
        if ($dateFrom) {
            $qb->andWhere('b.expiry_date >= :dateFrom')
               ->setParameter('dateFrom', $dateFrom);
        }
        if ($dateTo) {
            $qb->andWhere('b.expiry_date <= :dateTo')
               ->setParameter('dateTo', $dateTo);
        }

        // Filtre par stock faible
        if ($lowStock) {
            $qb->andWhere('b.current_quantity <= 10');
        }

        // Filtre par emplacement
        if ($location) {
            $qb->andWhere('b.location = :location')
               ->setParameter('location', $location);
        }

        // 🔥 NOUVEAUX FILTRES POUR LES AVOIRS
        if ($hasIssue === 'yes') {
            $qb->andWhere('b.has_issue = true');
        } elseif ($hasIssue === 'no') {
            $qb->andWhere('b.has_issue = false OR b.has_issue IS NULL');
        }

        if ($issueStatus) {
            $qb->andWhere('b.issue_status = :issueStatus')
               ->setParameter('issueStatus', $issueStatus);
        }

        // Tri
        $allowedSorts = ['batch_number', 'initial_quantity', 'current_quantity', 'unit_price', 'expiry_date', 'created_at', 'location', 'issue_status'];
        if (in_array($sort, $allowedSorts)) {
            if ($sort === 'issue_status') {
                $qb->orderBy('b.issue_status', $direction === 'asc' ? 'ASC' : 'DESC');
            } else {
                $qb->orderBy('b.' . $sort, $direction === 'asc' ? 'ASC' : 'DESC');
            }
        } else {
            $qb->orderBy('b.expiry_date', 'ASC');
        }

        return $qb->getQuery()->getResult();
    }

    /**
     * Récupère les lots filtrés pour un service HMA (tous les produits) avec filtres avoir
     */
    public function findFilteredForHmaService(
        HmaService $hmaService,
        string $search = '',
        string $status = '',
        string $expiryStatus = '',
        ?\DateTimeInterface $dateFrom = null,
        ?\DateTimeInterface $dateTo = null,
        bool $lowStock = false,
        string $location = '',
        ?int $productId = null,
        string $hasIssue = '',
        string $issueStatus = '',
        string $sort = 'expiry_date',
        string $direction = 'asc',
        int $page = 1,
        int $limit = 20
    ): Paginator {
        $qb = $this->createQueryBuilder('b')
            ->leftJoin('b.product', 'p')
            ->addSelect('p')
            ->where('b.hma_service = :hmaService')
            ->setParameter('hmaService', $hmaService);

        // Filtre par produit - UNIQUEMENT si productId n'est pas null
        if ($productId !== null) {
            $qb->andWhere('p.id = :productId')
               ->setParameter('productId', $productId);
        }

        // Recherche par numéro de lot ou nom de produit
        if ($search) {
            $qb->andWhere('(b.batch_number LIKE :search OR p.name LIKE :search)')
               ->setParameter('search', '%' . $search . '%');
        }

        // Filtre par statut
        if ($status === 'active') {
            $qb->andWhere('b.is_active = true');
        } elseif ($status === 'inactive') {
            $qb->andWhere('b.is_active = false');
        }

        // Filtre par expiration
        $now = new \DateTime();
        if ($expiryStatus === 'expired') {
            $qb->andWhere('b.expiry_date IS NOT NULL')
               ->andWhere('b.expiry_date < :now')
               ->setParameter('now', $now);
        } elseif ($expiryStatus === 'expiring_soon') {
            $thirtyDays = (clone $now)->modify('+30 days');
            $qb->andWhere('b.expiry_date IS NOT NULL')
               ->andWhere('b.expiry_date BETWEEN :now AND :thirtyDays')
               ->setParameter('now', $now)
               ->setParameter('thirtyDays', $thirtyDays);
        } elseif ($expiryStatus === 'not_expiring') {
            $qb->andWhere('b.expiry_date IS NULL OR b.expiry_date > :now')
               ->setParameter('now', $now);
        }

        // Filtre par plage de dates
        if ($dateFrom) {
            $qb->andWhere('b.expiry_date >= :dateFrom')
               ->setParameter('dateFrom', $dateFrom);
        }
        if ($dateTo) {
            $qb->andWhere('b.expiry_date <= :dateTo')
               ->setParameter('dateTo', $dateTo);
        }

        // Filtre par stock faible
        if ($lowStock) {
            $qb->andWhere('b.current_quantity <= 10');
        }

        // Filtre par emplacement
        if ($location) {
            $qb->andWhere('b.location = :location')
               ->setParameter('location', $location);
        }

        // 🔥 NOUVEAUX FILTRES POUR LES AVOIRS
        if ($hasIssue === 'yes') {
            $qb->andWhere('b.has_issue = true');
        } elseif ($hasIssue === 'no') {
            $qb->andWhere('b.has_issue = false OR b.has_issue IS NULL');
        }

        if ($issueStatus) {
            $qb->andWhere('b.issue_status = :issueStatus')
               ->setParameter('issueStatus', $issueStatus);
        }

        // Tri
        $allowedSorts = ['batch_number', 'initial_quantity', 'current_quantity', 'unit_price', 'expiry_date', 'created_at', 'location', 'p.name', 'issue_status'];
        if (in_array($sort, $allowedSorts)) {
            if ($sort === 'p.name') {
                $qb->orderBy('p.name', $direction === 'asc' ? 'ASC' : 'DESC');
            } elseif ($sort === 'issue_status') {
                $qb->orderBy('b.issue_status', $direction === 'asc' ? 'ASC' : 'DESC');
            } else {
                $qb->orderBy('b.' . $sort, $direction === 'asc' ? 'ASC' : 'DESC');
            }
        } else {
            $qb->orderBy('b.expiry_date', 'ASC');
        }

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
}