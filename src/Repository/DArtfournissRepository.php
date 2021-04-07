<?php

namespace App\Repository;

use App\Entity\DArtfourniss;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @method DArtfourniss|null find($id, $lockMode = null, $lockVersion = null)
 * @method DArtfourniss|null findOneBy(array $criteria, array $orderBy = null)
 * @method DArtfourniss[]    findAll()
 * @method DArtfourniss[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class DArtfournissRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, DArtfourniss::class);
    }

    // /**
    //  * @return DArtfourniss[] Returns an array of DArtfourniss objects
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
    public function findOneBySomeField($value): ?DArtfourniss
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
