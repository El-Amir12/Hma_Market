<?php
// src/Controller/SuperAdmin/SubscriptionController.php
namespace App\Controller\SuperAdmin;

use App\Entity\Subscription;
use App\Entity\Payment;
use App\Entity\HmaService;  // ← AJOUT
use App\Form\SubscriptionType;
use App\Repository\SubscriptionRepository;
use App\Repository\SubscriptionPlanRepository;
use App\Repository\HmaServiceRepository;
use App\Repository\PaymentRepository;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;
use Symfony\Component\Security\Http\Attribute\IsGranted;

#[Route('/super-admin/subscription')]
#[IsGranted('ROLE_SUPER_ADMIN')]
class SubscriptionController extends AbstractController
{
    #[Route('/', name: 'super_admin_subscription_index', methods: ['GET'])]
    public function index(
        SubscriptionRepository $subscriptionRepository,
        HmaServiceRepository $hmaServiceRepository,
        PaymentRepository $paymentRepository,  // ← AJOUT
        Request $request
    ): Response {
        // Filtres
        $filters = [
            'company_id' => $request->query->get('company_id'),
            'status' => $request->query->get('status'),
            'plan_id' => $request->query->get('plan_id'),
            'date_from' => $request->query->get('date_from'),
            'date_to' => $request->query->get('date_to'),
        ];

        $queryBuilder = $subscriptionRepository->createQueryBuilder('s')
            ->leftJoin('s.hma_service', 'h')
            ->leftJoin('s.subscriptionPlan', 'p')
            ->addSelect('h', 'p');

        if ($filters['company_id']) {
            $queryBuilder->andWhere('h.id = :companyId')
                ->setParameter('companyId', $filters['company_id']);
        }

        if ($filters['status']) {
            $queryBuilder->andWhere('s.status = :status')
                ->setParameter('status', $filters['status']);
        }

        if ($filters['plan_id']) {
            $queryBuilder->andWhere('p.id = :planId')
                ->setParameter('planId', $filters['plan_id']);
        }

        if ($filters['date_from']) {
            $queryBuilder->andWhere('s.createdAt >= :dateFrom')
                ->setParameter('dateFrom', new \DateTimeImmutable($filters['date_from']));
        }

        if ($filters['date_to']) {
            $queryBuilder->andWhere('s.createdAt <= :dateTo')
                ->setParameter('dateTo', new \DateTimeImmutable($filters['date_to'] . ' 23:59:59'));
        }

        $queryBuilder->orderBy('s.createdAt', 'DESC');

        $subscriptions = $queryBuilder->getQuery()->getResult();

        // 🔑 Récupérer le dernier paiement pour chaque abonnement
        foreach ($subscriptions as $subscription) {
            $lastPayment = $paymentRepository->findOneBy(
                ['subscription' => $subscription],
                ['createdAt' => 'DESC']
            );
            // Ajouter le paiement comme propriété dynamique
            $subscription->lastPayment = $lastPayment;
        }

        $companies = $hmaServiceRepository->findBy([], ['companyName' => 'ASC']);

        return $this->render('super_admin/subscription/index.html.twig', [
            'subscriptions' => $subscriptions,
            'filters' => $filters,
            'companies' => $companies,
        ]);
    }

    #[Route('/new', name: 'super_admin_subscription_new', methods: ['GET', 'POST'])]
    public function new(
        Request $request,
        EntityManagerInterface $entityManager,
        HmaServiceRepository $hmaServiceRepository,
        SubscriptionPlanRepository $subscriptionPlanRepository
    ): Response {
        $subscription = new Subscription();
        
        // Définir les valeurs par défaut
        $subscription->setStatus('pending');
        $subscription->setSubscriptionActive(true);
        $subscription->setCreatedAt(new \DateTimeImmutable());

        $form = $this->createForm(SubscriptionType::class, $subscription, [
            'is_super_admin' => true,
        ]);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $entityManager->persist($subscription);
            $entityManager->flush();

            $this->addFlash('success', 'Abonnement créé avec succès.');
            return $this->redirectToRoute('super_admin_subscription_show', ['id' => $subscription->getId()]);
        }

        return $this->render('super_admin/subscription/new.html.twig', [
            'subscription' => $subscription,
            'form' => $form,
        ]);
    }

    #[Route('/{id}', name: 'super_admin_subscription_show', methods: ['GET'])]
    public function show(
        Subscription $subscription,
        PaymentRepository $paymentRepository
    ): Response {
        // Récupérer les paiements associés
        $payments = $paymentRepository->findBy(['subscription' => $subscription], ['createdAt' => 'DESC']);
        
        // Calculer le total des paiements
        $totalPaid = 0;
        foreach ($payments as $payment) {
            if ($payment->getStatus() === 'completed' || $payment->getStatus() === 'paid') {
                $totalPaid += floatval($payment->getAmount());
            }
        }

        return $this->render('super_admin/subscription/show.html.twig', [
            'subscription' => $subscription,
            'payments' => $payments,
            'totalPaid' => $totalPaid,
        ]);
    }

    #[Route('/export/{company}/{format}', name: 'super_admin_subscription_export', methods: ['GET'])]
    public function export(
        HmaService $company,
        string $format,
        SubscriptionRepository $subscriptionRepository,
        PaymentRepository $paymentRepository  // ← AJOUT
    ): Response {
        // Récupérer tous les abonnements de l'entreprise
        $subscriptions = $subscriptionRepository->findBy(
            ['hma_service' => $company],
            ['createdAt' => 'DESC']
        );
        
        if ($format === 'pdf') {
            // Pour PDF, vous pouvez utiliser un générateur de PDF comme DomPDF ou TCPDF
            // Exemple avec DomPDF (installez via composer require dompdf/dompdf)
            $html = $this->renderView('super_admin/subscription/export_pdf.html.twig', [
                'company' => $company,
                'subscriptions' => $subscriptions,
            ]);
            
            $pdf = new \Dompdf\Dompdf();
            $pdf->loadHtml($html);
            $pdf->setPaper('A4', 'landscape');
            $pdf->render();
            
            return new Response($pdf->output(), 200, [
                'Content-Type' => 'application/pdf',
                'Content-Disposition' => sprintf('attachment; filename="abonnements_%s.pdf"', $company->getCompanyName())
            ]);
        }
        
        if ($format === 'excel') {
            // Pour Excel, vous pouvez utiliser PhpSpreadsheet
            // installez via composer require phpoffice/phpspreadsheet
            $spreadsheet = new \PhpOffice\PhpSpreadsheet\Spreadsheet();
            $sheet = $spreadsheet->getActiveSheet();
            
            // En-têtes
            $sheet->setCellValue('A1', 'Date');
            $sheet->setCellValue('B1', 'Plan');
            $sheet->setCellValue('C1', 'Début');
            $sheet->setCellValue('D1', 'Fin');
            $sheet->setCellValue('E1', 'Montant');
            $sheet->setCellValue('F1', 'Statut');
            $sheet->setCellValue('G1', 'Période');
            $sheet->setCellValue('H1', 'Paiement');
            
            $row = 2;
            foreach ($subscriptions as $subscription) {
                // Récupérer le dernier paiement
                $lastPayment = $paymentRepository->findOneBy(
                    ['subscription' => $subscription],
                    ['createdAt' => 'DESC']
                );
                
                $sheet->setCellValue('A' . $row, $subscription->getCreatedAt()?->format('d/m/Y H:i'));
                $sheet->setCellValue('B' . $row, $subscription->getPlanLabel() ?? 'N/A');
                $sheet->setCellValue('C' . $row, $subscription->getStartsAt()?->format('d/m/Y'));
                $sheet->setCellValue('D' . $row, $subscription->getEndsAt()?->format('d/m/Y'));
                $sheet->setCellValue('E' . $row, $subscription->getPlanPrice() ?? 0);
                $sheet->setCellValue('F' . $row, $subscription->getStatusLabel());
                $sheet->setCellValue('G' . $row, $subscription->getBillingPeriodLabel());
                $sheet->setCellValue('H' . $row, $lastPayment ? $lastPayment->getStatus() : 'Aucun');
                $row++;
            }
            
            $writer = new \PhpOffice\PhpSpreadsheet\Writer\Xlsx($spreadsheet);
            $tempFile = tempnam(sys_get_temp_dir(), 'export_');
            $writer->save($tempFile);
            
            return new Response(file_get_contents($tempFile), 200, [
                'Content-Type' => 'application/vnd.openxmlformats-officedocument.spreadsheetml.sheet',
                'Content-Disposition' => sprintf('attachment; filename="abonnements_%s.xlsx"', $company->getCompanyName())
            ]);
        }
        
        throw $this->createNotFoundException('Format non supporté');
    }

    // Pas de méthode edit ni delete
}