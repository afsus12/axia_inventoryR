<?php

namespace App\Repository;

use App\Entity\DAccessprod;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @method DAccessprod|null find($id, $lockMode = null, $lockVersion = null)
 * @method DAccessprod|null findOneBy(array $criteria, array $orderBy = null)
 * @method DAccessprod[]    findAll()
 * @method DAccessprod[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class DAccessprodRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, DAccessprod::class);
    }

    // /**
    //  * @return DAccessprod[] Returns an array of DAccessprod objects
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
    public function findOneBySomeField($value): ?DAccessprod
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
