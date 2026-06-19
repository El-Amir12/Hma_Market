<?php
// src/Controller/SuperAdmin/SubscriptionController.php
namespace App\Controller\SuperAdmin;

use App\Entity\Subscription;
use App\Entity\Payment;
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
        HmaServiceRepository $hmaServiceRepository,  // ← Ajoutez ce paramètre
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

    // Pas de méthode edit ni delete
}