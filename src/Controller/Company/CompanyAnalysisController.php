<?php

namespace App\Controller\Company;

use App\Entity\AnalysisPrice;
use App\Entity\AnalysisPayment;
use App\Entity\AnalysisRequest;
use App\Entity\HmaService;
use App\Entity\User;
use App\Form\AnalysisRequestType;
use App\Repository\AnalysisPriceRepository;
use App\Repository\AnalysisRequestRepository;
use App\Service\NotificationService;
use Doctrine\ORM\EntityManagerInterface;
use Psr\Log\LoggerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;
use Symfony\Component\Security\Core\Exception\AccessDeniedException;

#[Route('/company/analysis')]
class CompanyAnalysisController extends AbstractController
{
    public function __construct(
        private EntityManagerInterface $entityManager,
        private LoggerInterface $logger
    ) {
    }

    private function getCurrentHmaService(): ?HmaService
    {
        $user = $this->getUser();
        if (!$user) return null;
        if ($user instanceof \App\Entity\User) {
            return $user->getHmaServiceId();
        }
        if ($user instanceof HmaService) {
            return $user;
        }
        return null;
    }

    private function checkAccess(): void
    {
        $user = $this->getUser();
        
        if (!$user) {
            throw new AccessDeniedException('Vous devez être connecté pour accéder à cette page.');
        }
        
        $roles = $user->getRoles();
        if (!in_array('ROLE_ADMIN', $roles) && !in_array('ROLE_MANAGER', $roles)) {
            throw new AccessDeniedException('Cette section est réservée aux administrateurs et managers. Veuillez contacter votre responsable.');
        }
        
        $hmaService = $this->getCurrentHmaService();
        if (!$hmaService) {
            throw new AccessDeniedException('Aucune entreprise associée à votre compte.');
        }
    }

    #[Route('/', name: 'company_analysis_index', methods: ['GET'])]
    public function index(
        Request $request, 
        AnalysisRequestRepository $repository, 
        AnalysisPriceRepository $priceRepository
    ): Response {
        $this->checkAccess();
        $hmaService = $this->getCurrentHmaService();
        
        $type = $request->query->get('type');
        $status = $request->query->get('status');
        $dateFrom = $request->query->get('date_from');
        $dateTo = $request->query->get('date_to');
        
        $requests = $repository->findByCompanyFiltered(
            $hmaService,
            $type,
            $status,
            $dateFrom ? new \DateTime($dateFrom) : null,
            $dateTo ? new \DateTime($dateTo) : null
        );
        
        $stats = $repository->getStatisticsFiltered(
            $hmaService,
            $type,
            $status,
            $dateFrom ? new \DateTime($dateFrom) : null,
            $dateTo ? new \DateTime($dateTo) : null
        );
        
        $hasActiveSubscription = $this->hasActiveSubscription($hmaService);
        
        $subscriptionPrice = $priceRepository->findOneBy([
            'type' => AnalysisRequest::TYPE_SUBSCRIPTION,
            'is_active' => true
        ]);
        
        return $this->render('company/analysis/index.html.twig', [
            'requests' => $requests,
            'stats' => $stats,
            'hasActiveSubscription' => $hasActiveSubscription,
            'company' => $hmaService,
            'subscriptionPrice' => $subscriptionPrice,
            'filters' => [
                'type' => $type,
                'status' => $status,
                'date_from' => $dateFrom,
                'date_to' => $dateTo,
            ],
        ]);
    }

    #[Route('/new', name: 'company_analysis_new', methods: ['GET', 'POST'])]
    public function new(Request $request, AnalysisRequestRepository $repository, NotificationService $notificationService, AnalysisPriceRepository $priceRepository): Response
    {
        $this->checkAccess();
        $hmaService = $this->getCurrentHmaService();
        $user = $this->getUser();
        
        if ($hmaService && $this->entityManager->contains($hmaService) === false) {
            $hmaService = $this->entityManager->getRepository(HmaService::class)->find($hmaService->getId());
        }
        
        $prices = $priceRepository->findBy(['is_active' => true], ['display_order' => 'ASC']);
        
        $analysisRequest = new AnalysisRequest();
        $analysisRequest->setCompany($hmaService);
        
        $form = $this->createForm(AnalysisRequestType::class, $analysisRequest);
        $form->handleRequest($request);
        
        if ($form->isSubmitted() && $form->isValid()) {
            $type = $analysisRequest->getType();
            
            $selectedPrice = null;
            foreach ($prices as $price) {
                if ($price->getType() === $type) {
                    $selectedPrice = $price;
                    break;
                }
            }
            
            if ($selectedPrice) {
                $analysisRequest->setAmount((string) $selectedPrice->getPrice());
            }
            
            $analysisRequest->setRequestNumber($repository->generateRequestNumber());
            $analysisRequest->setStatus(AnalysisRequest::STATUS_PENDING);
            
            try {
                if (!$this->entityManager->contains($hmaService)) {
                    $this->entityManager->persist($hmaService);
                }
                
                $this->entityManager->persist($analysisRequest);
                $this->entityManager->flush();
                
                $this->notifyAdmin($analysisRequest, $notificationService, $user);
                
                $this->addFlash('success', 'Votre demande d\'analyse a été enregistrée. Vous serez contacté pour finaliser le paiement.');
                return $this->redirectToRoute('company_analysis_show', ['id' => $analysisRequest->getId()]);
                
            } catch (\Exception $e) {
                $this->logger->error('Erreur création analyse: ' . $e->getMessage());
                $this->addFlash('error', 'Erreur lors de l\'enregistrement: ' . $e->getMessage());
            }
        }
        
        return $this->render('company/analysis/new.html.twig', [
            'company' => $hmaService,
            'form' => $form->createView(),
            'prices' => $prices,
        ]);
    }

    #[Route('/{id}', name: 'company_analysis_show', methods: ['GET'])]
    public function show(AnalysisRequest $analysisRequest): Response
    {
        $this->checkAccess();
        $hmaService = $this->getCurrentHmaService();
        
        if ($analysisRequest->getCompany()->getId() !== $hmaService->getId()) {
            throw new AccessDeniedException('Cette analyse ne vous appartient pas.');
        }
        
        $payments = $this->entityManager->getRepository(AnalysisPayment::class)
            ->findBy(['analysis_request' => $analysisRequest], ['created_at' => 'DESC']);
        
        $paymentMethod = null;
        $taxAmount = 0;
        $taxRate = 0;
        $subtotal = 0;
        
        if (!empty($payments)) {
            $payment = $payments[0];
            $paymentData = $payment->getPaymentData();
            
            if ($paymentData && is_array($paymentData)) {
                if (isset($paymentData['mode'])) {
                    $mode = $paymentData['mode'];
                    
                    if (str_contains($mode, 'momo')) {
                        $paymentMethod = 'Mobile Money';
                    } elseif (str_contains($mode, 'card')) {
                        $paymentMethod = 'Carte bancaire';
                    } elseif (str_contains($mode, 'wave')) {
                        $paymentMethod = 'Wave';
                    } else {
                        $paymentMethod = ucfirst(str_replace('_test', '', $mode));
                    }
                }
                
                if (isset($paymentData['fees'])) {
                    $taxAmount = (float) $paymentData['fees'];
                }
            }
        }

        $total = (float) $analysisRequest->getAmount();
        $subtotal = $total - $taxAmount;
        
        if ($subtotal > 0 && $taxAmount > 0) {
            $taxRate = round(($taxAmount / $subtotal) * 100, 2);
        }
        
        return $this->render('company/analysis/show.html.twig', [
            'analysis' => $analysisRequest,
            'payments' => $payments,
            'payment_method' => $paymentMethod,
            'tax_amount' => $taxAmount,
            'tax_rate' => $taxRate,
            'subtotal' => $subtotal,
        ]);
    }

    /**
     * Télécharger le rapport final (COMPLETED)
     */
    #[Route('/{id}/download-final', name: 'company_analysis_download_final', methods: ['GET'])]
    public function downloadFinal(AnalysisRequest $analysisRequest): Response
    {
        $this->checkAccess();
        $hmaService = $this->getCurrentHmaService();
        
        if ($analysisRequest->getCompany()->getId() !== $hmaService->getId()) {
            throw new AccessDeniedException('Cette analyse ne vous appartient pas.');
        }
        
        if ($analysisRequest->getStatus() !== AnalysisRequest::STATUS_COMPLETED) {
            $this->addFlash('error', 'L\'analyse n\'est pas encore disponible.');
            return $this->redirectToRoute('company_analysis_show', ['id' => $analysisRequest->getId()]);
        }
        
        $filePath = $analysisRequest->getFinalReportPath();
        if (!$filePath || !file_exists($filePath)) {
            $this->addFlash('error', 'Rapport final introuvable.');
            return $this->redirectToRoute('company_analysis_show', ['id' => $analysisRequest->getId()]);
        }
        
        $filename = $analysisRequest->getFinalReportFilename() ?? basename($filePath);
        $extension = strtolower(pathinfo($filename, PATHINFO_EXTENSION));
        
        // ✅ Vérifier l'intégrité du fichier avant envoi
        if ($extension === 'pdf') {
            $handle = fopen($filePath, 'rb');
            $header = fread($handle, 5);
            fclose($handle);
            
            if (!str_starts_with($header, '%PDF')) {
                $this->logger->error('❌ Fichier PDF corrompu avant téléchargement (entreprise)', [
                    'path' => $filePath,
                    'header' => bin2hex($header),
                    'analysis_id' => $analysisRequest->getId()
                ]);
                $this->addFlash('error', 'Le fichier PDF est corrompu. Veuillez contacter le support.');
                return $this->redirectToRoute('company_analysis_show', ['id' => $analysisRequest->getId()]);
            }
            $this->logger->info('✅ PDF valide détecté pour téléchargement (entreprise)', [
                'analysis_id' => $analysisRequest->getId(),
                'header' => bin2hex($header)
            ]);
        }
        
        // ✅ Forcer les bons headers
        $response = $this->file($filePath, $filename);
        
        if ($extension === 'pbix') {
            $response->headers->set('Content-Type', 'application/octet-stream');
            $response->headers->set('Content-Disposition', sprintf('attachment; filename="%s"', $filename));
        } elseif ($extension === 'pdf') {
            $response->headers->set('Content-Type', 'application/pdf');
            $response->headers->set('Content-Disposition', sprintf('attachment; filename="%s"', $filename));
            $response->headers->set('Content-Transfer-Encoding', 'binary');
            $response->headers->set('Accept-Ranges', 'bytes');
        } elseif (in_array($extension, ['xlsx', 'xls'])) {
            $response->headers->set('Content-Type', 'application/vnd.openxmlformats-officedocument.spreadsheetml.sheet');
        } elseif ($extension === 'zip') {
            $response->headers->set('Content-Type', 'application/zip');
        }
        
        return $response;
    }

    /**
     * Télécharger les données brutes (PROCESSING ou COMPLETED)
     */
    #[Route('/{id}/download-raw', name: 'company_analysis_download_raw', methods: ['GET'])]
    public function downloadRaw(AnalysisRequest $analysisRequest): Response
    {
        $this->checkAccess();
        $hmaService = $this->getCurrentHmaService();
        
        if ($analysisRequest->getCompany()->getId() !== $hmaService->getId()) {
            throw new AccessDeniedException('Cette analyse ne vous appartient pas.');
        }
        
        if (!$analysisRequest->getRawExportPath() || !file_exists($analysisRequest->getRawExportPath())) {
            $this->addFlash('error', 'Données brutes non disponibles.');
            return $this->redirectToRoute('company_analysis_show', ['id' => $analysisRequest->getId()]);
        }
        
        $filePath = $analysisRequest->getRawExportPath();
        $filename = basename($filePath);
        
        return $this->file($filePath, $filename);
    }

    /**
     * Ancienne route de téléchargement (pour compatibilité)
     */
    #[Route('/{id}/download', name: 'company_analysis_download', methods: ['GET'])]
    public function download(AnalysisRequest $analysisRequest): Response
    {
        $this->checkAccess();
        $hmaService = $this->getCurrentHmaService();
        
        if ($analysisRequest->getCompany()->getId() !== $hmaService->getId()) {
            throw new AccessDeniedException('Cette analyse ne vous appartient pas.');
        }
        
        if ($analysisRequest->getStatus() === AnalysisRequest::STATUS_COMPLETED && $analysisRequest->getFinalReportPath()) {
            return $this->downloadFinal($analysisRequest);
        }
        
        if ($analysisRequest->getRawExportPath() && file_exists($analysisRequest->getRawExportPath())) {
            return $this->downloadRaw($analysisRequest);
        }
        
        $this->addFlash('error', 'Aucun fichier disponible pour cette analyse.');
        return $this->redirectToRoute('company_analysis_show', ['id' => $analysisRequest->getId()]);
    }

    private function hasActiveSubscription(HmaService $hmaService): bool
    {
        $subscriptionRequest = $this->entityManager->getRepository(AnalysisRequest::class)
            ->findOneBy([
                'company' => $hmaService,
                'type' => AnalysisRequest::TYPE_SUBSCRIPTION,
                'status' => AnalysisRequest::STATUS_COMPLETED
            ]);
        
        return $subscriptionRequest !== null;
    }

    private function notifyAdmin(AnalysisRequest $analysis, NotificationService $notificationService, $user): void
    {
        $superAdmin = $this->entityManager->getRepository(User::class)
            ->createQueryBuilder('u')
            ->where('u.roles LIKE :role')
            ->setParameter('role', '%ROLE_SUPER_ADMIN%')
            ->setMaxResults(1)
            ->getQuery()
            ->getOneOrNullResult();
        
        if ($superAdmin) {
            $subject = 'Nouvelle demande d\'analyse - ' . $analysis->getCompany()->getCompanyName();
            $message = sprintf(
                "Nouvelle demande d'analyse reçue :\n\n" .
                "Entreprise: %s\n" .
                "N° Abonnement: %s\n" .
                "Type: %s\n" .
                "Période: %s au %s\n" .
                "Montant: %s\n" .
                "Demandé par: %s\n\n" .
                "Consultez la demande: %s",
                $analysis->getCompany()->getCompanyName(),
                $analysis->getCompany()->getSubscriptionNumber(),
                $analysis->getTypeLabel(),
                $analysis->getPeriodStart()->format('d/m/Y'),
                $analysis->getPeriodEnd()->format('d/m/Y'),
                $analysis->getAmountFormatted(),
                $user instanceof User ? ($user->getFullName() ?? $user->getEmail()) : 'Utilisateur',
                $this->generateUrl('super_admin_analysis_show', ['id' => $analysis->getId()], 0)
            );
            
            $notificationService->sendSimpleEmail($superAdmin->getEmail(), $subject, $message);
            
            $this->logger->info('Notification envoyée au Super Admin', [
                'analysis_id' => $analysis->getId(),
                'super_admin_email' => $superAdmin->getEmail()
            ]);
        } else {
            $this->logger->warning('Aucun Super Admin trouvé pour la notification', [
                'analysis_id' => $analysis->getId()
            ]);
        }
    }

    private function getMimeType(string $filename): string
    {
        $extension = strtolower(pathinfo($filename, PATHINFO_EXTENSION));
        
        $mimeTypes = [
            'pdf' => 'application/pdf',
            'xlsx' => 'application/vnd.openxmlformats-officedocument.spreadsheetml.sheet',
            'xls' => 'application/vnd.ms-excel',
            'pbix' => 'application/octet-stream',
            'zip' => 'application/zip',
            'csv' => 'text/csv',
            'png' => 'image/png',
            'jpg' => 'image/jpeg',
            'jpeg' => 'image/jpeg',
        ];
        
        return $mimeTypes[$extension] ?? 'application/octet-stream';
    }
    
    /**
     * Helper function for str_starts_with (PHP < 8.0 compatibility)
     */
    private function str_starts_with(string $haystack, string $needle): bool
    {
        return substr($haystack, 0, strlen($needle)) === $needle;
    }
}