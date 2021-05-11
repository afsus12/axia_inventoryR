<?php


namespace App\Controller;

use App\Entity\DInventairestock;
use App\Entity\DInventairestockligne;
use App\Entity\DMataccessmobile;
use App\Repository\DInventairestockligneRepository;
use App\Repository\DInventairestockRepository;
use App\Repository\DMataccessmobileRepository;
use JMS\Serializer\SerializationContext;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;  
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use JMS\Serializer\SerializerInterface;

class inventairegetController extends AbstractController{

    private $serializer;
 
   public function __construct(
       SerializerInterface $serializer)
   {
       $this->serialize = $serializer;
   }

    /**
     * @Route("api/inventaire/getstoklist/{protmUser}", name="inventaire_get" )
     * @Method({"GET"})
     */


public function showAll(DInventairestockRepository $repac,DMataccessmobile $mat)
{    

    $prot=$mat->getProtmUser();
    $intitu=$repac->Findinvent($prot);

    $data = $this->serialize ->serialize($intitu,'json');

    $response = new Response($data);
    $response->headers->set('Content-Type', 'application/json');

    return $response;

}


/**
     * @Route("api/inventaire/getstockligne/{piIntitule}", name="inventaireligne_get" )
     * @Method({"GET"})
     */


    public function showlist(DInventairestockligneRepository $repac,DInventairestock  $invl)
    {    
        $pi=$invl->getPiIntitule();

        $intitu=$repac->findBy(['piIntitule'=>$pi]);
    
        $data = $this->serialize ->serialize($intitu,'json');
    
        $response = new Response($data);
        $response->headers->set('Content-Type', 'application/json');
    
        return $response;
    
    }



}