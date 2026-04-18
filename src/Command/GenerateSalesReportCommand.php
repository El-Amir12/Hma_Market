<?php
// src/Command/GenerateSalesReportCommand.php

namespace App\Command;

use Symfony\Component\Console\Command\Command;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Output\OutputInterface;

class GenerateSalesReportCommand extends Command
{
    protected static $defaultName = 'app:generate-sales-report';
    protected static $defaultDescription = 'Génère un rapport de ventes Excel (à implémenter)';

    protected function execute(InputInterface $input, OutputInterface $output): int
    {
        $output->writeln('<comment>Cette commande sera implémentée ultérieurement.</comment>');
        $output->writeln('<info>Les exports Excel se font via l\'interface Super Admin.</info>');
        
        return Command::SUCCESS;
    }
}