<?php
// src/Controller/PrintController.php

namespace App\Controller;

use App\Entity\Order;
use App\Entity\User;
use App\Service\PrintService;
use App\Repository\OrderRepository;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\Routing\Attribute\Route;
use Symfony\Component\Security\Core\Exception\AccessDeniedException;
use Psr\Log\LoggerInterface;

#[Route('/print')]
class PrintController extends AbstractController
{
    public function __construct(
        private PrintService $printService,
        private OrderRepository $orderRepository,
        private EntityManagerInterface $entityManager,
        private LoggerInterface $logger
    ) {
    }
    
    private function checkAccess(): void
    {
        if (!$this->isGranted('ROLE_ADMIN') && 
            !$this->isGranted('ROLE_MANAGER') && 
            !$this->isGranted('ROLE_STOCK_MANAGER') &&
            !$this->isGranted('ROLE_CASHIER')) {
            throw new AccessDeniedException('Accès refusé');
        }
    }
    
    private function getCurrentHmaService()
    {
        $user = $this->getUser();
        if (!$user) return null;
        if ($user instanceof \App\Entity\HmaService) return $user;
        if ($user instanceof User) return $user->getHmaService();
        return null;
    }
    
    /**
     * Impression directe d'un ticket (avec fallback PDF)
     */
    #[Route('/ticket/{id}/{type}', name: 'print_ticket', methods: ['GET'])]
    public function printTicket(Order $order, string $type, Request $request): Response
    {
        $this->checkAccess();
        
        $hmaService = $this->getCurrentHmaService();
        if (!$hmaService || $order->getHmaService()->getId() !== $hmaService->getId()) {
            throw new AccessDeniedException('Accès non autorisé');
        }
        
        $validTypes = ['kitchen', 'customer', 'cash', 'delivery'];
        if (!in_array($type, $validTypes)) {
            throw $this->createNotFoundException('Type de ticket invalide');
        }
        
        $options = [
            'include_drinks' => $request->query->get('include_drinks', 'true') === 'true',
            'show_prices' => $request->query->get('show_prices', 'true') === 'true',
            'language' => $request->query->get('language', 'fr'),
        ];
        
        // Générer le HTML
        $html = $this->printService->generateTicketHtml($order, $hmaService, $type, $options);
        
        // Déterminer le format
        $format = match($type) {
            'kitchen' => '58mm',
            'customer' => '80mm',
            'cash' => 'A4',
            'delivery' => '80mm',
            default => '80mm',
        };
        
        // Générer le PDF
        $pdf = $this->printService->generatePdf($html, $format);
        $filename = $this->printService->generateFileName($order, $type);
        
        // Retourner le PDF pour impression directe
        return new Response($pdf, 200, [
            'Content-Type' => 'application/pdf',
            'Content-Disposition' => 'inline; filename="' . $filename . '"',
            'X-Ticket-Type' => $type,
            'X-Order-Number' => $order->getOrderNumber(),
        ]);
    }
    
    /**
     * Impression multiple de tickets
     */
    #[Route('/multiple', name: 'print_multiple', methods: ['POST'])]
    public function printMultiple(Request $request): JsonResponse
    {
        $this->checkAccess();
        
        $data = json_decode($request->getContent(), true);
        $orderIds = $data['order_ids'] ?? [];
        $type = $data['type'] ?? 'customer';
        
        if (empty($orderIds)) {
            return $this->json(['error' => 'Aucune commande sélectionnée'], 400);
        }
        
        $hmaService = $this->getCurrentHmaService();
        if (!$hmaService) {
            return $this->json(['error' => 'Service non trouvé'], 400);
        }
        
        $orders = $this->orderRepository->findBy([
            'id' => $orderIds,
            'hma_service' => $hmaService
        ]);
        
        if (empty($orders)) {
            return $this->json(['error' => 'Aucune commande trouvée'], 404);
        }
        
        // Générer un PDF combiné
        $combinedHtml = $this->renderView('print/combined_tickets.html.twig', [
            'orders' => $orders,
            'company' => $hmaService,
            'ticket_type' => $type,
            'print_date' => new \DateTime(),
        ]);
        
        $format = $type === 'kitchen' ? '58mm' : '80mm';
        $pdf = $this->printService->generatePdf($combinedHtml, $format);
        $filename = sprintf('tickets_%s_%s.pdf', $type, (new \DateTime())->format('Y-m-d_H-i-s'));
        
        return $this->json([
            'success' => true,
            'pdf' => base64_encode($pdf),
            'filename' => $filename,
            'count' => count($orders)
        ]);
    }
    
    /**
     * Vérifie la configuration d'impression du navigateur
     */
    #[Route('/check-printer', name: 'check_printer', methods: ['GET'])]
    public function checkPrinter(): JsonResponse
    {
        // Cette route est principalement utilisée côté client
        // On peut y stocker les préférences utilisateur
        return $this->json([
            'success' => true,
            'message' => 'Le système d\'impression est prêt'
        ]);
    }
    
    /**
     * Sauvegarde les préférences d'impression de l'utilisateur
     */
    #[Route('/preferences', name: 'print_preferences', methods: ['POST'])]
    public function savePreferences(Request $request): JsonResponse
    {
        $this->checkAccess();
        
        $user = $this->getUser();
        if (!$user) {
            return $this->json(['error' => 'Utilisateur non trouvé'], 401);
        }
        
        $data = json_decode($request->getContent(), true);
        $preferences = $data['preferences'] ?? [];
        
        // Stocker les préférences en session ou en base
        $session = $request->getSession();
        $session->set('print_preferences', $preferences);
        
        return $this->json([
            'success' => true,
            'message' => 'Préférences sauvegardées'
        ]);
    }
}