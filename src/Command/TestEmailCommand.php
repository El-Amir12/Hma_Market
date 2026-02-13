<?php
// src/Command/TestEmailCommand.php

namespace App\Command;

use App\Service\EmailService;
use App\Entity\HmaService;
use Symfony\Component\Console\Attribute\AsCommand;
use Symfony\Component\Console\Command\Command;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Output\OutputInterface;

#[AsCommand(name: 'app:test-email')]
class TestEmailCommand extends Command
{
    public function __construct(private EmailService $emailService)
    {
        parent::__construct();
    }

    protected function execute(InputInterface $input, OutputInterface $output): int
    {
        $company = new HmaService();
        $company->setEmail('test@example.com');
        $company->setCompanyName('Test Company');
        
        $this->emailService->sendSuperAdminActivationNotification($company, 'HMA-TEST-123');
        $output->writeln('Email de test envoyé !');
        
        return Command::SUCCESS;
    }
}