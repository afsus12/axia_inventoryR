<?php

namespace App\Repository;

use App\Entity\DActionsArticle;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @method DActionsArticle|null find($id, $lockMode = null, $lockVersion = null)
 * @method DActionsArticle|null findOneBy(array $criteria, array $orderBy = null)
 * @method DActionsArticle[]    findAll()
 * @method DActionsArticle[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class DActionsArticleRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, DActionsArticle::class);
    }

    // /**
    //  * @return DActionsArticle[] Returns an array of DActionsArticle objects
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
    public function findOneBySomeField($value): ?DActionsArticle
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
