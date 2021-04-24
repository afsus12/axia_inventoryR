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
use Doctrine\ORM\EntityManagerInterface;
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
    public function showAction(DArticleRepository $repository,DArticle $art,DDepot $dep,SerializerInterface $serializer)
    {   
        $intitu=$dep->getDeIntitule();
        $code=$art->getArCodebarre();
        $em=$repository->Fnd($code,$intitu);
        $data = $this->serialize ->serialize( $em,'json');
         
        $response = new Response($data);
        $response->headers->set('Content-Type', 'application/json');
    
        return $response;   
    }

    
}
