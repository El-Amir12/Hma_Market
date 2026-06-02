<?php
// src/Command/CreateMonthlySubscriptionsCommand.php

namespace App\Command;

use App\Entity\AnalysisRequest;
use App\Repository\AnalysisRequestRepository;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Component\Console\Attribute\AsCommand;
use Symfony\Component\Console\Command\Command;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Output\OutputInterface;
use Symfony\Component\Console\Style\SymfonyStyle;

#[AsCommand(
    name: 'app:create-monthly-subscriptions',
    description: 'Crée automatiquement les demandes d\'analyse pour les abonnements mensuels actifs'
)]
class CreateMonthlySubscriptionsCommand extends Command
{
    public function __construct(
        private EntityManagerInterface $entityManager,
        private AnalysisRequestRepository $analysisRepository
    ) {
        parent::__construct();
    }

    protected function execute(InputInterface $input, OutputInterface $output): int
    {
        $io = new SymfonyStyle($input, $output);
        $io->title('Création des analyses mensuelles automatiques');

        // Récupérer les abonnements actifs
        $activeSubscriptions = $this->analysisRepository->createQueryBuilder('a')
            ->where('a.type = :type')
            ->andWhere('a.status = :status')
            ->setParameter('type', AnalysisRequest::TYPE_SUBSCRIPTION)
            ->setParameter('status', AnalysisRequest::STATUS_PAID)
            ->getQuery()
            ->getResult();

        if (empty($activeSubscriptions)) {
            $io->success('Aucun abonnement actif trouvé.');
            return Command::SUCCESS;
        }

        $now = new \DateTime();
        $firstDayCurrentMonth = (new \DateTime())->modify('first day of this month')->setTime(0, 0, 0);
        $lastDayCurrentMonth = (new \DateTime())->modify('last day of this month')->setTime(23, 59, 59);

        $created = 0;

        foreach ($activeSubscriptions as $subscription) {
            $company = $subscription->getCompany();

            // Vérifier si l'analyse du mois existe déjà
            $existing = $this->analysisRepository->findOneBy([
                'company' => $company,
                'type' => AnalysisRequest::TYPE_SUBSCRIPTION,
                'period_start' => $firstDayCurrentMonth,
            ]);

            if (!$existing) {
                $newAnalysis = new AnalysisRequest();
                $newAnalysis->setCompany($company);
                $newAnalysis->setType(AnalysisRequest::TYPE_SUBSCRIPTION);
                $newAnalysis->setPeriodStart(clone $firstDayCurrentMonth);
                $newAnalysis->setPeriodEnd(clone $lastDayCurrentMonth);
                $newAnalysis->setRequestNumber($this->analysisRepository->generateRequestNumber());
                $newAnalysis->setAmount($subscription->getAmount());
                $newAnalysis->setStatus(AnalysisRequest::STATUS_PAID);
                $newAnalysis->setPaidAt($now);

                $this->entityManager->persist($newAnalysis);
                $created++;

                $io->writeln(sprintf(
                    '  ✅ Créé pour %s - %s au %s',
                    $company->getCompanyName(),
                    $firstDayCurrentMonth->format('d/m/Y'),
                    $lastDayCurrentMonth->format('d/m/Y')
                ));
            }
        }

        $this->entityManager->flush();
        
        $io->success(sprintf('%d analyse(s) mensuelle(s) créée(s).', $created));
        
        return Command::SUCCESS;
    }
}