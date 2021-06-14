<?php

namespace App\Repository;

use App\Entity\DDepotutilisateurmobile;
use App\Entity\DProtusersmobile;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @method DProtusersmobile|null find($id, $lockMode = null, $lockVersion = null)
 * @method DProtusersmobile|null findOneBy(array $criteria, array $orderBy = null)
 * @method DProtusersmobile[]    findAll()
 * @method DProtusersmobile[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class DProtusersmobileRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, DProtusersmobile::class);
    }

    // /**
    //  * @return DProtusersmobile[] Returns an array of DProtusersmobile objects
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
    public function findOneBySomeField($value): ?DProtusersmobile
    {
        return $this->createQueryBuilder('d')
            ->andWhere('d.exampleField = :val')
            ->setParameter('val', $value)
            ->getQuery()
            ->getOneOrNullResult()
        ;
    }
    */

    public function Fndprot($value):array
    { $entityManager = $this->getEntityManager();
     $queryBuilder = $entityManager->createQueryBuilder();
     $queryBuilder->select('b.protmUser')
        ->from(DDepotutilisateurmobile::class, 'a')
         ->from(DProtusersmobile::class,'b')    
       
        ->where('b.deCode=a.deCode','a.protmUser=:code')
        ->setParameter('code', $value);        

        $query = $queryBuilder->getQuery()->getResult() 
      ; 
      return $query;            
    }
}
