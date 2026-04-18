<?php
// src/Controller/Admin/TypePromotionController.php

namespace App\Controller\Admin;

use App\Entity\TypePromotion;
use App\Entity\HmaService;
use App\Entity\User;
use App\Form\TypePromotionType;
use App\Repository\TypePromotionRepository;
use App\Service\UniqueNameValidator;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;
use Symfony\Component\Security\Core\Exception\AccessDeniedException;

#[Route('/admin/type-promotion')]
class TypePromotionController extends AbstractController
{
    public function __construct(
        private readonly UniqueNameValidator $uniqueNameValidator
    ) {
    }

    private function getCurrentHmaService(): ?HmaService
    {
        $user = $this->getUser();
        if (!$user) return null;
        if ($user instanceof HmaService) return $user;
        if ($user instanceof User) return $user->getHmaService();
        return null;
    }

    private function checkAccess(): void
    {
        if (!$this->isGranted('ROLE_ADMIN') && !$this->isGranted('ROLE_MANAGER')) {
            throw new AccessDeniedException('Accès refusé.');
        }
    }

    private function checkOwnership(TypePromotion $type, HmaService $hmaService): void
    {
        if ($type->getHmaService()->getId() !== $hmaService->getId()) {
            throw new AccessDeniedException('Ce type ne vous appartient pas.');
        }
    }

    #[Route('/', name: 'app_admin_type_promotion_index', methods: ['GET'])]
    public function index(Request $request, TypePromotionRepository $repository): Response
    {
        $this->checkAccess();
        $hmaService = $this->getCurrentHmaService();
        if (!$hmaService) throw new AccessDeniedException('Aucun service associé.');

        $page = $request->query->getInt('page', 1);
        $limit = 12;
        $search = $request->query->get('search', '');
        $status = $request->query->get('status', 'all');

        $onlyActive = null;
        if ($status === 'active') $onlyActive = true;
        if ($status === 'inactive') $onlyActive = false;

        $types = $repository->findByHmaService($hmaService, $onlyActive, $search, $page, $limit);

        $totalFiltered = $repository->countFiltered($hmaService, null, $search);
        $activeFiltered = $repository->countFiltered($hmaService, true, $search);
        $inactiveFiltered = $repository->countFiltered($hmaService, false, $search);

        $totalItems = $repository->countFiltered($hmaService, $onlyActive, $search);
        $totalPages = ceil($totalItems / $limit);

        return $this->render('admin/type_promotion/index.html.twig', [
            'types' => $types,
            'currentPage' => $page,
            'totalPages' => $totalPages,
            'search' => $search,
            'status' => $status,
            'totalFiltered' => $totalFiltered,
            'activeFiltered' => $activeFiltered,
            'inactiveFiltered' => $inactiveFiltered,
        ]);
    }

    #[Route('/new', name: 'app_admin_type_promotion_new', methods: ['GET', 'POST'])]
    public function new(Request $request, EntityManagerInterface $em): Response
    {
        $this->checkAccess();

        $user = $this->getUser();
        if (!$user) throw new AccessDeniedException('Utilisateur non connecté.');
        if (!$user instanceof User) throw new AccessDeniedException('Seuls les utilisateurs peuvent créer des types.');

        $user = $em->getRepository(User::class)->find($user->getId());
        if (!$user) throw new AccessDeniedException('Utilisateur introuvable.');

        $hmaService = $user->getHmaService();
        if (!$hmaService) throw new AccessDeniedException('Aucun service associé.');

        $hmaService = $em->getRepository(HmaService::class)->find($hmaService->getId());
        if (!$hmaService) throw new AccessDeniedException('Service introuvable.');

        $type = new TypePromotion();
        $type->setHmaService($hmaService)
             ->setUser($user)
             ->setCreatedAt(new \DateTimeImmutable())
             ->setIsActive(true);

        $form = $this->createForm(TypePromotionType::class, $type);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $validation = $this->uniqueNameValidator->validate($type, TypePromotion::class, 'type de promotion', $hmaService->getId());
            
            if (!$validation['valid']) {
                $this->addFlash('error', $validation['message']);
                return $this->render('admin/type_promotion/new.html.twig', [
                    'form' => $form->createView(),
                    'type' => $type
                ]);
            }

            $em->persist($type);
            $em->flush();
            $this->addFlash('success', 'Type de promotion créé.');
            return $this->redirectToRoute('app_admin_type_promotion_index');
        }

        return $this->render('admin/type_promotion/new.html.twig', ['form' => $form, 'type' => $type]);
    }

    #[Route('/{id}/edit', name: 'app_admin_type_promotion_edit', methods: ['GET', 'POST'])]
    public function edit(Request $request, TypePromotion $type, EntityManagerInterface $em): Response
    {
        $this->checkAccess();
        $hmaService = $this->getCurrentHmaService();
        if (!$hmaService) throw new AccessDeniedException('Aucun service associé.');
        $this->checkOwnership($type, $hmaService);

        $form = $this->createForm(TypePromotionType::class, $type);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $validation = $this->uniqueNameValidator->validate($type, TypePromotion::class, 'type de promotion', $hmaService->getId());
            
            if (!$validation['valid']) {
                $this->addFlash('error', $validation['message']);
                return $this->render('admin/type_promotion/edit.html.twig', [
                    'form' => $form->createView(),
                    'type' => $type
                ]);
            }

            $type->setUpdatedAt(new \DateTimeImmutable());
            $em->flush();
            $this->addFlash('success', 'Type modifié.');
            return $this->redirectToRoute('app_admin_type_promotion_index');
        }

        return $this->render('admin/type_promotion/edit.html.twig', ['form' => $form, 'type' => $type]);
    }

    #[Route('/{id}', name: 'app_admin_type_promotion_show', methods: ['GET'])]
    public function show(TypePromotion $type): Response
    {
        $this->checkAccess();
        $hmaService = $this->getCurrentHmaService();
        if (!$hmaService) throw new AccessDeniedException('Aucun service associé.');
        $this->checkOwnership($type, $hmaService);

        // Compter les promotions associées
        $promotionsCount = $type->getPromotions()->count();

        return $this->render('admin/type_promotion/show.html.twig', [
            'type' => $type,
            'promotionsCount' => $promotionsCount,
            'hmaService' => $hmaService
        ]);
    }

    // ✅ NOUVELLE ROUTE : Activer/Désactiver le statut
    #[Route('/{id}/toggle-status', name: 'app_admin_type_promotion_toggle_status', methods: ['POST'])]
    public function toggleStatus(Request $request, TypePromotion $type, EntityManagerInterface $em): Response
    {
        $this->checkAccess();
        $hmaService = $this->getCurrentHmaService();
        if (!$hmaService) throw new AccessDeniedException('Aucun service associé.');
        $this->checkOwnership($type, $hmaService);

        if (!$this->isCsrfTokenValid('toggle-status' . $type->getId(), $request->request->get('_token'))) {
            $this->addFlash('error', 'Token CSRF invalide.');
            return $this->redirectToRoute('app_admin_type_promotion_index');
        }

        $type->setIsActive(!$type->isActive());
        $type->setUpdatedAt(new \DateTimeImmutable());
        $em->flush();

        $status = $type->isActive() ? 'activé' : 'désactivé';
        $this->addFlash('success', "Type de promotion {$status} avec succès.");
        return $this->redirectToRoute('app_admin_type_promotion_index');
    }

    #[Route('/{id}/delete', name: 'app_admin_type_promotion_delete', methods: ['POST'])]
    public function delete(Request $request, TypePromotion $type, EntityManagerInterface $em): Response
    {
        if (!$this->isGranted('ROLE_ADMIN')) {
            throw new AccessDeniedException('Seul l\'admin peut supprimer.');
        }
        $hmaService = $this->getCurrentHmaService();
        if (!$hmaService) throw new AccessDeniedException('Aucun service associé.');
        $this->checkOwnership($type, $hmaService);

        if ($this->isCsrfTokenValid('delete'.$type->getId(), $request->request->get('_token'))) {
            if ($type->getPromotions()->count() > 0) {
                $this->addFlash('error', 'Ce type est utilisé par des promotions.');
                return $this->redirectToRoute('app_admin_type_promotion_index');
            }
            $em->remove($type);
            $em->flush();
            $this->addFlash('success', 'Type supprimé.');
        }
        return $this->redirectToRoute('app_admin_type_promotion_index');
    }
}