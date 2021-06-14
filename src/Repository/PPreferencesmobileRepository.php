<?php

namespace App\Repository;

use App\Entity\PPreferencesmobile;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @method PPreferencesmobile|null find($id, $lockMode = null, $lockVersion = null)
 * @method PPreferencesmobile|null findOneBy(array $criteria, array $orderBy = null)
 * @method PPreferencesmobile[]    findAll()
 * @method PPreferencesmobile[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class PPreferencesmobileRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, PPreferencesmobile::class);
    }

    // /**
    //  * @return PPreferencesmobile[] Returns an array of PPreferencesmobile objects
    //  */
    /*
    public function findByExampleField($value)
    {
        return $this->createQueryBuilder('p')
            ->andWhere('p.exampleField = :val')
            ->setParameter('val', $value)
            ->orderBy('p.id', 'ASC')
            ->setMaxResults(10)
            ->getQuery()
            ->getResult()
        ;
    }
    */

    /*
    public function findOneBySomeField($value): ?PPreferencesmobile
    {
        return $this->createQueryBuilder('p')
            ->andWhere('p.exampleField = :val')
            ->setParameter('val', $value)
            ->getQuery()
            ->getOneOrNullResult()
        ;
    }
    */
}
