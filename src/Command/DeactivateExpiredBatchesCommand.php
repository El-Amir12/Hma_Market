<?php
// src/Command/DeactivateExpiredBatchesCommand.php

namespace App\Command;

use App\Service\Sale\StockDeductionService;
use Symfony\Component\Console\Command\Command;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Output\OutputInterface;
use Symfony\Component\Console\Style\SymfonyStyle;

class DeactivateExpiredBatchesCommand extends Command
{
    protected static $defaultName = 'app:batches:deactivate-expired';
    
    public function __construct(
        private StockDeductionService $stockDeductionService
    ) {
        parent::__construct();
    }
    
    protected function configure(): void
    {
        $this
            ->setDescription('Désactive tous les lots dont la date d\'expiration est dépassée')
            ->setHelp('Cette commande désactive automatiquement les lots expirés');
    }
    
    protected function execute(InputInterface $input, OutputInterface $output): int
    {
        $io = new SymfonyStyle($input, $output);
        
        $io->title('Désactivation des lots expirés');
        
        $count = $this->stockDeductionService->deactivateAllExpiredBatches();
        
        $io->success(sprintf('%d lot(s) expiré(s) ont été désactivés.', $count));
        
        return Command::SUCCESS;
    }
}