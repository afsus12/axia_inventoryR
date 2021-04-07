<?php

namespace App\Repository;

use App\Entity\DAccessenc;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @method DAccessenc|null find($id, $lockMode = null, $lockVersion = null)
 * @method DAccessenc|null findOneBy(array $criteria, array $orderBy = null)
 * @method DAccessenc[]    findAll()
 * @method DAccessenc[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class DAccessencRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, DAccessenc::class);
    }

    // /**
    //  * @return DAccessenc[] Returns an array of DAccessenc objects
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
    public function findOneBySomeField($value): ?DAccessenc
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
