<?php

namespace App\Repository;

use App\Entity\DAccessdec;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @method DAccessdec|null find($id, $lockMode = null, $lockVersion = null)
 * @method DAccessdec|null findOneBy(array $criteria, array $orderBy = null)
 * @method DAccessdec[]    findAll()
 * @method DAccessdec[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class DAccessdecRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, DAccessdec::class);
    }

    // /**
    //  * @return DAccessdec[] Returns an array of DAccessdec objects
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
    public function findOneBySomeField($value): ?DAccessdec
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
