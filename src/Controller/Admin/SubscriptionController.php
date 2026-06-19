<?php
// src/Controller/Admin/SubscriptionController.php
namespace App\Controller\Admin;

use App\Entity\Subscription;
use App\Entity\Payment;
use App\Repository\SubscriptionRepository;
use App\Repository\PaymentRepository;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;
use Symfony\Component\Security\Http\Attribute\IsGranted;

#[Route('/admin/subscription')]
#[IsGranted('ROLE_ADMIN')]
class SubscriptionController extends AbstractController
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

    #[Route('/', name: 'admin_subscription_index', methods: ['GET'])]
    public function index(
        SubscriptionRepository $subscriptionRepository,
        Request $request
    ): Response {
        $hmaService = $this->getCurrentHmaService();
        
        $filters = [
            'status' => $request->query->get('status'),
            'plan_id' => $request->query->get('plan_id'),
            'date_from' => $request->query->get('date_from'),
            'date_to' => $request->query->get('date_to'),
        ];

        $queryBuilder = $subscriptionRepository->createQueryBuilder('s')
            ->leftJoin('s.subscriptionPlan', 'p')
            ->addSelect('p')
            ->where('s.hma_service = :hmaService')
            ->setParameter('hmaService', $hmaService);

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

        // Calcul des statistiques
        $stats = $this->calculateStats($subscriptions);

        return $this->render('admin/subscription/index.html.twig', [
            'subscriptions' => $subscriptions,
            'filters' => $filters,
            'stats' => $stats,
            'company' => $hmaService,
        ]);
    }

    #[Route('/{id}', name: 'admin_subscription_show', methods: ['GET'])]
    #[IsGranted('SUBSCRIPTION_VIEW', subject: 'subscription')]
    public function show(
        Subscription $subscription,
        PaymentRepository $paymentRepository
    ): Response {
        $hmaService = $this->getCurrentHmaService();
        
        // Vérifier que l'abonnement appartient bien à l'entreprise
        if ($subscription->getHmaService()->getId() !== $hmaService->getId()) {
            throw $this->createAccessDeniedException('Accès non autorisé');
        }

        $payments = $paymentRepository->findBy(
            ['subscription' => $subscription, 'hma_service' => $hmaService],
            ['createdAt' => 'DESC']
        );

        $totalPaid = 0;
        foreach ($payments as $payment) {
            if (in_array($payment->getStatus(), ['completed', 'paid'])) {
                $totalPaid += floatval($payment->getAmount());
            }
        }

        // Vérifier si l'abonnement est actif
        $isActive = $subscription->isSubscriptionActive() 
            && $subscription->getStatus() === 'active'
            && (!$subscription->getEndsAt() || $subscription->getEndsAt() > new \DateTimeImmutable());

        return $this->render('admin/subscription/show.html.twig', [
            'subscription' => $subscription,
            'payments' => $payments,
            'totalPaid' => $totalPaid,
            'isActive' => $isActive,
            'company' => $hmaService,
        ]);
    }

    // Pas de new, edit, delete pour admin/manager

    private function calculateStats(array $subscriptions): array
    {
        $stats = [
            'total' => count($subscriptions),
            'active' => 0,
            'expired' => 0,
            'pending' => 0,
            'cancelled' => 0,
        ];

        foreach ($subscriptions as $sub) {
            switch ($sub->getStatus()) {
                case 'active':
                    $stats['active']++;
                    break;
                case 'expired':
                    $stats['expired']++;
                    break;
                case 'pending':
                    $stats['pending']++;
                    break;
                case 'cancelled':
                    $stats['cancelled']++;
                    break;
            }
        }

        return $stats;
    }
}