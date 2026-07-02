<?php
// src/Controller/Customer/ResetPasswordController.php
namespace App\Controller\Customer;

use App\Entity\Customer;
use App\Form\CustomerResetPasswordRequestFormType;
use App\Form\CustomerResetPasswordChangeFormType;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bridge\Twig\Mime\TemplatedEmail;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Mailer\MailerInterface;
use Symfony\Component\Mime\Address;
use Symfony\Component\PasswordHasher\Hasher\UserPasswordHasherInterface;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\Routing\Generator\UrlGeneratorInterface;
use SymfonyCasts\Bundle\ResetPassword\Controller\ResetPasswordControllerTrait;
use SymfonyCasts\Bundle\ResetPassword\Exception\ResetPasswordExceptionInterface;
use SymfonyCasts\Bundle\ResetPassword\ResetPasswordHelperInterface;

#[Route('/marketplace')]
class ResetPasswordController extends AbstractController
{
    use ResetPasswordControllerTrait;

    public function __construct(
        private ResetPasswordHelperInterface $resetPasswordHelper,
        private EntityManagerInterface $entityManager
    ) {}

    #[Route('/forgot-password', name: 'marketplace_forgot_password', methods: ['GET', 'POST'])]
    public function request(Request $request, MailerInterface $mailer): Response
    {
        $form = $this->createForm(CustomerResetPasswordRequestFormType::class);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $email = $form->get('email')->getData();
            return $this->processSendingPasswordResetEmail($email, $mailer);
        }

        return $this->render('marketplace/auth/forgot_password.html.twig', [
            'requestForm' => $form->createView(),
        ]);
    }

    #[Route('/check-email', name: 'marketplace_check_email')]
    public function checkEmail(): Response
    {
        if (null === ($resetToken = $this->getTokenObjectFromSession())) {
            $resetToken = $this->resetPasswordHelper->generateFakeResetToken();
        }

        return $this->render('marketplace/auth/check_email.html.twig', [
            'resetToken' => $resetToken,
        ]);
    }

    #[Route('/reset-password/{token}', name: 'marketplace_reset_password')]
    public function reset(Request $request, UserPasswordHasherInterface $passwordHasher, string $token): Response
    {
        try {
            $customer = $this->resetPasswordHelper->validateTokenAndFetchUser($token);
        } catch (ResetPasswordExceptionInterface $e) {
            $this->addFlash('error', 'Le lien de réinitialisation est invalide ou a expiré.');
            return $this->redirectToRoute('marketplace_forgot_password');
        }

        $form = $this->createForm(CustomerResetPasswordChangeFormType::class);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $this->resetPasswordHelper->removeResetRequest($token);

            $hashedPassword = $passwordHasher->hashPassword($customer, $form->get('plainPassword')->getData());
            $customer->setPassword($hashedPassword);
            $this->entityManager->flush();

            $this->cleanSessionAfterReset();
            $this->addFlash('success', 'Votre mot de passe a été réinitialisé avec succès !');

            return $this->redirectToRoute('marketplace_login');
        }

        return $this->render('marketplace/auth/reset_password.html.twig', [
            'resetForm' => $form->createView(),
        ]);
    }

    private function processSendingPasswordResetEmail(string $email, MailerInterface $mailer): Response
    {
        $customer = $this->entityManager->getRepository(Customer::class)->findOneBy(['email' => $email]);

        if (!$customer) {
            return $this->redirectToRoute('marketplace_check_email');
        }

        try {
            $resetToken = $this->resetPasswordHelper->generateResetToken($customer);
        } catch (ResetPasswordExceptionInterface $e) {
            $this->addFlash('error', 'Impossible de générer un lien de réinitialisation.');
            return $this->redirectToRoute('marketplace_check_email');
        }

        $resetUrl = $this->generateUrl('marketplace_reset_password', [
            'token' => $resetToken->getToken()
        ], UrlGeneratorInterface::ABSOLUTE_URL);

        $email = (new TemplatedEmail())
            ->from(new Address('no-reply@hmamarket.com', 'HMA Market'))
            ->to($customer->getEmail())
            ->subject('Réinitialisation de votre mot de passe - HMA Market')
            ->htmlTemplate('marketplace/auth/reset_password_email.html.twig')
            ->context([
                'resetToken' => $resetToken,
                'customer' => $customer,
                'resetUrl' => $resetUrl,
            ]);

        $mailer->send($email);

        $this->setTokenObjectInSession($resetToken);
        $this->addFlash('success', 'Un email de réinitialisation vous a été envoyé.');

        return $this->redirectToRoute('marketplace_check_email');
    }
}