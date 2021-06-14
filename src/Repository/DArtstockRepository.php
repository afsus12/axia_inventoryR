<?php

namespace App\Repository;


use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;
use App\Entity\DArtstock;
use App\Entity\DArticle;
use App\Entity\DDepot;

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
    public function Fndfa($value):array
    { $entityManager = $this->getEntityManager();
     $queryBuilder = $entityManager->createQueryBuilder();
     $queryBuilder->select('a.faCodefamille')->distinct()
        ->from(DArticle::class, 'a')
         ->from(DArtstock::class,'b')    
         ->from(DDepot::class,'c')
        ->where('c.deIntitule=:code','c.deCode=b.deCode','b.arRef = a.arRef')
        ->setParameter('code', $value);
      
      $query = $queryBuilder->getQuery()->getResult() 
      ; 
      return $query;            
    }
    public function Fndza($value,$value2):array
    { $entityManager = $this->getEntityManager();
     $queryBuilder = $entityManager->createQueryBuilder();
     $queryBuilder->select('a.arRef')->distinct()
        ->from(DArticle::class, 'a')
         ->from(DArtstock::class,'b')    
         ->from(DDepot::class,'c')
        ->where('a.faCodefamille=:code1','c.deCode=:code','c.deCode=b.deCode','b.arRef = a.arRef')
        ->setParameter('code', $value)        
        ->setParameter('code1', $value2);
      
      $query = $queryBuilder->getQuery()->getResult() 
      ; 
      return $query;            
    }





}
