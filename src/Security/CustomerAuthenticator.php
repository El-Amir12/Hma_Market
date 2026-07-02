<?php
// src/Security/CustomerAuthenticator.php
namespace App\Security;

use App\Entity\Customer;
use Doctrine\ORM\EntityManagerInterface;
use Psr\Log\LoggerInterface;
use Symfony\Component\HttpFoundation\RedirectResponse;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Generator\UrlGeneratorInterface;
use Symfony\Component\Security\Core\Authentication\Token\TokenInterface;
use Symfony\Component\Security\Core\Exception\AuthenticationException;
use Symfony\Component\Security\Core\Exception\CustomUserMessageAuthenticationException;
use Symfony\Component\Security\Http\Authenticator\AbstractLoginFormAuthenticator;
use Symfony\Component\Security\Http\Authenticator\Passport\Badge\CsrfTokenBadge;
use Symfony\Component\Security\Http\Authenticator\Passport\Badge\RememberMeBadge;
use Symfony\Component\Security\Http\Authenticator\Passport\Badge\UserBadge;
use Symfony\Component\Security\Http\Authenticator\Passport\Credentials\PasswordCredentials;
use Symfony\Component\Security\Http\Authenticator\Passport\Passport;
use Symfony\Component\Security\Http\SecurityRequestAttributes;
use Symfony\Component\Security\Http\Util\TargetPathTrait;

class CustomerAuthenticator extends AbstractLoginFormAuthenticator
{
    use TargetPathTrait;

    public const LOGIN_ROUTE = 'marketplace_login';

    public function __construct(
        private UrlGeneratorInterface $urlGenerator,
        private EntityManagerInterface $entityManager,
        private LoggerInterface $logger
    ) {}

    public function authenticate(Request $request): Passport
    {
        $email = $request->getPayload()->getString('email');
        $request->getSession()->set(SecurityRequestAttributes::LAST_USERNAME, $email);

        return new Passport(
            new UserBadge($email, function ($userIdentifier) {
                $customer = $this->entityManager->getRepository(Customer::class)
                    ->findOneBy(['email' => $userIdentifier]);

                if (!$customer) {
                    throw new CustomUserMessageAuthenticationException('Email ou mot de passe incorrect.');
                }

                if (!$customer->isActive()) {
                    throw new CustomUserMessageAuthenticationException(
                        'Votre compte n\'est pas encore activé. Veuillez vérifier votre email.'
                    );
                }

                if (!$customer->isVerified()) {
                    throw new CustomUserMessageAuthenticationException(
                        'Votre email n\'a pas été vérifié. Veuillez vérifier votre boîte de réception.'
                    );
                }

                return $customer;
            }),
            new PasswordCredentials($request->getPayload()->getString('password')),
            [
                new CsrfTokenBadge('authenticate', $request->getPayload()->getString('_csrf_token')),
                new RememberMeBadge(),
            ]
        );
    }

    public function onAuthenticationSuccess(Request $request, TokenInterface $token, string $firewallName): ?Response
    {
        /** @var Customer $customer */
        $customer = $token->getUser();
        
        if ($customer instanceof Customer) {
            $customer->setLastLoginAt(new \DateTimeImmutable());
            
            // ✅ Si l'utilisateur doit changer son mot de passe
            if ($customer->isMustChangePassword()) {
                $this->entityManager->flush();
                
                // ✅ Rediriger vers le login avec un paramètre pour afficher le message
                return new RedirectResponse(
                    $this->urlGenerator->generate('marketplace_login') . '?force_change_password=1'
                );
            }
            
            $this->entityManager->flush();
        }

        if ($targetPath = $this->getTargetPath($request->getSession(), $firewallName)) {
            return new RedirectResponse($targetPath);
        }

        return new RedirectResponse($this->urlGenerator->generate('marketplace_home'));
    }

    protected function getLoginUrl(Request $request): string
    {
        return $this->urlGenerator->generate(self::LOGIN_ROUTE);
    }
}