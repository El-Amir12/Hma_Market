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
        $io->title('📊 Application des quotas');

        $results = $this->quotaEnforcement->enforceAllQuotas();

        $io->section('Résultats par type d\'entité');
        $rows = [];
        
        // ✅ Définition des types avec leurs labels et clés
        $typeConfig = [
            'product' => ['label' => '📦 Produits', 'deactivated_key' => 'deactivated', 'reactivated_key' => 'reactivated'],
            'category' => ['label' => '📁 Catégories', 'deactivated_key' => 'deactivated', 'reactivated_key' => 'reactivated'],
            'supplier' => ['label' => '🏢 Fournisseurs', 'deactivated_key' => 'deactivated', 'reactivated_key' => 'reactivated'],
            'recipe' => ['label' => '🍽️ Recettes (plats)', 'deactivated_key' => 'deactivated', 'reactivated_key' => 'reactivated'],
            'category_recipe' => ['label' => '📂 Catégories de recettes', 'deactivated_key' => 'deactivated', 'reactivated_key' => 'reactivated'],
            'public_status' => ['label' => '🌍 Statut public', 'deactivated_key' => 'set_private', 'reactivated_key' => 'set_public'],
        ];

        foreach ($typeConfig as $type => $config) {
            if (isset($results[$type])) {
                $counts = $results[$type];
                $deactivated = $counts[$config['deactivated_key']] ?? 0;
                $reactivated = $counts[$config['reactivated_key']] ?? 0;
                $rows[] = [$config['label'], $deactivated, $reactivated];
            }
        }
        
        $io->table(
            ['Type', '⬇️ Désactivations / Privé', '⬆️ Réactivations / Public'],
            $rows
        );

        // ✅ Calcul des totaux
        $totalDeactivations = 0;
        $totalReactivated = 0;
        
        foreach ($typeConfig as $type => $config) {
            if (isset($results[$type])) {
                $counts = $results[$type];
                $totalDeactivations += $counts[$config['deactivated_key']] ?? 0;
                $totalReactivated += $counts[$config['reactivated_key']] ?? 0;
            }
        }

        // ✅ Résumé
        $io->section('📋 Résumé');
        
        if ($totalDeactivations > 0 || $totalReactivated > 0) {
            $io->success(sprintf(
                "✅ Opération terminée :\n   • %d désactivation(s) / passage(s) en privé\n   • %d réactivation(s) / passage(s) en public",
                $totalDeactivations,
                $totalReactivated
            ));
        } else {
            $io->info('✅ Aucun changement nécessaire. Toutes les entreprises respectent leurs quotas.');
        }

        return Command::SUCCESS;
    }
}