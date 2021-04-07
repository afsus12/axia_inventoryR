<?php

namespace App\Repository;

use App\Entity\DMouvementligne;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @method DMouvementligne|null find($id, $lockMode = null, $lockVersion = null)
 * @method DMouvementligne|null findOneBy(array $criteria, array $orderBy = null)
 * @method DMouvementligne[]    findAll()
 * @method DMouvementligne[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class DMouvementligneRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, DMouvementligne::class);
    }

    // /**
    //  * @return DMouvementligne[] Returns an array of DMouvementligne objects
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
    public function findOneBySomeField($value): ?DMouvementligne
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
