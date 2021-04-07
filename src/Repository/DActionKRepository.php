<?php

namespace App\Repository;

use App\Entity\DActionK;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @method DActionK|null find($id, $lockMode = null, $lockVersion = null)
 * @method DActionK|null findOneBy(array $criteria, array $orderBy = null)
 * @method DActionK[]    findAll()
 * @method DActionK[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class DActionKRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, DActionK::class);
    }

    // /**
    //  * @return DActionK[] Returns an array of DActionK objects
    //  */
    /*
    public function findByExampleField($value)
    {
        return $this->createQueryBuilder('d')
            ->andWhere('d.exampleField = :val')
            ->setParameter('val', $value)
            ->orderBy('d.id', 'ASC')
            ->setMaxResults(10)
            ->getQuery()
            ->getResult()
        ;
    }
    */

    /*
    public function findOneBySomeField($value): ?DActionK
    {
        return $this->createQueryBuilder('d')
            ->andWhere('d.exampleField = :val')
            ->setParameter('val', $value)
            ->getQuery()
            ->getOneOrNullResult()
        ;
    }
    */
}
