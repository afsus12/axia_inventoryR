<?php


namespace App\Controller;

use App\Entity\DMataccessmobile;
use App\Repository\DDepotRepository;
use App\Repository\DMataccessmobileRepository;
use JMS\Serializer\SerializationContext;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;  
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use JMS\Serializer\SerializerInterface;

class selectionbarController extends AbstractController{

    private $serializer;
 
   public function __construct(
       SerializerInterface $serializer)
   {
       $this->serialize = $serializer;
   }

    /**
     * @Route("api/Depot/selection/{protmUser}", name="Depot_list" )
     * @Method({"GET"})
     */


public function showAll(DMataccessmobileRepository $dep,DMataccessmobile $dm)
{     $prot=$dm->getProtmUser(); 
     $intitu = $dep->Finddepot($prot);
     $data = $this->serialize ->serialize($intitu,'json');

    $response = new Response($data);
    $response->headers->set('Content-Type', 'application/json');

    return $response;

}



}