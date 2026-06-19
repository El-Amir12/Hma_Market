<?php
// src/Repository/StatisticsRepository.php
namespace App\Repository;

use App\Entity\HmaService;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;
use Knp\Component\Pager\PaginatorInterface;

class StatisticsRepository extends ServiceEntityRepository
{
    // Map des devises par pays
    private const CURRENCY_MAP = [
        'CM' => 'XAF',
        'CI' => 'XOF',
        'SN' => 'XOF',
        'FR' => 'EUR',
        'US' => 'USD',
        'BJ' => 'FCFA',
        'TG' => 'XOF',
        'ML' => 'XOF',
        'BF' => 'XOF',
        'NE' => 'XOF',
        'GA' => 'XAF',
        'CG' => 'XAF',
        'CD' => 'CDF',
        'MA' => 'MAD',
        'TN' => 'TND',
        'DZ' => 'DZD',
    ];

    private PaginatorInterface $paginator;

    public function __construct(ManagerRegistry $registry, PaginatorInterface $paginator)
    {
        parent::__construct($registry, HmaService::class);
        $this->paginator = $paginator;
    }

    /**
     * Récupère la liste des types d'entreprises distincts
     */
    public function getDistinctCompanyTypes(): array
    {
        $results = $this->createQueryBuilder('h')
            ->select('DISTINCT h.companyType')
            ->where('h.companyType IS NOT NULL')
            ->andWhere('h.companyType != :empty')
            ->setParameter('empty', '')
            ->orderBy('h.companyType', 'ASC')
            ->getQuery()
            ->getResult();

        return array_column($results, 'companyType');
    }

    /**
     * Statistiques globales avec filtres
     */
    public function getGlobalStats(array $filters = []): array
    {
        $qb = $this->createQueryBuilder('h');
        
        // Application des filtres
        $this->applyFilters($qb, $filters);
        
        // Statistiques de base
        $total = (clone $qb)->select('COUNT(h.id)')->getQuery()->getSingleScalarResult();
        $active = (clone $qb)->andWhere('h.hma_active = true')->select('COUNT(h.id)')->getQuery()->getSingleScalarResult();
        $inactive = (clone $qb)->andWhere('h.hma_active = false')->select('COUNT(h.id)')->getQuery()->getSingleScalarResult();
        
        // Compter les entreprises en période d'essai (trialEndsAt dans le futur ET plan = trial)
        $trial = (clone $qb)
            ->andWhere('h.subscriptionPlan = :trialPlan')
            ->andWhere('h.trialEndsAt > :now')
            ->setParameter('trialPlan', 'trial')
            ->setParameter('now', new \DateTime())
            ->select('COUNT(h.id)')
            ->getQuery()
            ->getSingleScalarResult();
        
        // Répartition par plan
        $plans = [];
        foreach (['trial', 'freemium', 'basic', 'premium'] as $plan) {
            $plans[$plan] = (clone $qb)->andWhere('h.subscriptionPlan = :plan')->setParameter('plan', $plan)->select('COUNT(h.id)')->getQuery()->getSingleScalarResult();
        }
        
        // Répartition par type d'entreprise
        $types = (clone $qb)
            ->select('h.companyType as type, COUNT(h.id) as count')
            ->groupBy('h.companyType')
            ->getQuery()
            ->getArrayResult();
        
        return [
            'total' => (int) $total,
            'active' => (int) $active,
            'inactive' => (int) $inactive,
            'trial' => (int) $trial,
            'plans' => $plans,
            'types' => $types,
        ];
    }

    /**
     * Statistiques d'évolution dans le temps
     */
    public function getTimelineStats(array $filters = []): array
    {
        $qb = $this->createQueryBuilder('h');
        $this->applyFilters($qb, $filters);
        
        // Gestion des dates par défaut (12 derniers mois)
        if (empty($filters['date_from'])) {
            $startDate = new \DateTime('-11 months');
            $startDate = $startDate->modify('first day of this month');
        } else {
            $startDate = is_string($filters['date_from']) ? new \DateTime($filters['date_from']) : $filters['date_from'];
            $startDate = $startDate->modify('first day of this month');
        }
        
        if (empty($filters['date_to'])) {
            $endDate = new \DateTime();
            $endDate = $endDate->modify('last day of this month');
        } else {
            $endDate = is_string($filters['date_to']) ? new \DateTime($filters['date_to']) : $filters['date_to'];
            $endDate = $endDate->modify('last day of this month');
        }
        
        $registrations = [];
        $activeEvolution = [];
        
        // Parcourir les mois
        $current = clone $startDate;
        while ($current <= $endDate) {
            $monthStart = clone $current;
            $monthEnd = (clone $current)->modify('last day of this month')->setTime(23, 59, 59);
            
            // Nombre d'inscriptions ce mois-ci
            $registrationsCount = $this->createQueryBuilder('h')
                ->select('COUNT(h.id)')
                ->where('h.createdAt >= :start AND h.createdAt <= :end')
                ->setParameter('start', $monthStart)
                ->setParameter('end', $monthEnd)
                ->getQuery()
                ->getSingleScalarResult();
            
            // Nombre d'entreprises actives à la fin du mois
            $activeCount = $this->createQueryBuilder('h')
                ->select('COUNT(h.id)')
                ->where('h.hma_active = true')
                ->andWhere('h.createdAt <= :end')
                ->setParameter('end', $monthEnd)
                ->getQuery()
                ->getSingleScalarResult();
            
            $registrations[] = [
                'month' => $current->format('M Y'),
                'count' => (int) $registrationsCount
            ];
            
            $activeEvolution[] = [
                'month' => $current->format('M Y'),
                'active' => (int) $activeCount
            ];
            
            // Passer au mois suivant
            $current->modify('first day of next month');
        }
        
        return [
            'registrations' => $registrations,
            'active_evolution' => $activeEvolution
        ];
    }

    /**
     * Répartition géographique (Top villes)
     */
    public function getGeographicDistribution(array $filters = []): array
    {
        $qb = $this->createQueryBuilder('h');
        $this->applyFilters($qb, $filters);
        
        return $qb->select('h.city as city, COUNT(h.id) as count')
            ->andWhere('h.city IS NOT NULL')
            ->andWhere('h.city != :empty')
            ->setParameter('empty', '')
            ->groupBy('h.city')
            ->orderBy('count', 'DESC')
            ->setMaxResults(10)
            ->getQuery()
            ->getArrayResult();
    }

    /**
     * Top entreprises avec pagination
     */
    public function getTopCompaniesPaginated(string $sortBy = 'revenue', int $page = 1, int $limit = 10, array $filters = []): array
    {
        // Récupérer toutes les entreprises avec les filtres
        $qb = $this->findByFilters($filters);
        $companies = $qb->getQuery()->getResult();
        
        // Calculer les valeurs pour chaque entreprise
        $sorted = [];
        foreach ($companies as $company) {
            $value = 0;
            switch ($sortBy) {
                case 'revenue':
                    // Utiliser getTotalRevenue() si disponible, sinon 0
                    $value = method_exists($company, 'getTotalRevenue') ? (float) $company->getTotalRevenue() : 0;
                    break;
                case 'orders':
                    $value = method_exists($company, 'getTotalOrdersCount') ? (int) $company->getTotalOrdersCount() : 0;
                    break;
                case 'products':
                    $value = method_exists($company, 'getTotalProductsCount') ? (int) $company->getTotalProductsCount() : 0;
                    break;
                case 'users':
                    $value = method_exists($company, 'getUsers') ? (int) $company->getUsers()->count() : 0;
                    break;
                default:
                    $value = 0;
            }
            
            $currency = $this->getCurrencyForCountry($company->getCountry());
            $plan = $company->getCurrentPlan();
            $planLabel = $this->getPlanLabel($plan);
            
            $sorted[] = [
                'id' => $company->getId(),
                'name' => $company->getCompanyName() ?? $company->getEmail() ?? 'Sans nom',
                'value' => $value,
                'currency' => $currency,
                'plan' => $plan,
                'plan_label' => $planLabel,
                'plan_class' => $this->getPlanClass($plan),
                'active' => $company->isHmaActive()
            ];
        }
        
        // Trier par valeur décroissante
        usort($sorted, fn($a, $b) => $b['value'] <=> $a['value']);
        
        // Pagination manuelle
        $total = count($sorted);
        $offset = ($page - 1) * $limit;
        $items = array_slice($sorted, $offset, $limit);
        
        return [
            'items' => $items,
            'total' => $total,
            'page' => $page,
            'limit' => $limit,
            'total_pages' => $total > 0 ? ceil($total / $limit) : 1
        ];
    }

    /**
     * Récupère la devise en fonction du code pays
     */
    private function getCurrencyForCountry(?string $countryCode): string
    {
        if ($countryCode === null) {
            return 'FCFA';
        }
        
        return self::CURRENCY_MAP[$countryCode] ?? 'FCFA';
    }

    /**
     * Récupère le libellé du plan
     */
    private function getPlanLabel(string $plan): string
    {
        return match($plan) {
            'trial' => 'Essai',
            'freemium' => 'Freemium',
            'basic' => 'Basic',
            'premium' => 'Premium',
            default => 'Freemium'
        };
    }

    /**
     * Récupère la classe CSS pour le plan
     */
    private function getPlanClass(string $plan): string
    {
        return match($plan) {
            'trial' => 'trial',
            'freemium' => 'freemium',
            'basic' => 'basic',
            'premium' => 'premium',
            default => 'freemium'
        };
    }

    /**
     * Taux de conversion (essai -> payant)
     */
    public function getConversionRate(array $filters = []): array
    {
        $qb = $this->createQueryBuilder('h');
        $this->applyFilters($qb, $filters);
        
        // Compter les entreprises qui sont ou ont été en essai
        $totalTrial = (clone $qb)
            ->andWhere('h.subscriptionPlan = :trial OR (h.subscriptionPlan IS NULL AND h.trialEndsAt IS NOT NULL)')
            ->setParameter('trial', 'trial')
            ->select('COUNT(h.id)')
            ->getQuery()
            ->getSingleScalarResult();
        
        // Compter celles qui sont passées à un plan payant (basic ou premium)
        $converted = (clone $qb)
            ->andWhere('h.subscriptionPlan IN (:paid)')
            ->setParameter('paid', ['basic', 'premium'])
            ->select('COUNT(h.id)')
            ->getQuery()
            ->getSingleScalarResult();
        
        $rate = $totalTrial > 0 ? round(($converted / $totalTrial) * 100, 1) : 0;
        
        return [
            'total_trial' => (int) $totalTrial,
            'converted' => (int) $converted,
            'rate' => $rate
        ];
    }

    /**
     * Applique les filtres à une query builder
     */
    private function applyFilters($qb, array $filters): void
    {
        if (!empty($filters['search'])) {
            $qb->andWhere('h.companyName LIKE :search OR h.email LIKE :search')
               ->setParameter('search', '%' . $filters['search'] . '%');
        }
        
        if (!empty($filters['plan'])) {
            $qb->andWhere('h.subscriptionPlan = :plan')
               ->setParameter('plan', $filters['plan']);
        }
        
        if (!empty($filters['company_type'])) {
            $qb->andWhere('h.companyType = :companyType')
               ->setParameter('companyType', $filters['company_type']);
        }
        
        if (!empty($filters['status'])) {
            if ($filters['status'] === 'active') {
                $qb->andWhere('h.hma_active = true');
            } elseif ($filters['status'] === 'inactive') {
                $qb->andWhere('h.hma_active = false');
            } elseif ($filters['status'] === 'trial') {
                $qb->andWhere('h.subscriptionPlan = :trialPlan')
                   ->andWhere('h.trialEndsAt > :now')
                   ->setParameter('trialPlan', 'trial')
                   ->setParameter('now', new \DateTime());
            }
        }
        
        if (!empty($filters['date_from'])) {
            $dateFrom = is_string($filters['date_from']) ? new \DateTime($filters['date_from']) : $filters['date_from'];
            $dateFrom->setTime(0, 0, 0);
            $qb->andWhere('h.createdAt >= :dateFrom')->setParameter('dateFrom', $dateFrom);
        }
        
        if (!empty($filters['date_to'])) {
            $dateTo = is_string($filters['date_to']) ? new \DateTime($filters['date_to']) : $filters['date_to'];
            $dateTo->setTime(23, 59, 59);
            $qb->andWhere('h.createdAt <= :dateTo')->setParameter('dateTo', $dateTo);
        }
    }

    /**
     * Helper pour findByFilters
     */
    private function findByFilters(array $filters)
    {
        $qb = $this->createQueryBuilder('h');
        $this->applyFilters($qb, $filters);
        return $qb;
    }
}