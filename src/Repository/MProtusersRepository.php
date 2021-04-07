<?php

namespace App\Repository;

use App\Entity\MProtusers;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @method s|null find($id, $lockMode = null, $lockVersion = null)
 * @method MProtusers|null findOneBy(array $criteria, array $orderBy = null)
 * @method MProtusers[]    findAll()
 * @method MProtusers[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class MProtusersRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, MProtusers::class);
    }

    // /**
    //  * @return MProtusers[] Returns an array of MProtusers objects
    //  */
    /*
    public function findByExampleField($value)
    {
        return $this->createQueryBuilder('m')
            ->andWhere('m.exampleField = :val')
            ->setParameter('val', $value)
            ->orderBy('m.id', 'ASC')
            ->setMaxResults(10)
            ->getQuery()
            ->getResult()
        ;
    }
    */

    /*
    public function findOneBySomeField($value): ?MProtusers
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
