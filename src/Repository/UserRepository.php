<?php

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
     * Trouver tous les utilisateurs avec pagination
     *
     * @param int $page Numéro de la page (commence à 1)
     * @param int $limit Nombre d'éléments par page
     * @return Paginator
     */
    public function findAllPaginated(int $page = 1, int $limit = 10): Paginator
    {
        if ($page < 1) {
            $page = 1;
        }
        
        $query = $this->createQueryBuilder('u')
            ->orderBy('u.created_at', 'DESC')
            ->getQuery();

        $paginator = new Paginator($query);
        $paginator->getQuery()
            ->setFirstResult($limit * ($page - 1))
            ->setMaxResults($limit);

        return $paginator;
    }

    /**
     * Trouver les utilisateurs actifs avec pagination
     */
    public function findActivePaginated(int $page = 1, int $limit = 10): Paginator
    {
        if ($page < 1) {
            $page = 1;
        }
        
        $query = $this->createQueryBuilder('u')
            ->where('u.isActive = :active')
            ->setParameter('active', true)
            ->orderBy('u.created_at', 'DESC')
            ->getQuery();

        $paginator = new Paginator($query);
        $paginator->getQuery()
            ->setFirstResult($limit * ($page - 1))
            ->setMaxResults($limit);

        return $paginator;
    }

    /**
     * Rechercher des utilisateurs par nom, email ou téléphone
     */
    public function search(string $searchTerm, int $page = 1, int $limit = 10): Paginator
    {
        if ($page < 1) {
            $page = 1;
        }
        
        $query = $this->createQueryBuilder('u')
            ->where('u.full_name LIKE :search')
            ->orWhere('u.email LIKE :search')
            ->orWhere('u.phone LIKE :search')
            ->setParameter('search', '%' . $searchTerm . '%')
            ->orderBy('u.created_at', 'DESC')
            ->getQuery();

        $paginator = new Paginator($query);
        $paginator->getQuery()
            ->setFirstResult($limit * ($page - 1))
            ->setMaxResults($limit);

        return $paginator;
    }

    /**
     * Compter les utilisateurs par statut
     */
    public function countByStatus(): array
    {
        $result = $this->createQueryBuilder('u')
            ->select('u.isActive as status, COUNT(u.id) as count')
            ->groupBy('u.isActive')
            ->getQuery()
            ->getResult();

        $counts = [
            'active' => 0,
            'inactive' => 0,
            'total' => 0
        ];

        foreach ($result as $row) {
            if ($row['status']) {
                $counts['active'] = (int) $row['count'];
            } else {
                $counts['inactive'] = (int) $row['count'];
            }
        }

        $counts['total'] = $counts['active'] + $counts['inactive'];
        
        return $counts;
    }

    /**
     * Compter les utilisateurs par rôle
     */
    public function countByRole(): array
    {
        // Cette méthode est plus complexe car les rôles sont stockés dans un array
        // On va d'abord récupérer tous les utilisateurs puis compter côté PHP
        $users = $this->findAll();
        
        $counts = [
            'ROLE_ADMIN' => 0,
            'ROLE_MANAGER' => 0,
            'ROLE_STOCK_MANAGER' => 0,
            'ROLE_CASHIER' => 0,
            'ROLE_USER' => 0,
        ];

        foreach ($users as $user) {
            $roles = $user->getRoles();
            foreach ($roles as $role) {
                if (isset($counts[$role])) {
                    $counts[$role]++;
                }
            }
        }

        return $counts;
    }

    /**
     * Trouver les utilisateurs par rôle
     */
    public function findByRole(string $role, int $page = 1, int $limit = 10): Paginator
    {
        if ($page < 1) {
            $page = 1;
        }
        
        // Cette requête fonctionne car Doctrine peut chercher dans les arrays
        $query = $this->createQueryBuilder('u')
            ->where(':role MEMBER OF u.roles')
            ->setParameter('role', $role)
            ->orderBy('u.created_at', 'DESC')
            ->getQuery();

        $paginator = new Paginator($query);
        $paginator->getQuery()
            ->setFirstResult($limit * ($page - 1))
            ->setMaxResults($limit);

        return $paginator;
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

        $count = (int) $qb->getQuery()->getSingleScalarResult();
        
        return $count > 0;
    }

    /**
     * Trouver les administrateurs
     */
    public function findAdmins(): array
    {
        return $this->createQueryBuilder('u')
            ->where(':role MEMBER OF u.roles')
            ->setParameter('role', 'ROLE_ADMIN')
            ->orderBy('u.created_at', 'DESC')
            ->getQuery()
            ->getResult();
    }
}