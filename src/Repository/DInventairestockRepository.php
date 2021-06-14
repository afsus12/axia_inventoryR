<?php

namespace App\Repository;

use App\Entity\DDepotutilisateurmobile;
use App\Entity\DInventairestock;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;
use App\Entity\DMataccessmobile;
use App\Entity\PPreferencesmobile;

/**
 * @method DInventairestock|null find($id, $lockMode = null, $lockVersion = null)
 * @method DInventairestock|null findOneBy(array $criteria, array $orderBy = null)
 * @method DInventairestock[]    findAll()
 * @method DInventairestock[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class DInventairestockRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, DInventairestock::class);
    }

    // /**
    //  * @return DInventairestock[] Returns an array of DInventairestock objects
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
    public function findOneBySomeField($value): ?DInventairestock
    {
        return $this->createQueryBuilder('d')
            ->andWhere('d.exampleField = :val')
            ->setParameter('val', $value)
            ->getQuery()
            ->getOneOrNullResult()
        ;
    }
    */



    public function Findinvent($value):array
    { $entityManager = $this->getEntityManager();
     $queryBuilder = $entityManager->createQueryBuilder();
     $queryBuilder->select('b')
        ->from(DDepotutilisateurmobile::class, 'a') 
        ->from(DInventairestock::class,'b') 
        ->from(PPreferencesmobile::class,'c')
        
        ->where('a.protmUser = :code')
        ->andWhere('a.deCode=b.deCode')
        ->andWhere('c.protmUser =a.protmUser')
        ->andWhere('b.isDate >=c.pmDate')
       
        ->setParameter('code', $value)
        ->orderBy('b.isDate','DESC');
      $query = $queryBuilder->getQuery()->getResult() 
      ; 
      return $query;            
    }


   


}
