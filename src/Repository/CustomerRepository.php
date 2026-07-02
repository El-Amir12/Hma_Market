<?php
// src/Repository/CustomerRepository.php

namespace App\Repository;

use App\Entity\Customer;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @extends ServiceEntityRepository<Customer>
 */
class CustomerRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, Customer::class);
    }

    /**
     * Trouve un client par email
     */
    public function findByEmail(string $email): ?Customer
    {
        return $this->createQueryBuilder('c')
            ->where('c.email = :email')
            ->setParameter('email', $email)
            ->getQuery()
            ->getOneOrNullResult();
    }

    /**
     * Trouve les clients actifs
     */
    public function findActiveCustomers(): array
    {
        return $this->createQueryBuilder('c')
            ->where('c.is_active = true')
            ->orderBy('c.created_at', 'DESC')
            ->getQuery()
            ->getResult();
    }

    /**
     * Compte le nombre de clients actifs
     */
    public function countActive(): int
    {
        return $this->createQueryBuilder('c')
            ->select('COUNT(c.id)')
            ->where('c.is_active = true')
            ->getQuery()
            ->getSingleScalarResult();
    }

    /**
     * Recherche des clients par nom ou email
     */
    public function searchCustomers(string $search): array
    {
        return $this->createQueryBuilder('c')
            ->where('c.full_name LIKE :search')
            ->orWhere('c.email LIKE :search')
            ->setParameter('search', "%{$search}%")
            ->orderBy('c.full_name', 'ASC')
            ->getQuery()
            ->getResult();
    }

    /**
     * Trouve les clients qui ont passé des commandes
     */
    public function findCustomersWithOrders(): array
    {
        return $this->createQueryBuilder('c')
            ->innerJoin('c.orders', 'o')
            ->groupBy('c.id')
            ->having('COUNT(o.id) > 0')
            ->orderBy('COUNT(o.id)', 'DESC')
            ->getQuery()
            ->getResult();
    }

    /**
     * Trouve les nouveaux clients (derniers 7 jours)
     */
    public function findNewCustomers(\DateTimeImmutable $since = null): array
    {
        if (!$since) {
            $since = new \DateTimeImmutable('-7 days');
        }

        return $this->createQueryBuilder('c')
            ->where('c.created_at >= :since')
            ->setParameter('since', $since)
            ->orderBy('c.created_at', 'DESC')
            ->getQuery()
            ->getResult();
    }
}