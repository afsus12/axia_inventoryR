<?php

namespace App\Repository;

use App\Entity\DActionD;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @method DActionD|null find($id, $lockMode = null, $lockVersion = null)
 * @method DActionD|null findOneBy(array $criteria, array $orderBy = null)
 * @method DActionD[]    findAll()
 * @method DActionD[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class DActionDRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, DActionD::class);
    }

    // /**
    //  * @return DActionD[] Returns an array of DActionD objects
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
    public function findOneBySomeField($value): ?DActionD
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
