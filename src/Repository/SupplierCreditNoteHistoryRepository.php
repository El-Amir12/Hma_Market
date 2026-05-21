<?php
// src/Repository/SupplierCreditNoteHistoryRepository.php

namespace App\Repository;

use App\Entity\SupplierCreditNote;
use App\Entity\SupplierCreditNoteHistory;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @extends ServiceEntityRepository<SupplierCreditNoteHistory>
 */
class SupplierCreditNoteHistoryRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, SupplierCreditNoteHistory::class);
    }

    /**
     * Récupère l'historique d'un avoir
     */
    public function findByCreditNote(SupplierCreditNote $creditNote): array
    {
        return $this->createQueryBuilder('h')
            ->where('h.creditNote = :creditNote')
            ->setParameter('creditNote', $creditNote)
            ->orderBy('h.performed_at', 'ASC')
            ->getQuery()
            ->getResult();
    }
}