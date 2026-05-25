<?php
// src/Service/NotificationService.php

namespace App\Service;

use App\Entity\Purchase;
use App\Entity\Supplier;
use App\Entity\User;
use Doctrine\ORM\EntityManagerInterface;
use Psr\Log\LoggerInterface;
use Symfony\Component\Mailer\MailerInterface;
use Symfony\Component\Mime\Email;
use Twig\Environment;

class NotificationService
{
    public function __construct(
        private MailerInterface $mailer,
        private Environment $twig,
        private LoggerInterface $logger,
        private string $appEmail,
        private string $appUrl,
        private bool $isLocal,
        private EntityManagerInterface $entityManager  // ✅ AJOUT DE L'ENTITY MANAGER
    ) {
    }

    /**
     * Envoie la confirmation de commande au fournisseur
     */
    public function sendPurchaseConfirmation(Purchase $purchase, array $options = []): void
    {
        $supplier = $purchase->getSupplier();
        if (!$supplier) {
            $this->logger->warning('Aucun fournisseur pour la commande', ['purchase_id' => $purchase->getId()]);
            return;
        }

        $notifyByEmail = $options['notify_by_email'] ?? true;
        $notifyByWhatsapp = $options['notify_by_whatsapp'] ?? true;

        $this->logger->info('Envoi des notifications pour la commande', [
            'purchase_id' => $purchase->getId(),
            'supplier_email' => $supplier->getEmail(),
            'supplier_phone' => $supplier->getPhone(),
            'notify_by_email' => $notifyByEmail,
            'notify_by_whatsapp' => $notifyByWhatsapp
        ]);

        if ($notifyByEmail && $supplier->getEmail()) {
            $this->sendEmailConfirmation($purchase, $supplier, $options['confirmation_message'] ?? null);
        } elseif ($notifyByEmail && !$supplier->getEmail()) {
            $this->logger->warning('Email non envoyé : fournisseur sans adresse email');
        }

        if ($notifyByWhatsapp && $supplier->getPhone()) {
            $this->sendWhatsappConfirmation($purchase, $supplier, $options['confirmation_message'] ?? null, $options['send_image'] ?? true);
        } elseif ($notifyByWhatsapp && !$supplier->getPhone()) {
            $this->logger->warning('WhatsApp non envoyé : fournisseur sans téléphone');
        }
    }

    /**
     * Envoie la confirmation de réception
     */
    public function sendPurchaseReceivedConfirmation(Purchase $purchase, array $supplierCreditNotes = []): void
    {
        $supplier = $purchase->getSupplier();
        if (!$supplier) {
            $this->logger->warning('Tentative d\'envoi de confirmation de réception sans fournisseur', [
                'purchase_id' => $purchase->getId()
            ]);
            return;
        }
        
        $totalDeducted = 0;
        foreach ($supplierCreditNotes as $creditNote) {
            $totalDeducted += (float)$creditNote->getDeclaredAmount();
        }
        $netAmount = (float)$purchase->getTotalAmount() - $totalDeducted;
        
        $message = sprintf(
            "✅ CONFIRMATION DE RÉCEPTION\n\n" .
            "Bonjour %s,\n\n" .
            "Nous confirmons la bonne réception de la commande N° %s\n" .
            "Montant total initial : %s FCFA\n",
            $supplier->getName(),
            $purchase->getPurchaseNumber(),
            number_format((float) $purchase->getTotalAmount(), 0, ',', ' ')
        );
        
        if (count($supplierCreditNotes) > 0) {
            $message .= "\n⚠️ PROBLÈMES SIGNALÉS :\n";
            foreach ($supplierCreditNotes as $creditNote) {
                $message .= sprintf(
                    "  • %s : %d unité(s) - %s FCFA\n",
                    $creditNote->getStockBatch()->getProduct()->getName(),
                    $creditNote->getAffectedQuantity() ?? 0,
                    number_format((float) $creditNote->getDeclaredAmount(), 0, ',', ' ')
                );
            }
            $message .= sprintf(
                "\nMontant total déduit : %s FCFA\n",
                number_format($totalDeducted, 0, ',', ' ')
            );
            $message .= sprintf(
                "Montant net à régler : %s FCFA\n",
                number_format($netAmount, 0, ',', ' ')
            );
        }
        
        $message .= sprintf(
            "\nMerci pour votre service !\n\n" .
            "Cordialement,\n%s",
            $this->getCompanyName($purchase)
        );
        
        $this->sendWhatsappMessage($supplier->getPhone(), $message);
        
        if ($supplier->getEmail()) {
            $this->sendEmail(
                $supplier->getEmail(),
                'Confirmation de réception - Commande ' . $purchase->getPurchaseNumber(),
                'emails/purchase_received.html.twig',
                [
                    'purchase' => $purchase,
                    'app_url' => $this->appUrl,
                    'supplier_credit_notes' => $supplierCreditNotes,
                    'total_deducted' => $totalDeducted,
                    'net_amount' => $netAmount
                ]
            );
        }
    }

    /**
     * Envoie la notification d'annulation
     */
    public function sendPurchaseCancellation(Purchase $purchase, string $reason): void
    {
        $supplier = $purchase->getSupplier();
        if (!$supplier) {
            $this->logger->warning('Tentative d\'envoi d\'annulation sans fournisseur', [
                'purchase_id' => $purchase->getId()
            ]);
            return;
        }
        
        $message = sprintf(
            "❌ ANNULATION DE COMMANDE\n\n" .
            "Bonjour %s,\n\n" .
            "La commande N° %s a été annulée.\n" .
            "Motif : %s\n\n" .
            "Nous vous prions de nous excuser pour ce désagrément.\n\n" .
            "Cordialement,\n%s",
            $supplier->getName(),
            $purchase->getPurchaseNumber(),
            $reason,
            $this->getCompanyName($purchase)
        );
        
        $this->sendWhatsappMessage($supplier->getPhone(), $message);
        
        if ($supplier->getEmail()) {
            $this->sendEmail(
                $supplier->getEmail(),
                'Annulation de commande - ' . $purchase->getPurchaseNumber(),
                'emails/purchase_cancelled.html.twig',
                ['purchase' => $purchase, 'reason' => $reason, 'app_url' => $this->appUrl]
            );
        }
    }

    /**
     * Envoie l'email de confirmation
     */
    private function sendEmailConfirmation(Purchase $purchase, Supplier $supplier, ?string $customMessage): void
    {
        $this->sendEmail(
            $supplier->getEmail(),
            'Nouvelle commande - ' . $purchase->getPurchaseNumber(),
            'emails/purchase_confirmation.html.twig',
            [
                'purchase' => $purchase,
                'supplier' => $supplier,
                'customMessage' => $customMessage,
                'app_url' => $this->appUrl
            ]
        );
    }

    /**
     * Envoie la confirmation WhatsApp
     */
    private function sendWhatsappConfirmation(Purchase $purchase, Supplier $supplier, ?string $customMessage, bool $sendImage): void
    {
        $message = $this->buildWhatsappMessage($purchase, $supplier, $customMessage);
        
        if ($this->isLocal) {
            $this->logger->info('[LOCAL - WHATSAPP] Message à envoyer', [
                'phone' => $supplier->getPhone(),
                'message' => $message,
                'send_image' => $sendImage
            ]);
        } else {
            $this->sendWhatsappMessage($supplier->getPhone(), $message);
            
            if ($sendImage) {
                $firstItem = $purchase->getPurchaseItems()->first();
                if ($firstItem && $firstItem->getProduct()->getImage()) {
                    $this->sendWhatsappImage($supplier->getPhone(), $firstItem->getProduct()->getImage());
                }
            }
        }
    }

    /**
     * Construit le message WhatsApp
     */
    private function buildWhatsappMessage(Purchase $purchase, Supplier $supplier, ?string $customMessage): string
    {
        $itemsList = '';
        foreach ($purchase->getPurchaseItems() as $item) {
            $itemsList .= sprintf(
                "• %s : %d x %s FCFA = %s FCFA\n",
                $item->getProduct()->getName(),
                $item->getQuantity(),
                number_format((float) $item->getUnitPrice(), 0, ',', ' '),
                number_format((float) $item->getTotalPrice(), 0, ',', ' ')
            );
        }
        
        $confirmedAt = $purchase->getConfirmedAt();
        $dateFormatted = $confirmedAt ? $confirmedAt->format('d/m/Y H:i') : date('d/m/Y H:i');
        
        $message = sprintf(
            "🛍️ NOUVELLE COMMANDE\n\n" .
            "Bonjour %s,\n\n" .
            "Vous avez reçu une nouvelle commande de la part de %s.\n\n" .
            "📋 Détails de la commande :\n" .
            "N° commande : %s\n" .
            "Date : %s\n\n" .
            "🛒 Produits commandés :\n%s\n" .
            "💰 Total : %s FCFA\n\n",
            $supplier->getName(),
            $this->getCompanyName($purchase),
            $purchase->getPurchaseNumber(),
            $dateFormatted,
            $itemsList,
            number_format((float) $purchase->getTotalAmount(), 0, ',', ' ')
        );
        
        if ($customMessage) {
            $message .= "📝 Message :\n" . $customMessage . "\n\n";
        }
        
        $message .= sprintf(
            "📍 Livraison :\n%s\n\n" .
            "Pour confirmer ou modifier cette commande, merci de nous contacter.\n\n" .
            "Cordialement,\n%s",
            $this->getDeliveryAddress($purchase),
            $this->getCompanyName($purchase)
        );
        
        return $message;
    }

    /**
     * Récupère le nom de l'entreprise depuis la commande
     */
    private function getCompanyName(Purchase $purchase): string
    {
        $hmaService = $purchase->getHmaService();
        if (!$hmaService) {
            return 'Notre entreprise';
        }
        
        return $hmaService->getCompanyName() ?? 'Notre entreprise';
    }

    /**
     * Récupère l'adresse de livraison
     */
    private function getDeliveryAddress(Purchase $purchase): string
    {
        $hmaService = $purchase->getHmaService();
        if (!$hmaService) {
            return 'Adresse non spécifiée';
        }
        
        $address = $hmaService->getAddress();
        if ($address) {
            return $address;
        }
        
        return 'Adresse non spécifiée';
    }

    /**
     * Envoie un email via Twig
     */
    private function sendEmail(string $to, string $subject, string $template, array $context): void
    {
        try {
            $html = $this->twig->render($template, $context);
            
            $email = (new Email())
                ->from($this->appEmail)
                ->to($to)
                ->subject($subject)
                ->html($html);
            
            $this->mailer->send($email);
            
            $this->logger->info('Email envoyé', ['to' => $to, 'subject' => $subject]);
        } catch (\Exception $e) {
            $this->logger->error('Erreur envoi email', ['error' => $e->getMessage()]);
        }
    }

    /**
     * Envoie un message simple (non template) par email
     */
    public function sendSimpleEmail(string $to, string $subject, string $message): void
    {
        try {
            $email = (new Email())
                ->from($this->appEmail)
                ->to($to)
                ->subject($subject)
                ->text($message);
            
            $this->mailer->send($email);
            
            $this->logger->info('Email simple envoyé', ['to' => $to, 'subject' => $subject]);
        } catch (\Exception $e) {
            $this->logger->error('Erreur envoi email simple', ['error' => $e->getMessage()]);
        }
    }

    /**
     * Simule l'envoi WhatsApp
     */
    private function sendWhatsappMessage(string $phone, string $message): void
    {
        $this->logger->info('[WHATSAPP] Message envoyé', [
            'phone' => $phone,
            'message' => $message
        ]);
    }

    /**
     * Simule l'envoi d'image WhatsApp
     */
    private function sendWhatsappImage(string $phone, string $imageUrl): void
    {
        $this->logger->info('[WHATSAPP] Image envoyée', [
            'phone' => $phone,
            'image_url' => $imageUrl
        ]);
    }

    /**
     * Notifie tous les administrateurs et managers
     */
    public function notifyAdminsAndManagers(string $subject, string $message): void
    {
        $users = $this->entityManager->getRepository(User::class)
            ->createQueryBuilder('u')
            ->where('u.is_active = true')
            ->andWhere('u.roles LIKE :adminRole OR u.roles LIKE :managerRole')
            ->setParameter('adminRole', '%ROLE_ADMIN%')
            ->setParameter('managerRole', '%ROLE_MANAGER%')
            ->getQuery()
            ->getResult();
        
        foreach ($users as $user) {
            $this->sendSimpleEmail($user->getEmail(), $subject, $message);
        }
    }

    /**
     * Notifie uniquement les managers
     */
    public function notifyManagers(string $subject, string $message): void
    {
        $users = $this->entityManager->getRepository(User::class)
            ->createQueryBuilder('u')
            ->where('u.is_active = true')
            ->andWhere('u.roles LIKE :managerRole')
            ->setParameter('managerRole', '%ROLE_MANAGER%')
            ->getQuery()
            ->getResult();
        
        foreach ($users as $user) {
            $this->sendSimpleEmail($user->getEmail(), $subject, $message);
        }
    }
}