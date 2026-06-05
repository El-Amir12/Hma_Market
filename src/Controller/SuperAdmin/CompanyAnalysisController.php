<?php
// src/Controller/SuperAdmin/CompanyAnalysisController.php

namespace App\Controller\SuperAdmin;

use App\Entity\AnalysisRequest;
use App\Entity\AnalysisPayment;
use App\Entity\HmaService;
use App\Entity\User;
use App\Form\AnalysisRequestType;
use App\Repository\AnalysisPriceRepository;
use App\Repository\AnalysisRequestRepository;
use App\Repository\HmaServiceRepository;
use App\Service\FedaPayService;
use App\Service\NotificationService;
use App\Service\SuperAdmin\CompanyAnalysisExportService;
use Doctrine\ORM\EntityManagerInterface;
use Psr\Log\LoggerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\Security\Core\Exception\AccessDeniedException;

#[Route('/super-admin/analysis')]
class CompanyAnalysisController extends AbstractController
{
    public function __construct(
        private LoggerInterface $logger,
        private EntityManagerInterface $entityManager
    ) {
    }

    private function checkAccess(): void
    {
        if (!$this->isGranted('ROLE_SUPER_ADMIN')) {
            throw new AccessDeniedException('Accès réservé au Super Administrateur.');
        }
    }
    
    #[Route('/', name: 'super_admin_analysis_index')]
    public function index(Request $request, AnalysisRequestRepository $repository): Response
    {
        $this->checkAccess();
        
        $search = $request->query->get('search');
        $status = $request->query->get('status');
        $type = $request->query->get('type');
        $dateFrom = $request->query->get('date_from');
        $dateTo = $request->query->get('date_to');
        $page = $request->query->getInt('page', 1);
        
        $results = $repository->findAllFiltered(
            $search,
            $status,
            $type,
            $dateFrom ? new \DateTime($dateFrom) : null,
            $dateTo ? new \DateTime($dateTo) : null,
            $page
        );
        
        $stats = $this->getGlobalStats($repository);
        
        $statusList = [
            AnalysisRequest::STATUS_PENDING => 'En attente',
            AnalysisRequest::STATUS_PAID => 'Payé',
            AnalysisRequest::STATUS_PROCESSING => 'En traitement',
            AnalysisRequest::STATUS_COMPLETED => 'Terminé',
            AnalysisRequest::STATUS_FAILED => 'Échec',
            AnalysisRequest::STATUS_EXPIRED => 'Expiré',
        ];
        
        return $this->render('super_admin/analysis/index.html.twig', [
            'requests' => $results['items'],
            'total' => $results['total'],
            'totalPages' => $results['totalPages'],
            'currentPage' => $results['page'],
            'stats' => $stats,
            'filters' => [
                'search' => $search,
                'status' => $status,
                'type' => $type,
                'date_from' => $dateFrom,
                'date_to' => $dateTo,
            ],
            'statusList' => $statusList,
            'typeList' => AnalysisRequest::TYPE_LABELS,
        ]);
    }
    
    #[Route('/company/search', name: 'super_admin_analysis_search_company', methods: ['GET'])]
    public function searchCompany(Request $request, HmaServiceRepository $repository): JsonResponse
    {
        $this->checkAccess();
        
        $query = $request->query->get('q', '');
        
        if (strlen($query) < 2) {
            return $this->json([]);
        }
        
        $companies = $repository->createQueryBuilder('c')
            ->where('c.companyName LIKE :query')
            ->orWhere('c.subscription_number LIKE :query')
            ->orWhere('c.email LIKE :query')
            ->setParameter('query', '%' . $query . '%')
            ->orderBy('c.companyName', 'ASC')
            ->setMaxResults(20)
            ->getQuery()
            ->getResult();
        
        $data = [];
        foreach ($companies as $company) {
            $data[] = [
                'id' => $company->getId(),
                'name' => $company->getCompanyName(),
                'subscription_number' => $company->getSubscriptionNumber(),
                'email' => $company->getEmail(),
                'type' => $company->getType(),
                'created_at' => $company->getCreatedAt()->format('d/m/Y'),
            ];
        }
        
        return $this->json($data);
    }
    
    #[Route('/company/{id}/stats', name: 'super_admin_analysis_company_stats', methods: ['GET'])]
    public function companyStats(HmaService $company, AnalysisRequestRepository $repository): JsonResponse
    {
        $this->checkAccess();
        
        $stats = $repository->getStatistics($company);
        
        return $this->json($stats);
    }
    
    #[Route('/new/{companyId}', name: 'super_admin_analysis_new', methods: ['GET', 'POST'])]
    public function new(
        Request $request,
        int $companyId,
        HmaServiceRepository $companyRepository,
        AnalysisRequestRepository $requestRepository,
        AnalysisPriceRepository $priceRepository
    ): Response {
        $this->checkAccess();
        
        $company = $companyRepository->find($companyId);
        if (!$company) {
            throw $this->createNotFoundException('Entreprise non trouvée');
        }
        
        $analysisRequest = new AnalysisRequest();
        $analysisRequest->setCompany($company);
        
        $prices = $priceRepository->findBy(['is_active' => true], ['display_order' => 'ASC']);
        
        $form = $this->createForm(AnalysisRequestType::class, $analysisRequest);
        $form->handleRequest($request);
        
        if ($form->isSubmitted() && $form->isValid()) {
            $type = $analysisRequest->getType();
            
            foreach ($prices as $price) {
                if ($price->getType() === $type) {
                    $analysisRequest->setAmount((string) $price->getPrice());
                    break;
                }
            }
            
            $analysisRequest->setRequestNumber($requestRepository->generateRequestNumber());
            $analysisRequest->setStatus(AnalysisRequest::STATUS_PENDING);
            
            $this->entityManager->persist($analysisRequest);
            $this->entityManager->flush();
            
            $this->addFlash('success', sprintf('Demande d\'analyse créée pour %s', $company->getCompanyName()));
            
            return $this->redirectToRoute('super_admin_analysis_show', ['id' => $analysisRequest->getId()]);
        }
        
        return $this->render('super_admin/analysis/new.html.twig', [
            'company' => $company,
            'form' => $form->createView(),
            'prices' => $prices,
        ]);
    }
    
    #[Route('/{id}', name: 'super_admin_analysis_show', methods: ['GET'])]
    public function show(AnalysisRequest $analysisRequest): Response
    {
        $this->checkAccess();
        
        $payments = $this->entityManager->getRepository(AnalysisPayment::class)
            ->findBy(['analysis_request' => $analysisRequest], ['created_at' => 'DESC']);
        
        // ✅ Calculer la taxe/frais depuis le premier paiement
        $taxAmount = 0;
        $taxRate = 0;
        $subtotal = 0;
        
        if (!empty($payments)) {
            $payment = $payments[0];
            $paymentData = $payment->getPaymentData();
            
            if ($paymentData && is_array($paymentData)) {
                // Récupérer les frais depuis le champ 'fees'
                if (isset($paymentData['fees'])) {
                    $taxAmount = (float) $paymentData['fees'];
                }
                
                // Calculer le sous-total
                $total = (float) $analysisRequest->getAmount();
                $subtotal = $total - $taxAmount;
                
                // Calculer le taux si possible
                if ($subtotal > 0 && $taxAmount > 0) {
                    $taxRate = round(($taxAmount / $subtotal) * 100, 2);
                }
            }
        }
        
        return $this->render('super_admin/analysis/show.html.twig', [
            'analysis' => $analysisRequest,
            'payments' => $payments,
            'tax_amount' => $taxAmount,
            'tax_rate' => $taxRate,
            'subtotal' => $subtotal,
        ]);
    }
    
    #[Route('/{id}/generate-raw', name: 'super_admin_analysis_generate_raw', methods: ['POST'])]
    public function generateRawData(
        AnalysisRequest $analysisRequest,
        CompanyAnalysisExportService $exportService
    ): Response {
        $this->checkAccess();
        
        if ($analysisRequest->getStatus() !== AnalysisRequest::STATUS_PAID) {
            $this->addFlash('error', 'Cette demande n\'est pas encore payée.');
            return $this->redirectToRoute('super_admin_analysis_show', ['id' => $analysisRequest->getId()]);
        }
        
        try {
            $analysisRequest->setStatus(AnalysisRequest::STATUS_PROCESSING);
            $this->entityManager->flush();
            
            $zipPath = $exportService->generateRawDataExport($analysisRequest);
            
            $this->addFlash('success', 'Données brutes exportées avec succès. Vous pouvez maintenant uploader votre rapport final.');
            
        } catch (\Exception $e) {
            $analysisRequest->setStatus(AnalysisRequest::STATUS_FAILED);
            $this->entityManager->flush();
            
            $this->addFlash('error', 'Erreur lors de l\'export: ' . $e->getMessage());
            $this->logger->error('Erreur export brut', [
                'analysis_id' => $analysisRequest->getId(),
                'error' => $e->getMessage()
            ]);
        }
        
        return $this->redirectToRoute('super_admin_analysis_show', ['id' => $analysisRequest->getId()]);
    }

    #[Route('/{id}/upload-report', name: 'super_admin_analysis_upload_report', methods: ['POST'])]
    public function uploadFinalReport(
        AnalysisRequest $analysisRequest,
        Request $request,
        CompanyAnalysisExportService $exportService
    ): Response {
        $this->checkAccess();
        
        // 🔍 LOG 1: Début de la méthode
        $this->logger->info('📤 [CONTROLLER] uploadFinalReport début', [
            'analysis_id' => $analysisRequest->getId()
        ]);
        
        $uploadedFile = $request->files->get('report');
        
        // 🔍 LOG 2: Vérification du fichier
        $this->logger->info('🔍 [CONTROLLER] Fichier reçu', [
            'has_file' => $uploadedFile !== null,
            'file_name' => $uploadedFile ? $uploadedFile->getClientOriginalName() : 'null',
            'file_size' => $uploadedFile ? $uploadedFile->getSize() : 0,
            'file_error' => $uploadedFile ? $uploadedFile->getError() : 'no_file'
        ]);
        
        if (!$uploadedFile) {
            $this->addFlash('error', 'Aucun fichier sélectionné.');
            $this->logger->error('❌ [CONTROLLER] Aucun fichier uploadé');
            return $this->redirectToRoute('super_admin_analysis_show', ['id' => $analysisRequest->getId()]);
        }
        
        // ✅ Vérifier que le fichier n'est pas vide
        if ($uploadedFile->getSize() === 0) {
            $this->addFlash('error', 'Le fichier est vide.');
            $this->logger->error('❌ [CONTROLLER] Fichier vide');
            return $this->redirectToRoute('super_admin_analysis_show', ['id' => $analysisRequest->getId()]);
        }
        
        // Vérifier les erreurs d'upload PHP
        if ($uploadedFile->getError() !== UPLOAD_ERR_OK) {
            $errors = [
                UPLOAD_ERR_INI_SIZE => 'Le fichier dépasse upload_max_filesize',
                UPLOAD_ERR_FORM_SIZE => 'Le fichier dépasse MAX_FILE_SIZE',
                UPLOAD_ERR_PARTIAL => 'Fichier partiellement uploadé',
                UPLOAD_ERR_NO_FILE => 'Aucun fichier uploadé',
                UPLOAD_ERR_NO_TMP_DIR => 'Dossier temporaire manquant',
                UPLOAD_ERR_CANT_WRITE => 'Échec écriture fichier',
                UPLOAD_ERR_EXTENSION => 'Extension PHP bloquée',
            ];
            $errorMsg = $errors[$uploadedFile->getError()] ?? 'Erreur inconnue';
            $this->addFlash('error', 'Erreur upload: ' . $errorMsg);
            $this->logger->error('❌ [CONTROLLER] Erreur PHP upload', [
                'error_code' => $uploadedFile->getError(),
                'error_message' => $errorMsg
            ]);
            return $this->redirectToRoute('super_admin_analysis_show', ['id' => $analysisRequest->getId()]);
        }
        
        // 🔍 LOG 3: Vérification du chemin temporaire
        $tempPath = $uploadedFile->getPathname();
        $this->logger->info('🔍 [CONTROLLER] Fichier temporaire', [
            'temp_path' => $tempPath,
            'exists' => file_exists($tempPath),
            'is_readable' => is_readable($tempPath)
        ]);
        
        if (!file_exists($tempPath)) {
            $this->addFlash('error', 'Le fichier temporaire n\'existe pas');
            $this->logger->error('❌ [CONTROLLER] Fichier temporaire introuvable', ['temp_path' => $tempPath]);
            return $this->redirectToRoute('super_admin_analysis_show', ['id' => $analysisRequest->getId()]);
        }
        
        try {
            // 🔍 LOG 4: Appel du service
            $this->logger->info('🔄 [CONTROLLER] Appel du service uploadFinalReport');
            
            $result = $exportService->uploadFinalReport(
                $analysisRequest,
                $tempPath,
                $uploadedFile->getClientOriginalName(),
                $this->getUser()
            );
            
            $this->logger->info('✅ [CONTROLLER] Service appelé avec succès', ['result' => $result]);
            $this->addFlash('success', 'Rapport final uploadé avec succès !');
            
        } catch (\Exception $e) {
            $this->logger->error('❌ [CONTROLLER] Exception dans le service', [
                'error' => $e->getMessage(),
                'trace' => $e->getTraceAsString()
            ]);
            $this->addFlash('error', 'Erreur lors de l\'upload: ' . $e->getMessage());
        }
        
        return $this->redirectToRoute('super_admin_analysis_show', ['id' => $analysisRequest->getId()]);
    }

    #[Route('/{id}/replace-report', name: 'super_admin_analysis_replace_report', methods: ['POST'])]
    public function replaceFinalReport(
        AnalysisRequest $analysisRequest,
        Request $request,
        CompanyAnalysisExportService $exportService
    ): Response {
        $this->checkAccess();
        
        // 🔍 LOG 1: Début
        $this->logger->info('🔄 [CONTROLLER] replaceFinalReport début', [
            'analysis_id' => $analysisRequest->getId()
        ]);
        
        $uploadedFile = $request->files->get('report');
        
        if (!$uploadedFile) {
            $this->addFlash('error', 'Aucun fichier sélectionné.');
            return $this->redirectToRoute('super_admin_analysis_show', ['id' => $analysisRequest->getId()]);
        }
        
        if ($uploadedFile->getSize() === 0) {
            $this->addFlash('error', 'Le fichier est vide.');
            return $this->redirectToRoute('super_admin_analysis_show', ['id' => $analysisRequest->getId()]);
        }
        
        $tempPath = $uploadedFile->getPathname();
        $this->logger->info('🔍 [CONTROLLER] Fichier pour remplacement', [
            'original_name' => $uploadedFile->getClientOriginalName(),
            'temp_path' => $tempPath,
            'size' => $uploadedFile->getSize()
        ]);
        
        try {
            $result = $exportService->updateFinalReport(
                $analysisRequest,
                $tempPath,
                $uploadedFile->getClientOriginalName(),
                $this->getUser()
            );
            
            $this->logger->info('✅ [CONTROLLER] Rapport remplacé avec succès', ['result' => $result]);
            $this->addFlash('success', 'Rapport final remplacé avec succès !');
            
        } catch (\Exception $e) {
            $this->logger->error('❌ [CONTROLLER] Erreur remplacement', [
                'error' => $e->getMessage(),
                'trace' => $e->getTraceAsString()
            ]);
            $this->addFlash('error', 'Erreur lors du remplacement: ' . $e->getMessage());
        }
        
        return $this->redirectToRoute('super_admin_analysis_show', ['id' => $analysisRequest->getId()]);
    }

    #[Route('/{id}/download-final', name: 'super_admin_analysis_download_final', methods: ['GET'])]
    public function downloadFinalReport(
        AnalysisRequest $analysisRequest,
        CompanyAnalysisExportService $exportService
    ): Response {
        $this->checkAccess();
        
        $result = $exportService->downloadCompanyReport($analysisRequest);
        
        if (!$result || !file_exists($result['path'])) {
            $this->addFlash('error', 'Rapport non trouvé.');
            return $this->redirectToRoute('super_admin_analysis_show', ['id' => $analysisRequest->getId()]);
        }
        
        $filePath = $result['path'];
        $filename = $result['filename'];
        $extension = strtolower(pathinfo($filename, PATHINFO_EXTENSION));
        
        // ✅ Vérifier l'intégrité du fichier avant envoi
        if ($extension === 'pdf') {
            $handle = fopen($filePath, 'rb');
            $header = fread($handle, 5);
            fclose($handle);
            
            if (!str_starts_with($header, '%PDF')) {
                $this->logger->error('❌ Fichier PDF corrompu avant téléchargement (Super Admin)', [
                    'path' => $filePath,
                    'header' => bin2hex($header),
                    'analysis_id' => $analysisRequest->getId()
                ]);
                $this->addFlash('error', 'Le fichier PDF est corrompu. Veuillez le réuploader.');
                return $this->redirectToRoute('super_admin_analysis_show', ['id' => $analysisRequest->getId()]);
            }
            $this->logger->info('✅ PDF valide détecté pour téléchargement (Super Admin)', [
                'analysis_id' => $analysisRequest->getId()
            ]);
        }
        
        // ✅ Forcer les headers corrects
        $response = $this->file($filePath, $filename);
        
        if ($extension === 'pdf') {
            $response->headers->set('Content-Type', 'application/pdf');
            $response->headers->set('Content-Disposition', sprintf('attachment; filename="%s"', $filename));
            $response->headers->set('Content-Transfer-Encoding', 'binary');
            $response->headers->set('Accept-Ranges', 'bytes');
        } elseif ($extension === 'pbix') {
            $response->headers->set('Content-Type', 'application/octet-stream');
            $response->headers->set('Content-Disposition', sprintf('attachment; filename="%s"', $filename));
        } elseif (in_array($extension, ['xlsx', 'xls'])) {
            $response->headers->set('Content-Type', 'application/vnd.openxmlformats-officedocument.spreadsheetml.sheet');
        } elseif ($extension === 'zip') {
            $response->headers->set('Content-Type', 'application/zip');
        }
        
        return $response;
    }

    #[Route('/{id}/download-raw', name: 'super_admin_analysis_download_raw', methods: ['GET'])]
    public function downloadRawData(
        AnalysisRequest $analysisRequest,
        CompanyAnalysisExportService $exportService
    ): Response {
        $this->checkAccess();
        
        $filePath = $exportService->downloadRawData($analysisRequest);
        
        if (!$filePath || !file_exists($filePath)) {
            $this->addFlash('error', 'Fichier non trouvé.');
            return $this->redirectToRoute('super_admin_analysis_show', ['id' => $analysisRequest->getId()]);
        }
        
        $filename = basename($filePath);
        
        // ✅ La méthode file() gère déjà Content-Disposition
        return $this->file($filePath, $filename);
    }
    
    #[Route('/{id}/payment-link', name: 'super_admin_analysis_payment_link', methods: ['GET'])]
    public function getPaymentLink(AnalysisRequest $analysisRequest, FedaPayService $fedaPayService): JsonResponse
    {
        $this->checkAccess();
        
        $paymentUrl = $this->generatePaymentLink($analysisRequest, $fedaPayService);
        
        return $this->json(['payment_url' => $paymentUrl]);
    }

    #[Route('/{id}/send-payment-link', name: 'super_admin_analysis_send_payment_link', methods: ['POST'])]
    public function sendPaymentLink(
        AnalysisRequest $analysisRequest, 
        NotificationService $notificationService,
        Request $request
    ): JsonResponse {
        $this->checkAccess();
        
        $data = json_decode($request->getContent(), true);
        $paymentLink = $data['payment_link'] ?? null;
        
        if (!$paymentLink) {
            return $this->json(['error' => 'Lien de paiement manquant'], 400);
        }
        
        $company = $analysisRequest->getCompany();
        
        $subject = '💳 Paiement requis pour votre analyse - ' . $analysisRequest->getRequestNumber();
        
        $notificationService->sendTemplateEmail(
            $company->getEmail(),
            $subject,
            'super_admin/analysis/payment_link.html.twig',
            [
                'company' => $company,
                'analysis' => $analysisRequest,
                'payment_link' => $paymentLink,
                'expires_at' => $analysisRequest->getExpiresAt(),
            ]
        );
        
        $user = $this->getUser();
        $userEmail = $user instanceof User ? $user->getEmail() : 'unknown@hma-market.com';
        
        $this->logger->info('Lien de paiement envoyé', [
            'analysis_id' => $analysisRequest->getId(),
            'company_email' => $company->getEmail(),
            'sent_by' => $userEmail
        ]);
        
        return $this->json(['success' => true]);
    }

    #[Route('/{id}/force-to-paid', name: 'super_admin_analysis_force_to_paid', methods: ['POST'])]
    public function forceToPaid(AnalysisRequest $analysisRequest): Response
    {
        $this->checkAccess();
        
        $oldStatus = $analysisRequest->getStatus();
        $analysisRequest->setStatus(AnalysisRequest::STATUS_PAID);
        $this->entityManager->flush();
        
        $this->addFlash('success', sprintf(
            'Statut de l\'analyse passé de "%s" à "%s"',
            $oldStatus,
            $analysisRequest->getStatusLabel()
        ));
        
        return $this->redirectToRoute('super_admin_analysis_show', ['id' => $analysisRequest->getId()]);
    }

    #[Route('/{id}/retry', name: 'super_admin_analysis_retry', methods: ['POST'])]
    public function retry(AnalysisRequest $analysisRequest): Response
    {
        $this->checkAccess();
        
        if ($analysisRequest->getStatus() !== AnalysisRequest::STATUS_FAILED) {
            $this->addFlash('warning', 'Seules les analyses en échec peuvent être relancées.');
            return $this->redirectToRoute('super_admin_analysis_show', ['id' => $analysisRequest->getId()]);
        }
        
        $analysisRequest->setStatus(AnalysisRequest::STATUS_PAID);
        $this->entityManager->flush();
        
        $this->addFlash('success', 'L\'analyse peut être régénérée. Cliquez sur "Exporter les données brutes".');
        
        return $this->redirectToRoute('super_admin_analysis_show', ['id' => $analysisRequest->getId()]);
    }

    #[Route('/{id}/cancel', name: 'super_admin_analysis_cancel', methods: ['POST'])]
    public function cancel(AnalysisRequest $analysisRequest): Response
    {
        $this->checkAccess();
        
        if ($analysisRequest->getStatus() !== AnalysisRequest::STATUS_PROCESSING) {
            $this->addFlash('warning', 'Cette analyse n\'est pas en cours de génération.');
            return $this->redirectToRoute('super_admin_analysis_show', ['id' => $analysisRequest->getId()]);
        }
        
        $analysisRequest->setStatus(AnalysisRequest::STATUS_FAILED);
        $this->entityManager->flush();
        
        $this->addFlash('info', 'La génération de l\'analyse a été annulée.');
        
        return $this->redirectToRoute('super_admin_analysis_show', ['id' => $analysisRequest->getId()]);
    }

    private function generatePaymentLink(AnalysisRequest $analysisRequest, FedaPayService $fedaPayService): string
    {
        $company = $analysisRequest->getCompany();
        
        $callbackUrl = $this->generateUrl('public_payment_callback', [], 0);
        
        try {
            $paymentUrl = $fedaPayService->createPayment([
                'amount' => (float)$analysisRequest->getAmount(),
                'description' => 'Analyse ' . $analysisRequest->getTypeLabel() . ' - ' . $company->getCompanyName(),
                'currency' => 'XOF',
                'customer_email' => $company->getEmail(),
                'customer_name' => $company->getCompanyName(),
                'callback_url' => $callbackUrl,
                'reference' => $analysisRequest->getRequestNumber(),
                'custom_metadata' => [
                    'request_number' => $analysisRequest->getRequestNumber(),
                    'analysis_id' => $analysisRequest->getId()
                ]
            ]);
            
            return $paymentUrl;
            
        } catch (\Exception $e) {
            $this->logger->error('Erreur génération paiement', ['error' => $e->getMessage()]);
            return '#';
        }
    }
    
    private function getGlobalStats(AnalysisRequestRepository $repository): array
    {
        $qb = $repository->createQueryBuilder('a');
        
        $totalCount = (clone $qb)->select('COUNT(a.id)')->getQuery()->getSingleScalarResult();
        $completedCount = (clone $qb)->select('COUNT(a.id)')
            ->where('a.status = :status')
            ->setParameter('status', AnalysisRequest::STATUS_COMPLETED)
            ->getQuery()->getSingleScalarResult();
        $pendingCount = (clone $qb)->select('COUNT(a.id)')
            ->where('a.status = :status')
            ->setParameter('status', AnalysisRequest::STATUS_PENDING)
            ->getQuery()->getSingleScalarResult();
        $totalAmount = (clone $qb)->select('SUM(a.amount)')
            ->where('a.status = :status')
            ->setParameter('status', AnalysisRequest::STATUS_COMPLETED)
            ->getQuery()->getSingleScalarResult() ?? 0;
        
        return [
            'total' => (int)$totalCount,
            'completed' => (int)$completedCount,
            'pending' => (int)$pendingCount,
            'total_amount' => (float)$totalAmount,
        ];
    }
}