<?php
// src/Controller/SuperAdmin/PaymentController.php
namespace App\Controller\SuperAdmin;

use App\Entity\Payment;
use App\Entity\Subscription;
use App\Repository\PaymentRepository;
use App\Repository\HmaServiceRepository;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;
use Symfony\Component\Security\Http\Attribute\IsGranted;

#[Route('/super-admin/payment')]
#[IsGranted('ROLE_SUPER_ADMIN')]
class PaymentController extends AbstractController
{
    #[Route('/', name: 'super_admin_payment_index', methods: ['GET'])]
    public function index(
        PaymentRepository $paymentRepository,
        Request $request,
        HmaServiceRepository $hmaServiceRepository
    ): Response {
        $filters = [
            'company_id' => $request->query->get('company_id'),
            'status' => $request->query->get('status'),
            'payment_method' => $request->query->get('payment_method'),
            'date_from' => $request->query->get('date_from'),
            'date_to' => $request->query->get('date_to'),
        ];

        $queryBuilder = $paymentRepository->createQueryBuilder('p')
            ->leftJoin('p.hma_service', 'h')
            ->leftJoin('p.subscription', 's')
            ->addSelect('h', 's');

        if ($filters['company_id']) {
            $queryBuilder->andWhere('h.id = :companyId')
                ->setParameter('companyId', $filters['company_id']);
        }

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

        // Calcul des totaux
        $totalAmount = 0;
        foreach ($payments as $payment) {
            if (in_array($payment->getStatus(), ['completed', 'paid'])) {
                $totalAmount += floatval($payment->getAmount());
            }
        }
        $companies = $hmaServiceRepository->findBy([], ['companyName' => 'ASC']);

        return $this->render('super_admin/payment/index.html.twig', [
            'payments' => $payments,
            'filters' => $filters,
            'totalAmount' => $totalAmount,
            'companies' => $companies,
        ]);
    }

    #[Route('/{id}', name: 'super_admin_payment_show', methods: ['GET'])]
    public function show(Payment $payment): Response
    {
        return $this->render('super_admin/payment/show.html.twig', [
            'payment' => $payment,
        ]);
    }
}