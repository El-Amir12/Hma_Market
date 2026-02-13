<?php
// src/Service/SearchService.php

namespace App\Service;

use Doctrine\ORM\EntityManagerInterface;

class SearchService
{
    private EntityManagerInterface $entityManager;

    public function __construct(EntityManagerInterface $entityManager)
    {
        $this->entityManager = $entityManager;
    }

    /**
     * Recherche universelle dans plusieurs entités
     */
    public function universalSearch(string $query, ?string $entityType = null): array
    {
        $results = [];
        
        if ($entityType === 'user' || $entityType === null) {
            $results['users'] = $this->searchUsers($query);
        }
        
        if ($entityType === 'product' || $entityType === null) {
            $results['products'] = $this->searchProducts($query);
        }
        
        if ($entityType === 'category' || $entityType === null) {
            $results['categories'] = $this->searchCategories($query);
        }
        
        if ($entityType === 'supplier' || $entityType === null) {
            $results['suppliers'] = $this->searchSuppliers($query);
        }
        
        if ($entityType === 'order' || $entityType === null) {
            $results['orders'] = $this->searchOrders($query);
        }
        
        return $results;
    }

    private function searchUsers(string $query): array
    {
        $qb = $this->entityManager->createQueryBuilder();
        
        return $qb->select('u')
            ->from('App\Entity\User', 'u')
            ->where($qb->expr()->orX(
                $qb->expr()->like('u.full_name', ':query'),
                $qb->expr()->like('u.email', ':query'),
                $qb->expr()->like('u.phone', ':query')
            ))
            ->setParameter('query', '%' . $query . '%')
            ->orderBy('u.full_name', 'ASC')
            ->getQuery()
            ->getResult();
    }

    private function searchProducts(string $query): array
    {
        $qb = $this->entityManager->createQueryBuilder();
        
        return $qb->select('p')
            ->from('App\Entity\Product', 'p')
            ->leftJoin('p.category', 'c')
            ->where($qb->expr()->orX(
                $qb->expr()->like('p.name', ':query'),
                $qb->expr()->like('p.description', ':query'),
                $qb->expr()->like('p.reference', ':query'),
                $qb->expr()->like('c.name', ':query')
            ))
            ->setParameter('query', '%' . $query . '%')
            ->orderBy('p.name', 'ASC')
            ->getQuery()
            ->getResult();
    }

    private function searchCategories(string $query): array
    {
        $qb = $this->entityManager->createQueryBuilder();
        
        return $qb->select('c')
            ->from('App\Entity\Category', 'c')
            ->where($qb->expr()->orX(
                $qb->expr()->like('c.name', ':query'),
                $qb->expr()->like('c.description', ':query')
            ))
            ->setParameter('query', '%' . $query . '%')
            ->orderBy('c.name', 'ASC')
            ->getQuery()
            ->getResult();
    }

    private function searchSuppliers(string $query): array
    {
        $qb = $this->entityManager->createQueryBuilder();
        
        return $qb->select('s')
            ->from('App\Entity\Supplier', 's')
            ->where($qb->expr()->orX(
                $qb->expr()->like('s.company_name', ':query'),
                $qb->expr()->like('s.contact_name', ':query'),
                $qb->expr()->like('s.email', ':query'),
                $qb->expr()->like('s.phone', ':query')
            ))
            ->setParameter('query', '%' . $query . '%')
            ->orderBy('s.company_name', 'ASC')
            ->getQuery()
            ->getResult();
    }

    private function searchOrders(string $query): array
    {
        $qb = $this->entityManager->createQueryBuilder();
        
        return $qb->select('o')
            ->from('App\Entity\Order', 'o')
            ->where($qb->expr()->orX(
                $qb->expr()->like('o.reference', ':query'),
                $qb->expr()->like('o.customer_name', ':query'),
                $qb->expr()->like('o.customer_phone', ':query')
            ))
            ->setParameter('query', '%' . $query . '%')
            ->orderBy('o.created_at', 'DESC')
            ->getQuery()
            ->getResult();
    }

    /**
     * Recherche avec filtrage par HmaService
     */
    public function searchByHmaService(string $query, $hmaServiceId, ?string $entityType = null): array
    {
        $results = [];
        
        if ($entityType === 'user' || $entityType === null) {
            $results['users'] = $this->searchUsersByHmaService($query, $hmaServiceId);
        }
        
        if ($entityType === 'product' || $entityType === null) {
            $results['products'] = $this->searchProductsByHmaService($query, $hmaServiceId);
        }
        
        return $results;
    }

    private function searchUsersByHmaService(string $query, $hmaServiceId): array
    {
        $qb = $this->entityManager->createQueryBuilder();
        
        return $qb->select('u')
            ->from('App\Entity\User', 'u')
            ->where('u.hma_service_id = :hmaServiceId')
            ->andWhere($qb->expr()->orX(
                $qb->expr()->like('u.full_name', ':query'),
                $qb->expr()->like('u.email', ':query'),
                $qb->expr()->like('u.phone', ':query')
            ))
            ->setParameter('hmaServiceId', $hmaServiceId)
            ->setParameter('query', '%' . $query . '%')
            ->orderBy('u.full_name', 'ASC')
            ->getQuery()
            ->getResult();
    }

    private function searchProductsByHmaService(string $query, $hmaServiceId): array
    {
        $qb = $this->entityManager->createQueryBuilder();
        
        return $qb->select('p')
            ->from('App\Entity\Product', 'p')
            ->where('p.hma_service_id = :hmaServiceId')
            ->andWhere($qb->expr()->orX(
                $qb->expr()->like('p.name', ':query'),
                $qb->expr()->like('p.description', ':query'),
                $qb->expr()->like('p.reference', ':query')
            ))
            ->setParameter('hmaServiceId', $hmaServiceId)
            ->setParameter('query', '%' . $query . '%')
            ->orderBy('p.name', 'ASC')
            ->getQuery()
            ->getResult();
    }
}