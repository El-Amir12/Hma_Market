<?php
// src/Controller/Marketplace/ForgotPasswordController.php

namespace App\Controller\Marketplace;

use App\Entity\Customer;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bridge\Twig\Mime\TemplatedEmail;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Mailer\MailerInterface;
use Symfony\Component\Mime\Address;
use Symfony\Component\PasswordHasher\Hasher\UserPasswordHasherInterface;
use Symfony\Component\Routing\Annotation\Route;

#[Route('/marketplace')]
class ForgotPasswordController extends AbstractController
{
    #[Route('/forgot-password', name: 'marketplace_forgot_password')]
    public function forgotPassword(Request $request, EntityManagerInterface $entityManager, MailerInterface $mailer): Response
    {
        if ($this->getUser() instanceof Customer) {
            return $this->redirectToRoute('marketplace_home');
        }

        if ($request->isMethod('POST')) {
            $email = $request->request->get('email');
            
            if (!$email) {
                $this->addFlash('error', 'Veuillez saisir votre email.');
                return $this->redirectToRoute('marketplace_forgot_password');
            }

            $customer = $entityManager->getRepository(Customer::class)
                ->findOneBy(['email' => $email]);

            if (!$customer) {
                $this->addFlash('error', 'Aucun compte trouvé avec cet email.');
                return $this->redirectToRoute('marketplace_forgot_password');
            }

            if (!$customer->isActive()) {
                $this->addFlash('error', 'Votre compte n\'est pas activé. Veuillez vérifier votre email.');
                return $this->redirectToRoute('marketplace_forgot_password');
            }

            // Générer un token de réinitialisation
            $token = $customer->generateResetToken();
            $entityManager->flush();

            // Envoyer l'email
            $resetUrl = $this->generateUrl('marketplace_reset_password', ['token' => $token], \Symfony\Component\Routing\Generator\UrlGeneratorInterface::ABSOLUTE_URL);

            $emailMessage = (new TemplatedEmail())
                ->from(new Address('no-reply@hmamarket.com', 'HMA Market'))
                ->to($customer->getEmail())
                ->subject('Réinitialisation de votre mot de passe - HMA Market')
                ->htmlTemplate('marketplace/auth/reset_password_email.html.twig')
                ->context([
                    'customer' => $customer,
                    'resetUrl' => $resetUrl,
                ]);

            $mailer->send($emailMessage);

            $this->addFlash('success', 'Un email de réinitialisation vous a été envoyé. Vérifiez votre boîte de réception.');
            return $this->redirectToRoute('marketplace_check_email');
        }

        return $this->render('marketplace/auth/forgot_password.html.twig');
    }

    #[Route('/check-email', name: 'marketplace_check_email')]
    public function checkEmail(): Response
    {
        return $this->render('marketplace/auth/check_email.html.twig');
    }

    #[Route('/reset-password/{token}', name: 'marketplace_reset_password')]
    public function resetPassword(
        string $token,
        Request $request,
        EntityManagerInterface $entityManager,
        UserPasswordHasherInterface $passwordHasher
    ): Response {
        if ($this->getUser() instanceof Customer) {
            return $this->redirectToRoute('marketplace_home');
        }

        $customer = $entityManager->getRepository(Customer::class)
            ->findOneBy(['resetPasswordToken' => $token]);

        if (!$customer) {
            $this->addFlash('error', 'Token de réinitialisation invalide.');
            return $this->redirectToRoute('marketplace_forgot_password');
        }

        if (!$customer->isValidResetToken($token)) {
            $this->addFlash('error', 'Le lien de réinitialisation a expiré. Veuillez refaire une demande.');
            return $this->redirectToRoute('marketplace_forgot_password');
        }

        if ($request->isMethod('POST')) {
            $newPassword = $request->request->get('password');
            $confirmPassword = $request->request->get('confirm_password');

            if (strlen($newPassword) < 8) {
                $this->addFlash('error', 'Le mot de passe doit contenir au moins 8 caractères.');
                return $this->redirectToRoute('marketplace_reset_password', ['token' => $token]);
            }

            if ($newPassword !== $confirmPassword) {
                $this->addFlash('error', 'Les mots de passe ne correspondent pas.');
                return $this->redirectToRoute('marketplace_reset_password', ['token' => $token]);
            }

            $hashedPassword = $passwordHasher->hashPassword($customer, $newPassword);
            $customer->setPassword($hashedPassword);
            $customer->clearResetToken();
            $customer->resetFailedLoginAttempts();
            $customer->setMustChangePassword(false);
            
            $entityManager->flush();

            $this->addFlash('success', 'Votre mot de passe a été réinitialisé avec succès. Vous pouvez maintenant vous connecter.');
            return $this->redirectToRoute('marketplace_login');
        }

        return $this->render('marketplace/auth/reset_password.html.twig', [
            'token' => $token,
        ]);
    }
}