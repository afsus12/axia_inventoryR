<?php

namespace App\Repository;

use App\Entity\DAccesscaisse;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @method DAccesscaisse|null find($id, $lockMode = null, $lockVersion = null)
 * @method DAccesscaisse|null findOneBy(array $criteria, array $orderBy = null)
 * @method DAccesscaisse[]    findAll()
 * @method DAccesscaisse[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class DAccesscaisseRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, DAccesscaisse::class);
    }

    // /**
    //  * @return DAccesscaisse[] Returns an array of DAccesscaisse objects
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
    public function findOneBySomeField($value): ?DAccesscaisse
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
