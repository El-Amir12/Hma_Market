<?php
// src/Command/CleanExpiredAnalysisCommand.php

namespace App\Command;

use App\Repository\AnalysisRequestRepository;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Component\Console\Attribute\AsCommand;
use Symfony\Component\Console\Command\Command;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Output\OutputInterface;
use Symfony\Component\Console\Style\SymfonyStyle;

#[AsCommand(
    name: 'app:clean-expired-analysis',
    description: 'Nettoie les demandes d\'analyse expirées',
)]
class CleanExpiredAnalysisCommand extends Command
{
    public function __construct(
        private AnalysisRequestRepository $repository,
        private EntityManagerInterface $entityManager
    ) {
        parent::__construct();
    }
    
    protected function execute(InputInterface $input, OutputInterface $output): int
    {
        $io = new SymfonyStyle($input, $output);
        
        $expiredRequests = $this->repository->findExpiredRequests();
        
        if (empty($expiredRequests)) {
            $io->success('Aucune demande expirée à nettoyer.');
            return Command::SUCCESS;
        }
        
        $count = 0;
        foreach ($expiredRequests as $request) {
            $request->setStatus(\App\Entity\AnalysisRequest::STATUS_EXPIRED);
            $this->entityManager->flush();
            $count++;
        }
        
        $io->success(sprintf('%d demande(s) expirée(s) marquée(s).', $count));
        
        return Command::SUCCESS;
    }
}