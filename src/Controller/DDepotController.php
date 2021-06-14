<?php


namespace App\Controller;


use App\Repository\DDepotRepository;
use JMS\Serializer\SerializationContext;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;  
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use JMS\Serializer\SerializerInterface;

class DDepotController extends AbstractController{

    private $serializer;
 
   public function __construct(
       SerializerInterface $serializer)
   {
       $this->serialize = $serializer;
   }

    /**
     * @Route("api/Depot/", name="Depottss_list" )
     * @Method({"GET"})
     */


public function showAll(DDepotRepository $dep)
{   
    $intitu = $dep->findAll();
    $data = $this->serialize ->serialize($intitu,'json',SerializationContext::create()->setGroups(array('inti')));

    $response = new Response($data);
    $response->headers->set('Content-Type', 'application/json');

    return $response;

}



}