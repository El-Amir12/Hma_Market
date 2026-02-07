<?php

namespace App\Repository;

use App\Entity\Supplier;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
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

    // Méthode pour trouver tous les fournisseurs actifs
    public function findAllActive(): array
    {
        return $this->createQueryBuilder('s')
            ->where('s.is_active = :active')
            ->setParameter('active', true)
            ->orderBy('s.name', 'ASC')
            ->getQuery()
            ->getResult();
    }

    // Méthode pour trouver par nom
    public function findByName(string $name): array
    {
        return $this->createQueryBuilder('s')
            ->where('s.name LIKE :name')
            ->setParameter('name', '%' . $name . '%')
            ->orderBy('s.name', 'ASC')
            ->getQuery()
            ->getResult();
    }

    // Méthode pour rechercher des fournisseurs
    public function search(string $term): array
    {
        return $this->createQueryBuilder('s')
            ->where('s.name LIKE :term')
            ->orWhere('s.email LIKE :term')
            ->orWhere('s.phone LIKE :term')
            ->setParameter('term', '%' . $term . '%')
            ->orderBy('s.name', 'ASC')
            ->getQuery()
            ->getResult();
    }

    // Compteur de fournisseurs actifs
    public function countActive(): int
    {
        return $this->createQueryBuilder('s')
            ->select('COUNT(s.id)')
            ->where('s.is_active = :active')
            ->setParameter('active', true)
            ->getQuery()
            ->getSingleScalarResult();
    }
}