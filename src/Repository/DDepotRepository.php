<?php

namespace App\Repository;

use App\Entity\DDepot;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @method DDepot|null find($id, $lockMode = null, $lockVersion = null)
 * @method DDepot|null findOneBy(array $criteria, array $orderBy = null)
 * @method DDepot[]    findAll()
 * @method DDepot[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class DDepotRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, DDepot::class);
    }

    // /**
    //  * @return DDepot[] Returns an array of DDepot objects
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
    public function findOneBySomeField($value): ?DDepot
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
