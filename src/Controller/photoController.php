<?php


namespace App\Controller;

use App\Entity\DArticle;
use App\Entity\DMataccessmobile;
use App\Repository\DArticleRepository;
use App\Repository\DDepotRepository;
use App\Repository\DMataccessmobileRepository;
use Exception;
use JMS\Serializer\SerializationContext;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;  
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use JMS\Serializer\SerializerInterface;
use Symfony\Component\HttpFoundation\StreamedResponse;

class photoController extends AbstractController{

    private $serializer;
 
   public function __construct(
       SerializerInterface $serializer)
   {
       $this->serialize = $serializer;
   }

    /**
     * @Route("api/ddt/{arCodebarre}", name="phott_list" )
     * @Method({"GET"})
     */


public function sdwAll(DArticle $art,DArticleRepository $artrep)
{     $prot=$art->getArCodebarre(); 
     $intitu = $artrep->findOneBy(['arCodebarre'=>$prot]);
     
     $ph=$intitu->getArPhoto();



     if (empty($ph)) {
        throw new \Exception('should not be reached');
    }   
      $data= base64_encode(stream_get_contents($ph)); 
      $em=['arPhoto'=>$data];
      $dd = $this->serialize ->serialize( $em,'json');

      $res=new Response($dd);
      $res->headers->set('Content-Type', 'application/json');
  
    return  $res;

}




}