<?php


namespace App\Controller;

use App\Entity\DArticle;
use App\Entity\DDepot;
use App\Entity\DDepotutilisateurmobile;
use App\Entity\DInventairestock;
use App\Entity\DInventairestockligne;
use App\Entity\DMataccessmobile;
use App\Entity\DMouvementmobile;
use App\Entity\PPreferencesmobile;
use App\Repository\DArtstockRepository;
use App\Repository\DInventairestockligneRepository;
use App\Repository\DInventairestockRepository;
use App\Repository\DMataccessmobileRepository;
use App\Repository\DMouvementmobileRepository;
use JMS\Serializer\SerializationContext;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;  
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use JMS\Serializer\SerializerInterface;
use App\Repository\DDepotRepository;
use App\Repository\DArticleRepository;
use App\Repository\PPreferencesmobileRepository;

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


public function showAll(DInventairestockRepository $repac,DDepotutilisateurmobile $mat)
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
    /**
     * @Route("api/inventaire/getfamillecode/{deIntitule}", name="famillecode_get" )
     * @Method({"GET"})
     */


    public function showlistfacode(DDepot $dep,DArtstockRepository $art)
    {    
        $cd=$dep->getDeIntitule();
        $intitu=$art->Fndfa($cd);
    
        $data = $this->serialize ->serialize($intitu,'json');
    
        $response = new Response($data);
        $response->headers->set('Content-Type', 'application/json');
    
        return $response;
    
    }
      /**
     * @Route("api/inventaire/getfamillelist/{deCode}/{faCodefamille}", name="famillelist_get" )
     * @Method({"GET"})
     */
    public function showlistfade(DArticle $artd,DDepot $dep,DArtstockRepository $art)
    {    
        $cd=$dep->getDeCode();
        $fac= $artd->getFaCodefamille();
        $intitu=$art->Fndza($cd,$fac);
    
        $data = $this->serialize ->serialize($intitu,'json');
    
        $response = new Response($data);
        $response->headers->set('Content-Type', 'application/json');
    
        return $response;
    
    }

    

/**
     * @Route("api/inventaire/deleterow/{piIntitule}/{arRef}", name="inventaireligne_delete" )
     * @Method({"GET"})
     */


    public function deleterow(DInventairestockligneRepository $repac,DInventairestockligne  $invl)
    {    
        $pi=$invl->getPiIntitule();
        $ref=$invl->getArRef();

       $repac->deletear($pi,$ref);

        $intitu=$repac->findBy(['piIntitule'=>$pi]);
        $data = $this->serialize ->serialize($intitu,'json');
    
        $response = new Response($data);
        $response->headers->set('Content-Type', 'application/json');
    
        return $response;
    
    }



     /**
     * @Route("api/consultation/{deIntitule}/{arCodebarre}/{protmUser}", name="articlecons_show" )
     * @Method({"GET"})
     */
    public function showAction(DDepotRepository $depo,DArtstockRepository $dd,DArticleRepository $repository,DArticle $art,DDepot $dep,SerializerInterface $serializer,DMouvementmobile $mov,DMouvementmobileRepository $rep,PPreferencesmobile $pm,PPreferencesmobileRepository $prefrep)
    {   
        $intitu=$dep->getDeIntitule();
        $code=$art->getArCodebarre();
        $prot=$pm->getProtmUser();
        $pref=$prefrep->findOneBy(['protmUser'=>$prot]);
        $bool=$pref->getPmImages();
       $article=$repository->findOneBy(['arCodebarre'=>$code]);
       $em=$repository->consultation($code,$intitu,$prot);
      $b= array('arDesign' => $article->getArDesign());
      $newarray = array();
      foreach ($em as $key) {
        $s= array_merge($b,$key);
        $newarray[] = $s;
        }
        if(empty($newarray)==false){
            $ph=$article->getArPhoto();
            if(empty($ph)==false && $bool==true){
            $data1= base64_encode(stream_get_contents($ph)); 
            array_push($newarray,["arPhoto"=>$data1 ]);}
            }else {throw $this->createNotFoundException('The product does not exist');   return $this;}
        $data = $this->serialize ->serialize( $newarray,'json');
                 
        $response = new Response($data);
        $response->headers->set('Content-Type', 'application/json');
        

    
        return $response;   
    }
   
     /**
     * @Route("api/getpref/{protmUser}", name="getconfig" )
     * @Method({"GET"})
     */
    public function showconfig(PPreferencesmobile $pref,PPreferencesmobileRepository $prefrep)
    {    
        $prot=$pref->getProtmUser();
        $preferenc=$prefrep->findOneBy(['protmUser'=>$prot]);

    
        $data = $this->serialize ->serialize($preferenc,'json');
    
        $response = new Response($data);
        $response->headers->set('Content-Type', 'application/json');
    
        return $response;
    
    }

}