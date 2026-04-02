<?php
// src/Service/NotificationService.php

namespace App\Service;

use App\Entity\Purchase;
use App\Entity\Supplier;
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
        private bool $isLocal,
        private string $appUrl
    ) {
    }

    /**
     * Envoie la confirmation de commande au fournisseur
     */
    // src/Service/NotificationService.php

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
    public function sendPurchaseReceivedConfirmation(Purchase $purchase): void
    {
        $supplier = $purchase->getSupplier();
        if (!$supplier) {
            $this->logger->warning('Tentative d\'envoi de confirmation de réception sans fournisseur', [
                'purchase_id' => $purchase->getId()
            ]);
            return;
        }
        
        $message = sprintf(
            "✅ CONFIRMATION DE RÉCEPTION\n\n" .
            "Bonjour %s,\n\n" .
            "Nous confirmons la bonne réception de la commande N° %s\n" .
            "Montant total : %s FCFA\n\n" .
            "Merci pour votre service !\n\n" .
            "Cordialement,\n%s",
            $supplier->getName(), // ✅ Utilisation de getName()
            $purchase->getPurchaseNumber(),
            number_format((float) $purchase->getTotalAmount(), 0, ',', ' '),
            $this->getCompanyName($purchase)
        );
        
        $this->sendWhatsappMessage($supplier->getPhone(), $message);
        
        if ($supplier->getEmail()) {
            $this->sendEmail(
                $supplier->getEmail(),
                'Confirmation de réception - Commande ' . $purchase->getPurchaseNumber(),
                'emails/purchase_received.html.twig',
                ['purchase' => $purchase, 'app_url' => $this->appUrl]
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
            $supplier->getName(), // ✅ Utilisation de getName()
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
        
        // En local, on simule l'envoi avec un message dans les logs
        if ($this->isLocal) {
            $this->logger->info('[LOCAL - WHATSAPP] Message à envoyer', [
                'phone' => $supplier->getPhone(),
                'message' => $message,
                'send_image' => $sendImage
            ]);
        } else {
            // Production : appeler l'API WhatsApp
            $this->sendWhatsappMessage($supplier->getPhone(), $message);
            
            if ($sendImage) {
                // Envoyer l'image du produit principal
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
            $supplier->getName(), // ✅ Utilisation de getName()
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
     * Simule l'envoi WhatsApp (à remplacer par l'API réelle)
     */
    private function sendWhatsappMessage(string $phone, string $message): void
    {
        // TODO: Intégrer l'API WhatsApp Business
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
}