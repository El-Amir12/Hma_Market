<?php
// src/Controller/Admin/SupplierController.php

namespace App\Controller\Admin;

use App\Entity\HmaService;
use App\Entity\Supplier;
use App\Form\SupplierType;
use App\Repository\SupplierRepository;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;
use Symfony\Component\Security\Core\Exception\AccessDeniedException;

#[Route('/admin/supplier')]
final class SupplierController extends AbstractController
{
    private function getCurrentHmaService(): ?HmaService
    {
        $user = $this->getUser();
        if (!$user) return null;
        if ($user instanceof HmaService) return $user;
        if ($user instanceof \App\Entity\User) return $user->getHmaService();
        return null;
    }

    private function checkAccess(): void
    {
        if (!$this->isGranted('ROLE_ADMIN') && !$this->isGranted('ROLE_MANAGER')) {
            throw new AccessDeniedException('Accès refusé. Vous devez être administrateur ou manager.');
        }
    }

    private function checkOwnership(Supplier $supplier, HmaService $hmaService): void
    {
        $supplierService = $supplier->getHmaService();
        if (!$supplierService || $supplierService->getId() !== $hmaService->getId()) {
            throw new AccessDeniedException('Ce fournisseur ne vous appartient pas.');
        }
    }

    #[Route(name: 'app_admin_supplier_index', methods: ['GET'])]
    public function index(Request $request, SupplierRepository $repository): Response
    {
        $this->checkAccess();
        $hmaService = $this->getCurrentHmaService();
        if (!$hmaService) {
            throw new AccessDeniedException('Aucun service associé à votre compte.');
        }

        $page = $request->query->getInt('page', 1);
        $limit = 12;
        $search = $request->query->get('search', '');
        $status = $request->query->get('status', 'all');
        $subStatus = $request->query->get('sub_status', 'active');

        $paginator = $repository->findFilteredPaginated($hmaService, $status, $subStatus, $search, $page, $limit);

        $totalFiltered = $repository->countFiltered($hmaService, $status, $subStatus, $search);
        $activeFiltered = $repository->countFiltered($hmaService, 'active', $subStatus, $search);
        $inactiveFiltered = $repository->countFiltered($hmaService, 'inactive', $subStatus, $search);
        $subscriptionActiveFiltered = $repository->countFiltered($hmaService, $status, 'active', $search);
        $subscriptionInactiveFiltered = $repository->countFiltered($hmaService, $status, 'inactive', $search);

        $activeCount = $repository->countActive($hmaService);
        $limits = $hmaService->getCurrentLimits();
        $quota = $limits['max_suppliers'] ?? PHP_INT_MAX;
        $quotaReached = $quota !== PHP_INT_MAX && $activeCount >= $quota;
        $subscriptionInactiveCount = $repository->countSubscriptionInactive($hmaService);
        $plan = $hmaService->getCurrentPlan();

        $totalItems = $paginator->count();
        $totalPages = ceil($totalItems / $limit);

        return $this->render('admin/supplier/index.html.twig', [
            'suppliers' => $paginator,
            'currentPage' => $page,
            'totalPages' => $totalPages,
            'search' => $search,
            'status' => $status,
            'subStatus' => $subStatus,
            'totalItems' => $totalItems,
            'totalFiltered' => $totalFiltered,
            'activeFiltered' => $activeFiltered,
            'inactiveFiltered' => $inactiveFiltered,
            'subscriptionActiveFiltered' => $subscriptionActiveFiltered,
            'subscriptionInactiveFiltered' => $subscriptionInactiveFiltered,
            'activeCount' => $activeCount,
            'quota' => $quota === PHP_INT_MAX ? 'Illimité' : $quota,
            'quotaReached' => $quotaReached,
            'subscriptionInactiveCount' => $subscriptionInactiveCount,
            'plan' => $plan,
        ]);
    }

    #[Route('/new', name: 'app_admin_supplier_new', methods: ['GET', 'POST'])]
    public function new(Request $request, EntityManagerInterface $entityManager): Response
    {
        $this->checkAccess();

        /** @var \App\Entity\User $user */
        $user = $this->getUser();
        if (!$user) {
            throw new AccessDeniedException('Utilisateur non connecté.');
        }

        $hmaService = $user->getHmaService();
        if (!$hmaService) {
            throw new AccessDeniedException('Aucun service associé à votre compte.');
        }

        // Recharger le service (optionnel, mais sécurise)
        $hmaService = $entityManager->getRepository(HmaService::class)->find($hmaService->getId());
        if (!$hmaService) {
            throw new AccessDeniedException('Service introuvable.');
        }

        $activeCount = $entityManager->getRepository(Supplier::class)->countActive($hmaService);
        $limits = $hmaService->getCurrentLimits();
        $quota = $limits['max_suppliers'] ?? PHP_INT_MAX;
        if ($quota !== PHP_INT_MAX && $activeCount >= $quota) {
            $this->addFlash('error', "Vous avez atteint votre limite de {$quota} fournisseurs actifs.");
            return $this->redirectToRoute('app_admin_supplier_index');
        }

        $supplier = new Supplier();
        $supplier->setHmaService($hmaService)
                 ->setCreatedAt(new \DateTime())
                 ->setIsActive(true)
                 ->setSubscriptionActive(true);

        $form = $this->createForm(SupplierType::class, $supplier);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $entityManager->persist($supplier);
            $entityManager->flush();
            $this->addFlash('success', 'Fournisseur créé avec succès.');
            return $this->redirectToRoute('app_admin_supplier_index');
        }

        return $this->render('admin/supplier/new.html.twig', [
            'supplier' => $supplier,
            'form' => $form,
        ]);
    }

    #[Route('/{id}', name: 'app_admin_supplier_show', methods: ['GET'])]
    public function show(Supplier $supplier): Response
    {
        $this->checkAccess();
        $hmaService = $this->getCurrentHmaService();
        if (!$hmaService) throw new AccessDeniedException('Aucun service associé.');
        $this->checkOwnership($supplier, $hmaService);
        return $this->render('admin/supplier/show.html.twig', ['supplier' => $supplier]);
    }

    #[Route('/{id}/edit', name: 'app_admin_supplier_edit', methods: ['GET', 'POST'])]
    public function edit(Request $request, Supplier $supplier, EntityManagerInterface $entityManager): Response
    {
        $this->checkAccess();
        $hmaService = $this->getCurrentHmaService();
        if (!$hmaService) throw new AccessDeniedException('Aucun service associé.');
        $this->checkOwnership($supplier, $hmaService);

        $form = $this->createForm(SupplierType::class, $supplier);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $supplier->setUpdatedAt(new \DateTime());
            $entityManager->flush();
            $this->addFlash('success', 'Fournisseur modifié avec succès.');
            return $this->redirectToRoute('app_admin_supplier_show', ['id' => $supplier->getId()]);
        }

        return $this->render('admin/supplier/edit.html.twig', [
            'supplier' => $supplier,
            'form' => $form,
        ]);
    }

    #[Route('/{id}/toggle-status', name: 'app_admin_supplier_toggle_status', methods: ['POST'])]
    public function toggleStatus(Request $request, Supplier $supplier, EntityManagerInterface $entityManager): Response
    {
        $this->checkAccess();
        $hmaService = $this->getCurrentHmaService();
        if (!$hmaService) throw new AccessDeniedException('Aucun service associé.');
        $this->checkOwnership($supplier, $hmaService);
        if (!$this->isCsrfTokenValid('toggle-status'.$supplier->getId(), $request->request->get('_token'))) {
            throw $this->createAccessDeniedException('Token CSRF invalide');
        }

        $supplier->setIsActive(!$supplier->isActive());
        $supplier->setUpdatedAt(new \DateTime());
        $entityManager->flush();

        $status = $supplier->isActive() ? 'activé' : 'désactivé';
        $this->addFlash('success', "Fournisseur {$status} avec succès.");
        return $this->redirectToRoute('app_admin_supplier_index');
    }

    #[Route('/{id}', name: 'app_admin_supplier_delete', methods: ['POST'])]
    public function delete(Request $request, Supplier $supplier, EntityManagerInterface $entityManager): Response
    {
        if (!$this->isGranted('ROLE_ADMIN')) {
            throw new AccessDeniedException('Seul l\'admin peut supprimer.');
        }
        $hmaService = $this->getCurrentHmaService();
        if (!$hmaService) throw new AccessDeniedException('Aucun service associé.');
        $this->checkOwnership($supplier, $hmaService);

        if ($this->isCsrfTokenValid('delete'.$supplier->getId(), $request->request->get('_token'))) {
            if ($supplier->getPurchases()->count() > 0) {
                $this->addFlash('error', 'Impossible de supprimer ce fournisseur (lié à des achats).');
                return $this->redirectToRoute('app_admin_supplier_index');
            }
            $entityManager->remove($supplier);
            $entityManager->flush();
            $this->addFlash('success', 'Fournisseur supprimé.');
        }
        return $this->redirectToRoute('app_admin_supplier_index');
    }
}