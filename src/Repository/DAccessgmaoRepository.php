<?php

namespace App\Repository;

use App\Entity\DAccessgmao;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @method DAccessgmao|null find($id, $lockMode = null, $lockVersion = null)
 * @method DAccessgmao|null findOneBy(array $criteria, array $orderBy = null)
 * @method DAccessgmao[]    findAll()
 * @method DAccessgmao[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class DAccessgmaoRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, DAccessgmao::class);
    }

    // /**
    //  * @return DAccessgmao[] Returns an array of DAccessgmao objects
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
    public function findOneBySomeField($value): ?DAccessgmao
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
