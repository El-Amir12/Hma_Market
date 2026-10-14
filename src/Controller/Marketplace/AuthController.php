<?php
// src/Controller/Marketplace/AuthController.php

namespace App\Controller\Marketplace;

use App\Entity\Customer;
use App\Entity\Cart;
use App\Form\CustomerRegistrationType;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bridge\Twig\Mime\TemplatedEmail;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Mailer\MailerInterface;
use Symfony\Component\Mime\Address;
use Symfony\Component\PasswordHasher\Hasher\UserPasswordHasherInterface;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\Security\Http\Authentication\AuthenticationUtils;
use Psr\Log\LoggerInterface;

#[Route('/marketplace')]
class AuthController extends AbstractController
{
    public function __construct(
        private LoggerInterface $logger
    ) {}

    #[Route('/login', name: 'marketplace_login')]
    public function login(
        AuthenticationUtils $authenticationUtils, 
        Request $request,
        EntityManagerInterface $entityManager
    ): Response {
        $user = $this->getUser();
        
        // ✅ Si l'utilisateur est déjà connecté
        if ($user instanceof Customer) {
            // ✅ CRÉER LE PANIER SI INEXISTANT AVANT LA REDIRECTION
            $this->ensureCartExists($user, $entityManager);
            
            return $this->redirectToRoute('marketplace_home');
        }

        $error = $authenticationUtils->getLastAuthenticationError();
        $lastUsername = $authenticationUtils->getLastUsername();

        return $this->render('marketplace/auth/login.html.twig', [
            'last_username' => $lastUsername,
            'error' => $error,
        ]);
    }

    #[Route('/register', name: 'marketplace_register')]
    public function register(
        Request $request,
        UserPasswordHasherInterface $passwordHasher,
        EntityManagerInterface $entityManager,
        MailerInterface $mailer
    ): Response {
        if ($this->getUser() instanceof Customer) {
            return $this->redirectToRoute('marketplace_home');
        }

        $customer = new Customer();
        $form = $this->createForm(CustomerRegistrationType::class, $customer);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $existingCustomer = $entityManager->getRepository(Customer::class)
                ->findOneBy(['email' => $customer->getEmail()]);
            
            if ($existingCustomer) {
                $this->addFlash('error', 'Cet email est déjà utilisé. Veuillez vous connecter.');
                return $this->redirectToRoute('marketplace_register');
            }

            // ✅ L'utilisateur CHOISIT son mot de passe
            $plainPassword = $form->get('plainPassword')->getData();
            $hashedPassword = $passwordHasher->hashPassword($customer, $plainPassword);
            $customer->setPassword($hashedPassword);
            
            $customer->setCreatedAt(new \DateTimeImmutable());
            $customer->setRoles(['ROLE_CUSTOMER']);
            
            // ✅ Le compte n'est PAS actif tant que l'email n'est pas vérifié
            $customer->setIsActive(false);
            $customer->setIsVerified(false);
            
            // ✅ Pas de changement de mot de passe obligatoire (il l'a choisi)
            $customer->setMustChangePassword(false);
            
            // ✅ Générer le token de vérification
            $verificationToken = $customer->generateVerificationToken();

            // ✅ Créer le panier
            $cart = new Cart();
            $cart->setCustomer($customer);
            $customer->setCart($cart);

            // ✅ Persister
            $entityManager->persist($cart);
            $entityManager->persist($customer);
            $entityManager->flush();

            $this->logger->info('✅ Compte customer créé', [
                'customer_id' => $customer->getId(),
                'email' => $customer->getEmail(),
            ]);

            // ✅ Envoyer l'email de vérification (SANS mot de passe)
            $this->sendVerificationEmail($customer, $verificationToken, $mailer);

            $this->addFlash('success', 
                'Inscription réussie ! Un email de vérification vous a été envoyé à ' 
                . $customer->getEmail() 
                . '. Cliquez sur le lien pour activer votre compte.'
            );

            return $this->redirectToRoute('marketplace_login');
        }

        return $this->render('marketplace/auth/register.html.twig', [
            'registrationForm' => $form->createView(),
        ]);
    }

    #[Route('/verify-email/{token}', name: 'marketplace_verify_email')]
    public function verifyEmail(string $token, EntityManagerInterface $entityManager): Response
    {
        $customer = $entityManager->getRepository(Customer::class)
            ->findOneBy(['verification_token' => $token]);

        if (!$customer) {
            $this->addFlash('error', 'Token de vérification invalide.');
            return $this->redirectToRoute('marketplace_login');
        }

        if (!$customer->isValidVerificationToken($token)) {
            $this->addFlash('error', 'Le lien de vérification a expiré. Veuillez vous réinscrire.');
            return $this->redirectToRoute('marketplace_register');
        }

        // ✅ ACTIVER LE COMPTE
        $customer->setIsActive(true);      // ← Compte actif
        $customer->setIsVerified(true);    // ← Email vérifié
        $customer->setMustChangePassword(false);  // ← Pas de changement obligatoire
        $customer->setVerificationToken(null);     // ← Nettoyer le token
        $customer->setVerificationTokenExpiresAt(null);
        
        $entityManager->flush();

        // ✅ Vérifier et créer le panier si inexistant
        $this->ensureCartExists($customer, $entityManager);

        $this->addFlash('success', 
            '✅ Votre compte a été activé avec succès ! ' 
            . 'Vous pouvez maintenant vous connecter avec votre email et mot de passe.'
        );

        return $this->redirectToRoute('marketplace_login');
    }

    #[Route('/logout', name: 'marketplace_logout')]
    public function logout(): void
    {
        // Méthode vide - gérée par le firewall
    }

    #[Route('/resend-verification/{email}', name: 'marketplace_resend_verification')]
    public function resendVerification(
        string $email,
        EntityManagerInterface $entityManager,
        MailerInterface $mailer
    ): Response {
        $customer = $entityManager->getRepository(Customer::class)
            ->findOneBy(['email' => $email]);

        if (!$customer) {
            $this->addFlash('error', 'Email non trouvé.');
            return $this->redirectToRoute('marketplace_login');
        }

        if ($customer->isActive()) {
            $this->addFlash('info', 'Votre compte est déjà activé. Vous pouvez vous connecter.');
            return $this->redirectToRoute('marketplace_login');
        }

        // ✅ NE PAS régénérer le mot de passe (l'utilisateur l'a choisi à l'inscription)
        // On génère juste un nouveau token de vérification
        $verificationToken = $customer->generateVerificationToken();
        $entityManager->flush();

        // ✅ Envoyer l'email (SANS mot de passe)
        $this->sendVerificationEmail($customer, $verificationToken, $mailer);

        $this->addFlash('success', 'Un nouvel email de vérification vous a été envoyé.');
        return $this->redirectToRoute('marketplace_login');
    }

    /**
     * ✅ Vérifie et crée un panier si inexistant pour un customer
     */
    private function ensureCartExists(Customer $customer, EntityManagerInterface $entityManager): void
    {
        // Vérifier si le customer a déjà un panier
        $cart = $entityManager->getRepository(Cart::class)->findOneBy(['customer' => $customer]);
        
        if (!$cart) {
            $this->logger->warning('⚠️ Panier inexistant pour le customer, création automatique', [
                'customer_id' => $customer->getId(),
                'email' => $customer->getEmail()
            ]);
            
            $cart = new Cart();
            $cart->setCustomer($customer);
            $customer->setCart($cart);
            
            $entityManager->persist($cart);
            $entityManager->flush();
            
            $this->logger->info('✅ Panier créé automatiquement', [
                'customer_id' => $customer->getId(),
                'cart_id' => $cart->getId()
            ]);
        } else {
            $this->logger->debug('✅ Panier existant pour le customer', [
                'customer_id' => $customer->getId(),
                'cart_id' => $cart->getId()
            ]);
        }
    }

    private function sendVerificationEmail(Customer $customer, string $token, MailerInterface $mailer): void
    {
        $verificationUrl = $this->generateUrl(
            'marketplace_verify_email', 
            ['token' => $token], 
            \Symfony\Component\Routing\Generator\UrlGeneratorInterface::ABSOLUTE_URL
        );

        $email = (new TemplatedEmail())
            ->from(new Address('no-reply@hmamarket.com', 'HMA Market'))
            ->to($customer->getEmail())
            ->subject('Vérifiez votre compte - HMA Market')
            ->htmlTemplate('emails/customer/verification.html.twig')
            ->context([
                'customer' => $customer,
                'verificationUrl' => $verificationUrl,
            ]);

        $mailer->send($email);
    }
}