<?php
// src/Controller/Admin/PaymentController.php
namespace App\Controller\Admin;

use App\Entity\Payment;
use App\Repository\PaymentRepository;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;
use Symfony\Component\Security\Http\Attribute\IsGranted;

#[Route('/admin/payment')]
#[IsGranted('ROLE_ADMIN')]
class PaymentController extends AbstractController
{
    private function getCurrentHmaService()
    {
        $user = $this->getUser();
        
        if (method_exists($user, 'getHmaService')) {
            return $user->getHmaService();
        }
        
        if ($user instanceof \App\Entity\HmaService) {
            return $user;
        }
        
        throw $this->createAccessDeniedException('Entreprise non trouvée');
    }

    #[Route('/', name: 'admin_payment_index', methods: ['GET'])]
    public function index(
        PaymentRepository $paymentRepository,
        Request $request
    ): Response {
        $hmaService = $this->getCurrentHmaService();
        
        $filters = [
            'status' => $request->query->get('status'),
            'payment_method' => $request->query->get('payment_method'),
            'date_from' => $request->query->get('date_from'),
            'date_to' => $request->query->get('date_to'),
        ];

        $queryBuilder = $paymentRepository->createQueryBuilder('p')
            ->leftJoin('p.subscription', 's')
            ->addSelect('s')
            ->where('p.hma_service = :hmaService')
            ->setParameter('hmaService', $hmaService);

        if ($filters['status']) {
            $queryBuilder->andWhere('p.status = :status')
                ->setParameter('status', $filters['status']);
        }

        if ($filters['payment_method']) {
            $queryBuilder->andWhere('p.paymentMethod = :paymentMethod')
                ->setParameter('paymentMethod', $filters['payment_method']);
        }

        if ($filters['date_from']) {
            $queryBuilder->andWhere('p.paymentDate >= :dateFrom')
                ->setParameter('dateFrom', new \DateTime($filters['date_from']));
        }

        if ($filters['date_to']) {
            $queryBuilder->andWhere('p.paymentDate <= :dateTo')
                ->setParameter('dateTo', new \DateTime($filters['date_to'] . ' 23:59:59'));
        }

        $queryBuilder->orderBy('p.paymentDate', 'DESC');
        $payments = $queryBuilder->getQuery()->getResult();

        // Calcul des statistiques
        $stats = [
            'total' => count($payments),
            'total_amount' => 0,
            'last_payment_amount' => 0,
        ];

        foreach ($payments as $payment) {
            if (in_array($payment->getStatus(), ['completed', 'paid'])) {
                $stats['total_amount'] += floatval($payment->getAmount());
            }
        }

        if (!empty($payments)) {
            $stats['last_payment_amount'] = floatval($payments[0]->getAmount());
        }

        return $this->render('admin/payment/index.html.twig', [
            'payments' => $payments,
            'filters' => $filters,
            'stats' => $stats,
            'company' => $hmaService,
        ]);
    }

    #[Route('/{id}', name: 'admin_payment_show', methods: ['GET'])]
    #[IsGranted('PAYMENT_VIEW', subject: 'payment')]
    public function show(Payment $payment): Response
    {
        $hmaService = $this->getCurrentHmaService();
        
        // Vérifier que le paiement appartient bien à l'entreprise
        if ($payment->getHmaService()->getId() !== $hmaService->getId()) {
            throw $this->createAccessDeniedException('Accès non autorisé');
        }

        return $this->render('admin/payment/show.html.twig', [
            'payment' => $payment,
            'company' => $hmaService,
        ]);
    }
}