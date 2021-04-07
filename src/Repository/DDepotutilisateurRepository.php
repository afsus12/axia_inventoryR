<?php

namespace App\Repository;

use App\Entity\DDepotutilisateur;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @method DDepotutilisateur|null find($id, $lockMode = null, $lockVersion = null)
 * @method DDepotutilisateur|null findOneBy(array $criteria, array $orderBy = null)
 * @method DDepotutilisateur[]    findAll()
 * @method DDepotutilisateur[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class DDepotutilisateurRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, DDepotutilisateur::class);
    }

    // /**
    //  * @return DDepotutilisateur[] Returns an array of DDepotutilisateur objects
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
    public function findOneBySomeField($value): ?DDepotutilisateur
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
