<?php
// src/Command/EnforceUserQuotasCommand.php

namespace App\Command;

use App\Entity\HmaService;
use App\Service\QuotaManager;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Component\Console\Attribute\AsCommand;
use Symfony\Component\Console\Command\Command;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Output\OutputInterface;
use Symfony\Component\Console\Style\SymfonyStyle;

#[AsCommand(
    name: 'app:enforce-user-quotas',
    description: 'Applique les quotas d\'utilisateurs à toutes les entreprises (active/désactive selon les rôles).'
)]
class EnforceUserQuotasCommand extends Command
{
    public function __construct(
        private EntityManagerInterface $em,
        private QuotaManager $quotaManager
    ) {
        parent::__construct();
    }

    protected function execute(InputInterface $input, OutputInterface $output): int
    {
        $io = new SymfonyStyle($input, $output);
        $io->title('Application des quotas utilisateurs');

        $companies = $this->em->getRepository(HmaService::class)->findAll();
        $totalStats = ['activated' => 0, 'deactivated' => 0];

        foreach ($companies as $company) {
            $stats = $this->quotaManager->updateSubscriptionStatusForCompany($company);
            $totalStats['activated'] += $stats['activated'];
            $totalStats['deactivated'] += $stats['deactivated'];
        }

        $io->table(
            ['Action', 'Nombre'],
            [
                ['Utilisateurs activés', $totalStats['activated']],
                ['Utilisateurs désactivés', $totalStats['deactivated']],
            ]
        );

        if ($totalStats['activated'] === 0 && $totalStats['deactivated'] === 0) {
            $io->info('Aucun changement nécessaire.');
        } else {
            $io->success('Quotas utilisateurs appliqués.');
        }

        return Command::SUCCESS;
    }
}