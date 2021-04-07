<?php

namespace App\Repository;

use App\Entity\DAccessequip;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @method DAccessequip|null find($id, $lockMode = null, $lockVersion = null)
 * @method DAccessequip|null findOneBy(array $criteria, array $orderBy = null)
 * @method DAccessequip[]    findAll()
 * @method DAccessequip[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class DAccessequipRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, DAccessequip::class);
    }

    // /**
    //  * @return DAccessequip[] Returns an array of DAccessequip objects
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
    public function findOneBySomeField($value): ?DAccessequip
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
