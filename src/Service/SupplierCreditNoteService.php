<?php
// src/Service/SupplierCreditNoteService.php

namespace App\Service;

use App\Entity\HmaService;
use App\Entity\Product;
use App\Entity\Purchase;
use App\Entity\StockBatch;
use App\Entity\Supplier;
use App\Entity\SupplierCreditNote;
use App\Entity\SupplierCreditNoteHistory;
use App\Entity\SupplierCreditNoteToken;
use App\Entity\User;
use Doctrine\ORM\EntityManagerInterface;
use Psr\Log\LoggerInterface;
use Symfony\Component\Mailer\MailerInterface;
use Symfony\Component\Mime\Email;
use Symfony\Component\Routing\Generator\UrlGeneratorInterface;
use Symfony\Component\String\Slugger\SluggerInterface;
use Twig\Environment as TwigEnvironment;

class SupplierCreditNoteService
{
    private const CREDIT_NOTE_DIRECTORY = 'uploads/credit_notes_attachments';

    // Constantes pour les actions sur le stock
    public const STOCK_ACTION_NONE = 'none';
    public const STOCK_ACTION_REDUCE = 'reduce';
    public const STOCK_ACTION_ZERO = 'zero';
    public const STOCK_ACTION_RETURN = 'return';

    // Labels pour les actions sur le stock
    public const STOCK_ACTION_LABELS = [
        self::STOCK_ACTION_NONE => 'Aucune action',
        self::STOCK_ACTION_REDUCE => 'Réduire le stock de la quantité concernée',
        self::STOCK_ACTION_ZERO => 'Mettre le stock à zéro',
        self::STOCK_ACTION_RETURN => 'Retour fournisseur',
    ];

    public function __construct(
        private EntityManagerInterface $entityManager,
        private LoggerInterface $logger,
        private MailerInterface $mailer,
        private TwigEnvironment $twig,
        private UrlGeneratorInterface $urlGenerator,
        private SluggerInterface $slugger,
        private string $supportEmail
    ) {}

    /**
     * Génère un numéro d'avoir unique
     */
    public function generateCreditNoteNumber(HmaService $hmaService): string
    {
        $date = new \DateTime();
        $year = $date->format('Y');
        $month = $date->format('m');
        
        // Correction : Utiliser une requête avec BETWEEN au lieu de YEAR()
        $startDate = new \DateTime($year . '-01-01 00:00:00');
        $endDate = new \DateTime($year . '-12-31 23:59:59');
        
        $count = $this->entityManager->getRepository(SupplierCreditNote::class)
            ->createQueryBuilder('c')
            ->select('COUNT(c.id)')
            ->where('c.hma_service = :service')
            ->andWhere('c.created_at BETWEEN :start AND :end')
            ->setParameter('service', $hmaService)
            ->setParameter('start', $startDate)
            ->setParameter('end', $endDate)
            ->getQuery()
            ->getSingleScalarResult();

        $sequence = str_pad($count + 1, 4, '0', STR_PAD_LEFT);
        
        return sprintf('AVR-%s%s-%s', $year, $month, $sequence);
    }
    public function createCreditNote(
        StockBatch $stockBatch,
        Purchase $purchase,
        Supplier $supplier,
        string $issueType,
        string $description,
        float $declaredAmount,
        string $priority,
        ?array $attachments,
        User $reportedBy,
        HmaService $hmaService,
        ?int $affectedQuantity = null,
        ?string $stockAction = null
    ): SupplierCreditNote {
        // 🔥 IMPORTANT: Récupérer une instance gérée par Doctrine
        $managedUser = $this->entityManager->getRepository(User::class)->find($reportedBy->getId());
        if (!$managedUser) {
            throw new \Exception('Utilisateur non trouvé');
        }
        
        $creditNote = new SupplierCreditNote();
        $creditNote->setCreditNoteNumber($this->generateCreditNoteNumber($hmaService));
        $creditNote->setStockBatch($stockBatch);
        $creditNote->setPurchase($purchase);
        $creditNote->setSupplier($supplier);
        $creditNote->setIssueType($issueType);
        $creditNote->setDescription($description);
        $creditNote->setDeclaredAmount((string)$declaredAmount);
        $creditNote->setPriority($priority);
        $creditNote->setStatus(SupplierCreditNote::STATUS_PENDING);
        $creditNote->setAttachments($attachments);
        $creditNote->setReportedBy($managedUser); // Utiliser l'instance gérée
        $creditNote->setReportedAt(new \DateTimeImmutable());
        $creditNote->setHmaService($hmaService);
        $creditNote->setAffectedQuantity($affectedQuantity);
        $creditNote->setStockAction($stockAction ?? self::STOCK_ACTION_NONE);
        $creditNote->setStockActionApplied(false);
        
        if ($declaredAmount <= 0 && $affectedQuantity && $affectedQuantity > 0) {
            $unitPrice = (float)$stockBatch->getUnitPrice();
            $calculatedAmount = $affectedQuantity * $unitPrice;
            $creditNote->setDeclaredAmount((string)$calculatedAmount);
        }
        
        $this->entityManager->persist($creditNote);
        $this->entityManager->flush();
        
        $stockActionNote = $this->getStockActionNote($stockAction, $affectedQuantity, $stockBatch);
        $this->addHistory($creditNote, 'created', null, null, $reportedBy, 
            'Création de l\'avoir. ' . $stockActionNote);
        
        $this->generateSupplierToken($creditNote);
        $this->sendNotificationToSupplier($creditNote);
        
        $this->logger->info('Avoir fournisseur créé', [
            'credit_note_id' => $creditNote->getId(),
            'number' => $creditNote->getCreditNoteNumber(),
            'supplier' => $supplier->getName(),
            'amount' => $declaredAmount,
            'affected_quantity' => $affectedQuantity,
            'stock_action' => $stockAction
        ]);
        
        return $creditNote;
    }

    /**
     * Génère une note explicative sur l'action stock recommandée
     */
    private function getStockActionNote(?string $stockAction, ?int $affectedQuantity, StockBatch $stockBatch): string
    {
        if (!$stockAction || $stockAction === self::STOCK_ACTION_NONE) {
            return "Aucun ajustement automatique du stock. Veuillez ajuster manuellement si nécessaire.";
        }
        
        $unitName = $stockBatch->getProduct()->getUnit() ?? 'pièce(s)';
        
        switch ($stockAction) {
            case self::STOCK_ACTION_REDUCE:
                $qty = $affectedQuantity ?? 0;
                return "🔧 ACTION STOCK RECOMMANDÉE: Réduire le stock de {$qty} {$unitName} (quantité concernée).";
            case self::STOCK_ACTION_ZERO:
                return "🔧 ACTION STOCK RECOMMANDÉE: Mettre le stock à zéro (produits non commercialisables).";
            case self::STOCK_ACTION_RETURN:
                return "🔧 ACTION STOCK RECOMMANDÉE: Retour fournisseur - retirer les produits du stock.";
            default:
                return "Aucun ajustement automatique du stock.";
        }
    }

    /**
     * Génère un token pour le fournisseur
     */
    private function generateSupplierToken(SupplierCreditNote $creditNote): SupplierCreditNoteToken
    {
        $token = bin2hex(random_bytes(32));
        
        $tokenEntity = new SupplierCreditNoteToken();
        $tokenEntity->setCreditNote($creditNote);
        $tokenEntity->setToken($token);
        $tokenEntity->setExpiresAt(new \DateTimeImmutable('+30 days'));
        
        $this->entityManager->persist($tokenEntity);
        $this->entityManager->flush();
        
        return $tokenEntity;
    }

    /**
     * Envoie la notification au fournisseur
     */
    private function sendNotificationToSupplier(SupplierCreditNote $creditNote): void
    {
        $tokenEntity = $this->entityManager->getRepository(SupplierCreditNoteToken::class)
            ->findOneBy(['creditNote' => $creditNote], ['id' => 'DESC']);
        
        if (!$tokenEntity) {
            $this->logger->error('Token non trouvé pour l\'avoir', ['credit_note_id' => $creditNote->getId()]);
            return;
        }
        
        $link = $this->urlGenerator->generate('supplier_credit_note_respond', [
            'token' => $tokenEntity->getToken()
        ], UrlGeneratorInterface::ABSOLUTE_URL);
        
        $supplier = $creditNote->getSupplier();
        $stockBatch = $creditNote->getStockBatch();
        $purchase = $creditNote->getPurchase();
        
        $email = (new Email())
            ->from('noreply@hma-market.com')
            ->to($supplier->getEmail())
            ->subject("Action requise - Avoir fournisseur n°{$creditNote->getCreditNoteNumber()}")
            ->html(
                $this->twig->render('emails/supplier_credit_note_notification.html.twig', [
                    'creditNote' => $creditNote,
                    'supplier' => $supplier,
                    'stockBatch' => $stockBatch,
                    'purchase' => $purchase,
                    'link' => $link,
                    'expires_in' => '30 jours',
                    'support_email' => $this->supportEmail
                ])
            );
        
        try {
            $this->mailer->send($email);
            $this->logger->info('Email envoyé au fournisseur', ['supplier' => $supplier->getEmail()]);
        } catch (\Exception $e) {
            $this->logger->error('Erreur envoi email fournisseur: ' . $e->getMessage());
        }
    }

    /**
     * Traite la réponse du fournisseur
     */
    public function processSupplierResponse(
        SupplierCreditNote $creditNote,
        string $response,
        ?float $proposedAmount,
        string $decision,
        ?string $reference
    ): void {
        $oldStatus = $creditNote->getStatus();
        
        $creditNote->setSupplierResponse($response);
        $creditNote->setSupplierResponseAt(new \DateTimeImmutable());
        $creditNote->setSupplierProposedAmount($proposedAmount ? (string)$proposedAmount : null);
        $creditNote->setSupplierDecision($decision);
        $creditNote->setSupplierReference($reference);
        
        $stockActionResult = null;
        
        switch ($decision) {
            case 'accept_full':
                $creditNote->setStatus(SupplierCreditNote::STATUS_RECOVERED);
                $creditNote->setRecoveredAmount($creditNote->getDeclaredAmount());
                // 🔥 CORRECTION: Appliquer l'action sur le stock uniquement si recommandée
                if ($creditNote->getStockAction() !== self::STOCK_ACTION_NONE) {
                    $stockActionResult = $this->applyStockAction($creditNote, null);
                }
                break;
            case 'accept_partial':
                $creditNote->setStatus(SupplierCreditNote::STATUS_UNDER_REVIEW);
                if ($proposedAmount) {
                    $creditNote->setRecoveredAmount((string)$proposedAmount);
                    $lost = (float)$creditNote->getDeclaredAmount() - $proposedAmount;
                    $creditNote->setLostAmount((string)$lost);
                    
                    // 🔥 Pour une acceptation partielle, recalculer la quantité concernée
                    if ($creditNote->getStockAction() !== self::STOCK_ACTION_NONE && $creditNote->getAffectedQuantity()) {
                        $originalAmount = (float)$creditNote->getDeclaredAmount();
                        $originalQuantity = $creditNote->getAffectedQuantity();
                        $newQuantity = (int)round(($proposedAmount / $originalAmount) * $originalQuantity);
                        $creditNote->setAffectedQuantity($newQuantity);
                        $stockActionResult = $this->applyStockAction($creditNote, null);
                    }
                }
                break;
            case 'refuse':
                $creditNote->setStatus(SupplierCreditNote::STATUS_REFUSED);
                // 🔥 CORRECTION: Refusé → ON NE CHANGE PAS LE STOCK
                // L'entreprise garde les produits mais perd l'argent
                $this->logger->info('Avoir refusé par le fournisseur, stock inchangé', [
                    'credit_note_id' => $creditNote->getId()
                ]);
                break;
            case 'need_info':
                $creditNote->setStatus(SupplierCreditNote::STATUS_ACKNOWLEDGED);
                break;
        }
        
        $this->entityManager->flush();
        
        $historyNote = "Réponse fournisseur: $response | Décision: $decision | Montant proposé: " . ($proposedAmount ?? 'N/A');
        if ($stockActionResult) {
            $historyNote .= " | Action stock: $stockActionResult";
        }
        
        $this->addHistory(
            $creditNote,
            'supplier_responded',
            $oldStatus,
            $creditNote->getStatus(),
            null,
            $historyNote
        );
        
        $this->logger->info('Réponse fournisseur enregistrée', [
            'credit_note_id' => $creditNote->getId(),
            'decision' => $decision,
            'stock_action_applied' => $stockActionResult !== null
        ]);
    }

    /**
     * Met à jour le statut de l'avoir (résolution par admin/manager)
     */
    public function updateCreditNoteStatus(
        SupplierCreditNote $creditNote,
        string $newStatus,
        float $recoveredAmount,
        float $lostAmount,
        string $resolutionNotes,
        User $resolvedBy
    ): void {
        $oldStatus = $creditNote->getStatus();
        
        $creditNote->setStatus($newStatus);
        $creditNote->setRecoveredAmount((string)$recoveredAmount);
        $creditNote->setLostAmount((string)$lostAmount);
        $creditNote->setResolutionNotes($resolutionNotes);
        $creditNote->setResolvedBy($resolvedBy);
        $creditNote->setResolvedAt(new \DateTimeImmutable());
        
        $stockActionResult = $this->applyStockAction($creditNote, $resolvedBy);
        
        $this->entityManager->flush();
        
        $historyNote = "Statut mis à jour: {$oldStatus} → {$newStatus}. {$resolutionNotes}";
        if ($stockActionResult) {
            $historyNote .= " {$stockActionResult}";
        }
        
        $this->addHistory(
            $creditNote,
            'status_updated',
            $oldStatus,
            $newStatus,
            $resolvedBy,
            $historyNote
        );
        
        $this->logger->info('Statut de l\'avoir mis à jour', [
            'credit_note_id' => $creditNote->getId(),
            'old_status' => $oldStatus,
            'new_status' => $newStatus,
            'stock_action_applied' => $stockActionResult !== null
        ]);
    }

    /**
     * Applique l'action sur le stock
     * 
     * @return string|null Message décrivant l'action effectuée
     */
    public function applyStockAction(SupplierCreditNote $creditNote, ?User $performedBy): ?string
    {
        // Si déjà appliquée, ne rien faire
        if ($creditNote->getStockActionApplied()) {
            return "ℹ️ Action déjà appliquée précédemment.";
        }
        
        $stockAction = $creditNote->getStockAction();
        $affectedQuantity = $creditNote->getAffectedQuantity();
        $stockBatch = $creditNote->getStockBatch();
        
        if (!$stockBatch || $stockAction === self::STOCK_ACTION_NONE) {
            return null;
        }
        
        $product = $stockBatch->getProduct();
        $unitName = $product->getUnit() ?? 'pièce(s)';
        $currentQuantity = $stockBatch->getCurrentQuantity();
        
        $this->logger->info('Application action stock', [
            'credit_note_id' => $creditNote->getId(),
            'action' => $stockAction,
            'affected_quantity' => $affectedQuantity,
            'current_quantity' => $currentQuantity
        ]);
        
        switch ($stockAction) {
            case self::STOCK_ACTION_REDUCE:
                if ($affectedQuantity && $affectedQuantity > 0) {
                    // 🔥 CORRECTION: Ne pas réduire plus que ce qui existe
                    $quantityToReduce = min($affectedQuantity, $currentQuantity);
                    $newQuantity = $currentQuantity - $quantityToReduce;
                    
                    $stockBatch->setCurrentQuantity($newQuantity);
                    
                    // Mettre à jour le stock produit
                    $currentProductStock = $product->getStockQuantity() ?? 0;
                    $product->setStockQuantity($currentProductStock - $quantityToReduce);
                    
                    $this->createStockMovement($creditNote, $performedBy, $quantityToReduce, $currentQuantity, $newQuantity);
                    $creditNote->setStockActionApplied(true);
                    
                    $this->logger->info('Stock réduit avec succès', [
                        'product' => $product->getName(),
                        'reduced_quantity' => $quantityToReduce,
                        'old_quantity' => $currentQuantity,
                        'new_quantity' => $newQuantity
                    ]);
                    
                    return "✅ Stock réduit de {$quantityToReduce} {$unitName} (ancien: {$currentQuantity}, nouveau: {$newQuantity}).";
                }
                break;
                
            case self::STOCK_ACTION_ZERO:
                if ($currentQuantity > 0) {
                    $stockBatch->setCurrentQuantity(0);
                    $product->setStockQuantity(max(0, ($product->getStockQuantity() ?? 0) - $currentQuantity));
                    $stockBatch->setIsActive(false);
                    
                    $this->createStockMovement($creditNote, $performedBy, $currentQuantity, $currentQuantity, 0);
                    $creditNote->setStockActionApplied(true);
                    
                    $this->logger->info('Stock mis à zéro', [
                        'product' => $product->getName(),
                        'removed_quantity' => $currentQuantity
                    ]);
                    
                    return "✅ Stock mis à zéro ({$currentQuantity} {$unitName} retirés). Lot désactivé.";
                }
                break;
                
            case self::STOCK_ACTION_RETURN:
                if ($currentQuantity > 0) {
                    $stockBatch->setCurrentQuantity(0);
                    $product->setStockQuantity(max(0, ($product->getStockQuantity() ?? 0) - $currentQuantity));
                    $stockBatch->setIsActive(false);
                    
                    $this->createStockMovement($creditNote, $performedBy, $currentQuantity, $currentQuantity, 0, true);
                    $creditNote->setStockActionApplied(true);
                    
                    $this->logger->info('Retour fournisseur enregistré', [
                        'product' => $product->getName(),
                        'returned_quantity' => $currentQuantity
                    ]);
                    
                    return "✅ Retour fournisseur enregistré ({$currentQuantity} {$unitName} retirés). Lot désactivé.";
                }
                break;
        }
        
        return null;
    }

    /**
     * Crée un mouvement de stock pour tracer l'action
     */
    private function createStockMovement(
        SupplierCreditNote $creditNote,
        ?User $performedBy,
        int $quantity,
        int $oldQuantity,
        int $newQuantity,
        bool $isReturn = false
    ): void {
        $movement = new \App\Entity\StockMovement();
        $movement->setMovementType($isReturn ? 'SUPPLIER_RETURN' : 'ADJUSTMENT');
        $movement->setQuantity($quantity);
        $movement->setUnitPrice($creditNote->getStockBatch()->getUnitPrice());
        $movement->setProduct($creditNote->getStockBatch()->getProduct());
        $movement->setStockBatch($creditNote->getStockBatch());
        
        // 🔥 CORRECTION : Si performedBy est null, on utilise l'utilisateur qui a signalé
        if ($performedBy) {
            $managedUser = $this->entityManager->getRepository(User::class)->find($performedBy->getId());
            $movement->setUser($managedUser);
        } else {
            // Utiliser l'utilisateur qui a signalé le problème (reported_by)
            $reportedBy = $creditNote->getReportedBy();
            if ($reportedBy) {
                $managedUser = $this->entityManager->getRepository(User::class)->find($reportedBy->getId());
                $movement->setUser($managedUser);
            } else {
                // Fallback: chercher un utilisateur système
                $systemUser = $this->entityManager->getRepository(User::class)->findOneBy(['email' => 'system@hma-market.com']);
                if (!$systemUser) {
                    // Récupérer le premier admin
                    $systemUser = $this->entityManager->getRepository(User::class)->findOneBy(['roles' => '["ROLE_ADMIN"]']);
                }
                $movement->setUser($systemUser);
            }
        }
        
        $movement->setHmaService($creditNote->getHmaService());
        $movement->setCreatedAt(new \DateTime());
        $movement->setReferenceId($creditNote->getId());
        $movement->setNotes(sprintf(
            "Ajustement suite à l'avoir n°%s - Quantité: %d (ancien: %d, nouveau: %d)",
            $creditNote->getCreditNoteNumber(),
            $quantity,
            $oldQuantity,
            $newQuantity
        ));
        
        $this->entityManager->persist($movement);
    }

    /**
     * Ajoute une entrée dans l'historique
     */
    private function addHistory(
        SupplierCreditNote $creditNote,
        string $action,
        ?string $oldValue,
        ?string $newValue,
        ?User $performedBy,
        ?string $notes
    ): void {
        $history = new SupplierCreditNoteHistory();
        $history->setCreditNote($creditNote);
        $history->setAction($action);
        $history->setOldValue($oldValue);
        $history->setNewValue($newValue);
        
        if ($performedBy) {
            $managedUser = $this->entityManager->getRepository(User::class)->find($performedBy->getId());
            if ($managedUser) {
                $history->setPerformedBy($managedUser);
                $history->setPerformedByName($managedUser->getFullName() ?: $managedUser->getUserIdentifier());
            }
        } else {
            // Pour les réponses fournisseur, on ne met pas d'utilisateur
            $history->setPerformedBy(null);
            // Optionnel: mettre le nom du fournisseur
            $history->setPerformedByName($creditNote->getSupplier()->getName() . ' (Fournisseur)');
        }
        
        $history->setPerformedAt(new \DateTimeImmutable());
        $history->setNotes($notes);
        
        $this->entityManager->persist($history);
        $this->entityManager->flush();
    }
    /**
     * Récupère les statistiques des avoirs
     */
    public function getStatistics(HmaService $hmaService): array
    {
        $repo = $this->entityManager->getRepository(SupplierCreditNote::class);
        
        $total = $repo->count(['hma_service' => $hmaService]);
        $pending = $repo->count(['hma_service' => $hmaService, 'status' => SupplierCreditNote::STATUS_PENDING]);
        $recovered = $repo->count(['hma_service' => $hmaService, 'status' => SupplierCreditNote::STATUS_RECOVERED]);
        $lost = $repo->count(['hma_service' => $hmaService, 'status' => SupplierCreditNote::STATUS_LOST]);
        
        $totalAmount = $repo->createQueryBuilder('c')
            ->select('SUM(c.declared_amount)')
            ->where('c.hma_service = :service')
            ->setParameter('service', $hmaService)
            ->getQuery()
            ->getSingleScalarResult() ?: 0;
        
        $totalRecovered = $repo->createQueryBuilder('c')
            ->select('SUM(c.recovered_amount)')
            ->where('c.hma_service = :service')
            ->setParameter('service', $hmaService)
            ->getQuery()
            ->getSingleScalarResult() ?: 0;
        
        return [
            'total' => $total,
            'pending' => $pending,
            'recovered' => $recovered,
            'lost' => $lost,
            'total_amount' => (float)$totalAmount,
            'total_recovered' => (float)$totalRecovered,
        ];
    }

    /**
     * Retourne la liste des actions sur le stock pour le formulaire
     */
    public static function getStockActions(): array
    {
        return self::STOCK_ACTION_LABELS;
    }
}