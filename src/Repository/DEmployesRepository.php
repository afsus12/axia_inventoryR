<?php

namespace App\Repository;

use App\Entity\DEmployes;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @method DEmployes|null find($id, $lockMode = null, $lockVersion = null)
 * @method DEmployes|null findOneBy(array $criteria, array $orderBy = null)
 * @method DEmployes[]    findAll()
 * @method DEmployes[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class DEmployesRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, DEmployes::class);
    }

    // /**
    //  * @return DEmployes[] Returns an array of DEmployes objects
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
    public function findOneBySomeField($value): ?DEmployes
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
