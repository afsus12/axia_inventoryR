<?php

namespace App\Repository;

use App\Entity\DActionsEh;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @method DActionsEh|null find($id, $lockMode = null, $lockVersion = null)
 * @method DActionsEh|null findOneBy(array $criteria, array $orderBy = null)
 * @method DActionsEh[]    findAll()
 * @method DActionsEh[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class DActionsEhRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, DActionsEh::class);
    }

    // /**
    //  * @return DActionsEh[] Returns an array of DActionsEh objects
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
    public function findOneBySomeField($value): ?DActionsEh
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
