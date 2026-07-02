<?php
// src/Security/CustomerLoginSuccessHandler.php
namespace App\Security;

use App\Entity\Customer;
use Doctrine\ORM\EntityManagerInterface;
use Psr\Log\LoggerInterface;
use Symfony\Component\HttpFoundation\RedirectResponse;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Generator\UrlGeneratorInterface;
use Symfony\Component\Security\Core\Authentication\Token\TokenInterface;
use Symfony\Component\Security\Http\Authentication\AuthenticationSuccessHandlerInterface;

class CustomerLoginSuccessHandler implements AuthenticationSuccessHandlerInterface
{
    public function __construct(
        private UrlGeneratorInterface $urlGenerator,
        private EntityManagerInterface $entityManager,
        private LoggerInterface $logger  // ✅ Ajout du logger
    ) {}

    public function onAuthenticationSuccess(Request $request, TokenInterface $token): Response
    {
        /** @var Customer $customer */
        $customer = $token->getUser();
        
        $this->logger->info('🎯 CustomerLoginSuccessHandler - Connexion réussie', [
            'email' => $customer->getEmail(),
            'id' => $customer->getId()
        ]);
        
        if ($customer instanceof Customer) {
            // ✅ Mettre à jour la date de dernière connexion
            $customer->setLastLoginAt(new \DateTimeImmutable());
            
            // ✅ Si le compte n'est pas actif, ne pas connecter
            if (!$customer->isActive()) {
                $this->logger->warning('⚠️ Tentative de connexion sur compte inactif', [
                    'email' => $customer->getEmail()
                ]);
            }
            
            $this->entityManager->flush();
        }

        // ✅ Rediriger vers l'accueil de la marketplace
        return new RedirectResponse($this->urlGenerator->generate('marketplace_home'));
    }
}