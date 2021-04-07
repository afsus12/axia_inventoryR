<?php

namespace App\Repository;

use App\Entity\DAccess;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @method DAccess|null find($id, $lockMode = null, $lockVersion = null)
 * @method DAccess|null findOneBy(array $criteria, array $orderBy = null)
 * @method DAccess[]    findAll()
 * @method DAccess[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class DAccessRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, DAccess::class);
    }

    // /**
    //  * @return DAccess[] Returns an array of DAccess objects
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
    public function findOneBySomeField($value): ?DAccess
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
