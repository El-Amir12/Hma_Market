<?php
// src/Repository/UserRepository.php

namespace App\Repository;

use App\Entity\User;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\ORM\Tools\Pagination\Paginator;
use Doctrine\Persistence\ManagerRegistry;
use Symfony\Component\Security\Core\Exception\UnsupportedUserException;
use Symfony\Component\Security\Core\User\PasswordAuthenticatedUserInterface;
use Symfony\Component\Security\Core\User\PasswordUpgraderInterface;

/**
 * @extends ServiceEntityRepository<User>
 */
class UserRepository extends ServiceEntityRepository implements PasswordUpgraderInterface
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, User::class);
    }

    /**
     * Used to upgrade (rehash) the user's password automatically over time.
     */
    public function upgradePassword(PasswordAuthenticatedUserInterface $user, string $newHashedPassword): void
    {
        if (!$user instanceof User) {
            throw new UnsupportedUserException(sprintf('Instances of "%s" are not supported.', $user::class));
        }

        $user->setPassword($newHashedPassword);
        $this->getEntityManager()->persist($user);
        $this->getEntityManager()->flush();
    }

    /**
     * Méthode utilitaire pour la pagination (comme dans ProductRepository)
     */
    private function paginate($query, int $page, int $limit): Paginator
    {
        $paginator = new Paginator($query);
        $paginator->getQuery()
            ->setFirstResult($limit * ($page - 1))
            ->setMaxResults($limit);

        return $paginator;
    }

    /**
     * ✅ Méthode utilitaire pour filtrer par rôle (approche LIKE universelle)
     */
    private function addRoleFilter($qb, string $role): void
    {
        // Recherche du rôle dans le JSON stocké avec LIKE (compatible toutes bases)
        $qb->andWhere('u.roles LIKE :role_pattern')
            ->setParameter('role_pattern', '%"' . $role . '"%');
    }

    /**
     * Trouver tous les utilisateurs avec pagination
     */
    public function findAllPaginated(int $page = 1, int $limit = 10): Paginator
    {
        $query = $this->createQueryBuilder('u')
            ->orderBy('u.created_at', 'DESC')
            ->getQuery();

        return $this->paginate($query, $page, $limit);
    }

    /**
     * Trouver les utilisateurs avec recherche simple
     */
    public function search(string $term, int $page = 1, int $limit = 10): Paginator
    {
        $query = $this->createQueryBuilder('u')
            ->leftJoin('u.hma_service_id', 'c')
            ->addSelect('c')
            ->where('u.full_name LIKE :term')
            ->orWhere('u.email LIKE :term')
            ->orWhere('u.phone LIKE :term')
            ->orWhere('c.companyName LIKE :term')
            ->setParameter('term', '%' . $term . '%')
            ->orderBy('u.created_at', 'DESC')
            ->getQuery();

        return $this->paginate($query, $page, $limit);
    }

    /**
     * Trouver les utilisateurs actifs avec pagination
     */
    public function findActivePaginated(int $page = 1, int $limit = 10): Paginator
    {
        $query = $this->createQueryBuilder('u')
            ->leftJoin('u.hma_service_id', 'c')
            ->addSelect('c')
            ->where('u.is_active = true')
            ->andWhere('u.subscription_active = true')
            ->andWhere('c.hma_active = true')
            ->orderBy('u.created_at', 'DESC')
            ->getQuery();

        return $this->paginate($query, $page, $limit);
    }

    /**
     * Trouver les utilisateurs inactifs (désactivés par admin) avec pagination
     */
    public function findInactiveByAdminPaginated(int $page = 1, int $limit = 10): Paginator
    {
        $query = $this->createQueryBuilder('u')
            ->leftJoin('u.hma_service_id', 'c')
            ->addSelect('c')
            ->where('u.is_active = false')
            ->andWhere('u.subscription_active = true')
            ->andWhere('c.hma_active = true')
            ->orderBy('u.created_at', 'DESC')
            ->getQuery();

        return $this->paginate($query, $page, $limit);
    }

    /**
     * Trouver les utilisateurs hors quota avec pagination
     */
    public function findOutOfQuotaPaginated(int $page = 1, int $limit = 10): Paginator
    {
        $query = $this->createQueryBuilder('u')
            ->leftJoin('u.hma_service_id', 'c')
            ->addSelect('c')
            ->where('u.subscription_active = false')
            ->andWhere('u.is_active = true')
            ->andWhere('c.hma_active = true')
            ->orderBy('u.created_at', 'DESC')
            ->getQuery();

        return $this->paginate($query, $page, $limit);
    }

    /**
     * Trouver les utilisateurs d'entreprises bloquées avec pagination
     */
    public function findBlockedBySystemPaginated(int $page = 1, int $limit = 10): Paginator
    {
        $query = $this->createQueryBuilder('u')
            ->leftJoin('u.hma_service_id', 'c')
            ->addSelect('c')
            ->where('c.hma_active = false')
            ->orderBy('u.created_at', 'DESC')
            ->getQuery();

        return $this->paginate($query, $page, $limit);
    }

    /**
     * Trouver les utilisateurs par rôle avec pagination
     */
    public function findByRolePaginated(string $role, int $page = 1, int $limit = 10): Paginator
    {
        $qb = $this->createQueryBuilder('u')
            ->leftJoin('u.hma_service_id', 'c')
            ->addSelect('c')
            ->orderBy('u.created_at', 'DESC');
        
        $this->addRoleFilter($qb, $role);
        
        return $this->paginate($qb->getQuery(), $page, $limit);
    }

    /**
     * Trouver les utilisateurs par rôle et statut avec pagination
     */
    public function findByRoleAndStatusPaginated(string $role, string $status, int $page = 1, int $limit = 10): Paginator
    {
        $qb = $this->createQueryBuilder('u')
            ->leftJoin('u.hma_service_id', 'c')
            ->addSelect('c')
            ->orderBy('u.created_at', 'DESC');
        
        $this->addRoleFilter($qb, $role);
        
        switch ($status) {
            case 'active':
                $qb->andWhere('u.is_active = true')
                    ->andWhere('u.subscription_active = true')
                    ->andWhere('c.hma_active = true');
                break;
            case 'inactive':
                $qb->andWhere('u.is_active = false')
                    ->andWhere('u.subscription_active = true')
                    ->andWhere('c.hma_active = true');
                break;
            case 'quota':
                $qb->andWhere('u.subscription_active = false')
                    ->andWhere('u.is_active = true')
                    ->andWhere('c.hma_active = true');
                break;
            case 'blocked':
                $qb->andWhere('c.hma_active = false');
                break;
        }
        
        return $this->paginate($qb->getQuery(), $page, $limit);
    }

    /**
     * Trouver les utilisateurs par entreprise avec pagination
     */
    public function findByCompanyPaginated(int $companyId, int $page = 1, int $limit = 10): Paginator
    {
        $query = $this->createQueryBuilder('u')
            ->leftJoin('u.hma_service_id', 'c')
            ->addSelect('c')
            ->where('u.hma_service_id = :companyId')
            ->setParameter('companyId', $companyId)
            ->orderBy('u.created_at', 'DESC')
            ->getQuery();

        return $this->paginate($query, $page, $limit);
    }

    /**
     * Trouver les utilisateurs par entreprise et rôle avec pagination
     */
    public function findByCompanyAndRolePaginated(int $companyId, string $role, int $page = 1, int $limit = 10): Paginator
    {
        $qb = $this->createQueryBuilder('u')
            ->leftJoin('u.hma_service_id', 'c')
            ->addSelect('c')
            ->where('u.hma_service_id = :companyId')
            ->setParameter('companyId', $companyId)
            ->orderBy('u.created_at', 'DESC');
        
        $this->addRoleFilter($qb, $role);
        
        return $this->paginate($qb->getQuery(), $page, $limit);
    }

    /**
     * Trouver les utilisateurs par entreprise et statut avec pagination
     */
    public function findByCompanyAndStatusPaginated(int $companyId, string $status, int $page = 1, int $limit = 10): Paginator
    {
        $qb = $this->createQueryBuilder('u')
            ->leftJoin('u.hma_service_id', 'c')
            ->where('u.hma_service_id = :companyId')
            ->setParameter('companyId', $companyId)
            ->orderBy('u.created_at', 'DESC');
        
        switch ($status) {
            case 'active':
                $qb->andWhere('u.is_active = true')
                    ->andWhere('u.subscription_active = true')
                    ->andWhere('c.hma_active = true');
                break;
            case 'inactive':
                $qb->andWhere('u.is_active = false')
                    ->andWhere('u.subscription_active = true')
                    ->andWhere('c.hma_active = true');
                break;
            case 'quota':
                $qb->andWhere('u.subscription_active = false')
                    ->andWhere('u.is_active = true')
                    ->andWhere('c.hma_active = true');
                break;
            case 'blocked':
                // Pour une entreprise, le statut "bloqué" retourne toujours 0 résultat
                $qb->andWhere('1 = 0');
                break;
        }
        
        return $this->paginate($qb->getQuery(), $page, $limit);
    }

    /**
     * Trouver les utilisateurs par entreprise, rôle et statut avec pagination
     * (Méthode équivalente à findByCategoryAndStatusPaginated de ProductRepository)
     */
    public function findByCompanyAndRoleAndStatusPaginated(int $companyId, string $role, string $status, int $page = 1, int $limit = 10): Paginator
    {
        $qb = $this->createQueryBuilder('u')
            ->leftJoin('u.hma_service_id', 'c')
            ->orderBy('u.created_at', 'DESC');
        
        // Filtre par entreprise (si companyId > 0)
        if ($companyId > 0) {
            $qb->andWhere('u.hma_service_id = :companyId')
                ->setParameter('companyId', $companyId);
        }
        
        // Filtre par rôle (si fourni)
        if (!empty($role)) {
            $this->addRoleFilter($qb, $role);
        }
        
        // Filtre par statut
        switch ($status) {
            case 'active':
                $qb->andWhere('u.is_active = true')
                    ->andWhere('u.subscription_active = true')
                    ->andWhere('c.hma_active = true');
                break;
            case 'inactive':
                $qb->andWhere('u.is_active = false')
                    ->andWhere('u.subscription_active = true')
                    ->andWhere('c.hma_active = true');
                break;
            case 'quota':
                $qb->andWhere('u.subscription_active = false')
                    ->andWhere('u.is_active = true')
                    ->andWhere('c.hma_active = true');
                break;
            case 'blocked':
                $qb->andWhere('c.hma_active = false');
                break;
        }
        
        return $this->paginate($qb->getQuery(), $page, $limit);
    }

    /**
     * Compter les utilisateurs par statut pour les statistiques
     */
    public function countAllByStatus(): array
    {
        $total = $this->count([]);
        
        // Actifs
        $active = $this->createQueryBuilder('u')
            ->select('COUNT(u.id)')
            ->leftJoin('u.hma_service_id', 'c')
            ->where('u.is_active = true')
            ->andWhere('u.subscription_active = true')
            ->andWhere('c.hma_active = true')
            ->getQuery()
            ->getSingleScalarResult();
        
        // Inactifs par admin
        $inactive = $this->createQueryBuilder('u')
            ->select('COUNT(u.id)')
            ->leftJoin('u.hma_service_id', 'c')
            ->where('u.is_active = false')
            ->andWhere('u.subscription_active = true')
            ->andWhere('c.hma_active = true')
            ->getQuery()
            ->getSingleScalarResult();
        
        // Hors quota
        $quota = $this->createQueryBuilder('u')
            ->select('COUNT(u.id)')
            ->leftJoin('u.hma_service_id', 'c')
            ->where('u.subscription_active = false')
            ->andWhere('u.is_active = true')
            ->andWhere('c.hma_active = true')
            ->getQuery()
            ->getSingleScalarResult();
        
        // Bloqués par système
        $blocked = $this->createQueryBuilder('u')
            ->select('COUNT(u.id)')
            ->leftJoin('u.hma_service_id', 'c')
            ->where('c.hma_active = false')
            ->getQuery()
            ->getSingleScalarResult();
        
        return [
            'active' => (int) $active,
            'inactiveByAdmin' => (int) $inactive,
            'outOfQuota' => (int) $quota,
            'blockedBySystem' => (int) $blocked,
            'total' => (int) $total,
        ];
    }

    /**
     * Compter les utilisateurs par rôle
     */
    public function countByRole(): array
    {
        $roles = ['ROLE_ADMIN', 'ROLE_MANAGER', 'ROLE_STOCK_MANAGER', 'ROLE_CASHIER', 'ROLE_USER'];
        $counts = array_fill_keys($roles, 0);

        foreach ($roles as $role) {
            $qb = $this->createQueryBuilder('u')
                ->select('COUNT(u.id)');
            
            $this->addRoleFilter($qb, $role);
            
            $counts[$role] = (int) $qb->getQuery()->getSingleScalarResult();
        }

        return $counts;
    }

    /**
     * Compter les utilisateurs par rôle pour une entreprise spécifique
     */
    public function countByRoleForCompany(int $companyId): array
    {
        $roles = ['ROLE_ADMIN', 'ROLE_MANAGER', 'ROLE_STOCK_MANAGER', 'ROLE_CASHIER', 'ROLE_USER'];
        $counts = array_fill_keys($roles, 0);

        foreach ($roles as $role) {
            $qb = $this->createQueryBuilder('u')
                ->select('COUNT(u.id)')
                ->where('u.hma_service_id = :companyId')
                ->setParameter('companyId', $companyId);
            
            $this->addRoleFilter($qb, $role);
            
            $counts[$role] = (int) $qb->getQuery()->getSingleScalarResult();
        }

        return $counts;
    }

    /**
     * ✅ Méthode spécifique pour le manager - Version LIKE (recommandée)
     */
    public function countByRoleForCompanyManager(int $companyId, string $role): int
    {
        $qb = $this->createQueryBuilder('u')
            ->select('COUNT(u.id)')
            ->where('u.hma_service_id = :companyId')
            ->setParameter('companyId', $companyId);
        
        // Recherche du rôle dans le JSON avec LIKE (comme dans addRoleFilter)
        $qb->andWhere('u.roles LIKE :role_pattern')
        ->setParameter('role_pattern', '%"' . $role . '"%');
        
        return (int) $qb->getQuery()->getSingleScalarResult();
    }

    /**
     * Trouver un utilisateur par email (insensible à la casse)
     */
    public function findOneByEmail(string $email): ?User
    {
        return $this->createQueryBuilder('u')
            ->where('LOWER(u.email) = LOWER(:email)')
            ->setParameter('email', $email)
            ->getQuery()
            ->getOneOrNullResult();
    }

    /**
     * Vérifier si l'email existe déjà
     */
    public function emailExists(string $email, ?int $excludeUserId = null): bool
    {
        $qb = $this->createQueryBuilder('u')
            ->select('COUNT(u.id)')
            ->where('LOWER(u.email) = LOWER(:email)')
            ->setParameter('email', $email);

        if ($excludeUserId !== null) {
            $qb->andWhere('u.id != :excludeId')
                ->setParameter('excludeId', $excludeUserId);
        }

        return (int) $qb->getQuery()->getSingleScalarResult() > 0;
    }

    /**
     * Trouver les utilisateurs créés récemment
     */
    public function findRecent(int $limit = 5): array
    {
        return $this->createQueryBuilder('u')
            ->orderBy('u.created_at', 'DESC')
            ->setMaxResults($limit)
            ->getQuery()
            ->getResult();
    }

    /**
     * Trouver les utilisateurs qui peuvent se connecter (canLogin = true)
     */
    public function findLoginableUsers(int $page = 1, int $limit = 10): Paginator
    {
        // Cette méthode utilise canLogin() qui est une méthode PHP
        // On ne peut pas la traduire en DQL directement
        // Solution: on filtre sur les champs qui composent canLogin()
        
        $qb = $this->createQueryBuilder('u')
            ->leftJoin('u.hma_service_id', 'c')
            ->where('(u.is_active = true AND u.subscription_active = true AND (c.hma_active = true OR c IS NULL))')
            ->orWhere('u.is_super_admin = true')
            ->orWhere('u.is_hma_owner = true');
        
        return $this->paginate($qb->getQuery(), $page, $limit);
    }

    /**
     * Recherche rapide d'utilisateurs actifs pour autocomplétion
     */
    public function searchActiveUsers(string $query, int $limit = 10): array
    {
        $qb = $this->createQueryBuilder('u')
            ->leftJoin('u.hma_service_id', 'c')
            ->where('u.is_active = true')
            ->andWhere('u.subscription_active = true')
            ->andWhere('c.hma_active = true')
            ->andWhere('(u.full_name LIKE :query OR u.email LIKE :query)')
            ->setParameter('query', '%' . $query . '%')
            ->orderBy('u.full_name', 'ASC')
            ->setMaxResults($limit);
        
        return $qb->getQuery()->getResult();
    }

    /**
     * Récupérer les utilisateurs hors quota pour une entreprise
     */
    public function findOutOfQuotaUsersByCompany(int $companyId): array
    {
        return $this->createQueryBuilder('u')
            ->where('u.hma_service_id = :companyId')
            ->andWhere('u.subscription_active = false')
            ->andWhere('u.is_active = true')
            ->andWhere('u.is_hma_owner = false')
            ->setParameter('companyId', $companyId)
            ->orderBy('u.created_at', 'DESC')
            ->getQuery()
            ->getResult();
    }

    /**
     * Récupérer les utilisateurs par rôle pour une entreprise
     */
    public function findByRoleAndCompany(string $role, int $companyId): array
    {
        $qb = $this->createQueryBuilder('u')
            ->where('u.hma_service_id = :companyId')
            ->andWhere('u.is_hma_owner = false')
            ->setParameter('companyId', $companyId)
            ->orderBy('u.created_at', 'DESC');
        
        $this->addRoleFilter($qb, $role);
        
        return $qb->getQuery()->getResult();
    }

    /**
     * ✅ NOUVELLE MÉTHODE : Trouver les utilisateurs filtrés pour super admin
     * (Équivalente à votre méthode existante mais réécrite proprement)
     */
    public function findFilteredForSuperAdmin(string $search = '', string $role = '', string $status = '', string $companyId = '', int $page = 1, int $limit = 10): Paginator
    {
        $qb = $this->createQueryBuilder('u')
            ->leftJoin('u.hma_service_id', 'c')
            ->addSelect('c')
            ->orderBy('u.created_at', 'DESC');
        
        // Recherche
        if ($search) {
            $qb->andWhere('u.full_name LIKE :search OR u.email LIKE :search OR u.phone LIKE :search OR c.companyName LIKE :search')
                ->setParameter('search', '%' . $search . '%');
        }
        
        // Filtre par rôle
        if ($role) {
            $this->addRoleFilter($qb, $role);
        }
        
        // Filtre par entreprise
        if ($companyId) {
            $qb->andWhere('u.hma_service_id = :companyId')
                ->setParameter('companyId', $companyId);
        }
        
        // Filtre par statut
        if ($status) {
            switch ($status) {
                case 'active':
                    $qb->andWhere('u.is_active = :active')
                        ->andWhere('u.subscription_active = :subActive')
                        ->andWhere('c.hma_active = :hmaActive OR c IS NULL')
                        ->setParameter('active', true)
                        ->setParameter('subActive', true)
                        ->setParameter('hmaActive', true);
                    break;
                case 'inactive':
                    $qb->andWhere('u.is_active = :active')
                        ->andWhere('u.subscription_active = :subActive')
                        ->andWhere('c.hma_active = :hmaActive OR c IS NULL')
                        ->setParameter('active', false)
                        ->setParameter('subActive', true)
                        ->setParameter('hmaActive', true);
                    break;
                case 'quota':
                    $qb->andWhere('u.subscription_active = :subActive')
                        ->andWhere('u.is_active = :active')
                        ->andWhere('c.hma_active = :hmaActive')
                        ->setParameter('subActive', false)
                        ->setParameter('active', true)
                        ->setParameter('hmaActive', true);
                    break;
                case 'blocked':
                    $qb->andWhere('c.hma_active = :hmaActive')
                        ->setParameter('hmaActive', false);
                    break;
            }
        }
        
        return $this->paginate($qb->getQuery(), $page, $limit);
    }

    /**
     * ✅ NOUVELLE MÉTHODE : Trouver les utilisateurs filtrés pour une entreprise
     * (Équivalente à votre méthode existante mais réécrite proprement)
     */
    public function findFilteredForCompany(int $companyId, string $search = '', string $role = '', string $status = '', int $page = 1, int $limit = 10): Paginator
    {
        $qb = $this->createQueryBuilder('u')
            ->leftJoin('u.hma_service_id', 'c')
            ->where('u.hma_service_id = :companyId')
            ->setParameter('companyId', $companyId)
            ->orderBy('u.created_at', 'DESC');
        
        // Recherche
        if ($search) {
            $qb->andWhere('u.full_name LIKE :search OR u.email LIKE :search OR u.phone LIKE :search')
                ->setParameter('search', '%' . $search . '%');
        }
        
        // Filtre par rôle
        if ($role) {
            $this->addRoleFilter($qb, $role);
        }
        
        // Filtre par statut
        if ($status) {
            switch ($status) {
                case 'active':
                    $qb->andWhere('u.is_active = :active')
                        ->andWhere('u.subscription_active = :subActive')
                        ->andWhere('c.hma_active = :hmaActive')
                        ->setParameter('active', true)
                        ->setParameter('subActive', true)
                        ->setParameter('hmaActive', true);
                    break;
                case 'inactive':
                    $qb->andWhere('u.is_active = :active')
                        ->andWhere('u.subscription_active = :subActive')
                        ->andWhere('c.hma_active = :hmaActive')
                        ->setParameter('active', false)
                        ->setParameter('subActive', true)
                        ->setParameter('hmaActive', true);
                    break;
                case 'quota':
                    $qb->andWhere('u.subscription_active = :subActive')
                        ->andWhere('u.is_active = :active')
                        ->andWhere('c.hma_active = :hmaActive')
                        ->setParameter('subActive', false)
                        ->setParameter('active', true)
                        ->setParameter('hmaActive', true);
                    break;
                case 'blocked':
                    $qb->andWhere('1 = 0');
                    break;
            }
        }
        
        return $this->paginate($qb->getQuery(), $page, $limit);
    }

    /**
     * ✅ NOUVELLE MÉTHODE : Compter les utilisateurs par statut pour super admin
     */
    public function countByStatusForSuperAdmin(string $status): int
    {
        $qb = $this->createQueryBuilder('u')
            ->select('COUNT(u.id)')
            ->leftJoin('u.hma_service_id', 'c');
        
        switch ($status) {
            case 'active':
                $qb->where('u.is_active = :active')
                    ->andWhere('u.subscription_active = :subActive')
                    ->andWhere('c.hma_active = :hmaActive OR c IS NULL')
                    ->setParameter('active', true)
                    ->setParameter('subActive', true)
                    ->setParameter('hmaActive', true);
                break;
            case 'inactive':
                $qb->where('u.is_active = :active')
                    ->andWhere('u.subscription_active = :subActive')
                    ->andWhere('c.hma_active = :hmaActive OR c IS NULL')
                    ->setParameter('active', false)
                    ->setParameter('subActive', true)
                    ->setParameter('hmaActive', true);
                break;
            case 'quota':
                $qb->where('u.subscription_active = :subActive')
                    ->andWhere('u.is_active = :active')
                    ->andWhere('c.hma_active = :hmaActive')
                    ->setParameter('subActive', false)
                    ->setParameter('active', true)
                    ->setParameter('hmaActive', true);
                break;
            case 'blocked':
                $qb->where('c.hma_active = :hmaActive')
                    ->setParameter('hmaActive', false);
                break;
        }
        
        return (int) $qb->getQuery()->getSingleScalarResult();
    }

    /**
     * ✅ NOUVELLE MÉTHODE : Compter les utilisateurs par statut pour une entreprise
     */
    public function countByStatusForCompany(int $companyId, string $status): int
    {
        $qb = $this->createQueryBuilder('u')
            ->select('COUNT(u.id)')
            ->leftJoin('u.hma_service_id', 'c')
            ->where('u.hma_service_id = :companyId')
            ->setParameter('companyId', $companyId);
        
        switch ($status) {
            case 'active':
                $qb->andWhere('u.is_active = :active')
                    ->andWhere('u.subscription_active = :subActive')
                    ->andWhere('c.hma_active = :hmaActive')
                    ->setParameter('active', true)
                    ->setParameter('subActive', true)
                    ->setParameter('hmaActive', true);
                break;
            case 'inactive':
                $qb->andWhere('u.is_active = :active')
                    ->andWhere('u.subscription_active = :subActive')
                    ->andWhere('c.hma_active = :hmaActive')
                    ->setParameter('active', false)
                    ->setParameter('subActive', true)
                    ->setParameter('hmaActive', true);
                break;
            case 'quota':
                $qb->andWhere('u.subscription_active = :subActive')
                    ->andWhere('u.is_active = :active')
                    ->andWhere('c.hma_active = :hmaActive')
                    ->setParameter('subActive', false)
                    ->setParameter('active', true)
                    ->setParameter('hmaActive', true);
                break;
            case 'blocked':
                return 0;
        }
        
        return (int) $qb->getQuery()->getSingleScalarResult();
    }

    /**
     * Compte les utilisateurs actifs (is_active = true, subscription_active = true)
     * pour un rôle et une entreprise donnés.
     *
     * @param string $role Le rôle (ex: 'ROLE_ADMIN')
     * @param int $companyId L'ID de l'entreprise (HmaService)
     * @return int
     */
    public function countActiveByRoleAndCompany(string $role, int $companyId): int
    {
        return (int) $this->createQueryBuilder('u')
            ->select('COUNT(u.id)')
            ->where('u.hma_service_id = :companyId')
            ->andWhere('u.is_active = :active')
            ->andWhere('u.subscription_active = :subActive')
            ->andWhere('u.roles LIKE :role')
            ->setParameter('companyId', $companyId)
            ->setParameter('active', true)
            ->setParameter('subActive', true)
            ->setParameter('role', '%"' . $role . '"%')
            ->getQuery()
            ->getSingleScalarResult();
    }

        /**
     * Compte les utilisateurs actifs pour un rôle et une entreprise, en excluant un utilisateur donné.
     */
    public function countActiveByRoleAndCompanyExcluding(string $role, int $companyId, int $excludeUserId): int
    {
        return (int) $this->createQueryBuilder('u')
            ->select('COUNT(u.id)')
            ->where('u.hma_service_id = :companyId')
            ->andWhere('u.is_active = :active')
            ->andWhere('u.subscription_active = :subActive')
            ->andWhere('u.roles LIKE :role')
            ->andWhere('u.id != :excludeId')
            ->setParameter('companyId', $companyId)
            ->setParameter('active', true)
            ->setParameter('subActive', true)
            ->setParameter('role', '%"' . $role . '"%')
            ->setParameter('excludeId', $excludeUserId)
            ->getQuery()
            ->getSingleScalarResult();
    }

    /**
     * Compte tous les utilisateurs (actifs ou non) ayant un rôle donné dans une entreprise.
     */
    public function countByRoleAndCompany(string $role, int $companyId): int
    {
        return (int) $this->createQueryBuilder('u')
            ->select('COUNT(u.id)')
            ->where('u.hma_service_id = :companyId')
            ->andWhere('u.roles LIKE :role')
            ->setParameter('companyId', $companyId)
            ->setParameter('role', '%"' . $role . '"%')
            ->getQuery()
            ->getSingleScalarResult();
    }


    /**
     * Compte tous les utilisateurs ayant un rôle donné dans une entreprise, en excluant un utilisateur spécifique.
     */
   public function countByRoleAndCompanyExcluding(string $role, int $companyId, int $excludeUserId): int
    {
        return (int) $this->createQueryBuilder('u')
            ->select('COUNT(u.id)')
            ->where('u.hma_service_id = :companyId')
            ->andWhere('u.roles LIKE :role')
            ->andWhere('u.id != :excludeId')
            ->andWhere('u.is_active = true')
            ->andWhere('u.subscription_active = true')
            ->setParameter('companyId', $companyId)
            ->setParameter('role', '%"' . $role . '"%')
            ->setParameter('excludeId', $excludeUserId)
            ->getQuery()
            ->getSingleScalarResult();
    }

    /**
     * Récupère les utilisateurs qui ont des mouvements de stock
     */
    public function findUsersWithStockMovements(int $hmaServiceId): array
    {
        return $this->createQueryBuilder('u')
            ->innerJoin('u.stockMovements', 'sm')
            ->innerJoin('sm.hma_service', 'h')
            ->andWhere('h.id = :hmaServiceId')
            ->setParameter('hmaServiceId', $hmaServiceId)
            ->groupBy('u.id')
            ->orderBy('u.full_name', 'ASC')
            ->getQuery()
            ->getResult();
    }
}