<?php
// src/Controller/Stock/StockAdjustmentController.php

namespace App\Controller\Stock;

use App\Entity\StockAdjustment;
use App\Entity\HmaService;
use App\Form\Stock\StockAdjustmentType;
use App\Repository\StockAdjustmentRepository;
use App\Service\Stock\StockAdjustmentService;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

#[Route('/stock/adjustment')]
class StockAdjustmentController extends AbstractController
{
    public function __construct(
        private EntityManagerInterface $entityManager,
        private StockAdjustmentService $adjustmentService
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
            return $user->getHmaServiceId(); // ✅ Utilisation de getHmaServiceId() et non getHmaService()
        }
        
        // Si c'est déjà un HmaService (cas d'un compte entreprise)
        if ($user instanceof HmaService) {
            return $user;
        }
        
        return null;
    }

    #[Route('/', name: 'app_stock_adjustment_index', methods: ['GET'])]
    public function index(Request $request, StockAdjustmentRepository $repository): Response
    {
        $this->denyAccessUnlessGranted('ROLE_STOCK_MANAGER');
        
        $hmaService = $this->getCurrentHmaService();
        if (!$hmaService) {
            throw $this->createAccessDeniedException('Aucune entreprise associée à votre compte.');
        }
        
        $filters = [
            'type' => $request->query->get('type'),
            'date_from' => $request->query->get('date_from'),
            'date_to' => $request->query->get('date_to'),
        ];
        
        $adjustments = $repository->findFiltered(
            $hmaService,
            $filters['type'],
            $filters['date_from'] ? new \DateTime($filters['date_from']) : null,
            $filters['date_to'] ? new \DateTime($filters['date_to']) : null
        );
        
        $stats = $this->adjustmentService->getStatistics($hmaService);
        
        return $this->render('stock/adjustment/index.html.twig', [
            'adjustments' => $adjustments,
            'stats' => $stats,
            'filters' => $filters
        ]);
    }

    #[Route('/new', name: 'app_stock_adjustment_new', methods: ['GET', 'POST'])]
    public function new(Request $request): Response
    {
        $this->denyAccessUnlessGranted('ROLE_STOCK_MANAGER');
        
        $hmaService = $this->getCurrentHmaService();
        if (!$hmaService) {
            throw $this->createAccessDeniedException('Aucune entreprise associée à votre compte.');
        }
        
        $user = $this->getUser();
        if (!$user instanceof \App\Entity\User) {
            throw $this->createAccessDeniedException('Utilisateur non trouvé.');
        }
        
        $adjustment = new StockAdjustment();
        $form = $this->createForm(StockAdjustmentType::class, $adjustment, [
            'hma_service' => $hmaService
        ]);
        $form->handleRequest($request);
        
        if ($form->isSubmitted() && $form->isValid()) {
            $justificationFile = $form->get('justification_file')->getData();
            
            try {
                $this->adjustmentService->createAdjustment(
                    stockBatch: $adjustment->getStockBatch(),
                    type: $adjustment->getType(),
                    quantity: $adjustment->getQuantity(),
                    reason: $adjustment->getReason(),
                    user: $user,
                    justificationFile: $justificationFile
                );
                
                $this->addFlash('success', sprintf(
                    '✅ Ajustement effectué avec succès ! %d unités %s',
                    $adjustment->getQuantity(),
                    $adjustment->getType() === 'in' ? 'ajoutées' : 'retirées'
                ));
                
                return $this->redirectToRoute('app_stock_adjustment_index');
                
            } catch (\Exception $e) {
                $this->addFlash('error', 'Erreur : ' . $e->getMessage());
            }
        }
        
        return $this->render('stock/adjustment/new.html.twig', [
            'form' => $form->createView(),
        ]);
    }

    #[Route('/{id}', name: 'app_stock_adjustment_show', methods: ['GET'])]
    public function show(StockAdjustment $adjustment): Response
    {
        $this->denyAccessUnlessGranted('ROLE_STOCK_MANAGER');
        
        $hmaService = $this->getCurrentHmaService();
        if (!$hmaService) {
            throw $this->createAccessDeniedException('Aucune entreprise associée à votre compte.');
        }
        
        if ($adjustment->getHmaService()->getId() !== $hmaService->getId()) {
            throw $this->createAccessDeniedException('Accès non autorisé.');
        }
        
        return $this->render('stock/adjustment/show.html.twig', [
            'adjustment' => $adjustment
        ]);
    }
}