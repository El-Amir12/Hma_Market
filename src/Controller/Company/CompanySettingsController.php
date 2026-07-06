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
use Symfony\Component\Security\Http\Attribute\IsGranted;
use Symfony\Component\Security\Core\Exception\AccessDeniedException;

#[Route('/company/settings')]
class CompanySettingsController extends AbstractController
{
    public function __construct(
        private EntityManagerInterface $entityManager
    ) {}

    #[Route('/', name: 'app_company_settings_index', methods: ['GET', 'POST'])]
    #[IsGranted('IS_AUTHENTICATED_FULLY')]
    public function index(Request $request): Response
    {
        $this->checkAccess();
        
        /** @var User $user */
        $user = $this->getUser();
        
        // Récupérer l'utilisateur géré
        $managedUser = $this->entityManager->getRepository(User::class)->find($user->getId());
        if (!$managedUser) {
            throw new AccessDeniedException('Utilisateur non trouvé');
        }
        
        // Récupérer l'entreprise depuis l'utilisateur géré
        $companyProxy = $managedUser->getHmaServiceId();
        if (!$companyProxy) {
            throw $this->createNotFoundException('Entreprise non trouvée');
        }
        
        // Récupérer l'ID et recharger l'entreprise
        $companyId = $companyProxy->getId();
        $company = $this->entityManager->getRepository(HmaService::class)->find($companyId);
        if (!$company) {
            throw $this->createNotFoundException('Entreprise non trouvée');
        }

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
            
            // ✅ Récupération de la visibilité (checkbox)
            $companyPublic = $request->request->get('company_public') === 'on';
            $company->setCompanyPublic($companyPublic);
            
            $company->setUpdatedAt(new \DateTime());
            
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
    
    /**
     * ✅ Route pour enregistrer les périodes de garde
     */
    #[Route('/guard-periods', name: 'app_company_settings_guard_periods', methods: ['POST'])]
    #[IsGranted('IS_AUTHENTICATED_FULLY')]
    public function saveGuardPeriods(Request $request, EntityManagerInterface $em): Response
    {
        $this->checkAccess();
        
        /** @var User $user */
        $user = $this->getUser();
        
        if (!$user) {
            $this->addFlash('error', 'Utilisateur non connecté.');
            return $this->redirectToRoute('app_company_settings_index');
        }

        $company = $user->getHmaServiceId();
        
        if (!$company) {
            $this->addFlash('error', 'Aucune entreprise trouvée.');
            return $this->redirectToRoute('app_company_settings_index');
        }

        // Vérification du token CSRF
        if (!$this->isCsrfTokenValid('guard_periods', $request->request->get('_token'))) {
            $this->addFlash('error', 'Token CSRF invalide.');
            return $this->redirectToRoute('app_company_settings_index');
        }

        // Recharger l'entité
        $managedCompany = $em->getRepository(HmaService::class)->find($company->getId());
        
        if (!$managedCompany) {
            $this->addFlash('error', 'Entreprise introuvable.');
            return $this->redirectToRoute('app_company_settings_index');
        }

        $periods = $request->request->all('guard_periods');
        $validPeriods = [];

        if ($periods) {
            foreach ($periods as $period) {
                if (!empty($period['day']) && !empty($period['start']) && !empty($period['end'])) {
                    $validPeriods[] = [
                        'day' => $period['day'],
                        'start' => $period['start'],
                        'end' => $period['end'],
                    ];
                }
            }
        }

        $managedCompany->setGuardPeriods($validPeriods);
        $em->persist($managedCompany);
        $em->flush();

        $count = count($validPeriods);
        $this->addFlash('success', $count > 0 
            ? "{$count} période(s) de garde enregistrée(s) avec succès." 
            : 'Toutes les périodes de garde ont été supprimées.');

        return $this->redirectToRoute('app_company_settings_index');
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