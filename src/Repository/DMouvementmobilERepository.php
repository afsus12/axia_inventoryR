<?php

namespace App\Repository;

use App\Entity\DMouvementmobil;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @method DMouvementmobil|null find($id, $lockMode = null, $lockVersion = null)
 * @method DMouvementmobil|null findOneBy(array $criteria, array $orderBy = null)
 * @method DMouvementmobil[]    findAll()
 * @method DMouvementmobil[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class DMouvementmobilERepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, DMouvementmobil::class);
    }

    // /**
    //  * @return DMouvementmobil[] Returns an array of DMouvementmobil objects
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
    public function findOneBySomeField($value): ?DMouvementmobil
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
