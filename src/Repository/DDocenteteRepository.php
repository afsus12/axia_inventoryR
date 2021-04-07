<?php

namespace App\Repository;

use App\Entity\DDocentete;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @method DDocentete|null find($id, $lockMode = null, $lockVersion = null)
 * @method DDocentete|null findOneBy(array $criteria, array $orderBy = null)
 * @method DDocentete[]    findAll()
 * @method DDocentete[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class DDocenteteRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, DDocentete::class);
    }

    // /**
    //  * @return DDocentete[] Returns an array of DDocentete objects
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
    public function findOneBySomeField($value): ?DDocentete
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
