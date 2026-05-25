<?php
// src/Controller/Stock/InventoryController.php

namespace App\Controller\Stock;

use App\Entity\HmaService;
use App\Entity\Inventory;
use App\Entity\InventoryItem;
use App\Form\Stock\InventoryAddProductsType;
use App\Form\Stock\InventoryType;
use App\Repository\InventoryRepository;
use App\Service\Stock\StockInventoryService;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

#[Route('/stock/inventory')]
class InventoryController extends AbstractController
{
    public function __construct(
        private EntityManagerInterface $entityManager,
        private StockInventoryService $inventoryService
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

    #[Route('/', name: 'app_stock_inventory_index', methods: ['GET'])]
    public function index(Request $request, InventoryRepository $repository): Response
    {
        $this->denyAccessUnlessGranted('ROLE_STOCK_MANAGER');
        
        $hmaService = $this->getCurrentHmaService();
        if (!$hmaService) {
            throw $this->createAccessDeniedException('Aucune entreprise associée à votre compte.');
        }
        
        $filters = [
            'status' => $request->query->get('status'),
            'date_from' => $request->query->get('date_from'),
            'date_to' => $request->query->get('date_to'),
        ];
        
        $inventories = $repository->findFiltered(
            $hmaService,
            $filters['status'],
            $filters['date_from'] ? new \DateTime($filters['date_from']) : null,
            $filters['date_to'] ? new \DateTime($filters['date_to']) : null
        );
        
        $stats = $this->inventoryService->getStatistics($hmaService);
        
        return $this->render('stock/inventory/index.html.twig', [
            'inventories' => $inventories,
            'stats' => $stats,
            'filters' => $filters
        ]);
    }

    #[Route('/new', name: 'app_stock_inventory_new', methods: ['GET', 'POST'])]
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
        
        $inventory = new Inventory();
        $form = $this->createForm(InventoryType::class, $inventory, [
            'hma_service' => $hmaService
        ]);
        $form->handleRequest($request);
        
        if ($form->isSubmitted() && $form->isValid()) {
            $inventory = $this->inventoryService->createInventory(
                hmaService: $hmaService,
                createdBy: $user,
                inventoryDate: $inventory->getInventoryDate(),
                location: $inventory->getLocation(),
                notes: $inventory->getNotes()
            );
            
            $this->addFlash('success', sprintf(
                '✅ Inventaire %s créé avec succès.',
                $inventory->getInventoryNumber()
            ));
            
            return $this->redirectToRoute('app_stock_inventory_add_products', ['id' => $inventory->getId()]);
        }
        
        return $this->render('stock/inventory/new.html.twig', [
            'form' => $form->createView(),
        ]);
    }

    #[Route('/{id}/add-products', name: 'app_stock_inventory_add_products', methods: ['GET', 'POST'])]
    public function addProducts(Request $request, Inventory $inventory): Response
    {
        $this->denyAccessUnlessGranted('ROLE_STOCK_MANAGER');
        
        $hmaService = $this->getCurrentHmaService();
        if (!$hmaService) {
            throw $this->createAccessDeniedException('Aucune entreprise associée à votre compte.');
        }
        
        if ($inventory->getHmaService()->getId() !== $hmaService->getId()) {
            throw $this->createAccessDeniedException('Accès non autorisé.');
        }
        
        if ($inventory->getStatus() === Inventory::STATUS_COMPLETED) {
            $this->addFlash('error', 'Cet inventaire est déjà terminé.');
            return $this->redirectToRoute('app_stock_inventory_show', ['id' => $inventory->getId()]);
        }
        
        $form = $this->createForm(InventoryAddProductsType::class, null, [
            'hma_service' => $hmaService
        ]);
        $form->handleRequest($request);
        
        if ($form->isSubmitted() && $form->isValid()) {
            // ✅ CORRECTION : Vérifier dans la requête si le bouton add_all a été soumis
            if ($request->request->get('add_all')) {
                $count = $this->inventoryService->addAllProductsToInventory($inventory, $inventory->getLocation());
                $this->addFlash('success', sprintf('%d produits ajoutés à l\'inventaire.', $count));
            } else {
                $products = $form->get('products')->getData();
                $count = 0;
                foreach ($products as $product) {
                    try {
                        $this->inventoryService->addProductToInventory($inventory, $product, $inventory->getLocation());
                        $count++;
                    } catch (\Exception $e) {
                        $this->addFlash('warning', $e->getMessage());
                    }
                }
                if ($count > 0) {
                    $this->addFlash('success', sprintf('%d produit(s) ajouté(s) à l\'inventaire.', $count));
                }
            }
            
            return $this->redirectToRoute('app_stock_inventory_count', ['id' => $inventory->getId()]);
        }
        
        return $this->render('stock/inventory/add_products.html.twig', [
            'inventory' => $inventory,
            'form' => $form->createView(),
        ]);
    }

    #[Route('/{id}/count', name: 'app_stock_inventory_count', methods: ['GET', 'POST'])]
    public function count(Request $request, Inventory $inventory): Response
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
        
        if ($inventory->getHmaService()->getId() !== $hmaService->getId()) {
            throw $this->createAccessDeniedException('Accès non autorisé.');
        }
        
        if ($inventory->getStatus() === Inventory::STATUS_COMPLETED) {
            $this->addFlash('error', 'Cet inventaire est déjà terminé.');
            return $this->redirectToRoute('app_stock_inventory_show', ['id' => $inventory->getId()]);
        }
        
        if ($request->isMethod('POST')) {
            $items = $request->request->all('items');
            
            foreach ($items as $itemData) {
                $item = $this->entityManager->getRepository(InventoryItem::class)->find($itemData['id']);
                if ($item && $item->getInventory()->getId() === $inventory->getId()) {
                    $this->inventoryService->updateInventoryCount(
                        item: $item,
                        actualQuantity: (int)$itemData['actual_quantity'],
                        counter: $user
                    );
                }
            }
            
            if ($request->request->has('validate')) {
                return $this->redirectToRoute('app_stock_inventory_validate', ['id' => $inventory->getId()]);
            }
            
            $this->addFlash('success', 'Saisie sauvegardée.');
            return $this->redirectToRoute('app_stock_inventory_count', ['id' => $inventory->getId()]);
        }
        
        return $this->render('stock/inventory/count.html.twig', [
            'inventory' => $inventory,
            'items' => $inventory->getItems(),
            'totalItems' => $inventory->getItems()->count(),
            'countedItems' => $inventory->getCountedItemsCount(),
            'progress' => $inventory->getProgress()
        ]);
    }

    #[Route('/{id}/validate', name: 'app_stock_inventory_validate', methods: ['GET', 'POST'])]
    public function validate(Request $request, Inventory $inventory): Response
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
        
        if ($inventory->getHmaService()->getId() !== $hmaService->getId()) {
            throw $this->createAccessDeniedException('Accès non autorisé.');
        }
        
        if ($inventory->getStatus() === Inventory::STATUS_COMPLETED) {
            $this->addFlash('error', 'Cet inventaire est déjà terminé.');
            return $this->redirectToRoute('app_stock_inventory_show', ['id' => $inventory->getId()]);
        }
        
        if ($request->isMethod('POST')) {
            try {
                $result = $this->inventoryService->validateInventory($inventory, $user);
                
                $this->addFlash('success', sprintf(
                    '✅ Inventaire validé ! %d ajustement(s) effectué(s).',
                    count($result['adjustments'])
                ));
                
                return $this->redirectToRoute('app_stock_inventory_show', ['id' => $inventory->getId()]);
            } catch (\Exception $e) {
                $this->addFlash('error', $e->getMessage());
            }
        }
        
        $differences = [];
        foreach ($inventory->getItems() as $item) {
            if ($item->getDifference() !== 0) {
                $differences[] = $item;
            }
        }
        
        return $this->render('stock/inventory/validate.html.twig', [
            'inventory' => $inventory,
            'differences' => $differences,
            'totalItems' => $inventory->getItems()->count(),
            'differenceCount' => count($differences)
        ]);
    }

    #[Route('/{id}', name: 'app_stock_inventory_show', methods: ['GET'])]
    public function show(Inventory $inventory): Response
    {
        $this->denyAccessUnlessGranted('ROLE_STOCK_MANAGER');
        
        $hmaService = $this->getCurrentHmaService();
        if (!$hmaService) {
            throw $this->createAccessDeniedException('Aucune entreprise associée à votre compte.');
        }
        
        if ($inventory->getHmaService()->getId() !== $hmaService->getId()) {
            throw $this->createAccessDeniedException('Accès non autorisé.');
        }
        
        return $this->render('stock/inventory/show.html.twig', [
            'inventory' => $inventory,
            'items' => $inventory->getItems(),
            'totalItems' => $inventory->getItems()->count(),
            'countedItems' => $inventory->getCountedItemsCount(),
            'progress' => $inventory->getProgress(),
            'differences' => array_filter($inventory->getItems()->toArray(), fn($i) => $i->getDifference() !== 0)
        ]);
    }

    #[Route('/{id}/cancel', name: 'app_stock_inventory_cancel', methods: ['POST'])]
    public function cancel(Request $request, Inventory $inventory): Response
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
        
        if ($inventory->getHmaService()->getId() !== $hmaService->getId()) {
            throw $this->createAccessDeniedException('Accès non autorisé.');
        }
        
        $reason = $request->request->get('reason');
        
        if (!$reason) {
            $this->addFlash('error', 'Veuillez fournir une raison pour l\'annulation.');
            return $this->redirectToRoute('app_stock_inventory_show', ['id' => $inventory->getId()]);
        }
        
        try {
            $this->inventoryService->cancelInventory($inventory, $user, $reason);
            $this->addFlash('success', 'Inventaire annulé avec succès.');
        } catch (\Exception $e) {
            $this->addFlash('error', $e->getMessage());
        }
        
        return $this->redirectToRoute('app_stock_inventory_index');
    }
}