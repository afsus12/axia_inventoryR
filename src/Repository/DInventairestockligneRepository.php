<?php

namespace App\Repository;

use App\Entity\DInventairestockligne;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @method DInventairestockligne|null find($id, $lockMode = null, $lockVersion = null)
 * @method DInventairestockligne|null findOneBy(array $criteria, array $orderBy = null)
 * @method DInventairestockligne[]    findAll()
 * @method DInventairestockligne[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class DInventairestockligneRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, DInventairestockligne::class);
    }

    // /**
    //  * @return DInventairestockligne[] Returns an array of DInventairestockligne objects
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
    public function findOneBySomeField($value): ?DInventairestockligne
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
