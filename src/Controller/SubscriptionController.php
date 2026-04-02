<?php
// src/Controller/SubscriptionController.php

namespace App\Controller;

use App\Entity\HmaService;
use App\Entity\Subscription;
use App\Entity\Payment;
use App\Entity\Invoice;
use App\Entity\User;
use App\Repository\SubscriptionPlanRepository;
use App\Service\FedaPayService;
use App\Service\EmailService;
use App\Service\QuotaEnforcementService;
use App\Service\InvoicePdfGenerator;
use Doctrine\ORM\EntityManagerInterface;
use Psr\Log\LoggerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\Security\Core\Exception\AccessDeniedException;

#[Route('/subscription')]
class SubscriptionController extends AbstractController
{
    private LoggerInterface $logger;
    private InvoicePdfGenerator $invoicePdfGenerator;
    private QuotaEnforcementService $quotaEnforcementService;

    public function __construct(
        LoggerInterface $logger,
        InvoicePdfGenerator $invoicePdfGenerator,
        QuotaEnforcementService $quotaEnforcementService
    ) {
        $this->logger = $logger;
        $this->invoicePdfGenerator = $invoicePdfGenerator;
        $this->quotaEnforcementService = $quotaEnforcementService;
    }

    /**
     * Récupère le HmaService associé à l'utilisateur connecté.
     */
    private function getCurrentHmaService(): ?HmaService
    {
        $user = $this->getUser();
        if (!$user) return null;
        if ($user instanceof HmaService) return $user;
        if ($user instanceof User) return $user->getHmaService();
        return null;
    }

    /**
     * Vérifie si l'utilisateur connecté peut gérer l'abonnement d'un service donné.
     */
    private function canManageSubscription(HmaService $service): bool
    {
        $user = $this->getUser();
        if (!$user) return false;

        // Super admin a tous les droits
        if ($this->isGranted('ROLE_SUPER_ADMIN')) {
            return true;
        }

        // Si l'utilisateur est un HmaService, il ne peut gérer que son propre abonnement
        if ($user instanceof HmaService) {
            return $user->getId() === $service->getId();
        }

        // Si l'utilisateur est un User
        if ($user instanceof User) {
            // Le propriétaire de l'entreprise (is_hma_owner) a tous les droits sur son entreprise
            if ($user->isHmaOwner()) {
                $userService = $user->getHmaService();
                return $userService && $userService->getId() === $service->getId();
            }
            // Les admins et managers de l'entreprise peuvent voir les plans, mais la souscription est réservée ?
            // Ici on autorise l'admin et le manager à souscrire 
            if ($this->isGranted('ROLE_ADMIN') || $this->isGranted('ROLE_MANAGER')) {
                $userService = $user->getHmaService();
                return $userService && $userService->getId() === $service->getId();
            }
        }

        return false;
    }

    #[Route('/plans', name: 'app_subscription_plans')]
    public function plans(SubscriptionPlanRepository $planRepo): Response
    {
        $user = $this->getUser();
        $service = $this->getCurrentHmaService();

        // Les super admins peuvent voir les plans même sans service
        if (!$service && !$this->isGranted('ROLE_SUPER_ADMIN')) {
            $this->addFlash('error', 'Aucune entreprise associée à votre compte.');
            return $this->redirectToRoute('app_dashboard');
        }

        $plans = $planRepo->findBy(['isActive' => true]);

        // Vérifier si l'entreprise a déjà un abonnement actif
        $hasActiveSubscription = $service ? $service->hasActiveSubscription() : false;

        return $this->render('subscription/plans.html.twig', [
            'plans' => $plans,
            'has_active_subscription' => $hasActiveSubscription,
        ]);
    }

    #[Route('/checkout', name: 'app_subscription_checkout', methods: ['POST'])]
    public function checkout(Request $request, SubscriptionPlanRepository $planRepo, EntityManagerInterface $em, FedaPayService $fedaPay): Response
    {
        $planId = $request->request->get('plan');
        $billingPeriod = $request->request->get('billing_period');
        $subscriptionNumber = $request->request->get('subscription_number');

        if (!$planId || !in_array($billingPeriod, ['monthly', 'yearly'])) {
            $this->addFlash('error', 'Veuillez sélectionner un plan et une période.');
            return $this->redirectToRoute('app_subscription_plans');
        }

        if (!$subscriptionNumber) {
            $this->addFlash('error', 'Veuillez saisir un numéro d\'abonnement.');
            return $this->redirectToRoute('app_subscription_plans');
        }

        $service = $em->getRepository(HmaService::class)->findOneBy(['subscription_number' => $subscriptionNumber]);

        if (!$service) {
            $this->addFlash('error', 'Numéro d\'abonnement invalide. Aucune entreprise trouvée.');
            return $this->redirectToRoute('app_subscription_plans');
        }

        // Vérifier les droits
        if (!$this->canManageSubscription($service)) {
            throw new AccessDeniedException('Vous n\'êtes pas autorisé à souscrire pour cette entreprise.');
        }

        // Vérifier si l'entreprise peut changer de plan (toujours possible ici)
        if (!$service->canChangePlan()) {
            $this->addFlash('info', 'Cette entreprise ne peut pas changer de plan pour le moment.');
            return $this->redirectToRoute('app_dashboard');
        }

        $plan = $planRepo->find($planId);
        if (!$plan || !$plan->isActive()) {
            $this->addFlash('error', 'Plan invalide.');
            return $this->redirectToRoute('app_subscription_plans');
        }

        $subscription = new Subscription();
        $subscription->setHmaService($service);
        $subscription->setSubscriptionPlan($plan);
        $subscription->setBillingPeriod($billingPeriod);
        $subscription->setStatus('pending');
        $subscription->setSubscriptionActive(false);
        $subscription->setCreatedAt(new \DateTimeImmutable());
        $em->persist($subscription);

        $amount = $billingPeriod === 'monthly' ? $plan->getPriceMonthly() : $plan->getPriceYearly();

        $payment = new Payment();
        $payment->setHmaService($service);
        $payment->setSubscription($subscription);
        $payment->setAmount($amount);
        $payment->setPaymentMethod('fedapay');
        $payment->setStatus('pending');
        $payment->setPaymentDate(new \DateTime());
        $payment->setCreatedAt(new \DateTimeImmutable());
        $payment->setNotes("Plan: {$plan->getName()}, Période: {$billingPeriod}");
        $payment->setSubscriptionNumber($subscriptionNumber);
        $em->persist($payment);
        $em->flush();

        $transactionData = [
            'amount' => $amount,
            'currency' => 'XOF',
            'description' => "Abonnement {$plan->getDisplayName()} - {$billingPeriod}",
            'customer_email' => $service->getEmail(),
            'customer_name' => $service->getCompanyName(),
            'reference' => $payment->getId(),
            'callback_url' => $this->generateUrl('app_subscription_callback', [], 0),
        ];

        try {
            $paymentUrl = $fedaPay->createPayment($transactionData);
            $payment->setTransactionId($fedaPay->getLastTransactionId());
            $em->flush();
            return $this->redirect($paymentUrl);
        } catch (\Exception $e) {
            $this->logger->error('Erreur FedaPay: ' . $e->getMessage());
            $this->addFlash('error', 'Erreur de paiement : ' . $e->getMessage());
            return $this->redirectToRoute('app_subscription_plans');
        }
    }

    #[Route('/callback', name: 'app_subscription_callback')]
    public function callback(Request $request, EntityManagerInterface $em, FedaPayService $fedaPay, EmailService $emailService): Response
    {
        $transactionId = $request->query->get('id');
        $statusFromUrl = $request->query->get('status');

        if (!$transactionId) {
            $this->addFlash('error', 'Aucun identifiant de transaction reçu.');
            return $this->redirectToRoute('app_dashboard');
        }

        $payment = $em->getRepository(Payment::class)->findOneBy(['transactionId' => $transactionId]);
        if (!$payment) {
            $this->addFlash('error', 'Paiement introuvable.');
            return $this->redirectToRoute('app_dashboard');
        }

        try {
            $transactionData = $fedaPay->verifyPayment($transactionId);
            $apiStatus = $transactionData['status'] ?? null;
        } catch (\Exception $e) {
            $this->logger->error('Erreur vérification FedaPay: ' . $e->getMessage());
            $this->addFlash('error', 'Impossible de vérifier le statut du paiement.');
            return $this->redirectToRoute('app_dashboard');
        }

        if ($apiStatus !== $statusFromUrl) {
            $this->logger->warning('Incohérence de statut', ['url' => $statusFromUrl, 'api' => $apiStatus]);
        }

        if ($apiStatus === 'approved') {
            $this->activateSubscription($payment, $em, $emailService);
            $this->addFlash('success', 'Votre abonnement a été activé avec succès !');
            return $this->redirectToRoute('app_subscription_success', ['id' => $payment->getSubscription()->getId()]);
        } elseif ($apiStatus === 'pending') {
            $this->addFlash('info', 'Votre paiement est en cours de traitement. Vous recevrez une confirmation sous peu.');
            return $this->redirectToRoute('app_dashboard');
        } else {
            $payment->setStatus('failed');
            $payment->getSubscription()->setStatus('failed');
            $payment->getSubscription()->setSubscriptionActive(false);
            $em->flush();
            $this->addFlash('error', 'Le paiement a échoué ou a été annulé.');
            return $this->redirectToRoute('app_dashboard');
        }
    }

    #[Route('/success/{id}', name: 'app_subscription_success')]
    public function success(Subscription $subscription): Response
    {
        $service = $subscription->getHmaService();
        if (!$this->canManageSubscription($service)) {
            throw $this->createAccessDeniedException();
        }

        return $this->render('subscription/success.html.twig', [
            'subscription' => $subscription,
        ]);
    }

    private function generateInvoiceNumber(EntityManagerInterface $em): string
    {
        $year = date('Y');
        $month = date('m');
        $lastInvoice = $em->getRepository(Invoice::class)->findOneBy([], ['id' => 'DESC']);
        $nextId = $lastInvoice ? $lastInvoice->getId() + 1 : 1;
        return sprintf('INV-%s%s-%04d', $year, $month, $nextId);
    }

    private function createInvoice(Payment $payment, Subscription $subscription, string $invoiceNumber, EntityManagerInterface $em): Invoice
    {
        $invoice = new Invoice();
        $invoice->setInvoiceNumber($invoiceNumber);
        $invoice->setAmountFcfa($payment->getAmount());
        $invoice->setHmaService($payment->getHmaService());
        $invoice->setSubscription($subscription);

        $startsAt = $subscription->getStartsAt();
        $endsAt = $subscription->getEndsAt();

        $invoice->setPeriodStart(\DateTime::createFromImmutable($startsAt));
        $invoice->setPeriodEnd(\DateTime::createFromImmutable($endsAt));
        $invoice->setStatus('paid');
        $invoice->setDueDate(\DateTime::createFromImmutable($endsAt));
        $invoice->setPaidAt(new \DateTime());
        $invoice->setCreatedAt(new \DateTimeImmutable());

        $em->persist($invoice);
        return $invoice;
    }

    private function activateSubscription(Payment $payment, EntityManagerInterface $em, EmailService $emailService): void
    {
        $subscription = $payment->getSubscription();
        $service = $payment->getHmaService(); // <- ici c'est $service, pas $hmaService

        // Mise à jour du paiement
        $payment->setStatus('completed');
        $payment->setPaymentDate(new \DateTime());

        // Désactiver tous les anciens abonnements actifs
        $activeSubscriptions = $em->getRepository(Subscription::class)->findBy([
            'hma_service' => $service,
            'subscription_active' => true
        ]);
        foreach ($activeSubscriptions as $oldSub) {
            $oldSub->setSubscriptionActive(false);
            $oldSub->setStatus('replaced');
        }

        // Mise à jour du nouvel abonnement
        $subscription->setStatus('active');
        $subscription->setSubscriptionActive(true);
        $startsAt = new \DateTimeImmutable();
        $subscription->setStartsAt($startsAt);
        $endsAt = clone $startsAt;
        if ($subscription->getBillingPeriod() === 'monthly') {
            $endsAt = $endsAt->modify('+1 month');
        } else {
            $endsAt = $endsAt->modify('+1 year');
        }
        $subscription->setEndsAt($endsAt);

        // Ajout des informations de paiement dans Subscription
        $subscription->setPaymentMethod($payment->getPaymentMethod());
        $subscription->setTransactionId($payment->getTransactionId());

        // Mise à jour du service (entreprise)
        $service->setSubscriptionNumber($payment->getSubscriptionNumber());
        $service->setSubscriptionPlan($subscription->getSubscriptionPlan()->getName());
        $service->setTrialEndsAt(null);
        // Utiliser le bon service ($service) et la bonne propriété ($this->quotaEnforcementService)
        $this->quotaEnforcementService->enforceQuotas($service);
        $service->setSubscriptionStartAt(\DateTime::createFromImmutable($startsAt));
        $service->setSubscriptionEndsAt(\DateTime::createFromImmutable($endsAt));
        $service->setIsActive(true);

        // Recalcul des statuts des utilisateurs selon les limites du nouveau plan
        $activatedUsers = $service->updateUsersSubscriptionStatus();

        // Génération du numéro de facture
        $invoiceNumber = $this->generateInvoiceNumber($em);
        $payment->setInvoiceNumber($invoiceNumber);

        // Création de la facture
        $invoice = $this->createInvoice($payment, $subscription, $invoiceNumber, $em);

        // Génération du PDF
        $pdfPath = $this->invoicePdfGenerator->generate($invoice);
        $invoice->setPdfPath($pdfPath);

        // Envoi d'emails
        try {
            $sentCount = $emailService->sendSubscriptionConfirmationToUsers($service, $subscription);
            if ($sentCount > 0) {
                $invoice->setSentAt(new \DateTimeImmutable());
            }
        } catch (\Exception $e) {
            $this->logger->error('Erreur envoi emails confirmation: ' . $e->getMessage());
        }

        foreach ($activatedUsers as $user) {
            try {
                $emailService->sendReactivationEmail($user, $service);
            } catch (\Exception $e) {
                $this->logger->error('Erreur envoi email réactivation', ['user' => $user->getId(), 'error' => $e->getMessage()]);
            }
        }

        $em->flush();
    }
}