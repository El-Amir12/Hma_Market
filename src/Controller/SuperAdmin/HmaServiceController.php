<?php

namespace App\Controller\SuperAdmin;

use App\Entity\HmaService;
use App\Form\HmaServiceRegistrationType;
use App\Form\HmaServiceProfileType;
use App\Repository\HmaServiceRepository;
use App\Service\FileUploader;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

#[Route('/super/admin/hma/service')]
final class HmaServiceController extends AbstractController
{
    #[Route(name: 'app_super_admin_hma_service_index', methods: ['GET'])]
    public function index(HmaServiceRepository $hmaServiceRepository): Response
    {
        return $this->render('super_admin/hma_service/index.html.twig', [
            'hma_services' => $hmaServiceRepository->findAll(),
        ]);
    }

    #[Route('/new', name: 'app_super_admin_hma_service_new', methods: ['GET', 'POST'])]
    public function new(Request $request, EntityManagerInterface $entityManager, FileUploader $fileUploader): Response
    {
        $hmaService = new HmaService();
        $form = $this->createForm(HmaServiceRegistrationType::class, $hmaService);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            // Gérer l'upload du logo
            $logoFile = $form->get('logoFile')->getData();
            
            if ($logoFile) {
                $logoFileName = $fileUploader->upload($logoFile);
                $hmaService->setLogo($logoFileName);
            }

            // Définir les valeurs par défaut
            $hmaService->setIsActive(true);
            $hmaService->setCreatedAt(new \DateTime());
            $hmaService->setTrialEndsAt((new \DateTime())->modify('+14 days'));

            $entityManager->persist($hmaService);
            $entityManager->flush();

            $this->addFlash('success', 'HmaService créé avec succès.');

            return $this->redirectToRoute('app_super_admin_hma_service_index', [], Response::HTTP_SEE_OTHER);
        }

        return $this->render('super_admin/hma_service/new.html.twig', [
            'hma_service' => $hmaService,
            'form' => $form,
        ]);
    }

    #[Route('/{id}', name: 'app_super_admin_hma_service_show', methods: ['GET'])]
    public function show(HmaService $hmaService): Response
    {
        return $this->render('super_admin/hma_service/show.html.twig', [
            'hma_service' => $hmaService,
        ]);
    }

    #[Route('/{id}/edit', name: 'app_super_admin_hma_service_edit', methods: ['GET', 'POST'])]
    public function edit(Request $request, HmaService $hmaService, EntityManagerInterface $entityManager, FileUploader $fileUploader): Response
    {
        // Utiliser le formulaire de profil pour l'édition
        $form = $this->createForm(HmaServiceProfileType::class, $hmaService);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            // Gérer l'upload du logo
            $logoFile = $form->get('logoFile')->getData();
            
            if ($logoFile) {
                // Supprimer l'ancien logo s'il existe
                if ($hmaService->getLogo()) {
                    $fileUploader->remove($hmaService->getLogo());
                }
                
                $logoFileName = $fileUploader->upload($logoFile);
                $hmaService->setLogo($logoFileName);
            }

            $entityManager->flush();

            $this->addFlash('success', 'HmaService mis à jour avec succès.');

            return $this->redirectToRoute('app_super_admin_hma_service_index', [], Response::HTTP_SEE_OTHER);
        }

        return $this->render('super_admin/hma_service/edit.html.twig', [
            'hma_service' => $hmaService,
            'form' => $form,
        ]);
    }

    #[Route('/{id}', name: 'app_super_admin_hma_service_delete', methods: ['POST'])]
    public function delete(Request $request, HmaService $hmaService, EntityManagerInterface $entityManager, FileUploader $fileUploader): Response
    {
        if ($this->isCsrfTokenValid('delete'.$hmaService->getId(), $request->getPayload()->getString('_token'))) {
            // Supprimer le logo s'il existe
            if ($hmaService->getLogo()) {
                $fileUploader->remove($hmaService->getLogo());
            }
            
            $entityManager->remove($hmaService);
            $entityManager->flush();
            
            $this->addFlash('success', 'HmaService supprimé avec succès.');
        }

        return $this->redirectToRoute('app_super_admin_hma_service_index', [], Response::HTTP_SEE_OTHER);
    }

    #[Route('/{id}/delete-logo', name: 'app_super_admin_hma_service_delete_logo', methods: ['POST'])]
    public function deleteLogo(Request $request, HmaService $hmaService, EntityManagerInterface $entityManager, FileUploader $fileUploader): Response
    {
        if ($this->isCsrfTokenValid('delete-logo'.$hmaService->getId(), $request->getPayload()->getString('_token'))) {
            if ($hmaService->getLogo()) {
                $fileUploader->remove($hmaService->getLogo());
                $hmaService->setLogo(null);
                $entityManager->flush();
                
                $this->addFlash('success', 'Logo supprimé avec succès.');
            } else {
                $this->addFlash('warning', 'Aucun logo à supprimer.');
            }
        }

        return $this->redirectToRoute('app_super_admin_hma_service_edit', ['id' => $hmaService->getId()]);
    }
}