<?php
// src/Service/Payment/SubscriptionPaymentService.php

namespace App\Service\Payment;

use App\Entity\AnalysisRequest;
use App\Entity\AnalysisPayment;
use App\Entity\HmaService;
use App\Service\FedaPayService;
use App\Service\NotificationService;
use Doctrine\ORM\EntityManagerInterface;
use Psr\Log\LoggerInterface;

class SubscriptionPaymentService
{
    public function __construct(
        private EntityManagerInterface $entityManager,
        private FedaPayService $fedaPayService,
        private NotificationService $notificationService,
        private LoggerInterface $logger
    ) {
    }

    /**
     * Crée un lien de paiement pour l'abonnement
     */
    public function createMonthlyPaymentLink(AnalysisRequest $subscription): ?string
    {
        $company = $subscription->getCompany();
        $amount = (float) $subscription->getAmount();
        
        try {
            $monthlyReference = sprintf(
                '%s_%s',
                $subscription->getRequestNumber(),
                date('Ym')
            );
            
            return $this->fedaPayService->createPayment([
                'amount' => (int) $amount,
                'description' => sprintf(
                    'Abonnement mensuel - %s - %s',
                    $company->getCompanyName(),
                    (new \DateTime())->modify('last day of previous month')->format('F Y')
                ),
                'currency' => 'XOF',
                'callback_url' => $this->getAutoPaymentCallbackUrl(),
                'customer_email' => $company->getEmail(),
                'customer_name' => $company->getCompanyName(),
                'reference' => $monthlyReference,
            ]);
        } catch (\Exception $e) {
            $this->logger->error('Erreur création paiement mensuel', ['error' => $e->getMessage()]);
            return null;
        }
    }

    /**
     * Vérifie et traite le paiement après retour utilisateur
     */
    public function verifyAndProcessPayment(AnalysisRequest $subscription, string $transactionId): bool
    {
        try {
            $transactionData = $this->fedaPayService->verifyPayment($transactionId);
            
            $this->logger->info('Vérification paiement', [
                'transaction_id' => $transactionId,
                'status' => $transactionData['status'] ?? 'unknown',
                'subscription_id' => $subscription->getId(),
            ]);

            if (isset($transactionData['status']) && $transactionData['status'] === 'approved') {
                return $this->finalizePayment($subscription, $transactionId, $transactionData);
            }

            $this->recordFailedPayment($subscription, $transactionId, $transactionData);
            return false;

        } catch (\Exception $e) {
            $this->logger->error('Erreur vérification paiement', [
                'error' => $e->getMessage(),
                'transaction_id' => $transactionId,
            ]);
            return false;
        }
    }

    /**
     * Finalise le paiement avec succès
     */
    private function finalizePayment(AnalysisRequest $subscription, string $transactionId, array $transactionData): bool
    {
        try {
            $subscription->setStatus(AnalysisRequest::STATUS_PAID);
            $subscription->setPaidAt(new \DateTime());
            $subscription->setPaymentTransactionId($transactionId);

            $payment = new AnalysisPayment();
            $payment->setAnalysisRequest($subscription);
            $payment->setTransactionId($transactionId);
            $payment->setAmount($subscription->getAmount());
            $payment->setStatus(AnalysisPayment::STATUS_SUCCESS);
            $payment->setPaymentData($transactionData);
            $payment->setPaidAt(new \DateTimeImmutable());

            $this->entityManager->persist($payment);
            $this->entityManager->flush();

            // ✅ CORRECTION : utilisation de sendTemplateEmail()
            $this->notificationService->sendTemplateEmail(
                $subscription->getCompany()->getEmail(),
                'Paiement confirmé - Votre analyse est en cours',
                'emails/subscription_payment_confirmed.html.twig',
                [
                    'subscription' => $subscription,
                    'company' => $subscription->getCompany(),
                ]
            );

            $this->notifySuperAdmin($subscription);

            $this->logger->info('Paiement abonnement finalisé', [
                'subscription_id' => $subscription->getId(),
                'transaction_id' => $transactionId,
            ]);

            return true;

        } catch (\Exception $e) {
            $this->logger->error('Erreur finalisation paiement', [
                'error' => $e->getMessage(),
                'subscription_id' => $subscription->getId(),
            ]);
            return false;
        }
    }

    /**
     * Enregistre un paiement échoué
     */
    private function recordFailedPayment(AnalysisRequest $subscription, string $transactionId, array $transactionData): void
    {
        $payment = new AnalysisPayment();
        $payment->setAnalysisRequest($subscription);
        $payment->setTransactionId($transactionId);
        $payment->setAmount($subscription->getAmount());
        $payment->setStatus(AnalysisPayment::STATUS_FAILED);
        $payment->setPaymentData($transactionData);

        $this->entityManager->persist($payment);
        $this->entityManager->flush();

        $this->logger->warning('Paiement échoué', [
            'subscription_id' => $subscription->getId(),
            'transaction_id' => $transactionId,
        ]);
    }

    /**
     * Traite le paiement automatique mensuel
     */
    public function processAutoMonthlyPayment(AnalysisRequest $subscription): bool
    {
        if (!$this->isSubscriptionActive($subscription)) {
            $this->logger->info('Abonnement inactif, paiement auto ignoré', [
                'subscription_id' => $subscription->getId(),
            ]);
            return false;
        }

        $company = $subscription->getCompany();
        $amount = (float) $subscription->getAmount();

        try {
            $monthlyReference = sprintf(
                '%s_%s',
                $subscription->getRequestNumber(),
                date('Ym')
            );

            $paymentUrl = $this->fedaPayService->createPayment([
                'amount' => (int) $amount,
                'description' => sprintf(
                    'Abonnement mensuel - %s - %s',
                    $company->getCompanyName(),
                    $subscription->getPeriodFormatted()
                ),
                'currency' => 'XOF',
                'callback_url' => $this->getAutoPaymentCallbackUrl(),
                'customer_email' => $company->getEmail(),
                'customer_name' => $company->getCompanyName(),
                'reference' => $monthlyReference,
            ]);

            $transactionId = $this->fedaPayService->getLastTransactionId();
            
            $payment = new AnalysisPayment();
            $payment->setAnalysisRequest($subscription);
            $payment->setTransactionId($transactionId);
            $payment->setAmount($subscription->getAmount());
            $payment->setStatus(AnalysisPayment::STATUS_PENDING);
            $payment->setPaymentData(['auto_payment' => true, 'month' => date('Y-m')]);

            $this->entityManager->persist($payment);
            $this->entityManager->flush();

            $this->logger->info('Paiement automatique initié', [
                'subscription_id' => $subscription->getId(),
                'amount' => $amount,
                'reference' => $monthlyReference,
            ]);

            return true;

        } catch (\Exception $e) {
            $this->logger->error('Erreur paiement automatique', [
                'subscription_id' => $subscription->getId(),
                'error' => $e->getMessage(),
            ]);

            // ✅ CORRECTION : utilisation de sendTemplateEmail()
            $this->notificationService->sendTemplateEmail(
                $company->getEmail(),
                '⚠️ Problème de paiement automatique',
                'emails/subscription_auto_payment_failed.html.twig',
                [
                    'subscription' => $subscription,
                    'error' => $e->getMessage(),
                ]
            );

            return false;
        }
    }

    /**
     * Vérifie si l'abonnement est actif
     */
    private function isSubscriptionActive(AnalysisRequest $subscription): bool
    {
        if ($subscription->getExpiresAt() && $subscription->getExpiresAt() < new \DateTimeImmutable()) {
            return false;
        }

        $company = $subscription->getCompany();
        if (!$company->isActive()) {
            return false;
        }

        if ($company->getCurrentPlan() !== 'monthly') {
            return false;
        }

        return true;
    }

    /**
     * Annule un abonnement
     */
    public function cancelSubscription(AnalysisRequest $subscription): bool
    {
        try {
            $subscription->setStatus(AnalysisRequest::STATUS_EXPIRED);
            $subscription->setExpiresAt(new \DateTimeImmutable());
            
            $this->entityManager->flush();

            $this->logger->info('Abonnement annulé', [
                'subscription_id' => $subscription->getId(),
                'company_id' => $subscription->getCompany()->getId(),
            ]);

            // ✅ CORRECTION : utilisation de sendTemplateEmail()
            $this->notificationService->sendTemplateEmail(
                $subscription->getCompany()->getEmail(),
                'Votre abonnement a été annulé',
                'emails/subscription_cancelled.html.twig',
                ['subscription' => $subscription]
            );

            return true;

        } catch (\Exception $e) {
            $this->logger->error('Erreur annulation abonnement', [
                'subscription_id' => $subscription->getId(),
                'error' => $e->getMessage(),
            ]);
            return false;
        }
    }

    /**
     * Notifie le Super Admin
     */
    private function notifySuperAdmin(AnalysisRequest $subscription): void
    {
        $superAdmin = $this->entityManager
            ->getRepository(\App\Entity\User::class)
            ->findOneBy(['roles' => 'ROLE_SUPER_ADMIN']);

        if ($superAdmin) {
            // ✅ CORRECTION : utilisation de sendTemplateEmail()
            $this->notificationService->sendTemplateEmail(
                $superAdmin->getEmail(),
                '💰 Nouvel abonnement payé',
                'emails/super_admin/subscription_paid.html.twig',
                [
                    'subscription' => $subscription,
                    'company' => $subscription->getCompany(),
                ]
            );
        }
    }

    private function getAutoPaymentCallbackUrl(): string
    {
        $appUrl = $_ENV['APP_URL'] ?? 'https://hma-market.com';
        return $appUrl . '/payment/callback/auto';
    }

    public function getPaymentHistory(AnalysisRequest $subscription): array
    {
        return $this->entityManager
            ->getRepository(AnalysisPayment::class)
            ->findBy(
                ['analysis_request' => $subscription],
                ['created_at' => 'DESC']
            );
    }

    public function isPaymentOverdue(AnalysisRequest $subscription): bool
    {
        $lastPayment = $this->entityManager
            ->getRepository(AnalysisPayment::class)
            ->findOneBy(
                ['analysis_request' => $subscription, 'status' => AnalysisPayment::STATUS_SUCCESS],
                ['paid_at' => 'DESC']
            );

        if (!$lastPayment) {
            return true;
        }

        $now = new \DateTime();
        $lastPaymentDate = $lastPayment->getPaidAt();
        
        if (!$lastPaymentDate) {
            return true;
        }

        $interval = $lastPaymentDate->diff($now);
        return $interval->days > 35;
    }
}