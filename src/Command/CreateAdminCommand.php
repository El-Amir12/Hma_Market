<?php

namespace App\Command;

use App\Entity\User;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Component\Console\Attribute\AsCommand;
use Symfony\Component\Console\Command\Command;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Input\InputOption;
use Symfony\Component\Console\Output\OutputInterface;
use Symfony\Component\Console\Style\SymfonyStyle;
use Symfony\Component\PasswordHasher\Hasher\UserPasswordHasherInterface;

#[AsCommand(
    name: 'create-admin',
    description: 'Create an admin user',
)]
class CreateAdminCommand extends Command
{
    public function __construct(
        private EntityManagerInterface $entityManager,
        private UserPasswordHasherInterface $passwordHasher,
    ) {
        parent::__construct();
    }

    protected function configure(): void
    {
        $this
            ->addOption('email', null, InputOption::VALUE_REQUIRED, 'Admin email')
            ->addOption('password', null, InputOption::VALUE_REQUIRED, 'Admin password')
            ->addOption('full-name', null, InputOption::VALUE_REQUIRED, 'Admin full name')
            ->addOption('phone', null, InputOption::VALUE_OPTIONAL, 'Admin phone number')
            ->addOption('roles', null, InputOption::VALUE_OPTIONAL, 'Admin roles (comma-separated)', 'ROLE_ADMIN')
        ;
    }

    protected function execute(InputInterface $input, OutputInterface $output): int
    {
        $io = new SymfonyStyle($input, $output);

        $email = $input->getOption('email');
        $password = $input->getOption('password');
        $fullName = $input->getOption('full-name');
        $phone = $input->getOption('phone');
        $rolesString = $input->getOption('roles');

        if (!$email || !$password || !$fullName) {
            $io->error('Options --email, --password, and --full-name are required.');
            return Command::FAILURE;
        }

        $roles = array_map('trim', explode(',', $rolesString));

        $user = new User();
        $user->setEmail($email);
        $user->setFullName($fullName);
        $user->setPhone($phone);
        $user->setRoles($roles);
        $user->setIsActive(true);
        $user->setCreatedAt(new \DateTime());
        $user->setUpdatedAt(new \DateTime());

        $hashedPassword = $this->passwordHasher->hashPassword($user, $password);
        $user->setPassword($hashedPassword);

        $this->entityManager->persist($user);
        $this->entityManager->flush();

        $io->success('Admin user created successfully!');

        return Command::SUCCESS;
    }
}
