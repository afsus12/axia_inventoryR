<?php

namespace App\Repository;

use App\Entity\MMatusers;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @method MMatusers|null find($id, $lockMode = null, $lockVersion = null)
 * @method MMatusers|null findOneBy(array $criteria, array $orderBy = null)
 * @method MMatusers[]    findAll()
 * @method MMatusers[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class MMatusersRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, MMatusers::class);
    }

    // /**
    //  * @return MMatusers[] Returns an array of MMatusers objects
    //  */
    /*
    public function findByExampleField($value)
    {
        return $this->createQueryBuilder('m')
            ->andWhere('m.exampleField = :val')
            ->setParameter('val', $value)
            ->orderBy('m.id', 'ASC')
            ->setMaxResults(10)
            ->getQuery()
            ->getResult()
        ;
    }
    */

    /*
    public function findOneBySomeField($value): ?MMatusers
    {
        return $this->createQueryBuilder('m')
            ->andWhere('m.exampleField = :val')
            ->setParameter('val', $value)
            ->getQuery()
            ->getOneOrNullResult()
        ;
    }
    */
}
