<?php
// src/Service/InvoicePdfGenerator.php

// src/Service/InvoicePdfGenerator.php

namespace App\Service;

use App\Entity\Invoice;
use Dompdf\Dompdf;
use Dompdf\Options;
use Twig\Environment;

class InvoicePdfGenerator
{
    private Environment $twig;
    private string $pdfDirectory;

    public function __construct(Environment $twig, string $pdfDirectory)
    {
        $this->twig = $twig;
        $this->pdfDirectory = $pdfDirectory;
    }

    public function generate(Invoice $invoice): string
    {
        // Chemin absolu du logo (stocké dans public/uploads/logos/)
        $logoPath = null;
        if ($invoice->getHmaService()->getLogo()) {
            // On remonte d'un niveau depuis le dossier des factures pour trouver 'logos'
            $logoPath = dirname($this->pdfDirectory) . '/logos/' . $invoice->getHmaService()->getLogo();
        }

        // Rendu HTML du template
        $html = $this->twig->render('invoice/pdf.html.twig', [
            'invoice' => $invoice,
            'logo_absolute_path' => $logoPath,
        ]);

        // Configuration de Dompdf
        $options = new Options();
        $options->set('defaultFont', 'DejaVu Sans');
        $options->set('isRemoteEnabled', true);
        $options->set('isHtml5ParserEnabled', true);

        $dompdf = new Dompdf($options);
        $dompdf->loadHtml($html);
        $dompdf->setPaper('A4');
        $dompdf->render();

        // Création du répertoire s'il n'existe pas
        if (!is_dir($this->pdfDirectory)) {
            mkdir($this->pdfDirectory, 0777, true);
        }

        // Sauvegarde du fichier PDF
        $filename = 'facture_' . $invoice->getInvoiceNumber() . '.pdf';
        $filePath = $this->pdfDirectory . '/' . $filename;
        file_put_contents($filePath, $dompdf->output());

        return $filePath;
    }
}