<?php

namespace App\Repository;

use App\Entity\DDocligne;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @method DDocligne|null find($id, $lockMode = null, $lockVersion = null)
 * @method DDocligne|null findOneBy(array $criteria, array $orderBy = null)
 * @method DDocligne[]    findAll()
 * @method DDocligne[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class DDocligneRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, DDocligne::class);
    }

    // /**
    //  * @return DDocligne[] Returns an array of DDocligne objects
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
    public function findOneBySomeField($value): ?DDocligne
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
