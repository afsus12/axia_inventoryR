<?php

namespace App\Repository;

use App\Entity\DDepot;
use App\Entity\DDepotutilisateurmobile;
use App\Entity\DMataccessmobile;
use App\Entity\PPreferencesmobile   ;
use App\Entity\DProtusersmobile;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @method DDepotutilisateurmobile|null find($id, $lockMode = null, $lockVersion = null)
 * @method DDepotutilisateurmobile|null findOneBy(array $criteria, array $orderBy = null)
 * @method DDepotutilisateurmobile[]    findAll()
 * @method DDepotutilisateurmobile[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class DDepotutilisateurmobileRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, DDepotutilisateurmobile::class);
    }

    // /**
    //  * @return DDepotutilisateurmobile[] Returns an array of DDepotutilisateurmobile objects
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
    public function findOneBySomeField($value): ?DDepotutilisateurmobile
    {
        return $this->createQueryBuilder('d')
            ->andWhere('d.exampleField = :val')
            ->setParameter('val', $value)
            ->getQuery()
            ->getOneOrNullResult()
        ;
    }
    */


    public function deletear($dcode,$prot)
    {      
        $entityManager = $this->getEntityManager();
        $queryBuilder = $entityManager->createQueryBuilder();
        $queryBuilder->delete(DDepotutilisateurmobile::class, 'a')
        ->where('a.deCode = :code1')
        ->andwhere('a.protmUser = :code2')
        ->setParameter('code1', $dcode)
        ->setParameter('code2', $prot)
        ->getQuery()
        ->execute();
        ;
    }
    public function deletear2($prot)
    {      
        $entityManager = $this->getEntityManager();
        $queryBuilder = $entityManager->createQueryBuilder();
        $queryBuilder->delete(DProtusersmobile::class,'a')
     
        ->where('a.protmUser = :code2')
        ->setParameter('code2', $prot)
        ->getQuery()
        ->execute();
        ;
    }
    public function deletear1($prot)
    {      
        $entityManager = $this->getEntityManager();
        $queryBuilder = $entityManager->createQueryBuilder();
        $queryBuilder->delete(DDepotutilisateurmobile::class, 'a')
     
        ->where('a.protmUser = :code2')
        ->setParameter('code2', $prot)
        ->getQuery()
        ->execute();
        ;
       
    }
    public function deletear3($prot)
    {      
        $entityManager = $this->getEntityManager();
        $queryBuilder = $entityManager->createQueryBuilder();
        $queryBuilder->delete(DMataccessmobile::class, 'a')
     
        ->where('a.protmUser = :code2')
        ->setParameter('code2', $prot)
        ->getQuery()
        ->execute();
        ;
       
    }
    public function deletear4($prot)
    {      
        $entityManager = $this->getEntityManager();
        $queryBuilder = $entityManager->createQueryBuilder();
        $queryBuilder->delete(PPreferencesmobile::class, 'a')
     
        ->where('a.protmUser = :code2')
        ->setParameter('code2', $prot)
        ->getQuery()
        ->execute();
        ;
       
    }

    
    public function finddepotdif()
    {      
        $entityManager = $this->getEntityManager();
     $queryBuilder = $entityManager->createQueryBuilder();
     $queryBuilder->select('b.deCode','b.deIntitule')
      
         ->from(DDepot::class,'b');
   
     

        $query = $queryBuilder->getQuery()->getResult() 
        ; 
        return $query;     
        ;
    }
}
