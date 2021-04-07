<?php

namespace App\Repository;

use App\Entity\DAccessvente;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @method DAccessvente|null find($id, $lockMode = null, $lockVersion = null)
 * @method DAccessvente|null findOneBy(array $criteria, array $orderBy = null)
 * @method DAccessvente[]    findAll()
 * @method DAccessvente[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class DAccessventeRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, DAccessvente::class);
    }

    // /**
    //  * @return DAccessvente[] Returns an array of DAccessvente objects
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
    public function findOneBySomeField($value): ?DAccessvente
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
