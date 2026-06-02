<?php
// src/Controller/PaymentController.php

namespace App\Controller;

use App\Entity\AnalysisRequest;
use App\Entity\AnalysisPayment;
use App\Service\FedaPayService;
use Doctrine\ORM\EntityManagerInterface;
use Psr\Log\LoggerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class PaymentController extends AbstractController
{
    #[Route('/payment/callback', name: 'public_payment_callback', methods: ['GET', 'POST'])]
    public function callback(
        Request $request,
        FedaPayService $fedaPayService,
        EntityManagerInterface $entityManager,
        LoggerInterface $logger
    ): Response {
        // ✅ Récupérer tous les paramètres possibles
        $allParams = array_merge($request->query->all(), $request->request->all());
        
        $logger->info('📞 Callback FedaPay reçu', [
            'method' => $request->getMethod(),
            'all_params' => $allParams
        ]);
        
        // ✅ Récupérer l'ID de transaction
        $transactionId = $request->query->get('id') 
            ?: $request->query->get('transaction_id')
            ?: $request->query->get('transactionId')
            ?: $request->request->get('id')
            ?: $request->request->get('transaction_id')
            ?: $request->request->get('transactionId');
        
        if (!$transactionId) {
            $logger->error('❌ Transaction ID manquant dans le callback');
            return $this->redirectToRoute('payment_error', ['error' => 'Transaction ID manquant']);
        }
        
        try {
            // ✅ Vérifier si le paiement existe déjà en base
            $existingPayment = $entityManager->getRepository(AnalysisPayment::class)
                ->findOneBy(['transaction_id' => $transactionId]);
            
            if ($existingPayment && $existingPayment->getAnalysisRequest()) {
                $logger->info('ℹ️ Paiement déjà traité', ['transaction_id' => $transactionId]);
                return $this->redirectToRoute('payment_already_processed', [
                    'id' => $existingPayment->getAnalysisRequest()->getId()
                ]);
            }
            
            // ✅ Vérifier le paiement via l'API FedaPay
            $transactionData = $fedaPayService->verifyPayment($transactionId);
            
            $logger->info('✅ Transaction FedaPay', [
                'transaction_id' => $transactionId,
                'status' => $transactionData['status'] ?? 'unknown',
                'reference' => $transactionData['reference'] ?? null
            ]);
            
            $apiStatus = $transactionData['status'] ?? null;
            
            if ($apiStatus !== 'approved') {
                $logger->warning('⚠️ Transaction non approuvée', ['status' => $apiStatus]);
                return $this->redirectToRoute('payment_error', ['error' => "Transaction non approuvée: " . ($apiStatus ?? 'inconnu')]);
            }
            
            // ✅ Récupérer le numéro de demande
            $requestNumber = null;
            
            if (isset($transactionData['custom_metadata']['request_number'])) {
                $requestNumber = $transactionData['custom_metadata']['request_number'];
            } elseif (isset($transactionData['reference'])) {
                $requestNumber = $transactionData['reference'];
            } elseif (isset($transactionData['description'])) {
                preg_match('/ANL-\d{8}-\d{4}/', $transactionData['description'], $matches);
                if (!empty($matches)) {
                    $requestNumber = $matches[0];
                }
            }
            
            $logger->info('🔍 Recherche par request_number', ['request_number' => $requestNumber]);
            
            // ✅ Chercher la demande
            $analysisRequest = null;
            if ($requestNumber) {
                $analysisRequest = $entityManager->getRepository(AnalysisRequest::class)
                    ->findOneBy(['request_number' => $requestNumber]);
            }
            
            // ✅ Si non trouvé, chercher la demande la plus récente en attente
            if (!$analysisRequest) {
                $analysisRequest = $entityManager->getRepository(AnalysisRequest::class)
                    ->createQueryBuilder('a')
                    ->where('a.status = :status')
                    ->setParameter('status', AnalysisRequest::STATUS_PENDING)
                    ->orderBy('a.created_at', 'DESC')
                    ->setMaxResults(1)
                    ->getQuery()
                    ->getOneOrNullResult();
                
                if ($analysisRequest) {
                    $logger->info('✅ Association automatique', [
                        'request_number' => $analysisRequest->getRequestNumber(),
                        'analysis_id' => $analysisRequest->getId()
                    ]);
                }
            }
            
            if (!$analysisRequest) {
                $logger->error('❌ Aucune demande trouvée pour cette transaction', [
                    'transaction_id' => $transactionId,
                    'request_number' => $requestNumber
                ]);
                return $this->redirectToRoute('payment_error', ['error' => "Aucune demande associée. Transaction: {$transactionId}"]);
            }
            
            // ✅ Mettre à jour la demande
            $analysisRequest->setStatus(AnalysisRequest::STATUS_PAID);
            $analysisRequest->setPaidAt(new \DateTime());
            $analysisRequest->setPaymentTransactionId($transactionId);
            
            // ✅ Créer l'enregistrement de paiement
            $payment = new AnalysisPayment();
            $payment->setAnalysisRequest($analysisRequest);
            $payment->setTransactionId($transactionId);
            $payment->setAmount($analysisRequest->getAmount());
            $payment->setPaymentData($transactionData);
            $payment->setStatus(AnalysisPayment::STATUS_SUCCESS);
            $payment->setPaidAt(new \DateTimeImmutable());
            
            $entityManager->persist($payment);
            $entityManager->flush();
            
            $logger->info('💰 Paiement enregistré avec succès', [
                'analysis_id' => $analysisRequest->getId(),
                'request_number' => $analysisRequest->getRequestNumber(),
                'transaction_id' => $transactionId,
                'new_status' => $analysisRequest->getStatus()
            ]);
            
            return $this->redirectToRoute('payment_success_with_id', ['id' => $analysisRequest->getId()]);
            
        } catch (\Exception $e) {
            $logger->error('❌ Exception dans le callback', [
                'error' => $e->getMessage(),
                'trace' => $e->getTraceAsString(),
                'transaction_id' => $transactionId
            ]);
            return $this->redirectToRoute('payment_error', ['error' => 'Erreur technique: ' . $e->getMessage()]);
        }
    }
    
    #[Route('/payment/success/{id}', name: 'payment_success_with_id', methods: ['GET'])]
    public function successWithId(int $id, EntityManagerInterface $entityManager): Response
    {
        $analysisRequest = $entityManager->getRepository(AnalysisRequest::class)->find($id);
        
        return $this->render('payment/success.html.twig', [
            'analysis' => $analysisRequest,
            'analysis_id' => $id
        ]);
    }
    
    #[Route('/payment/success', name: 'payment_success', methods: ['GET'])]
    public function success(): Response
    {
        return $this->render('payment/success.html.twig');
    }
    
    #[Route('/payment/error', name: 'payment_error', methods: ['GET'])]
    public function error(Request $request): Response
    {
        $error = $request->query->get('error', 'Une erreur est survenue lors du paiement.');
        return $this->render('payment/error.html.twig', ['error' => $error]);
    }
    
    #[Route('/payment/already-processed/{id}', name: 'payment_already_processed', methods: ['GET'])]
    public function alreadyProcessed(int $id, EntityManagerInterface $entityManager): Response
    {
        $analysisRequest = $entityManager->getRepository(AnalysisRequest::class)->find($id);
        
        return $this->render('payment/already_processed.html.twig', [
            'analysis' => $analysisRequest
        ]);
    }
}