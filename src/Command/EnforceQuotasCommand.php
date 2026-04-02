<?php
// src/Command/EnforceQuotasCommand.php

namespace App\Command;

use App\Service\QuotaEnforcementService;
use Symfony\Component\Console\Attribute\AsCommand;
use Symfony\Component\Console\Command\Command;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Output\OutputInterface;
use Symfony\Component\Console\Style\SymfonyStyle;

#[AsCommand(
    name: 'app:enforce-quotas',
    description: 'Applique les quotas actuels à toutes les entreprises (désactive/réactive les entités).'
)]
class EnforceQuotasCommand extends Command
{
    public function __construct(
        private QuotaEnforcementService $quotaEnforcement
    ) {
        parent::__construct();
    }

    protected function execute(InputInterface $input, OutputInterface $output): int
    {
        $io = new SymfonyStyle($input, $output);
        $io->title('Application des quotas');

        $results = $this->quotaEnforcement->enforceAllQuotas();

        $io->section('Résultats par type d\'entité');
        $rows = [];
        foreach ($results as $type => $counts) {
            $typeLabel = match($type) {
                'product' => 'Produits',
                'category' => 'Catégories',
                'supplier' => 'Fournisseurs',
                'recipe' => 'Recettes (plats)',
                'category_recipe' => 'Catégories de recettes',
                default => $type,
            };
            $rows[] = [$typeLabel, $counts['deactivated'], $counts['reactivated']];
        }
        $io->table(
            ['Type', 'Désactivations', 'Réactivations'],
            $rows
        );

        $totalDeactivations = array_sum(array_column($results, 'deactivated'));
        $totalReactivated = array_sum(array_column($results, 'reactivated'));

        if ($totalDeactivations > 0 || $totalReactivated > 0) {
            $io->success(sprintf(
                "Opération terminée : %d désactivation(s), %d réactivation(s).",
                $totalDeactivations,
                $totalReactivated
            ));
        } else {
            $io->info('Aucun changement nécessaire. Toutes les entreprises respectent leurs quotas.');
        }

        return Command::SUCCESS;
    }
}