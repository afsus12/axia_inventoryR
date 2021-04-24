<?php

namespace App\Repository;

use App\Entity\DRessources;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @method DRessources|null find($id, $lockMode = null, $lockVersion = null)
 * @method DRessources|null findOneBy(array $criteria, array $orderBy = null)
 * @method DRessources[]    findAll()
 * @method DRessources[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class DRessourcesRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, DRessources::class);
    }

    // /**
    //  * @return DRessources[] Returns an array of DRessources objects
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
    public function findOneBySomeField($value): ?DRessources
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
