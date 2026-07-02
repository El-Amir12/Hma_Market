<?php
// src/Command/CleanIncompleteCustomersCommand.php

namespace App\Command;

use App\Entity\Customer;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Component\Console\Attribute\AsCommand;
use Symfony\Component\Console\Command\Command;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Output\OutputInterface;
use Symfony\Component\Console\Style\SymfonyStyle;

#[AsCommand(
    name: 'app:clean-incomplete-customers',
    description: 'Nettoie les clients avec inscription incomplète (soft delete après 7 jours)'
)]
class CleanIncompleteCustomersCommand extends Command
{
    // ✅ Délai avant suppression définitive : 7 jours (au lieu de 24h)
    private const DELETE_AFTER_DAYS = 7;
    
    public function __construct(
        private EntityManagerInterface $entityManager
    ) {
        parent::__construct();
    }

    protected function execute(InputInterface $input, OutputInterface $output): int
    {
        $io = new SymfonyStyle($input, $output);
        $io->title('🧹 Nettoyage des clients avec inscription incomplète');

        $now = new \DateTime();
        $softDeleteDeadline = (new \DateTime())->modify('-24 hours');  // 24h pour soft delete
        $hardDeleteDeadline = (new \DateTime())->modify('-7 days');    // 7 jours pour hard delete

        $io->info(sprintf('📅 Soft delete après : 24h (%s)', $softDeleteDeadline->format('d/m/Y H:i:s')));
        $io->info(sprintf('📅 Hard delete après : 7 jours (%s)', $hardDeleteDeadline->format('d/m/Y H:i:s')));

        // ============================================================ //
        // 1. SOFT DELETE : Marquer les clients comme "à nettoyer"
        //    (is_active = false, mais on garde les données)
        // ============================================================ //
        $softDeleteCustomers = $this->entityManager
            ->createQueryBuilder()
            ->select('c')
            ->from(Customer::class, 'c')
            ->where('c.is_active = :isActive')
            ->andWhere('c.is_verified = :isVerified')
            ->andWhere('c.created_at <= :deadline')
            ->andWhere('c.deleted_at IS NULL')  // ✅ Nouveau champ
            ->setParameter('isActive', false)
            ->setParameter('isVerified', false)
            ->setParameter('deadline', $softDeleteDeadline)
            ->getQuery()
            ->getResult();

        $io->info(sprintf('📊 Clients à marquer "à nettoyer" (soft delete) : %d', count($softDeleteCustomers)));

        foreach ($softDeleteCustomers as $customer) {
            $customer->setDeletedAt($now);  // ✅ Nouveau champ à ajouter dans l'entité
            $io->writeln(sprintf('  🔄 Soft delete de %s', $customer->getEmail()));
        }

        $this->entityManager->flush();

        // ============================================================ //
        // 2. HARD DELETE : Supprimer définitivement les clients
        //    marqués "à nettoyer" depuis plus de 7 jours
        // ============================================================ //
        $hardDeleteCustomers = $this->entityManager
            ->createQueryBuilder()
            ->select('c')
            ->from(Customer::class, 'c')
            ->where('c.deleted_at IS NOT NULL')
            ->andWhere('c.deleted_at <= :deadline')
            ->setParameter('deadline', $hardDeleteDeadline)
            ->getQuery()
            ->getResult();

        $io->info(sprintf('📊 Clients à supprimer définitivement (hard delete) : %d', count($hardDeleteCustomers)));

        if (count($hardDeleteCustomers) > 0) {
            if ($input->isInteractive()) {
                if (!$io->confirm('⚠️  Supprimer définitivement ces ' . count($hardDeleteCustomers) . ' clients ?', false)) {
                    $io->warning('Opération annulée.');
                    return Command::SUCCESS;
                }
            }

            foreach ($hardDeleteCustomers as $customer) {
                $io->writeln(sprintf('  🗑️  Suppression définitive de %s', $customer->getEmail()));
                $this->entityManager->remove($customer);
            }

            $this->entityManager->flush();
            $io->success(sprintf('✅ %d client(s) supprimés définitivement', count($hardDeleteCustomers)));
        } else {
            $io->success('✅ Aucun client à supprimer définitivement.');
        }

        // ============================================================ //
        // 3. NETTOYER LES TOKENS EXPIRÉS
        // ============================================================ //
        $expiredTokens = $this->entityManager
            ->createQueryBuilder()
            ->select('c')
            ->from(Customer::class, 'c')
            ->where('c.verification_token IS NOT NULL')
            ->andWhere('c.verification_token_expires_at <= :now')
            ->andWhere('c.is_verified = :isVerified')
            ->setParameter('now', $now)
            ->setParameter('isVerified', false)
            ->getQuery()
            ->getResult();

        $io->info(sprintf('📊 Tokens expirés à nettoyer : %d', count($expiredTokens)));

        foreach ($expiredTokens as $customer) {
            $io->writeln(sprintf('  🔄 Réinitialisation du token de %s', $customer->getEmail()));
            $customer->setVerificationToken(null);
            $customer->setVerificationTokenExpiresAt(null);
        }

        $this->entityManager->flush();

        $io->success(sprintf(
            '✅ %d token(s) expiré(s) réinitialisé(s)',
            count($expiredTokens)
        ));

        return Command::SUCCESS;
    }
}