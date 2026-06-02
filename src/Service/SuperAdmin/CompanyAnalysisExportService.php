<?php
// src/Service/SuperAdmin/CompanyAnalysisExportService.php

namespace App\Service\SuperAdmin;

use App\Entity\AnalysisRequest;
use App\Entity\HmaService;
use App\Entity\User;
use App\Repository\OrderRepository;
use App\Repository\PurchaseRepository;
use App\Repository\StockBatchRepository;
use App\Repository\StockMovementRepository;
use App\Repository\ProductRepository;
use App\Repository\UserRepository;
use App\Repository\SupplierRepository;
use App\Repository\CategoryRepository;
use App\Repository\RecipeRepository;
use App\Repository\ReturnOrderRepository;
use App\Repository\SupplierCreditNoteRepository;
use App\Service\NotificationService;
use Doctrine\ORM\EntityManagerInterface;
use Psr\Log\LoggerInterface;
use PhpOffice\PhpSpreadsheet\Spreadsheet;
use PhpOffice\PhpSpreadsheet\Writer\Xlsx;
use PhpOffice\PhpSpreadsheet\Style\Fill;
use ZipArchive;

class CompanyAnalysisExportService
{
    private string $exportDirectory;
    
    public function __construct(
        private EntityManagerInterface $entityManager,
        private OrderRepository $orderRepository,
        private PurchaseRepository $purchaseRepository,
        private StockBatchRepository $stockBatchRepository,
        private StockMovementRepository $stockMovementRepository,
        private ProductRepository $productRepository,
        private UserRepository $userRepository,
        private SupplierRepository $supplierRepository,
        private CategoryRepository $categoryRepository,
        private RecipeRepository $recipeRepository,
        private ReturnOrderRepository $returnOrderRepository,
        private SupplierCreditNoteRepository $supplierCreditNoteRepository,
        private NotificationService $notificationService,
        private LoggerInterface $logger,
        string $exportsDirectory
    ) {
        $this->exportDirectory = $exportsDirectory . '/analyses';
        
        if (!is_dir($this->exportDirectory)) {
            mkdir($this->exportDirectory, 0777, true);
        }
        if (!is_dir($this->exportDirectory . '/raw')) {
            mkdir($this->exportDirectory . '/raw', 0777, true);
        }
        if (!is_dir($this->exportDirectory . '/reports')) {
            mkdir($this->exportDirectory . '/reports', 0777, true);
        }
        if (!is_dir($this->exportDirectory . '/temp')) {
            mkdir($this->exportDirectory . '/temp', 0777, true);
        }
    }
    
    /**
     * ÉTAPE 1: Génère l'export brut des données (pour le Super Admin)
     */
    public function generateRawDataExport(AnalysisRequest $analysis): string
    {
        $company = $analysis->getCompany();

        if (!$analysis->isPeriodValid()) {
            throw new \Exception(sprintf(
                'La période sélectionnée (%d jours) dépasse la limite maximale de %d jours (environ 1 an).',
                $analysis->getPeriodDays(),
                AnalysisRequest::MAX_PERIOD_DAYS
            ));
        }
        
        $timestamp = (new \DateTime())->format('Ymd_His');
        $folderName = sprintf(
            'RAW_DATA_%s_%s_%s',
            $company->getSubscriptionNumber(),
            $this->sanitizeFolderName($company->getCompanyName()),
            $timestamp
        );
        
        $tempDir = $this->exportDirectory . '/temp/' . $folderName;
        $zipPath = $this->exportDirectory . '/raw/' . $folderName . '.zip';
        
        if (!is_dir($tempDir)) {
            mkdir($tempDir, 0777, true);
        }
        
        try {
            $this->createReadmeFile($tempDir, $company, $analysis);
            $this->exportCompanyInfo($tempDir, $company, $analysis);
            $this->exportPurchaseData($tempDir, $company, $analysis);
            $this->exportSalesData($tempDir, $company, $analysis);
            $this->exportStockData($tempDir, $company, $analysis);
            $this->exportCatalogData($tempDir, $company);
            $this->exportUsersData($tempDir, $company);
            
            $zip = new ZipArchive();
            if ($zip->open($zipPath, ZipArchive::CREATE | ZipArchive::OVERWRITE) !== true) {
                throw new \Exception('Impossible de créer l\'archive ZIP');
            }
            
            $this->addFilesToZip($tempDir, $zip);
            $zip->close();
            $this->deleteDirectory($tempDir);
            
            $analysis->setRawExportPath($zipPath);
            $analysis->setRawExportedAt(new \DateTime());
            $analysis->setStatus(AnalysisRequest::STATUS_PROCESSING);
            $this->entityManager->flush();
            
            // 🔔 NOTIFICATION: Données brutes disponibles
            $this->notifyCompanyRawDataReady($company, $analysis);
            
            return $zipPath;
            
        } catch (\Exception $e) {
            $this->logger->error('Erreur génération export brut', [
                'analysis_id' => $analysis->getId(),
                'error' => $e->getMessage(),
                'trace' => $e->getTraceAsString()
            ]);
            throw $e;
        }
    }
    
    /**
     * ÉTAPE 2: Super Admin upload son rapport final
     */
    public function uploadFinalReport(AnalysisRequest $analysis, string $uploadedFilePath, string $originalFilename, User $uploadedBy): string
    {
        $company = $analysis->getCompany();
        $timestamp = (new \DateTime())->format('Ymd_His');
        
        $extension = pathinfo($originalFilename, PATHINFO_EXTENSION);
        $fileType = $this->getFileTypeFromExtension($extension);
        
        $companyReportDir = $this->exportDirectory . '/reports/' . $company->getSubscriptionNumber();
        if (!is_dir($companyReportDir)) {
            mkdir($companyReportDir, 0777, true);
        }
        
        $newFileName = sprintf(
            'RAPPORT_ANALYSE_%s_%s.%s',
            $company->getSubscriptionNumber(),
            $timestamp,
            $extension
        );
        
        $finalPath = $companyReportDir . '/' . $newFileName;
        
        copy($uploadedFilePath, $finalPath);
        
        if ($analysis->getFinalReportPath() && file_exists($analysis->getFinalReportPath())) {
            unlink($analysis->getFinalReportPath());
        }
        
        $analysis->setFinalReportPath($finalPath);
        $analysis->setFinalReportFilename($newFileName);
        $analysis->setFinalReportType($fileType);
        
        // ✅ IMPORTANT: Récupérer l'utilisateur depuis Doctrine pour éviter le problème de persistance
        $user = $this->entityManager->getRepository(User::class)->find($uploadedBy->getId());
        $analysis->setFinalReportUploadedBy($user);
        
        $analysis->setFinalReportUploadedAt(new \DateTime());
        $analysis->setStatus(AnalysisRequest::STATUS_COMPLETED);
        
        $this->entityManager->flush();
        
        $this->notifyCompanyFinalReportReady($company, $analysis);
        
        $this->logger->info('Rapport final uploadé', [
            'analysis_id' => $analysis->getId(),
            'company_id' => $company->getId(),
            'filename' => $newFileName,
            'type' => $fileType,
            'uploaded_by' => $uploadedBy->getEmail()
        ]);
        
        return $finalPath;
    }

    /**
     * Super Admin peut modifier le rapport uploadé (remplacer)
     */
    public function updateFinalReport(AnalysisRequest $analysis, string $uploadedFilePath, string $originalFilename, User $uploadedBy): string
    {
        $company = $analysis->getCompany();
        
        // Supprimer l'ancien fichier
        if ($analysis->getFinalReportPath() && file_exists($analysis->getFinalReportPath())) {
            unlink($analysis->getFinalReportPath());
        }
        
        // Upload le nouveau
        return $this->uploadFinalReport($analysis, $uploadedFilePath, $originalFilename, $uploadedBy);
    }
    
    /**
     * Super Admin peut supprimer le rapport
     */
    public function deleteFinalReport(AnalysisRequest $analysis): void
    {
        if ($analysis->getFinalReportPath() && file_exists($analysis->getFinalReportPath())) {
            unlink($analysis->getFinalReportPath());
        }
        
        $analysis->setFinalReportPath(null);
        $analysis->setFinalReportFilename(null);
        $analysis->setFinalReportType(null);
        $analysis->setFinalReportUploadedBy(null);
        $analysis->setFinalReportUploadedAt(null);
        $analysis->setStatus(AnalysisRequest::STATUS_PROCESSING);
        
        $this->entityManager->flush();
    }
    
    /**
     * ÉTAPE 3: L'entreprise télécharge son rapport final
     */
    public function downloadCompanyReport(AnalysisRequest $analysis): ?array
    {
        if ($analysis->getStatus() !== AnalysisRequest::STATUS_COMPLETED) {
            throw new \Exception('Cette analyse n\'est pas encore disponible');
        }
        
        if (!$analysis->getFinalReportPath() || !file_exists($analysis->getFinalReportPath())) {
            throw new \Exception('Le fichier rapport n\'existe plus');
        }
        
        $this->logger->info('Téléchargement rapport entreprise', [
            'analysis_id' => $analysis->getId(),
            'company_id' => $analysis->getCompany()->getId(),
            'file_type' => $analysis->getFinalReportType(),
            'ip' => $_SERVER['REMOTE_ADDR'] ?? 'unknown'
        ]);
        
        return [
            'path' => $analysis->getFinalReportPath(),
            'filename' => $analysis->getFinalReportFilename(),
            'type' => $analysis->getFinalReportType()
        ];
    }
    
    /**
     * L'entreprise peut aussi télécharger les données brutes si besoin
     */
    public function downloadRawData(AnalysisRequest $analysis): ?string
    {
        if (!$analysis->getRawExportPath() || !file_exists($analysis->getRawExportPath())) {
            return null;
        }
        
        return $analysis->getRawExportPath();
    }
    
    /**
     * Vérifie si l'entreprise peut télécharger son rapport
     */
    public function isReportAvailableForCompany(HmaService $company, AnalysisRequest $analysis): bool
    {
        return $analysis->getCompany()->getId() === $company->getId()
            && $analysis->getStatus() === AnalysisRequest::STATUS_COMPLETED
            && $analysis->getFinalReportPath() !== null
            && file_exists($analysis->getFinalReportPath());
    }
    
    /**
     * Récupère tous les rapports disponibles pour une entreprise
     */
    public function getAvailableReportsForCompany(HmaService $company): array
    {
        $analyses = $this->entityManager
            ->getRepository(AnalysisRequest::class)
            ->findBy([
                'company' => $company,
                'status' => AnalysisRequest::STATUS_COMPLETED
            ], ['createdAt' => 'DESC']);
        
        $reports = [];
        foreach ($analyses as $analysis) {
            if ($analysis->getFinalReportPath() && file_exists($analysis->getFinalReportPath())) {
                $reports[] = [
                    'id' => $analysis->getId(),
                    'request_number' => $analysis->getRequestNumber(),
                    'period_start' => $analysis->getPeriodStart()->format('d/m/Y'),
                    'period_end' => $analysis->getPeriodEnd()->format('d/m/Y'),
                    'type' => $analysis->getTypeLabel(),
                    'report_type' => $analysis->getFinalReportType(),
                    'report_filename' => $analysis->getFinalReportFilename(),
                    'available_at' => $analysis->getFinalReportUploadedAt()?->format('d/m/Y H:i') ?? $analysis->getUpdatedAt()?->format('d/m/Y H:i') ?? $analysis->getCreatedAt()->format('d/m/Y H:i'),
                ];
            }
        }
        
        return $reports;
    }
    
    /**
     * 🔔 NOTIFICATION: Données brutes disponibles
     */
    private function notifyCompanyRawDataReady(HmaService $company, AnalysisRequest $analysis): void
    {
        // ✅ Ne notifier que les admins et managers (pas les simples employés)
        $recipients = $this->userRepository->findBy([
            'hma_service_id' => $company,
            'is_active' => true
        ]);
        
        // Filtrer pour ne garder que les admins et managers
        $recipients = array_filter($recipients, function($user) {
            $roles = $user->getRoles();
            return in_array('ROLE_ADMIN', $roles) || in_array('ROLE_MANAGER', $roles);
        });
        
        $message = sprintf(
            "Bonjour,\n\n"
            . "Les données brutes de votre analyse sont maintenant disponibles.\n\n"
            . "📋 Détails :\n"
            . "   • N° demande : %s\n"
            . "   • Période : %s au %s\n"
            . "   • Type d'analyse : %s\n\n"
            . "📁 Vous pouvez télécharger les données brutes (format ZIP) depuis votre espace client.\n\n"
            . "ℹ️ Ces données vous permettent de faire votre propre analyse en attendant le rapport final de nos experts.\n\n"
            . "Cordialement,\n"
            . "L'équipe HMA Market",
            $analysis->getRequestNumber(),
            $analysis->getPeriodStart()->format('d/m/Y'),
            $analysis->getPeriodEnd()->format('d/m/Y'),
            $analysis->getTypeLabel()
        );
        
        foreach ($recipients as $admin) {
            $this->notificationService->sendSimpleEmail(
                $admin->getEmail(),
                '📊 Vos données brutes sont disponibles',
                $message
            );
        }
    }

    /**
     * 🔔 NOTIFICATION: Rapport final disponible
     */
    private function notifyCompanyFinalReportReady(HmaService $company, AnalysisRequest $analysis): void
    {
        // ✅ Ne notifier que les admins et managers (pas les simples employés)
        $recipients = $this->userRepository->findBy([
            'hma_service_id' => $company,
            'is_active' => true
        ]);
        
        // Filtrer pour ne garder que les admins et managers
        $recipients = array_filter($recipients, function($user) {
            $roles = $user->getRoles();
            return in_array('ROLE_ADMIN', $roles) || in_array('ROLE_MANAGER', $roles);
        });
        
        $reportTypeLabel = $this->getReportTypeLabel($analysis->getFinalReportType());
        
        $message = sprintf(
            "Bonjour,\n\n"
            . "✅ L'analyse approfondie que vous avez demandée est maintenant disponible !\n\n"
            . "📋 Détails de l'analyse :\n"
            . "   • N° demande : %s\n"
            . "   • Période : %s au %s\n"
            . "   • Type d'analyse : %s\n"
            . "   • Format du rapport : %s\n\n"
            . "🔗 Rendez-vous sur votre espace client pour télécharger votre rapport.\n\n"
            . "💡 Notre expert a préparé ce rapport sur mesure après analyse complète de vos données.\n\n"
            . "Cordialement,\n"
            . "L'équipe HMA Market",
            $analysis->getRequestNumber(),
            $analysis->getPeriodStart()->format('d/m/Y'),
            $analysis->getPeriodEnd()->format('d/m/Y'),
            $analysis->getTypeLabel(),
            $reportTypeLabel
        );
        
        foreach ($recipients as $admin) {
            $this->notificationService->sendSimpleEmail(
                $admin->getEmail(),
                '📊 Votre analyse est prête !',
                $message
            );
        }
    }

    /**
     * 🔔 NOTIFICATION: Rapport mis à jour
     */
    private function notifyCompanyReportUpdated(HmaService $company, AnalysisRequest $analysis): void
    {
        // ✅ Ne notifier que les admins et managers (pas les simples employés)
        $recipients = $this->userRepository->findBy([
            'hma_service_id' => $company,
            'is_active' => true
        ]);
        
        // Filtrer pour ne garder que les admins et managers
        $recipients = array_filter($recipients, function($user) {
            $roles = $user->getRoles();
            return in_array('ROLE_ADMIN', $roles) || in_array('ROLE_MANAGER', $roles);
        });
        
        $reportTypeLabel = $this->getReportTypeLabel($analysis->getFinalReportType());
        
        $message = sprintf(
            "Bonjour,\n\n"
            . "🔄 Le rapport de votre analyse a été mis à jour par notre équipe.\n\n"
            . "📋 Détails de l'analyse :\n"
            . "   • N° demande : %s\n"
            . "   • Période : %s au %s\n"
            . "   • Type d'analyse : %s\n"
            . "   • Format du rapport : %s\n\n"
            . "🔗 Rendez-vous sur votre espace client pour télécharger la nouvelle version.\n\n"
            . "Cordialement,\n"
            . "L'équipe HMA Market",
            $analysis->getRequestNumber(),
            $analysis->getPeriodStart()->format('d/m/Y'),
            $analysis->getPeriodEnd()->format('d/m/Y'),
            $analysis->getTypeLabel(),
            $reportTypeLabel
        );
        
        foreach ($recipients as $admin) {
            $this->notificationService->sendSimpleEmail(
                $admin->getEmail(),
                '🔄 Votre rapport d\'analyse a été mis à jour',
                $message
            );
        }
    }
    
    private function getFileTypeFromExtension(string $extension): string
    {
        return match(strtolower($extension)) {
            'xlsx', 'xls' => 'excel',
            'zip' => 'zip',
            'pbix' => 'powerbi',
            'pdf' => 'pdf',
            'csv' => 'csv',
            default => 'other'
        };
    }
    
    private function getReportTypeLabel(string $type): string
    {
        return match($type) {
            'excel' => 'Microsoft Excel (avec graphiques et analyses)',
            'powerbi' => 'Power BI (tableaux de bord interactifs)',
            'pdf' => 'PDF (rapport statique)',
            'zip' => 'Archive ZIP (fichiers complets)',
            default => ucfirst($type)
        };
    }
    
    // ==================== MÉTHODES D'EXPORT BRUT ====================
    
    private function createReadmeFile(string $tempDir, HmaService $company, AnalysisRequest $analysis): void
    {
        $content = "========================================\n";
        $content .= "EXPORT BRUT DES DONNEES\n";
        $content .= "========================================\n\n";
        $content .= "Entreprise: " . $company->getCompanyName() . "\n";
        $content .= "N° Abonnement: " . $company->getSubscriptionNumber() . "\n";
        $content .= "Type: " . ($company->getType() === 'restaurant' ? 'Restaurant' : 'Commerce de détail') . "\n";
        $content .= "Période analysée: " . $analysis->getPeriodStart()->format('d/m/Y') . " au " . $analysis->getPeriodEnd()->format('d/m/Y') . "\n";
        $content .= "Type d'analyse: " . $analysis->getTypeLabel() . "\n";
        $content .= "Date d'export: " . (new \DateTime())->format('d/m/Y H:i:s') . "\n\n";
        $content .= "--- STRUCTURE DU DOSSIER ---\n\n";
        $content .= "📁 01_ENTREPRISE_INFO/ - Informations générales\n";
        $content .= "📁 02_ACHATS/ - Approvisionnement et fournisseurs\n";
        $content .= "📁 03_VENTES/ - Commandes clients et retours\n";
        $content .= "📁 04_STOCK/ - Lots, mouvements et inventaires\n";
        $content .= "📁 05_PRODUITS/ - Catalogue, catégories, recettes et promotions\n";
        $content .= "📁 06_UTILISATEURS/ - Personnel et rôles\n\n";
        $content .= "--- COMMENT ANALYSER CES DONNEES ---\n\n";
        $content .= "Ces fichiers contiennent toutes les données brutes.\n";
        $content .= "Le rapport final sera fourni séparément par nos experts.\n\n";
        $content .= "--- SUPPORT ---\n\n";
        $content .= "Pour toute question, contactez le support: support@hma-market.com\n";
        
        file_put_contents($tempDir . '/00_README.txt', $content);
    }
    
    private function exportCompanyInfo(string $tempDir, HmaService $company, AnalysisRequest $analysis): void
    {
        $dir = $tempDir . '/01_ENTREPRISE_INFO';
        if (!is_dir($dir)) mkdir($dir, 0777, true);
        
        $spreadsheet = new Spreadsheet();
        $sheet = $spreadsheet->getActiveSheet();
        $sheet->setTitle('Entreprise');
        
        $data = [
            ['Champ', 'Valeur'],
            ['Nom de l\'entreprise', $company->getCompanyName()],
            ['N° Abonnement', $company->getSubscriptionNumber()],
            ['Type', $company->getType() === 'restaurant' ? 'Restaurant' : 'Commerce'],
            ['Email', $company->getEmail()],
            ['Téléphone', $company->getPhone()],
            ['Adresse', $company->getAddress()],
            ['Ville', $company->getCity()],
            ['Pays', $company->getCountry()],
            ['Date de création', $company->getCreatedAt()->format('d/m/Y')],
            ['Plan d\'abonnement', ucfirst($company->getCurrentPlan())],
            ['Statut', $company->isActive() ? 'Actif' : 'Inactif'],
            ['Période analysée', $analysis->getPeriodStart()->format('d/m/Y') . ' au ' . $analysis->getPeriodEnd()->format('d/m/Y')],
            ['Date de l\'analyse', (new \DateTime())->format('d/m/Y H:i:s')],
        ];
        
        foreach ($data as $rowIndex => $row) {
            foreach ($row as $colIndex => $value) {
                $sheet->setCellValue(\PhpOffice\PhpSpreadsheet\Cell\Coordinate::stringFromColumnIndex($colIndex + 1) . ($rowIndex + 1), $value);
            }
        }
        
        $sheet->getStyle('A1:B1')->getFont()->setBold(true);
        $sheet->getStyle('A1:B1')->getFill()->setFillType(Fill::FILL_SOLID)->getStartColor()->setRGB('0463f1');
        $sheet->getStyle('A1:B1')->getFont()->getColor()->setRGB('FFFFFF');
        
        foreach (range('A', 'B') as $col) {
            $sheet->getColumnDimension($col)->setAutoSize(true);
        }
        
        $writer = new Xlsx($spreadsheet);
        $writer->save($dir . '/company_info.xlsx');
    }
    
    private function exportPurchaseData(string $tempDir, HmaService $company, AnalysisRequest $analysis): void
    {
        $dir = $tempDir . '/02_ACHATS';
        if (!is_dir($dir)) mkdir($dir, 0777, true);
        
        $purchases = $this->purchaseRepository->findByCompanyAndPeriod(
            $company,
            $analysis->getPeriodStart(),
            $analysis->getPeriodEnd()
        );
        
        $this->exportToExcel($dir . '/purchase_orders.xlsx', [
            'N° Commande' => fn($p) => $p->getPurchaseNumber(),
            'Date' => fn($p) => $p->getCreatedAt()->format('d/m/Y H:i'),
            'Fournisseur' => fn($p) => $p->getSupplier()?->getName() ?? '—',
            'Total' => fn($p) => number_format((float)$p->getTotalAmount(), 0, ',', ' ') . ' FCFA',
            'Statut' => fn($p) => $p->getStatusLabel(),
        ], $purchases);
        
        $creditNotes = $this->supplierCreditNoteRepository->findByCompanyAndPeriod(
            $company,
            $analysis->getPeriodStart(),
            $analysis->getPeriodEnd()
        );
        
        $this->exportToExcel($dir . '/supplier_credit_notes.xlsx', [
            'N° Avoir' => fn($c) => $c->getCreditNoteNumber(),
            'Date' => fn($c) => $c->getReportedAt()->format('d/m/Y H:i'),
            'Fournisseur' => fn($c) => $c->getSupplier()->getName(),
            'Montant' => fn($c) => number_format((float)$c->getDeclaredAmount(), 0, ',', ' ') . ' FCFA',
            'Motif' => fn($c) => $c->getIssueTypeLabel(),
            'Statut' => fn($c) => $c->getStatusLabel(),
        ], $creditNotes);
        
        $suppliers = $this->supplierRepository->findBy(['hma_service' => $company, 'is_active' => true]);
        
        $this->exportToExcel($dir . '/suppliers.xlsx', [
            'Nom' => fn($s) => $s->getName(),
            'Email' => fn($s) => $s->getEmail(),
            'Téléphone' => fn($s) => $s->getPhone(),
            'Adresse' => fn($s) => $s->getAdress(),
            'Contact' => fn($s) => $s->getContactPerson(),
        ], $suppliers);
    }
    
    private function exportSalesData(string $tempDir, HmaService $company, AnalysisRequest $analysis): void
    {
        $dir = $tempDir . '/03_VENTES';
        if (!is_dir($dir)) mkdir($dir, 0777, true);
        
        $orders = $this->orderRepository->findByCompanyAndPeriod(
            $company,
            $analysis->getPeriodStart(),
            $analysis->getPeriodEnd()
        );
        
        $this->exportToExcel($dir . '/orders.xlsx', [
            'N° Commande' => fn($o) => $o->getOrderNumber(),
            'Date' => fn($o) => $o->getCreatedAt()->format('d/m/Y H:i'),
            'Client' => fn($o) => $o->getCustomerName(),
            'Téléphone' => fn($o) => $o->getCustomerPhone(),
            'Total HT' => fn($o) => $o->getSubtotalFormatted(),
            'Remise' => fn($o) => $o->getDiscountTotalFormatted(),
            'Total TTC' => fn($o) => number_format((float)$o->getTotalAmount(), 0, ',', ' ') . ' FCFA',
            'Paiement' => fn($o) => ucfirst(str_replace('_', ' ', $o->getPaymentMethod())),
            'Caissier' => fn($o) => $o->getUser()->getFullName() ?? $o->getUser()->getEmail(),
            'Promotions' => fn($o) => $this->getAppliedPromotions($o),
        ], $orders);
        
        $this->exportOrderItems($dir, $company, $analysis);
        
        $returns = $this->returnOrderRepository->findByCompanyAndPeriod(
            $company,
            $analysis->getPeriodStart(),
            $analysis->getPeriodEnd()
        );
        
        $this->exportToExcel($dir . '/returns.xlsx', [
            'N° Retour' => fn($r) => $r->getReturnNumber(),
            'Date' => fn($r) => $r->getReturnDate()->format('d/m/Y H:i'),
            'Commande' => fn($r) => $r->getOrderNumber(),
            'Client' => fn($r) => $r->getCustomerName(),
            'Motif' => fn($r) => $r->getReasonNotes(),
            'Montant remboursé' => fn($r) => number_format((float)$r->getTotalRefundAmount(), 0, ',', ' ') . ' FCFA',
            'Statut' => fn($r) => $r->getStatusLabel(),
        ], $returns);
    }
    
    private function exportOrderItems(string $dir, HmaService $company, AnalysisRequest $analysis): void
    {
        $orderItems = $this->entityManager
            ->getRepository(\App\Entity\OrderItem::class)
            ->createQueryBuilder('oi')
            ->leftJoin('oi.vente', 'o')
            ->leftJoin('oi.recipe', 'r')
            ->where('o.hma_service = :company')
            ->andWhere('o.created_at BETWEEN :start AND :end')
            ->setParameter('company', $company)
            ->setParameter('start', $analysis->getPeriodStart())
            ->setParameter('end', $analysis->getPeriodEnd())
            ->getQuery()
            ->getResult();
        
        if (empty($orderItems)) {
            $this->exportToExcel($dir . '/order_items.xlsx', [
                'N° Commande' => fn() => '',
                'Date' => fn() => '',
                'Type' => fn() => '',
                'Produit/Plat' => fn() => '',
                'Quantité' => fn() => '',
                'Prix unitaire' => fn() => '',
                'Remise' => fn() => '',
                'Total' => fn() => '',
                'Promotion' => fn() => '',
            ], []);
            return;
        }
        
        $this->exportToExcel($dir . '/order_items.xlsx', [
            'N° Commande' => fn($oi) => $oi->getVente()->getOrderNumber(),
            'Date' => fn($oi) => $oi->getVente()->getCreatedAt()->format('d/m/Y H:i'),
            'Type' => fn($oi) => $oi->getRecipe() ? 'Plat' : 'Produit',
            'Produit/Plat' => fn($oi) => $oi->getProductName() ?? ($oi->getRecipe()?->getName() ?? '—'),
            'Quantité' => fn($oi) => $oi->getQuantity(),
            'Prix unitaire' => fn($oi) => number_format((float)$oi->getUnitPrice(), 0, ',', ' ') . ' FCFA',
            'Remise' => fn($oi) => number_format($oi->getDiscountAmountValue() ?? 0, 0, ',', ' ') . ' FCFA',
            'Total' => fn($oi) => number_format((float)$oi->getTotalPrice(), 0, ',', ' ') . ' FCFA',
            'Promotion' => fn($oi) => $oi->getPromotionName() ?? '—',
        ], $orderItems);
    }
    
    private function exportStockData(string $tempDir, HmaService $company, AnalysisRequest $analysis): void
    {
        $dir = $tempDir . '/04_STOCK';
        if (!is_dir($dir)) mkdir($dir, 0777, true);
        
        $batches = $this->stockBatchRepository->findBy(['hma_service' => $company, 'is_active' => true]);
        
        $this->exportToExcel($dir . '/current_stock.xlsx', [
            'Produit' => fn($b) => $b->getProduct()->getName(),
            'N° Lot' => fn($b) => $b->getBatchNumber(),
            'Quantité' => fn($b) => $b->getCurrentQuantity(),
            'Prix unitaire' => fn($b) => number_format((float)$b->getUnitPrice(), 0, ',', ' ') . ' FCFA',
            'Valeur' => fn($b) => number_format($b->getCurrentQuantity() * (float)$b->getUnitPrice(), 0, ',', ' ') . ' FCFA',
            'Emplacement' => fn($b) => $b->getLocationDisplay(),
            'Expiration' => fn($b) => $b->getExpiryDate()?->format('d/m/Y') ?? '—',
        ], $batches);
        
        $movements = $this->stockMovementRepository->findByCompanyAndPeriod(
            $company,
            $analysis->getPeriodStart(),
            $analysis->getPeriodEnd()
        );
        
        $this->exportToExcel($dir . '/stock_movements.xlsx', [
            'Date' => fn($m) => $m->getCreatedAt()->format('d/m/Y H:i:s'),
            'Type' => fn($m) => $m->getMovementTypeLabel(),
            'Produit' => fn($m) => $m->getProduct()?->getName() ?? '—',
            'Lot' => fn($m) => $m->getStockBatch()?->getBatchNumber() ?? '—',
            'Quantité' => fn($m) => ($m->getMovementType() === 'purchase_in' ? '+' : '-') . $m->getQuantity(),
            'Notes' => fn($m) => $m->getNotes() ?? '—',
        ], $movements);
    }
    
    private function exportCatalogData(string $tempDir, HmaService $company): void
    {
        $dir = $tempDir . '/05_PRODUITS';
        if (!is_dir($dir)) mkdir($dir, 0777, true);
        
        $products = $this->productRepository->findBy(['hma_service' => $company, 'is_active' => true]);
        
        $this->exportToExcel($dir . '/products.xlsx', [
            'Nom' => fn($p) => $p->getName(),
            'Code-barres' => fn($p) => $p->getBarcode() ?? '—',
            'Catégorie' => fn($p) => $p->getCategory()?->getName() ?? '—',
            'Prix d\'achat' => fn($p) => number_format((float)$p->getPurchasePrice(), 0, ',', ' ') . ' FCFA',
            'Prix de vente' => fn($p) => number_format((float)$p->getSalePrice(), 0, ',', ' ') . ' FCFA',
            'Stock' => fn($p) => $p->getCurrentStock(),
            'Unité' => fn($p) => $p->getUnit() ?? 'pièce',
            'Stock min' => fn($p) => $p->getMinQuantity() ?? '—',
        ], $products);
        
        $categories = $this->categoryRepository->findBy(['hma_service' => $company, 'is_active' => true]);
        
        $this->exportToExcel($dir . '/categories.xlsx', [
            'Nom' => fn($c) => $c->getName(),
            'Slug' => fn($c) => $c->getSlug(),
            'Description' => fn($c) => $c->getDescription() ?? '—',
            'Parent' => fn($c) => $c->getParent()?->getName() ?? '—',
            'Actif' => fn($c) => $c->isActive() ? 'Oui' : 'Non',
        ], $categories);
        
        if ($company->getType() === 'restaurant') {
            $recipes = $this->recipeRepository->findBy(['hma_service' => $company, 'is_active' => true]);
            
            $this->exportToExcel($dir . '/recipes.xlsx', [
                'Nom du plat' => fn($r) => $r->getName(),
                'Description' => fn($r) => $r->getDescription() ?? '—',
                'Instructions' => fn($r) => $r->getInstructions() ?? '—',
                'Prix de vente' => fn($r) => number_format((float)$r->getSellingPrice(), 0, ',', ' ') . ' FCFA',
                'Catégorie menu' => fn($r) => $r->getCategory()?->getName() ?? '—',
                'Type' => fn($r) => $r->getType() === 'food' ? 'Nourriture' : 'Boisson',
                'Actif' => fn($r) => $r->isActive() ? 'Oui' : 'Non',
            ], $recipes);
            
            $this->exportRecipeItems($dir, $company);
            
            $menuCategories = $this->entityManager
                ->getRepository(\App\Entity\CategoryRecipe::class)
                ->findBy(['hma_service' => $company, 'is_active' => true]);
            
            $this->exportToExcel($dir . '/menu_categories.xlsx', [
                'Nom' => fn($c) => $c->getName(),
                'Description' => fn($c) => $c->getDescription() ?? '—',
                'Niveau' => fn($c) => $c->getHierarchyLevel(),
                'Chemin complet' => fn($c) => $c->getFullPath(),
                'Nb recettes' => fn($c) => $c->getTotalRecipesCount(),
                'Actif' => fn($c) => $c->isActive() ? 'Oui' : 'Non',
            ], $menuCategories);
        }
        
        $this->exportPromotionsData($dir, $company);
    }
    
    private function exportRecipeItems(string $dir, HmaService $company): void
    {
        $recipeItems = $this->entityManager
            ->getRepository(\App\Entity\RecipeItem::class)
            ->createQueryBuilder('ri')
            ->leftJoin('ri.recipe', 'r')
            ->leftJoin('ri.product', 'p')
            ->where('r.hma_service = :company')
            ->setParameter('company', $company)
            ->getQuery()
            ->getResult();
        
        if (empty($recipeItems)) {
            $this->exportToExcel($dir . '/recipe_composition.xlsx', [
                'Recette' => fn() => '',
                'Ingrédient' => fn() => '',
                'Quantité' => fn() => '',
                'Unité' => fn() => '',
                'Coût unitaire' => fn() => '',
                'Coût total' => fn() => '',
            ], []);
            return;
        }
        
        $this->exportToExcel($dir . '/recipe_composition.xlsx', [
            'Recette/Plat' => fn($ri) => $ri->getRecipe()->getName(),
            'Ingrédient' => fn($ri) => $ri->getProduct()->getName(),
            'Quantité' => fn($ri) => $ri->getQuantity(),
            'Unité' => fn($ri) => $ri->getUnit() ?? 'pièce',
            'Coût unitaire' => fn($ri) => number_format((float)$ri->getProduct()->getPurchasePrice(), 0, ',', ' ') . ' FCFA',
            'Coût total' => fn($ri) => number_format($ri->getQuantity() * (float)$ri->getProduct()->getPurchasePrice(), 0, ',', ' ') . ' FCFA',
        ], $recipeItems);
    }
    
    private function exportPromotionsData(string $dir, HmaService $company): void
    {
        $promotions = $this->entityManager
            ->getRepository(\App\Entity\Promotion::class)
            ->findBy(['hma_service' => $company]);
        
        if (empty($promotions)) {
            $this->exportToExcel($dir . '/promotions.xlsx', [
                'Nom' => fn() => '',
                'Type' => fn() => '',
                'Valeur' => fn() => '',
                'Début' => fn() => '',
                'Fin' => fn() => '',
                'Statut' => fn() => '',
            ], []);
            return;
        }
        
        $this->exportToExcel($dir . '/promotions.xlsx', [
            'Nom' => fn($p) => $p->getName(),
            'Description' => fn($p) => $p->getDescription() ?? '—',
            'Type de réduction' => fn($p) => $p->getTypePromotion()?->getName() ?? '—',
            'Valeur' => fn($p) => $this->formatPromotionValue($p),
            'Date début' => fn($p) => $p->getStartDate()->format('d/m/Y'),
            'Date fin' => fn($p) => $p->getEndDate()?->format('d/m/Y') ?? 'Illimitée',
            'Active' => fn($p) => $p->isActive() ? 'Oui' : 'Non',
            'Statut actuel' => fn($p) => $this->getPromotionStatus($p),
        ], $promotions);
        
        $promoProducts = $this->entityManager
            ->getRepository(\App\Entity\PromotionProduct::class)
            ->createQueryBuilder('pp')
            ->leftJoin('pp.promotion', 'p')
            ->leftJoin('pp.product', 'prod')
            ->where('p.hma_service = :company')
            ->setParameter('company', $company)
            ->getQuery()
            ->getResult();
        
        if (!empty($promoProducts)) {
            $this->exportToExcel($dir . '/promotion_products.xlsx', [
                'Promotion' => fn($pp) => $pp->getPromotion()->getName(),
                'Produit' => fn($pp) => $pp->getProduct()->getName(),
                'Prix original' => fn($pp) => number_format((float)$pp->getProduct()->getSalePrice(), 0, ',', ' ') . ' FCFA',
            ], $promoProducts);
        }
        
        $promoCategories = $this->entityManager
            ->getRepository(\App\Entity\PromotionCategory::class)
            ->createQueryBuilder('pc')
            ->leftJoin('pc.promotion', 'p')
            ->leftJoin('pc.category', 'c')
            ->where('p.hma_service = :company')
            ->setParameter('company', $company)
            ->getQuery()
            ->getResult();
        
        if (!empty($promoCategories)) {
            $this->exportToExcel($dir . '/promotion_categories.xlsx', [
                'Promotion' => fn($pc) => $pc->getPromotion()->getName(),
                'Catégorie' => fn($pc) => $pc->getCategory()->getName(),
            ], $promoCategories);
        }
        
        if ($company->getType() === 'restaurant') {
            $promoMenuCategories = $this->entityManager
                ->getRepository(\App\Entity\PromotionCategoryRecipe::class)
                ->createQueryBuilder('pcr')
                ->leftJoin('pcr.promotion', 'p')
                ->leftJoin('pcr.categoryRecipe', 'cr')
                ->where('p.hma_service = :company')
                ->setParameter('company', $company)
                ->getQuery()
                ->getResult();
            
            if (!empty($promoMenuCategories)) {
                $this->exportToExcel($dir . '/promotion_menu_categories.xlsx', [
                    'Promotion' => fn($pcr) => $pcr->getPromotion()->getName(),
                    'Catégorie menu' => fn($pcr) => $pcr->getCategoryRecipe()->getName(),
                ], $promoMenuCategories);
            }
            
            $promoRecipes = $this->entityManager
                ->getRepository(\App\Entity\PromotionRecipe::class)
                ->createQueryBuilder('pr')
                ->leftJoin('pr.promotion', 'p')
                ->leftJoin('pr.recipe', 'r')
                ->where('p.hma_service = :company')
                ->setParameter('company', $company)
                ->getQuery()
                ->getResult();
            
            if (!empty($promoRecipes)) {
                $this->exportToExcel($dir . '/promotion_recipes.xlsx', [
                    'Promotion' => fn($pr) => $pr->getPromotion()->getName(),
                    'Plat' => fn($pr) => $pr->getRecipe()->getName(),
                    'Prix original' => fn($pr) => number_format((float)$pr->getRecipe()->getSellingPrice(), 0, ',', ' ') . ' FCFA',
                ], $promoRecipes);
            }
        }
    }
    
    private function exportUsersData(string $tempDir, HmaService $company): void
    {
        $dir = $tempDir . '/06_UTILISATEURS';
        if (!is_dir($dir)) mkdir($dir, 0777, true);
        
        $users = $this->userRepository->findBy(['hma_service_id' => $company, 'is_active' => true]);
        
        $this->exportToExcel($dir . '/users.xlsx', [
            'Nom' => fn($u) => $u->getFullName(),
            'Email' => fn($u) => $u->getEmail(),
            'Téléphone' => fn($u) => $u->getPhone(),
            'Rôle' => fn($u) => $u->getRoleLabel(),
            'Date d\'embauche' => fn($u) => $u->getEmploymentDate()?->format('d/m/Y') ?? '—',
            'Statut' => fn($u) => $u->isActive() ? 'Actif' : 'Inactif',
        ], $users);
    }
    
    private function exportToExcel(string $filepath, array $columns, array $data): void
    {
        $spreadsheet = new Spreadsheet();
        $sheet = $spreadsheet->getActiveSheet();
        
        $col = 'A';
        foreach (array_keys($columns) as $header) {
            $sheet->setCellValue($col . '1', $header);
            $sheet->getStyle($col . '1')->getFont()->setBold(true);
            $sheet->getStyle($col . '1')->getFill()->setFillType(Fill::FILL_SOLID)->getStartColor()->setRGB('0463f1');
            $sheet->getStyle($col . '1')->getFont()->getColor()->setRGB('FFFFFF');
            $col++;
        }
        
        if (!empty($data)) {
            $row = 2;
            foreach ($data as $item) {
                $col = 'A';
                foreach ($columns as $callback) {
                    $value = $callback($item);
                    $sheet->setCellValue($col . $row, $value);
                    $col++;
                }
                $row++;
            }
        }
        
        $lastColumn = chr(ord('A') + count($columns) - 1);
        foreach (range('A', $lastColumn) as $col) {
            $sheet->getColumnDimension($col)->setAutoSize(true);
        }
        
        $writer = new Xlsx($spreadsheet);
        $writer->save($filepath);
    }
    
    private function getAppliedPromotions(\App\Entity\Order $order): string
    {
        $promotions = [];
        foreach ($order->getOrderItems() as $item) {
            $promoName = $item->getPromotionName();
            if ($promoName && !in_array($promoName, $promotions)) {
                $promotions[] = $promoName;
            }
        }
        return empty($promotions) ? '—' : implode(', ', $promotions);
    }
    
    private function formatPromotionValue(\App\Entity\Promotion $promotion): string
    {
        $type = $promotion->getTypePromotion();
        $value = $promotion->getValue();
        
        if (!$type) return $value . ' FCFA';
        
        $typeName = strtolower(trim($type->getName()));
        
        if (in_array($typeName, ['pourcentage', 'percentage', '%'])) {
            return $value . '%';
        }
        
        return number_format((float)$value, 0, ',', ' ') . ' FCFA';
    }
    
    private function getPromotionStatus(\App\Entity\Promotion $promotion): string
    {
        $now = new \DateTime();
        
        if (!$promotion->isActive()) return '❌ Désactivée';
        if ($promotion->getStartDate() > $now) return '⏳ À venir';
        if ($promotion->getEndDate() && $promotion->getEndDate() < $now) return '📅 Terminée';
        return '✅ Active';
    }
    
    private function sanitizeFolderName(string $name): string
    {
        $name = strtoupper($name);
        $name = preg_replace('/[^A-Z0-9]/', '_', $name);
        $name = preg_replace('/_+/', '_', $name);
        return trim($name, '_');
    }
    
    private function addFilesToZip(string $dir, ZipArchive $zip, string $subDir = ''): void
    {
        $files = scandir($dir);
        foreach ($files as $file) {
            if ($file === '.' || $file === '..') continue;
            
            $fullPath = $dir . '/' . $file;
            $zipPath = $subDir . '/' . $file;
            
            if (is_dir($fullPath)) {
                $zip->addEmptyDir($zipPath);
                $this->addFilesToZip($fullPath, $zip, $zipPath);
            } else {
                $zip->addFile($fullPath, $zipPath);
            }
        }
    }
    
    private function deleteDirectory(string $dir): void
    {
        if (!is_dir($dir)) return;
        
        $files = scandir($dir);
        foreach ($files as $file) {
            if ($file === '.' || $file === '..') continue;
            
            $fullPath = $dir . '/' . $file;
            if (is_dir($fullPath)) {
                $this->deleteDirectory($fullPath);
            } else {
                unlink($fullPath);
            }
        }
        rmdir($dir);
    }
}