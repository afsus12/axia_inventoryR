<?php

namespace App\Repository;

use App\Entity\DMouvement;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @method DMouvement|null find($id, $lockMode = null, $lockVersion = null)
 * @method DMouvement|null findOneBy(array $criteria, array $orderBy = null)
 * @method DMouvement[]    findAll()
 * @method DMouvement[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class DMouvementRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, DMouvement::class);
    }

    // /**
    //  * @return DMouvement[] Returns an array of DMouvement objects
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
    public function findOneBySomeField($value): ?DMouvement
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
