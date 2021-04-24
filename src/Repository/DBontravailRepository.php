<?php

namespace App\Repository;

use App\Entity\DBontravail;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @method DBontravail|null find($id, $lockMode = null, $lockVersion = null)
 * @method DBontravail|null findOneBy(array $criteria, array $orderBy = null)
 * @method DBontravail[]    findAll()
 * @method DBontravail[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class DBontravailRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, DBontravail::class);
    }

    // /**
    //  * @return DBontravail[] Returns an array of DBontravail objects
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
    public function findOneBySomeField($value): ?DBontravail
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
