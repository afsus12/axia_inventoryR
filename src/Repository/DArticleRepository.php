<?php

namespace App\Repository;
use App\Entity\DArtstock;
use App\Entity\DArticle;
use App\Entity\DDepot;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;
use Doctrine\ORM\Query\ResultSetMappingBuilder;
use Doctrine\ORM\Query\ResultSetMapping;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Expr\Value;
use Doctrine\ORM\Query\Parameter;
use Doctrine\DBAL\Types\Type;
use Doctrine\ORM\Query;

/**
 * @method DArticle|null find($id, $lockMode = null, $lockVersion = null)
 * @method DArticle|null findOneBy(array $criteria, array $orderBy = null)
 * @method DArticle[]    findAll()
 * @method DArticle[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class DArticleRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, DArticle::class);
    }
    public function findWithQTE($arRef)
{
    $queryBuilder = $this->createQueryBuilder('u')
        ->join('u.asQtesto', 'arRef')
        ->where('u.arRef = :arRef')
        ->setParameter('arRef', $arRef);
    return $queryBuilder->getQuery()->getResult();
}

    // /**
    //  * @return DArticle[] Returns an array of DArticle objects
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
    public function findOneBySomeField($value): ?DArticle
    {
        return $this->createQueryBuilder('d')
            ->andWhere('d.exampleField = :val')
            ->setParameter('val', $value)
            ->getQuery()
            ->getOneOrNullResult()
        ;
    }
    */
      
    
    /**
      * @return array Returns an array of Question objects
      */
    public function findbycodebare($value):array
    {
        return  $this->createQueryBuilder('c')
                ->select( 'c','d' )
                ->leftJoin(
               'App\Entity\DArtstock',
                      'd',
                     'WITH',
                'c.arRef = d.arRef '
        
        )->andWhere('c.arCodebarre=:val')
        ->setParameter('val',$value)
        ->getQuery()
        ->getOneOrNullResult()
        ;
    
    }
    
   

      
    
    
    
    public function findItemsAndSortByStatus(  string $value)
    {
        
   
        $sql ="
        select   A.[AR_Ref],A.[AR_Design],A.[AR_CodeBarre] ,AR.[AS_QteSto],D.[DE_Intitule]
        from [D_ARTICLE] A,[D_ARTSTOCK] AR,[D_DEPOT] D 
        where A.[AR_Ref]=AR.[AR_Ref] and D.DE_Code=AR.[DE_Code] and A.[AR_CodeBarre]="."'".$value."'";
    
        $rsm = new ResultSetMappingBuilder($this->getEntityManager());
        $rsm->addEntityResult(DArticle::class, "A") ;
        $rsm->addEntityResult(DArtstock::class, "AR");
        $rsm->addEntityResult(DDepot::class, "D");
      
        foreach ($this->getClassMetadata()->fieldMappings as $obj) {
            $rsm->addFieldResult("A", $obj["columnName"], $obj["fieldName"]);
            $rsm->addFieldResult("AR", $obj["columnName"], $obj["fieldName"]);
            $rsm->addFieldResult("D", $obj["columnName"], $obj["fieldName"]);
          
        }
        
    
        $stmt = $this->getEntityManager()->createNativeQuery($sql, $rsm);
        
    
        $stmt->execute();
    
        return $stmt->getResult();
    }





      public function barrecode($value)
      {
        $entityManager = $this->getEntityManager();

        $sql = "
        select   A.[AR_Ref],A.[AR_Design],A.[AR_CodeBarre] ,AR.[AS_QteSto],D.[DE_Intitule]
        from [D_ARTICLE] A,[D_ARTSTOCK] AR,[D_DEPOT] D 
        where A.[AR_Ref]=AR.[AR_Ref] and D.[DE_Code]=AR.[DE_Code] and A.[AR_CodeBarre]=:id";
        
        // array of multiple query parameters (name, value)
        $stmt = $entityManager->getConnection()->prepare($sql);
        
        $stmt->execute([
            'id' => $value
            
        ]);
        
        $results = $stmt->fetchAll();
        return $results;
      }
       public function FF($value)
       {
        $entityManager = $this->getEntityManager();
        $rsm = new ResultSetMappingBuilder($entityManager,ResultSetMappingBuilder::COLUMN_RENAMING_INCREMENT
    );
        $mySql = "
        select   A.[AR_Ref],A.[AR_Design],A.[AR_CodeBarre] ,AR.[AS_QteSto],D.[DE_Intitule]
        from [D_ARTICLE] A,[D_ARTSTOCK] AR,[D_DEPOT] D 
        where A.[AR_Ref]=AR.[AR_Ref] and D.[DE_Code]=AR.[DE_Code] and A.[AR_CodeBarre]=:id"
        ;
        $rsm->addRootEntityFromClassMetadata('App\Entity\DArticle', 'A');
        $rsm->addJoinedEntityFromClassMetadata('App\Entity\DArtstock', 'AR', 'A', '[AR_Ref]');
        $rsm->addRootEntityFromClassMetadata('App\Entity\DDepot', 'D');
        $rsm->addJoinedEntityFromClassMetadata('App\Entity\DArtstock', 'AR', 'D', '[DE_Code]');
        $queryParameters = new ArrayCollection(array(
            new Parameter('id', $value, TYPE::STRING)));
        $query = $entityManager->createNativeQuery($mySql, $rsm);
        $query->setParameters($queryParameters);
        $salidas = $query->getResult();
        return $salidas;
       }

/*
     * @returns array|MyAwesomeEntity[]
     */
    public function findSomething(): array
    {
        $rsm = $this->createResultSetMappingBuilder('my_alias');
        $select = $rsm->generateSelectClause(['my_alias']);

        $sql = <<<SQL
SELECT $select
FROM MyAwesomeEntity AS my_alias
LIMIT 10;
SQL;

        $query = $this->getEntityManager()->createNativeQuery(
            $sql,
            $rsm
        );

        return $query->getResult();
    }


    public function find22($value)
    {
        // la table en base de données correspondant à l'entité liée au repository en cours
        $table1 = $this->getClassMetadata(DArticle::class)->getTableName();
        $table2 = $this->getClassMetadata(DArtstock::class)->getTableName();
        $table3 = $this->getClassMetadata(DDepot::class)->getTableName();
        // Dans mon cas je voulais trier mes résultats avec un ordre bien particulier
        $sql =  "SELECT a.[AR_Ref] "
                ."FROM ".$table1." as  a ,".$table2." as b,".$table3."  as c "
                ."WHERE a.[AR_Ref]=b.[AR_Ref]  and a.[AR_CodeBarre]=:arCodebarre"
                ;
    
        $rsm = new ResultSetMappingBuilder($this->getEntityManager());
        $rsm->addEntityResult(DArticle::class, "a");
        $rsm->addEntityResult(DArtstock::class, "b");
        $rsm->addEntityResult(DDepot::class, "c");
    
        // On mappe le nom de chaque colonne en base de données sur les attributs de nos entités
        foreach ($this->getClassMetadata()->fieldMappings as $obj) {
            $rsm->addFieldResult("a", $obj["columnName"], $obj["fieldName"]);
            $rsm->addFieldResult("b", $obj["columnName"], $obj["fieldName"]);
            $rsm->addFieldResult("c", $obj["columnName"], $obj["fieldName"]);
        }
    
        $stmt = $this->getEntityManager()->createNativeQuery($sql, $rsm);
    
        $stmt->setParameter('arCodebarre',$value);
      
    
        $stmt->execute();
    
        return $stmt->getResult();
    }

    public function Fu0($value)
    {
        $query = $this->createQuery('SELECT a FROM App\Entity\DArticle p WHERE p.arCodebarre=:val');
        $query->setParameter('val',$value);
        $products = $query->getResult();
        return  $products;
    }

       public function Fnd($value,$value2):array
       { $entityManager = $this->getEntityManager();
        $queryBuilder = $entityManager->createQueryBuilder();
        $queryBuilder->select('a.arRef','a.arDesign','a.arCodebarre','b.asQtesto','c.deCode','c.deIntitule')
           ->from(DArticle::class, 'a')
            ->from(DArtstock::class,'b')    
            ->from(DDepot::class,'c')
           ->where('a.arCodebarre = :code','a.arRef=b.arRef','c.deIntitule=:val','b.deCode=c.deCode')
           ->setParameter('code', $value)
           ->setParameter('val', $value2);
         $query = $queryBuilder->getQuery()->getResult() 
         ; 
         return $query;            
       }


}
