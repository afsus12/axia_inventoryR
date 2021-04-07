<?php

namespace App\Repository;

use App\Entity\DAccessstock;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @method DAccessstock|null find($id, $lockMode = null, $lockVersion = null)
 * @method DAccessstock|null findOneBy(array $criteria, array $orderBy = null)
 * @method DAccessstock[]    findAll()
 * @method DAccessstock[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class DAccessstockRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, DAccessstock::class);
    }

    // /**
    //  * @return DAccessstock[] Returns an array of DAccessstock objects
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
    public function findOneBySomeField($value): ?DAccessstock
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
