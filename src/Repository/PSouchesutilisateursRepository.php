<?php

namespace App\Repository;

use App\Entity\PSouchesutilisateurs;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @method PSouchesutilisateurs|null find($id, $lockMode = null, $lockVersion = null)
 * @method PSouchesutilisateurs|null findOneBy(array $criteria, array $orderBy = null)
 * @method PSouchesutilisateurs[]    findAll()
 * @method PSouchesutilisateurs[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class PSouchesutilisateursRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, PSouchesutilisateurs::class);
    }

    // /**
    //  * @return PSouchesutilisateurs[] Returns an array of PSouchesutilisateurs objects
    //  */
    /*
    public function findByExampleField($value)
    {
        return $this->createQueryBuilder('p')
            ->andWhere('p.exampleField = :val')
            ->setParameter('val', $value)
            ->orderBy('p.id', 'ASC')
            ->setMaxResults(10)
            ->getQuery()
            ->getResult()
        ;
    }
    */

    /*
    public function findOneBySomeField($value): ?PSouchesutilisateurs
    {
        return $this->createQueryBuilder('p')
            ->andWhere('p.exampleField = :val')
            ->setParameter('val', $value)
            ->getQuery()
            ->getOneOrNullResult()
        ;
    }
    */
}
