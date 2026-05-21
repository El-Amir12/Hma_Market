<?php
// src/Repository/SupplierCreditNoteTokenRepository.php

namespace App\Repository;

use App\Entity\SupplierCreditNoteToken;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @extends ServiceEntityRepository<SupplierCreditNoteToken>
 */
class SupplierCreditNoteTokenRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, SupplierCreditNoteToken::class);
    }

    /**
     * Trouve un token valide
     */
    public function findValidToken(string $token): ?SupplierCreditNoteToken
    {
        return $this->createQueryBuilder('t')
            ->where('t.token = :token')
            ->setParameter('token', $token)
            ->andWhere('t.used_at IS NULL')
            ->andWhere('t.expires_at > :now')
            ->setParameter('now', new \DateTimeImmutable())
            ->getQuery()
            ->getOneOrNullResult();
    }
}