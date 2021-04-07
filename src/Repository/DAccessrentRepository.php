<?php

namespace App\Repository;

use App\Entity\DAccessrent;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @method DAccessrent|null find($id, $lockMode = null, $lockVersion = null)
 * @method DAccessrent|null findOneBy(array $criteria, array $orderBy = null)
 * @method DAccessrent[]    findAll()
 * @method DAccessrent[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class DAccessrentRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, DAccessrent::class);
    }

    // /**
    //  * @return DAccessrent[] Returns an array of DAccessrent objects
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
    public function findOneBySomeField($value): ?DAccessrent
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
