<?php
// src/Service/Export/SaleExportService.php

namespace App\Service\Export;

use App\Entity\HmaService;
use App\Entity\Order;
use App\Entity\Category;
use App\Entity\OrderItem;
use App\Entity\Product;
use App\Entity\User;
use App\Repository\OrderRepository;
use Doctrine\ORM\EntityManagerInterface;
use PhpOffice\PhpSpreadsheet\Spreadsheet;
use PhpOffice\PhpSpreadsheet\Writer\Xlsx;
use PhpOffice\PhpSpreadsheet\Style\Alignment;
use PhpOffice\PhpSpreadsheet\Style\Fill;
use PhpOffice\PhpSpreadsheet\Style\Border;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\StreamedResponse;
use Symfony\Component\Security\Core\Security;
use Dompdf\Dompdf;
use Dompdf\Options;
use Twig\Environment;

class SaleExportService
{
    private string $exportDirectory;
    private Security $security;
    private Environment $twig;

    public function __construct(
        private EntityManagerInterface $entityManager,
        private OrderRepository $orderRepository,
        string $salesExportsDirectory,
        Security $security,
        Environment $twig
    ) {
        $this->exportDirectory = $salesExportsDirectory;
        $this->security = $security;
        $this->twig = $twig;
        
        if (!is_dir($this->exportDirectory)) {
            mkdir($this->exportDirectory, 0755, true);
        }
    }

    /**
     * Retourne le répertoire d'export
     */
    public function getExportDirectory(): string
    {
        return $this->exportDirectory;
    }
    
    /**
     * Exporte les ventes vers un fichier Excel multicouches pour Power BI
     */
    public function exportSalesToExcel(HmaService $hmaService, array $filters = []): Response
    {
        $spreadsheet = new Spreadsheet();
        
        // Supprimer la feuille par défaut
        $spreadsheet->removeSheetByIndex(0);
        
        // Créer les différentes feuilles
        $this->createSalesSheet($spreadsheet, $hmaService, $filters);
        $this->createProductsSheet($spreadsheet, $hmaService);
        $this->createCategoriesSheet($spreadsheet, $hmaService);
        $this->createCashiersSheet($spreadsheet, $hmaService);
        $this->createPromotionsSheet($spreadsheet, $hmaService, $filters);
        $this->createDailyStatsSheet($spreadsheet, $hmaService, $filters);
        
        // Générer le nom du fichier
        $companyName = preg_replace('/[^a-zA-Z0-9]/', '_', $hmaService->getCompanyName());
        $date = (new \DateTime())->format('Ymd_His');
        $filename = sprintf('ventes_%s_%s.xlsx', $companyName, $date);
        
        // Sauvegarder le fichier
        $filePath = $this->exportDirectory . '/' . $filename;
        $writer = new Xlsx($spreadsheet);
        $writer->save($filePath);
        
        // Retourner le fichier en téléchargement
        $response = new StreamedResponse(function() use ($filePath) {
            readfile($filePath);
        });
        
        $response->headers->set('Content-Type', 'application/vnd.openxmlformats-officedocument.spreadsheetml.sheet');
        $response->headers->set('Content-Disposition', 'attachment; filename="' . $filename . '"');
        $response->headers->set('Content-Length', filesize($filePath));
        
        return $response;
    }

    /**
     * Exporte les ventes vers un fichier PDF
     */
    public function exportSalesToPdf(HmaService $hmaService, array $filters = []): Response
    {
        // Récupérer les ventes filtrées
        $orders = $this->getFilteredOrders($hmaService, $filters);
        
        // Récupérer l'utilisateur connecté
        $user = $this->security->getUser();
        
        // Calculer les statistiques
        $stats = $this->orderRepository->getStats($hmaService, $this->getDateFromFilter($filters), $this->getDateToFilter($filters));
        
        // Récupérer les dates des filtres
        $dateFrom = $filters['date_from'] ?? null;
        $dateTo = $filters['date_to'] ?? null;
        
        // Récupérer le nom du caissier si filtré
        $cashierName = null;
        if (!empty($filters['user_id'])) {
            $cashier = $this->entityManager->getRepository(User::class)->find($filters['user_id']);
            $cashierName = $cashier ? ($cashier->getFullName() ?? $cashier->getEmail()) : null;
        }
        
        // Générer le HTML pour le PDF (similaire à la page index)
        $html = $this->generatePdfHtml($orders, $filters, $hmaService, $user, $stats, $dateFrom, $dateTo, $cashierName);
        
        $options = new Options();
        $options->set('defaultFont', 'Arial');
        $options->set('isHtml5ParserEnabled', true);
        $options->set('isRemoteEnabled', true);
        
        $dompdf = new Dompdf($options);
        $dompdf->loadHtml($html);
        $dompdf->setPaper('A4', 'portrait');
        $dompdf->render();

        $filename = sprintf('rapport_ventes_%s_%s.pdf', 
            preg_replace('/[^a-zA-Z0-9]/', '_', $hmaService->getCompanyName()),
            (new \DateTime())->format('Ymd_His')
        );

        return new Response($dompdf->output(), 200, [
            'Content-Type' => 'application/pdf',
            'Content-Disposition' => 'attachment; filename="' . $filename . '"',
        ]);
    }

    private function getDateFromFilter(array $filters): ?\DateTime
    {
        if (!empty($filters['date_from'])) {
            return new \DateTime($filters['date_from']);
        }
        if (!empty($filters['date_preset'])) {
            // Gérer les presets...
        }
        return null;
    }

    private function getDateToFilter(array $filters): ?\DateTime
    {
        if (!empty($filters['date_to'])) {
            return new \DateTime($filters['date_to']);
        }
        return null;
    }

    /**
     * Génère le HTML pour le PDF (identique à la page index sans les interactions)
     */
    private function generatePdfHtml($orders, array $filters, HmaService $hmaService, $user, array $stats, $dateFrom, $dateTo, $cashierName): string
    {
        $isRestaurant = $hmaService->getType() === 'restaurant';
        $companyType = $hmaService->getType();
        
        // Formater les valeurs des filtres
        $statusLabel = '';
        if (!empty($filters['status'])) {
            $statusLabels = ['completed' => 'Complétées', 'cancelled' => 'Annulées', 'refunded' => 'Remboursées'];
            $statusLabel = $statusLabels[$filters['status']] ?? $filters['status'];
        }
        
        $paymentMethodLabel = '';
        if (!empty($filters['payment_method'])) {
            $paymentLabels = ['cash' => 'Espèces', 'card' => 'Carte bancaire', 'mobile_money' => 'Mobile Money'];
            $paymentMethodLabel = $paymentLabels[$filters['payment_method']] ?? $filters['payment_method'];
        }
        
        $datePresetLabel = '';
        if (!empty($filters['date_preset'])) {
            $presetLabels = [
                'today' => 'Aujourd\'hui',
                'yesterday' => 'Hier',
                'last7days' => '7 derniers jours',
                'last14days' => '14 derniers jours',
                'last30days' => '30 derniers jours',
                'last3months' => '3 derniers mois',
                'last6months' => '6 derniers mois',
                'last1year' => '1 an',
                'last2years' => '2 ans',
                'last3years' => '3 ans',
                'last5years' => '5 ans',
                'last10years' => '10 ans',
            ];
            $datePresetLabel = $presetLabels[$filters['date_preset']] ?? $filters['date_preset'];
        }
        
        $html = '<!DOCTYPE html>
        <html>
        <head>
            <meta charset="UTF-8">
            <title>Rapport des ventes - ' . htmlspecialchars($hmaService->getCompanyName()) . '</title>
            <style>
                body {
                    font-family: Arial, sans-serif;
                    margin: 20px;
                    font-size: 12px;
                    color: #333;
                }
                h1 {
                    color: #0463f1;
                    text-align: center;
                    font-size: 20px;
                    margin-bottom: 20px;
                }
                h2 {
                    font-size: 16px;
                    margin-top: 20px;
                    margin-bottom: 10px;
                    color: #333;
                }
                h3 {
                    font-size: 14px;
                    margin-top: 15px;
                    margin-bottom: 8px;
                    color: #555;
                }
                .header-info {
                    margin-bottom: 20px;
                    border-bottom: 1px solid #ddd;
                    padding-bottom: 10px;
                }
                .header-info p {
                    margin: 5px 0;
                }
                .filters-section {
                    background: #f5f5f5;
                    padding: 12px;
                    margin-bottom: 20px;
                    border-radius: 8px;
                    border-left: 4px solid #0463f1;
                }
                .filters-title {
                    font-weight: bold;
                    margin-bottom: 10px;
                    color: #0463f1;
                }
                .filter-grid {
                    display: grid;
                    grid-template-columns: repeat(3, 1fr);
                    gap: 10px;
                }
                .filter-item {
                    background: white;
                    padding: 6px 10px;
                    border-radius: 4px;
                    font-size: 11px;
                }
                .filter-label {
                    font-weight: bold;
                    color: #555;
                }
                
                /* Cartes statistiques */
                .stats-grid {
                    display: grid;
                    grid-template-columns: repeat(4, 1fr);
                    gap: 15px;
                    margin-bottom: 25px;
                }
                .stats-card {
                    background: #ffffff;
                    border: 1px solid #e5e7eb;
                    border-radius: 12px;
                    padding: 12px;
                    text-align: center;
                }
                .stats-card h6 {
                    font-size: 11px;
                    text-transform: uppercase;
                    letter-spacing: 0.5px;
                    margin-bottom: 8px;
                    color: #666;
                }
                .stats-card h3 {
                    font-size: 22px;
                    font-weight: bold;
                    margin: 0;
                    color: #0463f1;
                }
                .stats-card .text-success { color: #10b981; }
                .stats-card .text-info { color: #3b82f6; }
                .stats-card .text-warning { color: #f59e0b; }
                .stats-card .text-danger { color: #ef4444; }
                .stats-card .text-secondary { color: #6c757d; }
                .stats-card .text-dark { color: #1f2937; }
                .stats-card .text-cyan { color: #06b6d4; }
                .stats-card .text-emerald { color: #10b981; }
                .stats-card .text-gray { color: #6b7280; }
                .stats-card .text-purple { color: #8b5cf6; }
                .stats-card .text-rose { color: #f43f5e; }
                .stats-card small {
                    font-size: 10px;
                    color: #999;
                }
                
                /* Tableau */
                table {
                    width: 100%;
                    border-collapse: collapse;
                    margin-top: 15px;
                    font-size: 10px;
                }
                th {
                    background: #0463f1;
                    color: white;
                    padding: 10px 8px;
                    text-align: left;
                    font-weight: bold;
                }
                td {
                    border: 1px solid #ddd;
                    padding: 8px;
                    vertical-align: top;
                }
                .badge {
                    display: inline-block;
                    padding: 2px 8px;
                    border-radius: 12px;
                    font-size: 9px;
                    font-weight: normal;
                }
                .badge-success { background: #10b981; color: white; }
                .badge-info { background: #3b82f6; color: white; }
                .badge-warning { background: #f59e0b; color: white; }
                .badge-danger { background: #ef4444; color: white; }
                .badge-secondary { background: #6c757d; color: white; }
                
                .footer {
                    margin-top: 25px;
                    text-align: center;
                    font-size: 9px;
                    color: #999;
                    border-top: 1px solid #ddd;
                    padding-top: 10px;
                }
                
                @media print {
                    body {
                        margin: 0;
                        padding: 10px;
                    }
                }
            </style>
        </head>
        <body>
            <h1>RAPPORT DES VENTES</h1>
            
            <div class="header-info">
                <p><strong>Date d\'export :</strong> ' . (new \DateTime())->format('d/m/Y H:i:s') . '</p>
                <p><strong>Entreprise :</strong> ' . htmlspecialchars($hmaService->getCompanyName()) . '</p>
                <p><strong>Exporté par :</strong> ' . ($user ? ($user->getFullName() ?? $user->getEmail()) : 'Inconnu') . '</p>
                <p><strong>Email :</strong> ' . ($user ? $user->getEmail() : 'Inconnu') . '</p>
                <p><strong>Rôle(s) :</strong> ' . implode(', ', $this->getUserRoles($user)) . '</p>
            </div>

            <div class="filters-section">
                <div class="filters-title">FILTRES APPLIQUÉS :</div>
                <div class="filter-grid">
                    <div class="filter-item"><span class="filter-label">Recherche :</span> ' . (!empty($filters['search']) ? htmlspecialchars($filters['search']) : 'Aucune') . '</div>
                    <div class="filter-item"><span class="filter-label">Statut :</span> ' . ($statusLabel ?: 'Tous') . '</div>
                    <div class="filter-item"><span class="filter-label">Mode de paiement :</span> ' . ($paymentMethodLabel ?: 'Tous') . '</div>
                    <div class="filter-item"><span class="filter-label">Caissier :</span> ' . ($cashierName ?: 'Tous') . '</div>
                    <div class="filter-item"><span class="filter-label">Période :</span> ' . ($datePresetLabel ?: ($dateFrom ? 'Du ' . $dateFrom->format('d/m/Y') : 'Début') . ' → ' . ($dateTo ? $dateTo->format('d/m/Y') : 'Aujourd\'hui')) . '</div>
                    <div class="filter-item"><span class="filter-label">Montant :</span> ' . ($filters['min_amount'] ?: '0') . ' → ' . ($filters['max_amount'] ?: 'Illimité') . ' FCFA</div>
                </div>
            </div>

            <h2>STATISTIQUES</h2>
            <div class="stats-grid">
                <div class="stats-card">
                    <h6>Chiffre d\'affaires</h6>
                    <h3 class="text-primary">' . number_format($stats['total_sales'] ?? 0, 0, ',', ' ') . '</h3>
                    <small>FCFA</small>
                </div>
                <div class="stats-card">
                    <h6>Nombre de ventes</h6>
                    <h3 class="text-success">' . number_format($stats['total_orders'] ?? 0, 0, ',', ' ') . '</h3>
                    <small>commandes</small>
                </div>
                <div class="stats-card">
                    <h6>Panier moyen</h6>
                    <h3 class="text-info">' . number_format($stats['average_basket'] ?? 0, 0, ',', ' ') . '</h3>
                    <small>FCFA/vente</small>
                </div>
                <div class="stats-card">
                    <h6>Clients uniques</h6>
                    <h3 class="text-warning">' . number_format($stats['unique_customers'] ?? 0, 0, ',', ' ') . '</h3>
                    <small>personnes</small>
                </div>
                <div class="stats-card">
                    <h6>Ticket moyen</h6>
                    <h3 class="text-danger">' . number_format($stats['average_ticket'] ?? 0, 0, ',', ' ') . '</h3>
                    <small>FCFA/client</small>
                </div>
                <div class="stats-card">
                    <h6>Vente max</h6>
                    <h3 class="text-secondary">' . number_format($stats['max_sale'] ?? 0, 0, ',', ' ') . '</h3>
                    <small>FCFA</small>
                </div>
                <div class="stats-card">
                    <h6>Vente min</h6>
                    <h3 class="text-dark">' . number_format($stats['min_sale'] ?? 0, 0, ',', ' ') . '</h3>
                    <small>FCFA</small>
                </div>
                <div class="stats-card">
                    <h6>Articles vendus</h6>
                    <h3 class="text-cyan">' . number_format($stats['total_items'] ?? 0, 0, ',', ' ') . '</h3>
                    <small>unités</small>
                </div>
                <div class="stats-card">
                    <h6>Ventes actives</h6>
                    <h3 class="text-emerald">' . number_format($stats['active_orders'] ?? 0, 0, ',', ' ') . '</h3>
                    <small>commandes</small>
                </div>
                <div class="stats-card">
                    <h6>Ventes désactivées</h6>
                    <h3 class="text-gray">' . number_format($stats['disabled_orders'] ?? 0, 0, ',', ' ') . '</h3>
                    <small>commandes</small>
                </div>
                <div class="stats-card">
                    <h6>Taux désactivation</h6>
                    <h3 class="text-purple">' . number_format($stats['disabled_percentage'] ?? 0, 1, ',', ' ') . '%</h3>
                    <small>des ventes</small>
                </div>
                <div class="stats-card">
                    <h6>Ventes annulées</h6>
                    <h3 class="text-rose">' . number_format($stats['cancelled_orders'] ?? 0, 0, ',', ' ') . '</h3>
                    <small>commandes</small>
                </div>
            </div>

            <h2>LISTE DES VENTES</h2>
            <table>
                <thead>
                    <tr>
                        <th>N° commande</th>
                        <th>Date</th>
                        <th>Client</th>
                        <th>Articles</th>
                        <th>Total</th>
                        <th>Paiement</th>
                        <th>Statut</th>
                        <th>Caissier</th>
                    </tr>
                </thead>
                <tbody>';
        
        foreach ($orders as $order) {
            $itemCount = $order->getOrderItems()->count();
            $statusClass = '';
            $statusText = '';
            
            if ($order->isActive()) {
                $statusClass = 'badge-success';
                $statusText = 'Active';
            } else {
                $statusClass = 'badge-secondary';
                $statusText = 'Désactivée';
            }
            
            $paymentClass = $order->getPaymentMethod() === 'cash' ? 'badge-success' : 'badge-info';
            $paymentMethod = $order->getPaymentMethod() === 'cash' ? 'Espèces' : ($order->getPaymentMethod() === 'card' ? 'Carte' : 'Mobile Money');
            
            $html .= '<tr>
                <td><strong>' . htmlspecialchars($order->getOrderNumber()) . '</strong><br><small>#' . $order->getId() . '</small></td>
                <td>' . $order->getCreatedAt()->format('d/m/Y H:i') . '</td>
                <td>' . htmlspecialchars($order->getCustomerName()) . '<br>' . ($order->getCustomerPhone() ? '<small>' . htmlspecialchars($order->getCustomerPhone()) . '</small>' : '') . '</td>
                <td><span class="badge badge-secondary">' . $itemCount . ' article(s)</span>' . ($isRestaurant ? '<br><small>Plats</small>' : '') . '</td>
                <td><strong>' . number_format((float)$order->getTotalAmount(), 0, ',', ' ') . ' FCFA</strong></td>
                <td><span class="badge ' . $paymentClass . '">' . $paymentMethod . '</span></td>
                <td><span class="badge ' . $statusClass . '">' . $statusText . '</span></td>
                <td>' . htmlspecialchars($order->getUser()->getFullName() ?? $order->getUser()->getEmail()) . '<br><small>' . str_replace('ROLE_', '', $order->getUser()->getRoles()[0] ?? '') . '</small></td>
            </tr>';
        }
        
        $html .= '</tbody>
            </table>

            <div class="footer">
                Document généré par HMA Market - ' . (new \DateTime())->format('d/m/Y H:i') . '
            </div>
        </body>
        </html>';
        
        return $html;
    }

    private function getUserRoles($user): array
    {
        if (!$user) return ['Inconnu'];
        $roles = $user->getRoles();
        $roles = array_filter($roles, fn($r) => $r !== 'ROLE_USER');
        
        $roleLabels = [
            'ROLE_SUPER_ADMIN' => 'Super Administrateur',
            'ROLE_ADMIN' => 'Administrateur',
            'ROLE_MANAGER' => 'Manager',
            'ROLE_STOCK_MANAGER' => 'Responsable Stock',
            'ROLE_CASHIER' => 'Caissier',
        ];
        
        return array_map(fn($r) => $roleLabels[$r] ?? $r, $roles);
    }

    /**
     * Feuille 1: Ventes détaillées
     */
    private function createSalesSheet(Spreadsheet $spreadsheet, HmaService $hmaService, array $filters): void
    {
        $sheet = $spreadsheet->createSheet('Ventes');
        $sheet->setTitle('Ventes');
        
        // Récupérer les ventes filtrées
        $orders = $this->getFilteredOrders($hmaService, $filters);
        
        // En-têtes
        $headers = [
            'A1' => 'ID Vente',
            'B1' => 'N° Commande',
            'C1' => 'Date',
            'D1' => 'Heure',
            'E1' => 'Client',
            'F1' => 'Téléphone',
            'G1' => 'Total (FCFA)',
            'H1' => 'Montant Payé (FCFA)',
            'I1' => 'Monnaie (FCFA)',
            'J1' => 'Mode Paiement',
            'K1' => 'Statut Paiement',
            'L1' => 'Caissier',
            'M1' => 'Rôle Caissier',
            'N1' => 'Notes',
            'O1' => 'Jour',
            'P1' => 'Mois',
            'Q1' => 'Année',
            'R1' => 'Trimestre'
        ];
        
        $col = 'A';
        foreach ($headers as $cell => $value) {
            $sheet->setCellValue($cell, $value);
            $sheet->getStyle($cell)->getFont()->setBold(true);
            $sheet->getStyle($cell)->getFill()
                ->setFillType(Fill::FILL_SOLID)
                ->getStartColor()->setARGB('FF2E86C1');
            $sheet->getStyle($cell)->getFont()->getColor()->setARGB('FFFFFFFF');
        }
        
        // Données
        $row = 2;
        foreach ($orders as $order) {
            $date = $order->getCreatedAt();
            $sheet->setCellValue('A' . $row, $order->getId());
            $sheet->setCellValue('B' . $row, $order->getOrderNumber());
            $sheet->setCellValue('C' . $row, $date->format('d/m/Y'));
            $sheet->setCellValue('D' . $row, $date->format('H:i:s'));
            $sheet->setCellValue('E' . $row, $order->getCustomerName());
            $sheet->setCellValue('F' . $row, $order->getCustomerPhone());
            $sheet->setCellValue('G' . $row, (float) $order->getTotalAmount());
            $sheet->setCellValue('H' . $row, (float) $order->getAmountPaid());
            $sheet->setCellValue('I' . $row, (float) $order->getChangeAmount());
            $sheet->setCellValue('J' . $row, $order->getPaymentMethod());
            $sheet->setCellValue('K' . $row, $order->getPaymentStatus());
            $sheet->setCellValue('L' . $row, $order->getUser()->getFullName() ?? $order->getUser()->getEmail());
            $sheet->setCellValue('M' . $row, implode(', ', $order->getUser()->getRoles()));
            $sheet->setCellValue('N' . $row, $order->getNotes());
            $sheet->setCellValue('O' . $row, (int) $date->format('d'));
            $sheet->setCellValue('P' . $row, (int) $date->format('m'));
            $sheet->setCellValue('Q' . $row, (int) $date->format('Y'));
            $sheet->setCellValue('R' . $row, ceil($date->format('n') / 3));
            $row++;
        }
        
        foreach (range('A', 'R') as $col) {
            $sheet->getColumnDimension($col)->setAutoSize(true);
        }
        
        $sheet->setAutoFilter('A1:R' . ($row - 1));
    }

    /**
     * Feuille 2: Produits
     */
    private function createProductsSheet(Spreadsheet $spreadsheet, HmaService $hmaService): void
    {
        $sheet = $spreadsheet->createSheet('Produits');
        $sheet->setTitle('Produits');
        
        $products = $this->entityManager->getRepository(Product::class)
            ->createQueryBuilder('p')
            ->where('p.hma_service = :hmaService')
            ->setParameter('hmaService', $hmaService)
            ->getQuery()
            ->getResult();
        
        $headers = [
            'A1' => 'ID', 'B1' => 'Nom', 'C1' => 'Code-barres', 'D1' => 'Catégorie',
            'E1' => 'Prix Achat', 'F1' => 'Prix Vente', 'G1' => 'Stock', 'H1' => 'Seuil Alerte'
        ];
        
        foreach ($headers as $cell => $value) {
            $sheet->setCellValue($cell, $value);
            $sheet->getStyle($cell)->getFont()->setBold(true);
        }
        
        $row = 2;
        foreach ($products as $product) {
            $sheet->setCellValue('A' . $row, $product->getId());
            $sheet->setCellValue('B' . $row, $product->getName());
            $sheet->setCellValue('C' . $row, $product->getBarcode());
            $sheet->setCellValue('D' . $row, $product->getCategory()?->getName() ?? '—');
            $sheet->setCellValue('E' . $row, (float) $product->getPurchasePrice());
            $sheet->setCellValue('F' . $row, (float) ($product->getSalePrice() ?? 0));
            $sheet->setCellValue('G' . $row, $product->getStockQuantity());
            $sheet->setCellValue('H' . $row, $product->getMinQuantity());
            $row++;
        }
        
        foreach (range('A', 'H') as $col) {
            $sheet->getColumnDimension($col)->setAutoSize(true);
        }
    }

    /**
     * Feuille 3: Catégories
     */
    private function createCategoriesSheet(Spreadsheet $spreadsheet, HmaService $hmaService): void
    {
        $sheet = $spreadsheet->createSheet('Catégories');
        $sheet->setTitle('Catégories');
        
        $categories = $this->entityManager->getRepository(Category::class)
            ->createQueryBuilder('c')
            ->where('c.hma_service = :hmaService')
            ->setParameter('hmaService', $hmaService)
            ->getQuery()
            ->getResult();
        
        $headers = ['A1' => 'ID', 'B1' => 'Nom', 'C1' => 'Description', 'D1' => 'Parent'];
        
        foreach ($headers as $cell => $value) {
            $sheet->setCellValue($cell, $value);
            $sheet->getStyle($cell)->getFont()->setBold(true);
        }
        
        $row = 2;
        foreach ($categories as $category) {
            $sheet->setCellValue('A' . $row, $category->getId());
            $sheet->setCellValue('B' . $row, $category->getName());
            $sheet->setCellValue('C' . $row, $category->getDescription() ?? '—');
            $sheet->setCellValue('D' . $row, $category->getParent()?->getName() ?? '—');
            $row++;
        }
        
        foreach (range('A', 'D') as $col) {
            $sheet->getColumnDimension($col)->setAutoSize(true);
        }
    }

    /**
     * Feuille 4: Caissiers
     */
    private function createCashiersSheet(Spreadsheet $spreadsheet, HmaService $hmaService): void
    {
        $sheet = $spreadsheet->createSheet('Caissiers');
        $sheet->setTitle('Caissiers');
        
        $users = $this->entityManager->getRepository(User::class)
            ->createQueryBuilder('u')
            ->where('u.hma_service_id = :hmaService')
            ->setParameter('hmaService', $hmaService)
            ->getQuery()
            ->getResult();
        
        $headers = ['A1' => 'ID', 'B1' => 'Nom', 'C1' => 'Email', 'D1' => 'Rôles', 'E1' => 'Nbre Ventes'];
        
        foreach ($headers as $cell => $value) {
            $sheet->setCellValue($cell, $value);
            $sheet->getStyle($cell)->getFont()->setBold(true);
        }
        
        $row = 2;
        foreach ($users as $user) {
            $salesCount = $user->getOrders()->count();
            $sheet->setCellValue('A' . $row, $user->getId());
            $sheet->setCellValue('B' . $row, $user->getFullName() ?? $user->getEmail());
            $sheet->setCellValue('C' . $row, $user->getEmail());
            $sheet->setCellValue('D' . $row, implode(', ', $user->getRoles()));
            $sheet->setCellValue('E' . $row, $salesCount);
            $row++;
        }
        
        foreach (range('A', 'E') as $col) {
            $sheet->getColumnDimension($col)->setAutoSize(true);
        }
    }

    /**
     * Feuille 5: Promotions
     */
    private function createPromotionsSheet(Spreadsheet $spreadsheet, HmaService $hmaService, array $filters): void
    {
        $sheet = $spreadsheet->createSheet('Promotions');
        $sheet->setTitle('Promotions');
        
        $headers = ['A1' => 'ID Promotion', 'B1' => 'Nom', 'C1' => 'Type', 'D1' => 'Valeur', 'E1' => 'Date Début', 'F1' => 'Date Fin'];
        
        foreach ($headers as $cell => $value) {
            $sheet->setCellValue($cell, $value);
            $sheet->getStyle($cell)->getFont()->setBold(true);
        }
        
        $sheet->getColumnDimension('A')->setAutoSize(true);
        $sheet->getColumnDimension('B')->setAutoSize(true);
        $sheet->getColumnDimension('C')->setAutoSize(true);
        $sheet->getColumnDimension('D')->setAutoSize(true);
        $sheet->getColumnDimension('E')->setAutoSize(true);
        $sheet->getColumnDimension('F')->setAutoSize(true);
    }

    /**
     * Feuille 6: Statistiques quotidiennes
     */
    private function createDailyStatsSheet(Spreadsheet $spreadsheet, HmaService $hmaService, array $filters): void
    {
        $sheet = $spreadsheet->createSheet('Stats Quotidiennes');
        $sheet->setTitle('Stats Quotidiennes');
        
        $orders = $this->getFilteredOrders($hmaService, $filters);
        
        $dailyStats = [];
        foreach ($orders as $order) {
            $dateKey = $order->getCreatedAt()->format('Y-m-d');
            if (!isset($dailyStats[$dateKey])) {
                $dailyStats[$dateKey] = [
                    'date' => $order->getCreatedAt(),
                    'sales_count' => 0,
                    'total_revenue' => 0
                ];
            }
            $dailyStats[$dateKey]['sales_count']++;
            $dailyStats[$dateKey]['total_revenue'] += (float) $order->getTotalAmount();
        }
        
        $headers = ['A1' => 'Date', 'B1' => 'Nbre Ventes', 'C1' => 'CA Journalier (FCFA)'];
        
        foreach ($headers as $cell => $value) {
            $sheet->setCellValue($cell, $value);
            $sheet->getStyle($cell)->getFont()->setBold(true);
        }
        
        $row = 2;
        foreach ($dailyStats as $stat) {
            $sheet->setCellValue('A' . $row, $stat['date']->format('d/m/Y'));
            $sheet->setCellValue('B' . $row, $stat['sales_count']);
            $sheet->setCellValue('C' . $row, $stat['total_revenue']);
            $row++;
        }
        
        foreach (range('A', 'C') as $col) {
            $sheet->getColumnDimension($col)->setAutoSize(true);
        }
    }

    /**
     * Récupère les ventes filtrées
     */
    private function getFilteredOrders(HmaService $hmaService, array $filters): array
    {
        $qb = $this->orderRepository->createQueryBuilder('o')
            ->where('o.hma_service = :hmaService')
            ->setParameter('hmaService', $hmaService);
        
        if (!empty($filters['date_from'])) {
            $qb->andWhere('o.created_at >= :dateFrom')
               ->setParameter('dateFrom', new \DateTime($filters['date_from']));
        }
        
        if (!empty($filters['date_to'])) {
            $qb->andWhere('o.created_at <= :dateTo')
               ->setParameter('dateTo', new \DateTime($filters['date_to']));
        }
        
        if (!empty($filters['payment_method'])) {
            $qb->andWhere('o.payment_method = :paymentMethod')
               ->setParameter('paymentMethod', $filters['payment_method']);
        }
        
        if (!empty($filters['min_amount'])) {
            $qb->andWhere('o.total_amount >= :minAmount')
               ->setParameter('minAmount', $filters['min_amount']);
        }
        
        if (!empty($filters['max_amount'])) {
            $qb->andWhere('o.total_amount <= :maxAmount')
               ->setParameter('maxAmount', $filters['max_amount']);
        }
        
        if (!empty($filters['status'])) {
            $qb->andWhere('o.status = :status')
               ->setParameter('status', $filters['status']);
        }
        
        if (!empty($filters['user_id'])) {
            $qb->andWhere('o.user = :userId')
               ->setParameter('userId', $filters['user_id']);
        }
        
        if (!empty($filters['search'])) {
            $qb->andWhere('o.order_number LIKE :search OR o.customer_name LIKE :search OR o.customer_phone LIKE :search')
               ->setParameter('search', '%' . $filters['search'] . '%');
        }
        
        return $qb->orderBy('o.created_at', 'DESC')->getQuery()->getResult();
    }
}