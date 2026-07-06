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

#[Route('/marketplace')]
class AuthController extends AbstractController
{
    #[Route('/login', name: 'marketplace_login')]
    public function login(AuthenticationUtils $authenticationUtils, Request $request): Response
    {
        $user = $this->getUser();
        
        // ✅ Si l'utilisateur est déjà connecté
        if ($user instanceof Customer) {
            // ✅ Si l'utilisateur doit changer son mot de passe
            if ($user->isMustChangePassword()) {
                $this->addFlash('warning', '🔒 Pour des raisons de sécurité, vous devez changer votre mot de passe temporaire avant de continuer.');
                return $this->redirectToRoute('marketplace_change_password');
            }
            
            return $this->redirectToRoute('marketplace_home');
        }

        // ✅ Vérifier si l'utilisateur vient d'être redirigé pour changement de mot de passe
        if ($request->query->has('force_change_password')) {
            $this->addFlash('warning', '🔒 Pour des raisons de sécurité, vous devez changer votre mot de passe temporaire avant de continuer.');
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

            $randomPassword = $this->generateRandomPassword();
            $hashedPassword = $passwordHasher->hashPassword($customer, $randomPassword);
            $customer->setPassword($hashedPassword);
            
            $customer->setCreatedAt(new \DateTimeImmutable());
            $customer->setRoles(['ROLE_CUSTOMER']);
            $customer->setIsActive(false);
            $customer->setIsVerified(false);
            $customer->setMustChangePassword(true);
            
            $verificationToken = $customer->generateVerificationToken();

            $cart = new Cart();
            $cart->setCustomer($customer);
            $customer->setCart($cart);

            $entityManager->persist($customer);
            $entityManager->persist($cart);
            $entityManager->flush();

            $this->sendVerificationEmail($customer, $verificationToken, $randomPassword, $mailer);

            $this->addFlash('success', 'Un email de vérification vous a été envoyé. Veuillez cliquer sur le lien pour activer votre compte.');

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

        $customer->activateAccount();
        $entityManager->flush();

        $this->addFlash('success', '✅ Votre compte a été activé avec succès ! Vous pouvez maintenant vous connecter avec le mot de passe reçu par email.');

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
        MailerInterface $mailer,
        UserPasswordHasherInterface $passwordHasher
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

        $newPassword = $this->generateRandomPassword();
        $hashedPassword = $passwordHasher->hashPassword($customer, $newPassword);
        $customer->setPassword($hashedPassword);
        
        $verificationToken = $customer->generateVerificationToken();
        $entityManager->flush();

        $this->sendVerificationEmail($customer, $verificationToken, $newPassword, $mailer);

        $this->addFlash('success', 'Un nouvel email de vérification a été envoyé avec un nouveau mot de passe.');
        return $this->redirectToRoute('marketplace_login');
    }

    private function generateRandomPassword(int $length = 12): string
    {
        $chars = 'abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ0123456789!@#$%^&*()';
        $password = '';
        $charsLength = strlen($chars) - 1;
        
        for ($i = 0; $i < $length; $i++) {
            $password .= $chars[random_int(0, $charsLength)];
        }
        
        if (!preg_match('/[A-Z]/', $password) || !preg_match('/[a-z]/', $password) || !preg_match('/\d/', $password)) {
            return $this->generateRandomPassword($length);
        }
        
        return $password;
    }

    private function sendVerificationEmail(Customer $customer, string $token, string $randomPassword, MailerInterface $mailer): void
    {
        $verificationUrl = $this->generateUrl('marketplace_verify_email', ['token' => $token], \Symfony\Component\Routing\Generator\UrlGeneratorInterface::ABSOLUTE_URL);

        $email = (new TemplatedEmail())
            ->from(new Address('no-reply@hmamarket.com', 'HMA Market'))
            ->to($customer->getEmail())
            ->subject('Vérification de votre compte - HMA Market')
            ->htmlTemplate('emails/customer/verification.html.twig')
            ->context([
                'customer' => $customer,
                'verificationUrl' => $verificationUrl,
                'randomPassword' => $randomPassword,
            ]);

        $mailer->send($email);
    }
}