<?php


namespace App\Controller;

use App\Entity\DDepotutilisateurmobile;
use App\Entity\DEmployes;
use App\Entity\DMataccessmobile;
use App\Entity\DProtusersmobile;
use App\Repository\DDepotRepository;
use App\Repository\DDepotutilisateurmobileRepository;
use App\Repository\DEmployesRepository;
use App\Repository\DMataccessmobileRepository;
use App\Repository\DProtusersmobileRepository;
use App\Repository\DProtusersRepository;
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


public function showAll(DMataccessmobileRepository $dep,DDepotutilisateurmobile $dm)
{     $prot=$dm->getProtmUser(); 
     $intitu = $dep->Finddepot($prot);
     $data = $this->serialize ->serialize($intitu,'json');

    $response = new Response($data);
    $response->headers->set('Content-Type', 'application/json');

    return $response;

}


    /**
     * @Route("api/prot/{protmUser}", name="prot_list" )
     * @Method({"GET"})
     */


    public function findprotusers(DProtusersmobile $protm,
     DProtusersmobileRepository       $protrepo ,DDepotutilisateurmobileRepository $ddepotutil,)
    {     $prot=$protm->getProtmUser(); 
        $protuserdep=$ddepotutil->findBy(['protmUser'=>$prot]);
        $all=$protrepo->findAll();
 $array=[];
    foreach($protuserdep as $deprot){
         
        array_push( $array,$deprot->getDeCode());
    }
    $final=[];
    foreach($all as $single ){
       
        if(in_array($single->getDeCode(),$array)==true){

      array_push($final,['protmUser'=>$single->getProtmUser()]);
        }
    }
         $data = $this->serialize ->serialize($final,'json');
    
        $response = new Response($data);
        $response->headers->set('Content-Type', 'application/json');
    
        return $response;
    
    }
    
     /**
     * @Route("api/prot/depots/", name="ss_list" )
     * @Method({"GET"})
     */


    public function finddepotlist(
     DProtusersmobileRepository       $protrepo ,DDepotutilisateurmobileRepository $ddepotutil,)
    {    
          $final=$ddepotutil->finddepotdif();
         $data = $this->serialize ->serialize($final,'json');
    
        $response = new Response($data);
        $response->headers->set('Content-Type', 'application/json');
    
        return $response;
    
    }


    /**
     * @Route("api/em/prot/", name="em_list" )
     * @Method({"GET"})
     */


    public function findemlist(
       DEmployesRepository $demrep)
       {    
           $emp=$demrep->findAll();
           $final=[];
           foreach($emp as $emplo){
          $cd= $emplo->getEmCode();
          $nom=$emplo->getEmNom();
          $pre=$emplo->getEmPrenom();
          
          array_push($final,["emCode"=>$cd,"nom"=>$nom,"prenom"=>$pre]);
           }
            $data = $this->serialize ->serialize($final,'json');
       
           $response = new Response($data);
           $response->headers->set('Content-Type', 'application/json');
       
           return $response;
       
       }


}