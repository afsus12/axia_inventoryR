<?php

namespace App\Repository;

use App\Entity\DActionsEd;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @method DActionsEd|null find($id, $lockMode = null, $lockVersion = null)
 * @method DActionsEd|null findOneBy(array $criteria, array $orderBy = null)
 * @method DActionsEd[]    findAll()
 * @method DActionsEd[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class DActionsEdRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, DActionsEd::class);
    }

    // /**
    //  * @return DActionsEd[] Returns an array of DActionsEd objects
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
    public function findOneBySomeField($value): ?DActionsEd
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
