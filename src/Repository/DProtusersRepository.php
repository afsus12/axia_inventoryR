<?php

namespace App\Repository;

use App\Entity\DProtusers;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Symfony\Bridge\Doctrine\Security\User\UserLoaderInterface;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @method s|null find($id, $lockMode = null, $lockVersion = null)
 * @method DProtusers|null findOneBy(array $criteria, array $orderBy = null)
 * @method DProtusers[]    findAll()
 * @method DProtusers[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class DProtusersRepository extends ServiceEntityRepository  implements UserLoaderInterface
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, DProtusers::class);
    }

     /**
      * @return DProtusers[] Returns an array of DProtusers objects
      */

    public function findByExampleField($value)
    {
        return $this->createQueryBuilder('m')
            ->andWhere('m.protUser = :val')
            ->setParameter('val', $value)
            ->getQuery()
            ->getResult()
        ;
    }
    public function loadUserByUsername($username)
    {
        return $this->createQueryBuilder('u')
            ->where('u.protUser = :username ')
            ->setParameter('username', $username)
            ->getQuery()
            ->getOneOrNullResult();
    }

    /*
    public function findOneBySomeField($value): ?DProtusers
    {
        return $this->createQueryBuilder('m')
            ->andWhere('m.exampleField = :val')
            ->setParameter('val', $value)
            ->getQuery()
            ->getOneOrNullResult()
        ;
    }
    */
}
