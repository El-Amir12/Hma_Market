<?php
// src/Command/StockMaintenanceCommand.php

namespace App\Command;

use App\Service\StockSyncService;
use Symfony\Component\Console\Command\Command;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Output\OutputInterface;
use Symfony\Component\Console\Style\SymfonyStyle;

class StockMaintenanceCommand extends Command
{
    protected static $defaultName = 'app:stock:maintenance';
    
    public function __construct(
        private StockSyncService $stockSyncService
    ) {
        parent::__construct();
    }
    
    protected function configure(): void
    {
        $this
            ->setDescription('Maintenance du stock : désactive lots expirés/vides et synchronise les stocks')
            ->setHelp('Cette commande désactive les lots expirés, les lots vides et recalcule tous les stocks');
    }
    
    protected function execute(InputInterface $input, OutputInterface $output): int
    {
        $io = new SymfonyStyle($input, $output);
        
        $io->title('MAINTENANCE DU STOCK');
        $io->text('Début de la maintenance...');
        
        $result = $this->stockSyncService->fullStockMaintenance();
        
        $io->success([
            sprintf('✅ Lots expirés désactivés : %d', $result['expired_batches']),
            sprintf('✅ Lots vides désactivés : %d', $result['empty_batches']),
            sprintf('✅ Produits synchronisés : %d', $result['products_synced'])
        ]);
        
        return Command::SUCCESS;
    }
}