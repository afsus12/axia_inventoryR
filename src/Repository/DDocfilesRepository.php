<?php

namespace App\Repository;

use App\Entity\DDocfiles;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @method DDocfiles|null find($id, $lockMode = null, $lockVersion = null)
 * @method DDocfiles|null findOneBy(array $criteria, array $orderBy = null)
 * @method DDocfiles[]    findAll()
 * @method DDocfiles[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class DDocfilesRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, DDocfiles::class);
    }

    // /**
    //  * @return DDocfiles[] Returns an array of DDocfiles objects
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
    public function findOneBySomeField($value): ?DDocfiles
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
