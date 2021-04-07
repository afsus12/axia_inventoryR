<?php

namespace App\Repository;

use App\Entity\DArtenumref;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @method DArtenumref|null find($id, $lockMode = null, $lockVersion = null)
 * @method DArtenumref|null findOneBy(array $criteria, array $orderBy = null)
 * @method DArtenumref[]    findAll()
 * @method DArtenumref[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class DArtenumrefRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, DArtenumref::class);
    }

    // /**
    //  * @return DArtenumref[] Returns an array of DArtenumref objects
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
    public function findOneBySomeField($value): ?DArtenumref
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
