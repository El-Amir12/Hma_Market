<?php
// src/Service/Sale/ReceiptGenerator.php

namespace App\Service\Sale;

use App\Entity\Order;
use Dompdf\Dompdf;
use Dompdf\Options;
use Psr\Log\LoggerInterface;
use Twig\Environment;

class ReceiptGenerator
{
    public function __construct(
        private Environment $twig,
        private Dompdf $dompdf,
        private LoggerInterface $logger,
        private string $receiptsDirectory
    ) {
    }
    
    /**
     * Génère le reçu PDF d'une vente
     */
    public function generateReceipt(Order $order): ?string
    {
        try {
            // Configurer Dompdf
            $options = new Options();
            $options->set('defaultFont', 'Courier');
            $options->set('isHtml5ParserEnabled', true);
            $options->set('isRemoteEnabled', true);
            $this->dompdf->setOptions($options);
            
            // Générer le HTML
            $html = $this->twig->render('sale/pdf/receipt.html.twig', [
                'order' => $order,
                'company' => $order->getHmaService()
            ]);
            
            // Charger le HTML
            $this->dompdf->loadHtml($html);
            $this->dompdf->setPaper('A4', 'portrait');
            $this->dompdf->render();
            
            // Sauvegarder le PDF
            $filename = sprintf('recu_%s_%s.pdf', 
                $order->getOrderNumber(),
                (new \DateTime())->format('Ymd_His')
            );
            
            $filePath = $this->receiptsDirectory . '/' . $filename;
            file_put_contents($filePath, $this->dompdf->output());
            
            return $filename;
            
        } catch (\Exception $e) {
            $this->logger->error('Erreur génération reçu', [
                'order_id' => $order->getId(),
                'error' => $e->getMessage()
            ]);
            return null;
        }
    }
}