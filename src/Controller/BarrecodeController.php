<?php

namespace App\Controller;


use App\Entity\DArticle;
use App\Entity\DDepot;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;  
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use JMS\Serializer\SerializerInterface;
use App\Repository\DArticleRepository;
use App\Repository\DArtstockRepository;
use App\Repository\DDepotRepository;
use Doctrine\ORM\EntityManagerInterface;
use Exception;
use phpDocumentor\Reflection\Types\Null_;
use Symfony\Component\Console\Output\Output;
use Symfony\Component\Validator\Constraints\IsNull;
use JMS\Serializer\SerializationContext;
class BarrecodeController extends abstractController
  {
 private $serializer;
 
    public function __construct(
        SerializerInterface $serializer)
    {
        $this->serialize = $serializer;
    }
    public function homepage(DArticleRepository $repository)
    {
        
    }
    /**
     * @Route("api/articlebar/{deIntitule}/{arCodebarre}", name="article_show" )
     * @Method({"GET"})
     */
    public function showAction(DDepotRepository $depo,DArtstockRepository $dd,DArticleRepository $repository,DArticle $art,DDepot $dep,SerializerInterface $serializer)
    {   
        $intitu=$dep->getDeIntitule();
        $code=$art->getArCodebarre();
        $em=$repository->Fnd($code,$intitu);
        $pe=$repository->findOneBy(['arCodebarre'=>$code]);
        $ref=$pe->getArRef();
        $dec=$depo->findOneBy(['deIntitule'=>$intitu]);
        $decode=$dec->getDeCode();
   
        if(empty($dd->findOneBy(['arRef'=>$ref,'deCode'=>$decode]))==false){
        $ph=$pe->getArPhoto();
        if(empty($ph)==false){
        $data1= base64_encode(stream_get_contents($ph)); 
        array_push($em,["arPhoto"=>$data1 ]);}
        }else {throw $this->createNotFoundException('The product does not exist');   return $this;}

      

        $data = $this->serialize ->serialize( $em,'json');
                 
        $response = new Response($data);
        $response->headers->set('Content-Type', 'application/json');
        

    
        return $response;   
    }




    
}
