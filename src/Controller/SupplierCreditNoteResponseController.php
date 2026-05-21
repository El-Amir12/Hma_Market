<?php
// src/Controller/SupplierCreditNoteResponseController.php

namespace App\Controller;

use App\Entity\SupplierCreditNoteToken;
use App\Repository\SupplierCreditNoteTokenRepository;
use App\Service\SupplierCreditNoteService;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;
use Symfony\Component\HttpFoundation\JsonResponse;

class SupplierCreditNoteResponseController extends AbstractController
{
    #[Route('/supplier/credit-note/respond/{token}', name: 'supplier_credit_note_respond', methods: ['GET', 'POST'])]
    public function respond(
        string $token,
        Request $request,
        SupplierCreditNoteTokenRepository $tokenRepository,
        SupplierCreditNoteService $service,
        EntityManagerInterface $entityManager
    ): Response {
        $tokenEntity = $tokenRepository->findValidToken($token);

        if (!$tokenEntity) {
            $this->addFlash('error', 'Lien invalide ou expiré. Veuillez contacter le service client.');
            return $this->redirectToRoute('app_home');
        }

        $creditNote = $tokenEntity->getCreditNote();
        $supplier = $creditNote->getSupplier();

        if ($request->isMethod('POST')) {
            $response = $request->request->get('response');
            $proposedAmount = $request->request->get('proposed_amount');
            $decision = $request->request->get('decision');
            $reference = $request->request->get('reference');

            $service->processSupplierResponse(
                $creditNote,
                $response,
                $proposedAmount ? (float)$proposedAmount : null,
                $decision,
                $reference
            );

            $tokenEntity->setUsedAt(new \DateTimeImmutable());
            $tokenEntity->setIpAddress($request->getClientIp());
            $tokenEntity->setUserAgent($request->headers->get('User-Agent'));
            $entityManager->flush();

            $this->addFlash('success', 'Merci ! Votre réponse a bien été enregistrée.');
            return $this->redirectToRoute('supplier_credit_note_thanks');
        }

        return $this->render('supplier_credit_note/supplier_respond.html.twig', [
            'creditNote' => $creditNote,
            'supplier' => $supplier,
            'token' => $token,
        ]);
    }

    #[Route('/supplier/credit-note/thanks', name: 'supplier_credit_note_thanks', methods: ['GET'])]
    public function thanks(): Response
    {
        return $this->render('supplier_credit_note/thanks.html.twig');
    }

    /**
     * Route pour la création directe d'un signalement depuis la réception
     * 
     * @Route("/supplier/credit-note/new-direct", name="app_supplier_credit_note_new_direct_response", methods={"POST"})
     */
    #[Route('/supplier/credit-note/new-direct', name: 'app_supplier_credit_note_new_direct_response', methods: ['POST'])]
    public function newDirect(Request $request): JsonResponse
    {
        try {
            // Récupérer les données du formulaire
            $batchId = $request->request->get('batch_id');
            $issueType = $request->request->get('issue_type');
            $description = $request->request->get('description');
            $declaredAmount = (float)$request->request->get('declared_amount', 0);
            $priority = $request->request->get('priority', 'medium');
            $affectedQuantity = $request->request->get('affected_quantity');
            $stockAction = $request->request->get('stock_action', 'none');
            $productName = $request->request->get('product_name');
            $batchNumber = $request->request->get('batch_number');
            $unitPrice = (float)$request->request->get('unit_price', 0);
            
            // Stocker en session (car le lot n'existe pas encore)
            $session = $request->getSession();
            $pendingIssues = $session->get('pending_issues', []);
            
            $pendingIssues[] = [
                'batch_id' => $batchId,
                'product_name' => $productName,
                'batch_number' => $batchNumber,
                'unit_price' => $unitPrice,
                'issue_type' => $issueType,
                'description' => $description,
                'declared_amount' => $declaredAmount,
                'priority' => $priority,
                'affected_quantity' => $affectedQuantity,
                'stock_action' => $stockAction,
                'created_at' => (new \DateTime())->format('Y-m-d H:i:s')
            ];
            
            $session->set('pending_issues', $pendingIssues);
            
            return $this->json([
                'success' => true,
                'message' => 'Problème enregistré temporairement. Vous pourrez créer l\'avoir après la réception.'
            ]);
            
        } catch (\Exception $e) {
            return $this->json([
                'success' => false,
                'error' => $e->getMessage()
            ], 500);
        }
    }
}