<?php

namespace App\Repository;

use App\Entity\DMouvementmobile;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @method DMouvementmobile|null find($id, $lockMode = null, $lockVersion = null)
 * @method DMouvementmobile|null findOneBy(array $criteria, array $orderBy = null)
 * @method DMouvementmobile[]    findAll()
 * @method DMouvementmobile[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class DMouvementmobileRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, DMouvementmobile::class);
    }

    // /**
    //  * @return DMouvementmobile[] Returns an array of DMouvementmobile objects
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
    public function findOneBySomeField($value): ?DMouvementmobile
    {
        return $this->createQueryBuilder('d')
            ->andWhere('d.exampleField = :val')
            ->setParameter('val', $value)
            ->getQuery()
            ->getOneOrNullResult()
        ;
    }
    */


    public function Fndza($value,$value2):array
    { $entityManager = $this->getEntityManager();
     $queryBuilder = $entityManager->createQueryBuilder();
     $queryBuilder->select('a.arRef',)
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
