<?php
// src/Command/SendSubscriptionRemindersCommand.php

namespace App\Command;

use App\Entity\AnalysisRequest;
use App\Repository\AnalysisRequestRepository;
use App\Service\NotificationService;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Component\Console\Attribute\AsCommand;
use Symfony\Component\Console\Command\Command;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Output\OutputInterface;
use Symfony\Component\Console\Style\SymfonyStyle;

#[AsCommand(
    name: 'app:send-subscription-reminders',
    description: 'Envoie des rappels pour les abonnements sur le point d\'expirer'
)]
class SendSubscriptionRemindersCommand extends Command
{
    public function __construct(
        private AnalysisRequestRepository $analysisRepository,
        private NotificationService $notificationService,
        private EntityManagerInterface $entityManager
    ) {
        parent::__construct();
    }

    protected function execute(InputInterface $input, OutputInterface $output): int
    {
        $io = new SymfonyStyle($input, $output);
        $io->title('Envoi des rappels d\'expiration d\'abonnement');

        $now = new \DateTime();
        $in7Days = (clone $now)->modify('+7 days');

        // Abonnements qui expirent dans 7 jours
        $expiringSoon = $this->analysisRepository->createQueryBuilder('a')
            ->where('a.type = :type')
            ->andWhere('a.status = :status')
            ->andWhere('a.expires_at <= :in7Days')
            ->andWhere('a.expires_at > :now')
            ->setParameter('type', AnalysisRequest::TYPE_SUBSCRIPTION)
            ->setParameter('status', AnalysisRequest::STATUS_PAID)
            ->setParameter('in7Days', $in7Days)
            ->setParameter('now', $now)
            ->getQuery()
            ->getResult();

        $sent = 0;

        foreach ($expiringSoon as $subscription) {
            $company = $subscription->getCompany();
            
            $this->notificationService->sendTemplateEmail(
                $company->getEmail(),
                '⚠️ Votre abonnement va expirer',
                'emails/subscription_expiring_soon.html.twig',
                [
                    'subscription' => $subscription,
                    'company' => $company,
                    'days_left' => $now->diff($subscription->getExpiresAt())->days
                ]
            );
            
            $sent++;
            $io->writeln(sprintf('  📧 Rappel envoyé à %s', $company->getEmail()));
        }

        $io->success(sprintf('%d rappel(s) envoyé(s).', $sent));
        
        return Command::SUCCESS;
    }
}