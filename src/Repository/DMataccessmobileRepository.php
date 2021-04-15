<?php

namespace App\Repository;

use App\Entity\DDepot;
use App\Entity\DMataccessmobile;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @method DMataccessmobile|null find($id, $lockMode = null, $lockVersion = null)
 * @method DMataccessmobile|null findOneBy(array $criteria, array $orderBy = null)
 * @method DMataccessmobile[]    findAll()
 * @method DMataccessmobile[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class DMataccessmobileRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, DMataccessmobile::class);
    }

    // /**
    //  * @return DMataccessmobile[] Returns an array of DMataccessmobile objects
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
    public function findOneBySomeField($value): ?DMataccessmobile
    {
        return $this->createQueryBuilder('d')
            ->andWhere('d.exampleField = :val')
            ->setParameter('val', $value)
            ->getQuery()
            ->getOneOrNullResult()
        ;
    }
    */ 
    public function Finddepot($value):array
    { $entityManager = $this->getEntityManager();
     $queryBuilder = $entityManager->createQueryBuilder();
     $queryBuilder->select('b.deIntitule')
        ->from(DMataccessmobile::class, 'a') 
        ->from(DDepot::class,'b') 
        
        ->where('a.protmUser = :code')
        ->andWhere('a.deCode=b.deCode')
       
        ->setParameter('code', $value);
      $query = $queryBuilder->getQuery()->getResult() 
      ; 
      return $query;            
    }
}
