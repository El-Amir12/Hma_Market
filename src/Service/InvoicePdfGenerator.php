<?php
// src/Service/InvoicePdfGenerator.php

namespace App\Service;

use App\Entity\Invoice;
use App\Entity\Purchase;
use App\Entity\StockBatch;
use App\Entity\SupplierCreditNote;
use Doctrine\ORM\EntityManagerInterface;
use Dompdf\Dompdf;
use Dompdf\Options;
use Psr\Log\LoggerInterface;
use Twig\Environment;

class InvoicePdfGenerator
{
    private Environment $twig;
    private string $pdfDirectory;
    private string $bonCommandeDirectory;
    private string $recuAchatDirectory;
    private LoggerInterface $logger;
    private EntityManagerInterface $entityManager;  // 🔥 AJOUT

    public function __construct(
        Environment $twig,
        string $pdfDirectory,
        string $bonCommandeDirectory,
        string $recuAchatDirectory,
        LoggerInterface $logger,
        EntityManagerInterface $entityManager  // 🔥 AJOUT
    ) {
        $this->twig = $twig;
        $this->pdfDirectory = $pdfDirectory;
        $this->bonCommandeDirectory = $bonCommandeDirectory;
        $this->recuAchatDirectory = $recuAchatDirectory;
        $this->logger = $logger;
        $this->entityManager = $entityManager;  // 🔥 AJOUT
    }

    public function generate(Invoice $invoice): string
    {
        // Chemin absolu du logo (stocké dans public/uploads/logos/)
        $logoPath = null;
        if ($invoice->getHmaService()->getLogo()) {
            $logoPath = dirname($this->pdfDirectory) . '/logos/' . $invoice->getHmaService()->getLogo();
        }

        $html = $this->twig->render('invoice/pdf.html.twig', [
            'invoice' => $invoice,
            'logo_absolute_path' => $logoPath,
        ]);

        $options = new Options();
        $options->set('defaultFont', 'DejaVu Sans');
        $options->set('isRemoteEnabled', true);
        $options->set('isHtml5ParserEnabled', true);

        $dompdf = new Dompdf($options);
        $dompdf->loadHtml($html);
        $dompdf->setPaper('A4');
        $dompdf->render();

        if (!is_dir($this->pdfDirectory)) {
            mkdir($this->pdfDirectory, 0777, true);
        }

        $filename = 'facture_' . $invoice->getInvoiceNumber() . '.pdf';
        $filePath = $this->pdfDirectory . '/' . $filename;
        file_put_contents($filePath, $dompdf->output());

        return $filePath;
    }

    /**
     * Génère un bon de commande au format PDF
     */
    public function generatePurchaseOrder(Purchase $purchase): ?string
    {
        try {
            $html = $this->twig->render('pdf/bon_commande.html.twig', [
                'purchase' => $purchase,
            ]);
            $filename = 'bon_commande_' . $purchase->getPurchaseNumber() . '.pdf';
            $filepath = $this->bonCommandeDirectory . '/' . $filename;

            if (!is_dir($this->bonCommandeDirectory)) {
                mkdir($this->bonCommandeDirectory, 0777, true);
            }

            $options = new Options();
            $options->set('defaultFont', 'DejaVu Sans');
            $options->set('isRemoteEnabled', true);
            $options->set('isHtml5ParserEnabled', true);

            $dompdf = new Dompdf($options);
            $dompdf->loadHtml($html);
            $dompdf->setPaper('A4', 'portrait');
            $dompdf->render();
            file_put_contents($filepath, $dompdf->output());

            return $filename;
        } catch (\Exception $e) {
            $this->logger->error('Erreur génération bon de commande', [
                'purchase_id' => $purchase->getId(),
                'error' => $e->getMessage(),
            ]);
            return null;
        }
    }

    /**
     * Génère un reçu d'achat au format PDF
     */
    public function generatePurchaseReceipt(Purchase $purchase): ?string
    {
        try {
            // Récupérer tous les lots associés à cette commande
            $stockBatches = [];
            foreach ($purchase->getPurchaseItems() as $item) {
                $batch = $this->entityManager->getRepository(StockBatch::class)
                    ->findOneBy(['purchaseItemId' => $item->getId()]);
                if ($batch) {
                    $stockBatches[$item->getId()] = $batch;
                }
            }
            
            // Récupérer les avoirs associés
            $supplierCreditNotes = $this->entityManager->getRepository(SupplierCreditNote::class)
                ->findBy(['purchase' => $purchase]);
            
            $html = $this->twig->render('pdf/recu_achat.html.twig', [
                'purchase' => $purchase,
                'stock_batches' => $stockBatches,
                'supplier_credit_notes' => $supplierCreditNotes,
            ]);
            
            $filename = 'recu_achat_' . $purchase->getPurchaseNumber() . '.pdf';
            $filepath = $this->recuAchatDirectory . '/' . $filename;

            if (!is_dir($this->recuAchatDirectory)) {
                mkdir($this->recuAchatDirectory, 0777, true);
            }

            $options = new Options();
            $options->set('defaultFont', 'DejaVu Sans');
            $options->set('isRemoteEnabled', true);
            $options->set('isHtml5ParserEnabled', true);

            $dompdf = new Dompdf($options);
            $dompdf->loadHtml($html);
            $dompdf->setPaper('A4', 'portrait');
            $dompdf->render();
            file_put_contents($filepath, $dompdf->output());

            $this->logger->info('Reçu généré avec succès', [
                'purchase_id' => $purchase->getId(),
                'filename' => $filename,
                'stock_batches_count' => count($stockBatches)
            ]);

            return $filename;
        } catch (\Exception $e) {
            $this->logger->error('Erreur génération reçu d\'achat', [
                'purchase_id' => $purchase->getId(),
                'error' => $e->getMessage(),
                'trace' => $e->getTraceAsString()
            ]);
            return null;
        }
    }
}