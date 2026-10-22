<?php
// src/Command/SendExpirationRemindersCommand.php

namespace App\Command;

use App\Entity\HmaService;
use App\Entity\User;
use App\Service\EmailService;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Component\Console\Attribute\AsCommand;
use Symfony\Component\Console\Command\Command;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Output\OutputInterface;
use Symfony\Component\Console\Style\SymfonyStyle;

#[AsCommand(
    name: 'app:send-expiration-reminders',
    description: 'Envoie des rappels d\'expiration adaptés au plan actuel (admin + manager).'
)]
class SendExpirationRemindersCommand extends Command
{
    public function __construct(
        private EntityManagerInterface $em,
        private EmailService $emailService
    ) {
        parent::__construct();
    }

    protected function execute(InputInterface $input, OutputInterface $output): int
    {
        $io = new SymfonyStyle($input, $output);
        $io->title('📧 Rappels d\'expiration d\'abonnement');

        $now = new \DateTimeImmutable();

        // ============================================================
        // 1. Entreprises dont l'abonnement expire dans 3 jours
        // ============================================================
        $targetDate = (clone $now)->modify('+3 days');
        $start3days = (clone $targetDate)->setTime(0, 0, 0);
        $end3days   = (clone $targetDate)->setTime(23, 59, 59);

        $expiringSoon = $this->em->createQueryBuilder()
            ->select('s')
            ->from(HmaService::class, 's')
            ->where('s.subscriptionEndsAt IS NOT NULL')
            ->andWhere('s.subscriptionEndsAt BETWEEN :start AND :end')
            ->setParameter('start', $start3days)
            ->setParameter('end', $end3days)
            ->getQuery()
            ->getResult();

        $io->info(sprintf('🔔 Entreprises expirant dans 3 jours : %d', count($expiringSoon)));

        // ============================================================
        // 2. Entreprises dont l'abonnement a expiré HIER (relance J+1)
        //    → relance immédiate pour ne pas perdre le client
        // ============================================================
        $yesterday = (clone $now)->modify('-1 day');
        $startYesterday = (clone $yesterday)->setTime(0, 0, 0);
        $endYesterday   = (clone $yesterday)->setTime(23, 59, 59);

        $justExpired = $this->em->createQueryBuilder()
            ->select('s')
            ->from(HmaService::class, 's')
            ->where('s.subscriptionEndsAt IS NOT NULL')
            ->andWhere('s.subscriptionEndsAt BETWEEN :start AND :end')
            ->setParameter('start', $startYesterday)
            ->setParameter('end', $endYesterday)
            ->getQuery()
            ->getResult();

        $io->info(sprintf('⚠️ Entreprises expirées hier : %d', count($justExpired)));

        // ============================================================
        // 3. Envoi des rappels
        // ============================================================
        $sent = 0;
        $failed = 0;
        $skipped = 0;

        $allCompanies = array_merge($expiringSoon, $justExpired);

        if (empty($allCompanies)) {
            $io->success('Aucun rappel à envoyer.');
            return Command::SUCCESS;
        }

        foreach ($allCompanies as $company) {
            $recipients = $this->getAdminAndManagerUsers($company);

            if (empty($recipients)) {
                $skipped++;
                $io->warning(sprintf(
                    '  ⚠️ Aucun admin/manager trouvé pour %s',
                    $company->getCompanyName()
                ));
                continue;
            }

            foreach ($recipients as $user) {
                try {
                    $success = $this->emailService->sendExpirationReminderWithUpgrade($user, $company);

                    if ($success) {
                        $sent++;
                        $io->writeln(sprintf(
                            '  📧 %s → %s (plan: %s)',
                            $company->getCompanyName(),
                            $user->getEmail(),
                            $company->getCurrentPlan()
                        ));
                    } else {
                        $failed++;
                    }
                } catch (\Throwable $e) {
                    $failed++;
                    $io->error(sprintf(
                        '  ❌ Erreur pour %s : %s',
                        $user->getEmail(),
                        $e->getMessage()
                    ));
                }
            }
        }

        // ============================================================
        // 4. Résumé final
        // ============================================================
        $io->section('📊 RÉSUMÉ');

        $io->table(
            ['Métrique', 'Valeur'],
            [
                ['📤 Rappels envoyés', $sent],
                ['❌ Échecs', $failed],
                ['⚠️ Entreprises sans admin/manager', $skipped],
            ]
        );

        if ($failed > 0) {
            $io->warning(sprintf('%d email(s) n\'ont pas pu être envoyés.', $failed));
            return Command::FAILURE;
        }

        $io->success(sprintf('%d rappel(s) envoyé(s) avec succès.', $sent));
        return Command::SUCCESS;
    }

    /**
     * ✅ Récupère les admins ET managers de l'entreprise.
     *
     * On inclut les désactivés car ils doivent pouvoir renouveler
     * l'abonnement (ils sont responsables de l'entreprise).
     *
     * @return User[]
     */
    private function getAdminAndManagerUsers(HmaService $company): array
    {
        return $this->em->getRepository(User::class)
            ->createQueryBuilder('u')
            ->where('u.hma_service_id = :company')
            ->andWhere('u.roles LIKE :admin OR u.roles LIKE :manager')
            ->setParameter('company', $company)
            ->setParameter('admin', '%ROLE_ADMIN%')
            ->setParameter('manager', '%ROLE_MANAGER%')
            ->getQuery()
            ->getResult();
    }
}