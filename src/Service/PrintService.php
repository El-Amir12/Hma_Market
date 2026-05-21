<?php
// src/Service/PrintService.php

namespace App\Service;

use App\Entity\Order;
use App\Entity\HmaService;
use App\Entity\OrderItem;
use Twig\Environment;
use Dompdf\Dompdf;
use Dompdf\Options;
use Psr\Log\LoggerInterface;

class PrintService
{
    public const TICKET_TYPE_KITCHEN = 'kitchen';
    public const TICKET_TYPE_CUSTOMER = 'customer';
    public const TICKET_TYPE_CASH = 'cash';
    public const TICKET_TYPE_DELIVERY = 'delivery';
    
    // 🔥 Conversion mm en points (1mm = 2.83465 points)
    private const MM_TO_POINTS = 2.83465;
    
    public function __construct(
        private Environment $twig,
        private LoggerInterface $logger
    ) {
    }
    
    /**
     * Génère le HTML pour un ticket
     */
    public function generateTicketHtml(Order $order, HmaService $company, string $type, array $options = []): string
    {
        $template = match($type) {
            self::TICKET_TYPE_KITCHEN => 'print/kitchen_ticket.html.twig',
            self::TICKET_TYPE_CUSTOMER => 'print/customer_ticket.html.twig',
            self::TICKET_TYPE_CASH => 'print/cash_ticket.html.twig',
            self::TICKET_TYPE_DELIVERY => 'print/delivery_ticket.html.twig',
            default => 'print/customer_ticket.html.twig',
        };
        
        // Regrouper les articles par type pour le ticket cuisine
        $kitchenItems = [];
        if ($type === self::TICKET_TYPE_KITCHEN) {
            foreach ($order->getOrderItems() as $item) {
                $isDrink = $this->isDrinkItem($item);
                if (!$options['include_drinks'] ?? true) {
                    if (!$isDrink) {
                        $kitchenItems[] = $item;
                    }
                } else {
                    $kitchenItems[] = $item;
                }
            }
        }
        
        return $this->twig->render($template, [
            'order' => $order,
            'company' => $company,
            'items' => $type === self::TICKET_TYPE_KITCHEN ? $kitchenItems : $order->getOrderItems(),
            'print_date' => new \DateTime(),
            'options' => $options,
            'ticket_type' => $type,
        ]);
    }
    
    /**
     * Génère un PDF du ticket avec hauteur adaptée au contenu
     */
    public function generatePdf(string $html, string $format = '80mm'): string
    {
        $options = new Options();
        $options->set('defaultFont', 'Courier');
        $options->set('isHtml5ParserEnabled', true);
        $options->set('isRemoteEnabled', true);
        $options->set('isPhpEnabled', false);
        $options->set('isFontSubsettingEnabled', true);
        
        // Largeur en points (fixe selon le format)
        $widthPoints = match($format) {
            '58mm' => 58 * self::MM_TO_POINTS,  // ~164.41 points
            '80mm' => 80 * self::MM_TO_POINTS,  // ~226.77 points
            'A4' => 595,  // A4 en points
            default => 80 * self::MM_TO_POINTS,
        };
        
        // 🔥 Calculer la hauteur approximative basée sur le contenu HTML
        $contentHeight = $this->estimateContentHeight($html, $widthPoints);
        
        // Ajouter une petite marge de sécurité
        $totalHeight = $contentHeight + 20; // 20 points de marge
        
        $this->logger->info('Génération PDF ticket', [
            'format' => $format,
            'width_points' => round($widthPoints, 2),
            'content_height_points' => round($contentHeight, 2),
            'total_height_points' => round($totalHeight, 2)
        ]);
        
        $paperSize = $format === 'A4' ? 'A4' : [0, 0, $widthPoints, $totalHeight];
        
        $dompdf = new Dompdf($options);
        $dompdf->loadHtml($html);
        
        if (is_array($paperSize)) {
            $dompdf->setPaper($paperSize, 'portrait');
        } else {
            $dompdf->setPaper($paperSize, 'portrait');
        }
        
        $dompdf->render();
        
        return $dompdf->output();
    }
    
    /**
     * Estime la hauteur du contenu HTML en points
     */
    private function estimateContentHeight(string $html, float $widthPoints): float
    {
        // Compter les lignes approximatives dans le HTML
        $lineCount = 0;
        
        // Compter les balises <br> et <div>
        $lineCount += substr_count($html, '<br') + substr_count($html, '<br/>') + substr_count($html, '<br />');
        
        // Compter les lignes dans les tableaux (<tr>)
        $lineCount += substr_count($html, '<tr>');
        
        // Compter les lignes dans les paragraphes et divs
        $lineCount += substr_count($html, '</p>') + substr_count($html, '</div>');
        
        // Compter les îtems dans les listes
        $lineCount += substr_count($html, '<li>');
        
        // Lignes d'en-tête et séparateurs
        $lineCount += substr_count($html, '<hr');
        $lineCount += substr_count($html, 'class="divider"');
        
        // Estimation: chaque ligne fait environ 12 points (environ 4.2mm)
        // Ajouter les marges et paddings
        $estimatedHeight = max(100, $lineCount * 12) + 50;
        
        // Limiter la hauteur maximale (éviter les pages trop grandes)
        return min($estimatedHeight, 800); // Max 800 points (~282mm)
    }
    
    /**
     * Vérifie si un article est une boisson
     */
    private function isDrinkItem(OrderItem $item): bool
    {
        $drinkKeywords = ['coca', 'fanta', 'sprite', 'pepsi', 'schweppes', 'eau', 'jus', 'orangina', 'ice tea', 'bière', 'vin', 'whisky', 'cocktail', 'mojito', 'punch', 'limonade', 'citronnade'];
        $name = strtolower($item->getProductName());
        
        foreach ($drinkKeywords as $keyword) {
            if (strpos($name, $keyword) !== false) {
                return true;
            }
        }
        
        // Vérifier si c'est une recette typée boisson
        $recipe = $item->getRecipe();
        if ($recipe && method_exists($recipe, 'getType') && $recipe->getType() === 'drink') {
            return true;
        }
        
        return false;
    }
    
    /**
     * Génère un nom de fichier unique pour le PDF
     */
    public function generateFileName(Order $order, string $type): string
    {
        $date = (new \DateTime())->format('Y-m-d_H-i-s');
        return sprintf('ticket_%s_%s_%s.pdf', $order->getOrderNumber(), $type, $date);
    }
}