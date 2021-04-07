<?php

namespace App\Repository;

use App\Entity\DArtstock;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @method DArtstock|null find($id, $lockMode = null, $lockVersion = null)
 * @method DArtstock|null findOneBy(array $criteria, array $orderBy = null)
 * @method DArtstock[]    findAll()
 * @method DArtstock[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class DArtstockRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, DArtstock::class);
    }

    // /**
    //  * @return DArtstock[] Returns an array of DArtstock objects
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
    public function findOneBySomeField($value): ?DArtstock
    {
        return $this->createQueryBuilder('d')
            ->andWhere('d.exampleField = :val')
            ->setParameter('val', $value)
            ->getQuery()
            ->getOneOrNullResult()
        ;
    }
    */




    public function findOneBySomeField($value): ?DArtstock
    {
        return $this->createQueryBuilder('d')
            ->select('*')
            ->andWhere('d.arRef = :val')
            ->setParameter('val', $value)
            ->getQuery()
            ->getOneOrNullResult()
        ;
    }






}
