<?php
// src/Repository/SupplierRepository.php

namespace App\Repository;

use App\Entity\HmaService;
use App\Entity\Supplier;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\ORM\QueryBuilder;
use Doctrine\ORM\Tools\Pagination\Paginator;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @extends ServiceEntityRepository<Supplier>
 */
class SupplierRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, Supplier::class);
    }

    // ==================== MÉTHODES DE COMPTAGE ====================

    public function countActive(HmaService $hmaService): int
    {
        return $this->createQueryBuilder('s')
            ->select('COUNT(s.id)')
            ->andWhere('s.hma_service = :service')
            ->setParameter('service', $hmaService)
            ->andWhere('s.is_active = :isActive')
            ->setParameter('isActive', true)
            ->andWhere('s.subscription_active = :subActive')
            ->setParameter('subActive', true)
            ->getQuery()
            ->getSingleScalarResult();
    }

    public function countSubscriptionInactive(HmaService $hmaService): int
    {
        return $this->createQueryBuilder('s')
            ->select('COUNT(s.id)')
            ->andWhere('s.hma_service = :service')
            ->setParameter('service', $hmaService)
            ->andWhere('s.subscription_active = :subActive')
            ->setParameter('subActive', false)
            ->getQuery()
            ->getSingleScalarResult();
    }

    public function countSubscriptionActive(HmaService $hmaService): int
    {
        return $this->createQueryBuilder('s')
            ->select('COUNT(s.id)')
            ->andWhere('s.hma_service = :service')
            ->setParameter('service', $hmaService)
            ->andWhere('s.subscription_active = :subActive')
            ->setParameter('subActive', true)
            ->getQuery()
            ->getSingleScalarResult();
    }

    public function countFiltered(
        HmaService $hmaService,
        string $status = 'all',
        string $subStatus = 'all',
        string $search = ''
    ): int {
        $qb = $this->getFilteredQueryBuilder($hmaService, $status, $subStatus, $search);
        return (int) $qb->select('COUNT(s.id)')
            ->getQuery()
            ->getSingleScalarResult();
    }

    // ==================== MÉTHODES DE RECHERCHE PAGINÉE ====================

    private function getFilteredQueryBuilder(
        HmaService $hmaService,
        string $status = 'all',
        string $subStatus = 'all',
        string $search = ''
    ): QueryBuilder {
        $qb = $this->createQueryBuilder('s')
            ->andWhere('s.hma_service = :service')
            ->setParameter('service', $hmaService);

        if ($status === 'active') {
            $qb->andWhere('s.is_active = :active')->setParameter('active', true);
        } elseif ($status === 'inactive') {
            $qb->andWhere('s.is_active = :active')->setParameter('active', false);
        }

        if ($subStatus === 'active') {
            $qb->andWhere('s.subscription_active = :subActive')->setParameter('subActive', true);
        } elseif ($subStatus === 'inactive') {
            $qb->andWhere('s.subscription_active = :subActive')->setParameter('subActive', false);
        }

        if (!empty($search)) {
            $qb->andWhere('s.name LIKE :search OR s.contact_person LIKE :search OR s.email LIKE :search OR s.phone LIKE :search OR s.adress LIKE :search')
                ->setParameter('search', '%' . $search . '%');
        }

        return $qb;
    }

    public function findFilteredPaginated(
        HmaService $hmaService,
        string $status = 'all',
        string $subStatus = 'all',
        string $search = '',
        int $page = 1,
        int $limit = 12
    ): Paginator {
        $qb = $this->getFilteredQueryBuilder($hmaService, $status, $subStatus, $search)
            ->orderBy('s.created_at', 'DESC');

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

    /**
     * Trouve les fournisseurs actifs et avec abonnement actif par entreprise
     */
    public function findActiveAndSubscribedByHmaService(HmaService $hmaService): array
    {
        return $this->createQueryBuilder('s')
            ->where('s.hma_service = :hmaService')
            ->andWhere('s.is_active = true')
            ->andWhere('s.subscription_active = true')
            ->setParameter('hmaService', $hmaService)
            ->orderBy('s.name', 'ASC')
            ->getQuery()
            ->getResult();
    }

    /**
     * Vérifie si un fournisseur est disponible pour une commande
     */
    public function isAvailableForOrder(int $supplierId, HmaService $hmaService): bool
    {
        $count = $this->createQueryBuilder('s')
            ->select('COUNT(s.id)')
            ->where('s.id = :supplierId')
            ->andWhere('s.hma_service = :hmaService')
            ->andWhere('s.is_active = true')
            ->andWhere('s.subscription_active = true')
            ->setParameter('supplierId', $supplierId)
            ->setParameter('hmaService', $hmaService)
            ->getQuery()
            ->getSingleScalarResult();
        
        return $count > 0;
    }
}