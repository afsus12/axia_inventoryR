<?php

namespace App\Repository;

use App\Entity\DAccessachat;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @method DAccessachat|null find($id, $lockMode = null, $lockVersion = null)
 * @method DAccessachat|null findOneBy(array $criteria, array $orderBy = null)
 * @method DAccessachat[]    findAll()
 * @method DAccessachat[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class DAccessachatRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, DAccessachat::class);
    }

    // /**
    //  * @return DAccessachat[] Returns an array of DAccessachat objects
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
    public function findOneBySomeField($value): ?DAccessachat
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
