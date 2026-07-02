<?php
// src/Repository/MessageRepository.php

namespace App\Repository;

use App\Entity\Message;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @extends ServiceEntityRepository<Message>
 */
class MessageRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, Message::class);
    }

    /**
     * Récupère les messages d'une conversation
     */
    public function findMessagesByConversation(int $conversationId): array
    {
        return $this->createQueryBuilder('m')
            ->where('m.conversation = :conversationId')
            ->setParameter('conversationId', $conversationId)
            ->orderBy('m.created_at', 'ASC')
            ->getQuery()
            ->getResult();
    }

    /**
     * Récupère les messages non lus d'un utilisateur
     */
    public function findUnreadMessages(int $userId): array
    {
        return $this->createQueryBuilder('m')
            ->where('m.recipient = :userId')
            ->andWhere('m.is_read = false')
            ->setParameter('userId', $userId)
            ->orderBy('m.created_at', 'DESC')
            ->getQuery()
            ->getResult();
    }

    /**
     * Marque les messages comme lus
     */
    public function markAsRead(int $conversationId, int $userId): void
    {
        $this->createQueryBuilder('m')
            ->update()
            ->set('m.is_read', ':read')
            ->where('m.conversation = :conversationId')
            ->andWhere('m.recipient = :userId')
            ->setParameter('read', true)
            ->setParameter('conversationId', $conversationId)
            ->setParameter('userId', $userId)
            ->getQuery()
            ->execute();
    }

    /**
     * Compte les messages non lus
     */
    public function countUnreadMessages(int $userId): int
    {
        return (int) $this->createQueryBuilder('m')
            ->select('COUNT(m.id)')
            ->where('m.recipient = :userId')
            ->andWhere('m.is_read = false')
            ->setParameter('userId', $userId)
            ->getQuery()
            ->getSingleScalarResult();
    }
}