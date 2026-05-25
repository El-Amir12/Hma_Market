<?php
// src/Controller/Stock/StockTransferController.php

namespace App\Controller\Stock;

use App\Entity\HmaService;
use App\Entity\StockTransfer;
use App\Form\Stock\StockTransferType;
use App\Repository\StockTransferRepository;
use App\Service\Stock\StockTransferService;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

#[Route('/stock/transfer')]
class StockTransferController extends AbstractController
{
    public function __construct(
        private EntityManagerInterface $entityManager,
        private StockTransferService $transferService
    ) {
    }

    /**
     * Récupère le HmaService associé à l'utilisateur connecté
     */
    private function getCurrentHmaService(): ?HmaService
    {
        $user = $this->getUser();
        if (!$user) {
            return null;
        }
        
        // L'utilisateur peut être une instance de User (c'est le cas normal)
        if ($user instanceof \App\Entity\User) {
            return $user->getHmaServiceId(); // ✅ Utilisation de getHmaServiceId()
        }
        
        // Si c'est déjà un HmaService (cas d'un compte entreprise)
        if ($user instanceof HmaService) {
            return $user;
        }
        
        return null;
    }

    #[Route('/', name: 'app_stock_transfer_index', methods: ['GET'])]
    public function index(Request $request, StockTransferRepository $repository): Response
    {
        $this->denyAccessUnlessGranted('ROLE_MANAGER');
        
        $hmaService = $this->getCurrentHmaService();
        if (!$hmaService) {
            throw $this->createAccessDeniedException('Aucune entreprise associée à votre compte.');
        }
        
        $filters = [
            'status' => $request->query->get('status'),
            'date_from' => $request->query->get('date_from'),
            'date_to' => $request->query->get('date_to'),
        ];
        
        $transfers = $repository->findFiltered(
            $hmaService,
            $filters['status'],
            $filters['date_from'] ? new \DateTime($filters['date_from']) : null,
            $filters['date_to'] ? new \DateTime($filters['date_to']) : null
        );
        
        $stats = $this->transferService->getStatistics($hmaService);
        
        return $this->render('stock/transfer/index.html.twig', [
            'transfers' => $transfers,
            'stats' => $stats,
            'filters' => $filters
        ]);
    }

    #[Route('/new', name: 'app_stock_transfer_new', methods: ['GET', 'POST'])]
    public function new(Request $request): Response
    {
        $this->denyAccessUnlessGranted('ROLE_MANAGER');
        
        $hmaService = $this->getCurrentHmaService();
        if (!$hmaService) {
            throw $this->createAccessDeniedException('Aucune entreprise associée à votre compte.');
        }
        
        $user = $this->getUser();
        if (!$user instanceof \App\Entity\User) {
            throw $this->createAccessDeniedException('Utilisateur non trouvé.');
        }
        
        $transfer = new StockTransfer();
        $form = $this->createForm(StockTransferType::class, $transfer, [
            'hma_service' => $hmaService
        ]);
        $form->handleRequest($request);
        
        if ($form->isSubmitted() && $form->isValid()) {
            try {
                $createdTransfer = $this->transferService->createTransfer(
                    stockBatch: $transfer->getStockBatch(),
                    destinationLocation: $transfer->getDestinationLocation(),
                    quantity: $transfer->getQuantity(),
                    reason: $transfer->getReason(),
                    user: $user
                );
                
                $this->addFlash('success', sprintf(
                    '✅ Transfert créé avec succès. N° %s',
                    $createdTransfer->getTransferNumber()
                ));
                
                return $this->redirectToRoute('app_stock_transfer_index');
                
            } catch (\Exception $e) {
                $this->addFlash('error', 'Erreur : ' . $e->getMessage());
            }
        }
        
        return $this->render('stock/transfer/new.html.twig', [
            'form' => $form->createView(),
        ]);
    }

    #[Route('/{id}/start', name: 'app_stock_transfer_start', methods: ['POST'])]
    public function start(StockTransfer $transfer, Request $request): Response
    {
        $this->denyAccessUnlessGranted('ROLE_MANAGER');
        
        $hmaService = $this->getCurrentHmaService();
        if (!$hmaService) {
            throw $this->createAccessDeniedException('Aucune entreprise associée à votre compte.');
        }
        
        $user = $this->getUser();
        if (!$user instanceof \App\Entity\User) {
            throw $this->createAccessDeniedException('Utilisateur non trouvé.');
        }
        
        if ($transfer->getHmaService()->getId() !== $hmaService->getId()) {
            throw $this->createAccessDeniedException('Accès non autorisé.');
        }
        
        // Vérification du token CSRF
        if (!$this->isCsrfTokenValid('start-transfer-' . $transfer->getId(), $request->request->get('_token'))) {
            $this->addFlash('error', 'Token CSRF invalide.');
            return $this->redirectToRoute('app_stock_transfer_index');
        }
        
        try {
            $this->transferService->startTransfer($transfer, $user);
            $this->addFlash('success', 'Transfert expédié avec succès.');
        } catch (\Exception $e) {
            $this->addFlash('error', $e->getMessage());
        }
        
        return $this->redirectToRoute('app_stock_transfer_index');
    }

    #[Route('/{id}/receive', name: 'app_stock_transfer_receive', methods: ['GET', 'POST'])]
    public function receive(Request $request, StockTransfer $transfer): Response
    {
        $this->denyAccessUnlessGranted('ROLE_MANAGER');
        
        $hmaService = $this->getCurrentHmaService();
        if (!$hmaService) {
            throw $this->createAccessDeniedException('Aucune entreprise associée à votre compte.');
        }
        
        $user = $this->getUser();
        if (!$user instanceof \App\Entity\User) {
            throw $this->createAccessDeniedException('Utilisateur non trouvé.');
        }
        
        if ($transfer->getHmaService()->getId() !== $hmaService->getId()) {
            throw $this->createAccessDeniedException('Accès non autorisé.');
        }
        
        if ($request->isMethod('POST')) {
            // Vérification du token CSRF
            if (!$this->isCsrfTokenValid('receive-transfer-' . $transfer->getId(), $request->request->get('_token'))) {
                $this->addFlash('error', 'Token CSRF invalide.');
                return $this->redirectToRoute('app_stock_transfer_index');
            }
            
            try {
                $this->transferService->receiveTransfer($transfer, $user);
                $this->addFlash('success', 'Transfert réceptionné avec succès.');
                return $this->redirectToRoute('app_stock_transfer_index');
            } catch (\Exception $e) {
                $this->addFlash('error', $e->getMessage());
            }
        }
        
        return $this->render('stock/transfer/receive.html.twig', [
            'transfer' => $transfer
        ]);
    }

    #[Route('/{id}/cancel', name: 'app_stock_transfer_cancel', methods: ['POST'])]
    public function cancel(Request $request, StockTransfer $transfer): Response
    {
        $this->denyAccessUnlessGranted('ROLE_MANAGER');
        
        $hmaService = $this->getCurrentHmaService();
        if (!$hmaService) {
            throw $this->createAccessDeniedException('Aucune entreprise associée à votre compte.');
        }
        
        $user = $this->getUser();
        if (!$user instanceof \App\Entity\User) {
            throw $this->createAccessDeniedException('Utilisateur non trouvé.');
        }
        
        if ($transfer->getHmaService()->getId() !== $hmaService->getId()) {
            throw $this->createAccessDeniedException('Accès non autorisé.');
        }
        
        // Vérification du token CSRF
        if (!$this->isCsrfTokenValid('cancel-transfer-' . $transfer->getId(), $request->request->get('_token'))) {
            $this->addFlash('error', 'Token CSRF invalide.');
            return $this->redirectToRoute('app_stock_transfer_index');
        }
        
        $reason = $request->request->get('reason');
        
        if (!$reason) {
            $this->addFlash('error', 'Veuillez fournir une raison pour l\'annulation.');
            return $this->redirectToRoute('app_stock_transfer_show', ['id' => $transfer->getId()]);
        }
        
        try {
            $this->transferService->cancelTransfer($transfer, $user, $reason);
            $this->addFlash('success', 'Transfert annulé avec succès.');
        } catch (\Exception $e) {
            $this->addFlash('error', $e->getMessage());
        }
        
        return $this->redirectToRoute('app_stock_transfer_index');
    }

    #[Route('/{id}', name: 'app_stock_transfer_show', methods: ['GET'])]
    public function show(StockTransfer $transfer): Response
    {
        $this->denyAccessUnlessGranted('ROLE_MANAGER');
        
        $hmaService = $this->getCurrentHmaService();
        if (!$hmaService) {
            throw $this->createAccessDeniedException('Aucune entreprise associée à votre compte.');
        }
        
        if ($transfer->getHmaService()->getId() !== $hmaService->getId()) {
            throw $this->createAccessDeniedException('Accès non autorisé.');
        }
        
        return $this->render('stock/transfer/show.html.twig', [
            'transfer' => $transfer
        ]);
    }
}