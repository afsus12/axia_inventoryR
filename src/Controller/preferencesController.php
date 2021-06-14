<?php 

namespace App\Controller;


use App\Entity\DMouvementmobile;
use App\Entity\PPreferencesmobile;
use App\Repository\DArtstockRepository;
use App\Repository\DDepotRepository;
use App\Repository\PPreferencesmobileRepository;
use Doctrine\DBAL\Types\DateTimeType;
use phpDocumentor\Reflection\Types\Boolean;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;  
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use symfony\Component\Serializer;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\ParamConverter;

use Symfony\Component\Serializer\Exception\NotEncodableValueException;
use Symfony\Component\Serializer\SerializerInterface;
use Symfony\Component\Validator\Validator\ValidatorInterface;


class preferencesController extends AbstractController {
/**
* @Route("api/preferences/add")
*@Method({"POST"})
*/
public function prefadd(Request $request,SerializerInterface $serilizer,ValidatorInterface $validator,DArtstockRepository $arrepo,DDepotRepository $deprep)
{   
   
    $data = $request->getContent();
    try{
        $mouvemnt= $serilizer->deserialize($data,PPreferencesmobile::class,'json');
        $mouvemnt->setPmDate(new \DateTime());
        $mouvemnt->setCbmodification(new \DateTime());
            $em = $this->getDoctrine()->getManager();
            $em->persist($mouvemnt);
            $em->flush();
    
    return $this->json($mouvemnt,200,[]);}

    catch(NotEncodableValueException $e){ return $this->json(['status'=>400,'message'=>$e->getMessage()]);
    }
 }


 /**
* @Route("api/preferences/edit/{protmUser}/{date}"  )
*@Method({"POST"})
*@ParamConverter("date", options={"format": "Y-m-d H:i:s"})
*/
public function prefaedit(Request $request,SerializerInterface $serilizer,ValidatorInterface $validator,DArtstockRepository $arrepo,DDepotRepository $deprep,PPreferencesmobile $pm,PPreferencesmobileRepository $rep,\DateTime $date,)
{   
    
    $data = $request->getContent();
    try{$mouvemnt= $serilizer->deserialize($data,PPreferencesmobile::class,'json');
        $imag=$mouvemnt-> getPmImages();
        $prot=$pm->getProtmUser();
        
        $mm=$rep->findOneBy(['protmUser'=>$prot]);
       
        $mm->setPmImages($imag);
        $mm->setPmDate($date);
        $mm->setCbmodification(new \DateTime());
            $em = $this->getDoctrine()->getManager();
            $em->persist($mm);
            $em->flush();
    
    return $this->json($mm,200,[]);}

    catch(NotEncodableValueException $e){ return $this->json(['status'=>400,'message'=>$e->getMessage()]);
    }
 }
 
  


}




