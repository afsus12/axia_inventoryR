<?php 

namespace App\Controller;


use App\Entity\DMouvementmobile;

use App\Repository\DArtstockRepository;
use App\Repository\DDepotRepository;

use Doctrine\DBAL\Types\DateTimeType;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;  
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use symfony\Component\Serializer;

use Symfony\Component\Serializer\Exception\NotEncodableValueException;
use Symfony\Component\Serializer\SerializerInterface;
use Symfony\Component\Validator\Validator\ValidatorInterface;


class gestionsortieController extends AbstractController {
/**
* @Route("api/articlebar/sortie")
*@Method({"POST"})
*/
public function sortiestock(Request $request,SerializerInterface $serilizer,ValidatorInterface $validator,DArtstockRepository $arrepo,DDepotRepository $deprep)
{   
   
    $data = $request->getContent();
    try{
        $mouvemnt= $serilizer->deserialize($data,DMouvementmobile::class,'json');
        
        $ref=$mouvemnt->getArRef();
        $cd=$mouvemnt->getDeCode();
        $art=$arrepo->findOneBy(['arRef'=>$ref,
        'deCode'=>$cd]);
        $dep=$deprep->findOneBy(['deCode'=>$cd]);
        $vl1=$art->getAsQtesto();
        $vl2=$mouvemnt->getMbQtesortie();
        $res=$vl1-$vl2;
        if($res<0){


            return $this->json(['status'=>400,'message'=>"alert stock insufficent"]);
        } else{    $mouvemnt->setCbmodification(new \DateTime());
            $mouvemnt->setMbCreatedat(new \DateTime());
            $mouvemnt->setMbType('sortie');
            $mouvemnt->setMbQtetrans(0);
            $mouvemnt->setMbQteentre(0);
           
            $intitu=$dep->getDeIntitule();
            $mouvemnt->setDeIntitule($intitu);
            $prot=$mouvemnt->getProtmUser();
            $mouvemnt->setCbcreateur($prot);
            
            $mouvemnt->setMbQteancien($vl1);
           
          
            $mouvemnt->setAsQtesto($res);
            $art->setAsQtesto($res);
            $prix=$art->getAsCmup();
            $montant=$res*$prix;
            $mouvemnt->setAsMontsto($montant);
            $art->setAsMontsto($montant);
    
            $em = $this->getDoctrine()->getManager();
            $em->persist($mouvemnt,$art);
            $em->flush();
    
    return $this->json($mouvemnt,200,[]);}

    
    } catch(NotEncodableValueException $e){ return $this->json(['status'=>400,'message'=>$e->getMessage()]);
    }
 }
 



}




