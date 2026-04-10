<?php
// src/Command/UnlockLockedUsersCommand.php

namespace App\Command;

use App\Entity\User;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Component\Console\Attribute\AsCommand;
use Symfony\Component\Console\Command\Command;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Output\OutputInterface;
use Symfony\Component\Console\Style\SymfonyStyle;

#[AsCommand(
    name: 'app:unlock-locked-users',
    description: 'Débloque tous les utilisateurs dont la période de blocage est expirée',
)]
class UnlockLockedUsersCommand extends Command
{
    public function __construct(private EntityManagerInterface $entityManager)
    {
        parent::__construct();
    }

    protected function execute(InputInterface $input, OutputInterface $output): int
    {
        $io = new SymfonyStyle($input, $output);
        
        $now = new \DateTime();
        
        $users = $this->entityManager->getRepository(User::class)
            ->createQueryBuilder('u')
            ->where('u.locked_until IS NOT NULL')
            ->andWhere('u.locked_until <= :now')
            ->setParameter('now', $now)
            ->getQuery()
            ->getResult();
        
        $count = 0;
        foreach ($users as $user) {
            $user->setFailedLoginAttempts(0);
            $user->setLockedUntil(null);
            $count++;
        }
        
        $this->entityManager->flush();
        
        $io->success(sprintf('%d utilisateur(s) débloqué(s).', $count));
        
        return Command::SUCCESS;
    }
}