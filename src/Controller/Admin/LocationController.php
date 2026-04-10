<?php
// src/Controller/Admin/LocationController.php

namespace App\Controller\Admin;

use App\Entity\HmaService;
use App\Entity\Location;
use App\Form\LocationType;
use App\Repository\LocationRepository;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;
use Symfony\Component\Security\Core\Exception\AccessDeniedException;
use App\Entity\StockBatch;
use App\Repository\StockBatchRepository;

#[Route('/admin/location')]
final class LocationController extends AbstractController
{
    private function getCurrentHmaService(): ?HmaService
    {
        $user = $this->getUser();
        if (!$user) return null;
        if ($user instanceof HmaService) return $user;
        if ($user instanceof \App\Entity\User) return $user->getHmaService();
        return null;
    }

    /**
     * Recharge le HmaService depuis l'EntityManager pour éviter les problèmes de proxy
     */
    private function reloadHmaService(?HmaService $hmaService, EntityManagerInterface $em): ?HmaService
    {
        if (!$hmaService || !$hmaService->getId()) {
            return null;
        }
        return $em->getRepository(HmaService::class)->find($hmaService->getId());
    }

    /**
     * Recharge un Location depuis l'EntityManager
     */
    private function reloadLocation(?Location $location, EntityManagerInterface $em): ?Location
    {
        if (!$location || !$location->getId()) {
            return null;
        }
        return $em->getRepository(Location::class)->find($location->getId());
    }

    private function checkAccess(): void
    {
        if (!$this->isGranted('ROLE_ADMIN') && !$this->isGranted('ROLE_MANAGER') && !$this->isGranted('ROLE_STOCK_MANAGER')) {
            throw new AccessDeniedException('Accès refusé.');
        }
    }

    #[Route('/', name: 'app_admin_location_index', methods: ['GET'])]
    public function index(LocationRepository $repository): Response
    {
        $this->checkAccess();
        $hmaService = $this->getCurrentHmaService();
        if (!$hmaService) {
            throw new AccessDeniedException('Aucun service associé.');
        }

        $locations = $repository->findBy(
            ['hma_service' => $hmaService],
            ['code' => 'ASC', 'name' => 'ASC']
        );

        // Calculer les statistiques
        $totalLocations = count($locations);
        $activeLocations = count(array_filter($locations, fn($l) => $l->isActive()));
        $inactiveLocations = count(array_filter($locations, fn($l) => !$l->isActive()));
        $totalBatches = array_sum(array_map(fn($l) => $l->getStockBatches()->count(), $locations));
        $usedLocations = count(array_filter($locations, fn($l) => $l->getStockBatches()->count() > 0));

        return $this->render('admin/location/index.html.twig', [
            'locations' => $locations,
            'stats' => [
                'total_locations' => $totalLocations,
                'active_locations' => $activeLocations,
                'inactive_locations' => $inactiveLocations,
                'total_batches' => $totalBatches,
                'used_locations' => $usedLocations,
            ],
        ]);
    }
    
    #[Route('/new', name: 'app_admin_location_new', methods: ['GET', 'POST'])]
    public function new(Request $request, EntityManagerInterface $em): Response
    {
        $this->checkAccess();
        $hmaService = $this->getCurrentHmaService();
        if (!$hmaService) {
            throw new AccessDeniedException('Aucun service associé.');
        }

        // ✅ Recharger le HmaService
        $hmaService = $this->reloadHmaService($hmaService, $em);
        if (!$hmaService) {
            throw new AccessDeniedException('Service introuvable.');
        }

        $location = new Location();
        $location->setHmaService($hmaService);

        $form = $this->createForm(LocationType::class, $location);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em->persist($location);
            $em->flush();
            $this->addFlash('success', 'Emplacement ajouté avec succès.');
            return $this->redirectToRoute('app_admin_location_index');
        }

        return $this->render('admin/location/new.html.twig', [
            'form' => $form,
        ]);
    }

    #[Route('/{id}/show', name: 'app_admin_location_show', methods: ['GET'])]
    public function show(Request $request, Location $location, EntityManagerInterface $em, StockBatchRepository $batchRepository, LocationRepository $locationRepository): Response
    {
        $this->checkAccess();
        $hmaService = $this->getCurrentHmaService();
        if (!$hmaService) {
            throw new AccessDeniedException('Aucun service associé.');
        }

        // Recharger les entités
        $hmaService = $em->getRepository(HmaService::class)->find($hmaService->getId());
        if (!$hmaService) {
            throw new AccessDeniedException('Service introuvable.');
        }

        $location = $em->getRepository(Location::class)->find($location->getId());
        if (!$location || $location->getHmaService()->getId() !== $hmaService->getId()) {
            throw new AccessDeniedException('Accès non autorisé.');
        }

        // ✅ Récupérer tous les autres emplacements pour la modal de suppression
        $allLocations = $locationRepository->findBy(
            ['hma_service' => $hmaService, 'is_active' => true],
            ['code' => 'ASC', 'name' => 'ASC']
        );

        // ✅ Calculer les statistiques directement
        $allBatches = $batchRepository->createQueryBuilder('sb')
            ->where('sb.locationEntity = :location')
            ->setParameter('location', $location)
            ->getQuery()
            ->getResult();
        
        $stats = [
            'total_batches' => count($allBatches),
            'active_batches' => count(array_filter($allBatches, fn($b) => $b->isActive())),
            'total_quantity' => array_sum(array_map(fn($b) => $b->getCurrentQuantity(), $allBatches)),
        ];

        // Pagination pour l'affichage
        $page = $request->query->getInt('page', 1);
        $limit = 10;
        
        $query = $batchRepository->createQueryBuilder('sb')
            ->where('sb.locationEntity = :location')
            ->setParameter('location', $location)
            ->orderBy('sb.expiry_date', 'ASC')
            ->getQuery();
        
        $paginator = new \Doctrine\ORM\Tools\Pagination\Paginator($query);
        $totalItems = count($paginator);
        $totalPages = ceil($totalItems / $limit);
        
        $paginator->getQuery()
            ->setFirstResult(($page - 1) * $limit)
            ->setMaxResults($limit);
        
        $batches = iterator_to_array($paginator);

        return $this->render('admin/location/show.html.twig', [
            'location' => $location,
            'batches' => $batches,
            'stats' => $stats,
            'all_locations' => $allLocations,
            'currentPage' => $page,
            'totalPages' => $totalPages,
            'companyType' => $hmaService->getType(),
        ]);
    }

    #[Route('/{id}/edit', name: 'app_admin_location_edit', methods: ['GET', 'POST'])]
    public function edit(Request $request, Location $location, EntityManagerInterface $em): Response
    {
        $this->checkAccess();
        $hmaService = $this->getCurrentHmaService();
        if (!$hmaService) {
            throw new AccessDeniedException('Aucun service associé.');
        }

        // ✅ Recharger les entités
        $hmaService = $this->reloadHmaService($hmaService, $em);
        if (!$hmaService) {
            throw new AccessDeniedException('Service introuvable.');
        }

        $location = $this->reloadLocation($location, $em);
        if (!$location || $location->getHmaService()->getId() !== $hmaService->getId()) {
            throw new AccessDeniedException('Accès non autorisé.');
        }

        $form = $this->createForm(LocationType::class, $location);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em->flush();
            $this->addFlash('success', 'Emplacement modifié avec succès.');
            return $this->redirectToRoute('app_admin_location_index');
        }

        return $this->render('admin/location/edit.html.twig', [
            'form' => $form,
            'location' => $location,
        ]);
    }

    #[Route('/{id}/toggle', name: 'app_admin_location_toggle', methods: ['POST'])]
    public function toggle(Request $request, Location $location, EntityManagerInterface $em): Response
    {
        $this->checkAccess();
        $hmaService = $this->getCurrentHmaService();
        if (!$hmaService) {
            throw new AccessDeniedException('Aucun service associé.');
        }

        // ✅ Recharger les entités
        $hmaService = $this->reloadHmaService($hmaService, $em);
        if (!$hmaService) {
            throw new AccessDeniedException('Service introuvable.');
        }

        $location = $this->reloadLocation($location, $em);
        if (!$location || $location->getHmaService()->getId() !== $hmaService->getId()) {
            throw new AccessDeniedException('Accès non autorisé.');
        }

        if (!$this->isCsrfTokenValid('toggle-location' . $location->getId(), $request->request->get('_token'))) {
            $this->addFlash('error', 'Token CSRF invalide.');
            return $this->redirectToRoute('app_admin_location_index');
        }

        $location->setIsActive(!$location->isActive());
        $em->flush();

        $status = $location->isActive() ? 'activé' : 'désactivé';
        $this->addFlash('success', "Emplacement {$status} avec succès.");

        return $this->redirectToRoute('app_admin_location_index');
    }

    #[Route('/{id}/delete', name: 'app_admin_location_delete', methods: ['POST'])]
    public function delete(Request $request, Location $location, EntityManagerInterface $em, LocationRepository $locationRepository): Response
    {
        $this->checkAccess();
        $hmaService = $this->getCurrentHmaService();
        if (!$hmaService) {
            throw new AccessDeniedException('Aucun service associé.');
        }

        // Recharger les entités
        $hmaService = $em->getRepository(HmaService::class)->find($hmaService->getId());
        if (!$hmaService) {
            throw new AccessDeniedException('Service introuvable.');
        }

        $location = $em->getRepository(Location::class)->find($location->getId());
        if (!$location || $location->getHmaService()->getId() !== $hmaService->getId()) {
            throw new AccessDeniedException('Accès non autorisé.');
        }

        if ($this->isCsrfTokenValid('delete' . $location->getId(), $request->request->get('_token'))) {
            
            $associatedBatches = $location->getStockBatches();
            $newLocationId = $request->request->get('new_location_id');
            
            // ✅ Si l'utilisateur a choisi de réassigner à un autre emplacement
            if ($newLocationId && $newLocationId !== '') {
                $newLocation = $locationRepository->find($newLocationId);
                if ($newLocation && $newLocation->getHmaService()->getId() === $hmaService->getId()) {
                    foreach ($associatedBatches as $batch) {
                        $batch->setLocationEntity($newLocation);
                        $batch->setLocation($newLocation->getDisplayName());
                        $em->persist($batch);
                    }
                    $this->addFlash('success', sprintf(
                        '%d lot(s) réassigné(s) à l\'emplacement "%s".',
                        $associatedBatches->count(),
                        $newLocation->getDisplayName()
                    ));
                }
            } else {
                // ✅ Sinon, simplement supprimer la référence
                foreach ($associatedBatches as $batch) {
                    $batch->setLocationEntity(null);
                    $batch->setLocation(null);
                    $em->persist($batch);
                }
                if ($associatedBatches->count() > 0) {
                    $this->addFlash('info', sprintf(
                        '%d lot(s) n\'ont plus d\'emplacement associé.',
                        $associatedBatches->count()
                    ));
                }
            }
            
            // ✅ Supprimer l'emplacement
            $em->remove($location);
            $em->flush();
            
            $this->addFlash('success', 'Emplacement supprimé avec succès.');
        }

        return $this->redirectToRoute('app_admin_location_index');
    }

    #[Route('/api/search', name: 'app_admin_location_api_search', methods: ['GET'])]
    public function apiSearch(Request $request, LocationRepository $repository): Response
    {
        $this->checkAccess();
        $hmaService = $this->getCurrentHmaService();
        if (!$hmaService) {
            return $this->json([]);
        }

        $search = $request->query->get('q', '');
        $locations = $repository->createQueryBuilder('l')
            ->where('l.hma_service = :service')
            ->andWhere('l.is_active = true')
            ->andWhere('l.name LIKE :search OR l.code LIKE :search')
            ->setParameter('service', $hmaService)
            ->setParameter('search', '%' . $search . '%')
            ->orderBy('l.code', 'ASC')
            ->getQuery()
            ->getResult();

        $data = array_map(fn(Location $l) => [
            'id' => $l->getId(),
            'text' => $l->getDisplayName(),
            'code' => $l->getCode(),
        ], $locations);

        return $this->json(['results' => $data]);
    }
}