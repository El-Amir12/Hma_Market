<?php
// src/Controller/Company/CompanySettingsController.php

namespace App\Controller\Company;

use App\Entity\HmaService;
use App\Entity\User;
use App\Form\CompanySettingsType;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\Security\Core\Exception\AccessDeniedException;

#[Route('/company/settings')]
class CompanySettingsController extends AbstractController
{
    public function __construct(
        private EntityManagerInterface $entityManager
    ) {}

    #[Route('/', name: 'app_company_settings_index', methods: ['GET', 'POST'])]
    public function index(Request $request): Response
    {
        $this->checkAccess();
        
        /** @var User $user */
        $user = $this->getUser();
        
        // ✅ TECHNIQUE DU TOUT-EN-UN : On recharge tout depuis le repository
        
        // 1. Récupérer l'utilisateur géré
        $managedUser = $this->entityManager->getRepository(User::class)->find($user->getId());
        if (!$managedUser) {
            throw new AccessDeniedException('Utilisateur non trouvé');
        }
        
        // 2. Récupérer l'entreprise depuis l'utilisateur géré
        $companyProxy = $managedUser->getHmaServiceId();
        if (!$companyProxy) {
            throw $this->createNotFoundException('Entreprise non trouvée');
        }
        
        // 3. Récupérer l'ID
        $companyId = $companyProxy->getId();
        
        // 4. RECHARGER L'ENTREPRISE (plus de proxy !)
        $company = $this->entityManager->getRepository(HmaService::class)->find($companyId);
        if (!$company) {
            throw $this->createNotFoundException('Entreprise non trouvée');
        }

        // 5. Tout est bon, on continue normalement
        $primaryColor = $company->getPrimaryColor() ?? '#0463f1';
        $secondaryColor = $company->getSecondaryColor() ?? '#8b5cf6';
        
        $form = $this->createForm(CompanySettingsType::class, $company);
        $form->handleRequest($request);
        
        if ($form->isSubmitted() && $form->isValid()) {
            // Logo
            $logoFile = $form->get('logoFile')->getData();
            if ($logoFile) {
                $newFilename = uniqid() . '.' . $logoFile->guessExtension();
                $logoFile->move(
                    $this->getParameter('logos_directory'),
                    $newFilename
                );
                $company->setLogo($newFilename);
            }

            // Couleurs
            $newPrimaryColor = $request->request->get('primary_color');
            $newSecondaryColor = $request->request->get('secondary_color');
            
            if ($newPrimaryColor) {
                $company->setPrimaryColor($newPrimaryColor);
            }
            if ($newSecondaryColor) {
                $company->setSecondaryColor($newSecondaryColor);
            }
            
            $company->setUpdatedAt(new \DateTime());
            
            // ✅ SAUVEGARDE
            $this->entityManager->flush();
            
            $this->addFlash('success', 'Paramètres enregistrés avec succès !');
            return $this->redirectToRoute('app_company_settings_index');
        }
        
        return $this->render('company/settings/index.html.twig', [
            'form' => $form->createView(),
            'company' => $company,
            'primaryColor' => $primaryColor,
            'secondaryColor' => $secondaryColor,
        ]);
    }
    
    private function checkAccess(): void
    {
        $user = $this->getUser();
        if (!$user) {
            throw new AccessDeniedException('Accès non autorisé');
        }
        
        $isOwner = method_exists($user, 'isHmaOwner') ? $user->isHmaOwner() : false;
        
        if (!$isOwner && !$this->isGranted('ROLE_ADMIN')) {
            throw new AccessDeniedException('Vous n\'avez pas les droits pour modifier les paramètres de l\'entreprise.');
        }
    }
}