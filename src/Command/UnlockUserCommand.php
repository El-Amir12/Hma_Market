<?php
// src/Command/UnlockUserCommand.php

namespace App\Command;

use App\Entity\User;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Component\Console\Attribute\AsCommand;
use Symfony\Component\Console\Command\Command;
use Symfony\Component\Console\Input\InputArgument;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Output\OutputInterface;
use Symfony\Component\Console\Style\SymfonyStyle;

#[AsCommand(
    name: 'app:user:unlock',
    description: 'Débloque un utilisateur spécifique par email',
)]
class UnlockUserCommand extends Command
{
    public function __construct(private EntityManagerInterface $entityManager)
    {
        parent::__construct();
    }

    protected function configure(): void
    {
        $this->addArgument('email', InputArgument::REQUIRED, 'Email de l\'utilisateur à débloquer');
    }

    protected function execute(InputInterface $input, OutputInterface $output): int
    {
        $io = new SymfonyStyle($input, $output);
        $email = $input->getArgument('email');
        
        $user = $this->entityManager->getRepository(User::class)->findOneBy(['email' => $email]);
        
        if (!$user) {
            $io->error(sprintf('Utilisateur avec l\'email "%s" non trouvé.', $email));
            return Command::FAILURE;
        }
        
        $user->setFailedLoginAttempts(0);
        $user->setLockedUntil(null);
        $this->entityManager->flush();
        
        $io->success(sprintf('Utilisateur "%s" débloqué avec succès.', $email));
        
        return Command::SUCCESS;
    }
}