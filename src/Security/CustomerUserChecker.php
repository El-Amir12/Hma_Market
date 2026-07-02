<?php
// src/Security/CustomerUserChecker.php
namespace App\Security;

use App\Entity\Customer;
use Psr\Log\LoggerInterface;
use Symfony\Component\Security\Core\Exception\CustomUserMessageAccountStatusException;
use Symfony\Component\Security\Core\User\UserCheckerInterface;
use Symfony\Component\Security\Core\User\UserInterface;

class CustomerUserChecker implements UserCheckerInterface
{
    private LoggerInterface $logger;

    public function __construct(LoggerInterface $logger)
    {
        $this->logger = $logger;
    }

    public function checkPreAuth(UserInterface $user): void
    {
        if (!$user instanceof Customer) {
            return;
        }

        $this->logger->debug('🔍 CustomerUserChecker - checkPreAuth', [
            'email' => $user->getEmail(),
            'is_active' => $user->isActive(),
            'is_verified' => $user->isVerified()
        ]);

        // ✅ Vérifier si le compte est actif
        if (!$user->isActive()) {
            $this->logger->warning('❌ Compte inactif détecté', [
                'email' => $user->getEmail()
            ]);
            throw new CustomUserMessageAccountStatusException(
                'Votre compte n\'est pas encore activé. Veuillez vérifier votre email ou renvoyer le lien de vérification.'
            );
        }

        // ✅ Vérifier si l'email est vérifié
        if (!$user->isVerified()) {
            $this->logger->warning('❌ Email non vérifié détecté', [
                'email' => $user->getEmail()
            ]);
            throw new CustomUserMessageAccountStatusException(
                'Votre email n\'a pas été vérifié. Veuillez vérifier votre boîte de réception.'
            );
        }

        $this->logger->info('✅ CustomerUserChecker - checkPreAuth OK', [
            'email' => $user->getEmail()
        ]);
    }

    public function checkPostAuth(UserInterface $user): void
    {
        if (!$user instanceof Customer) {
            return;
        }

        $this->logger->debug('🔍 CustomerUserChecker - checkPostAuth', [
            'email' => $user->getEmail()
        ]);
    }
}