<?php


namespace App\Controller;

use App\Entity\DArtstock;
use App\Entity\DInventairestockligne;
use App\Repository\DArticleRepository;
use App\Repository\DArtstockRepository;
use App\Repository\DInventairestockligneRepository;
use App\Entity\DInventairestock;
use DateTime;
use Symfony\Component\Serializer\SerializerInterface;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Validator\Validator\ValidatorInterface;
use Symfony\Component\Serializer\Exception\NotEncodableValueException;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;  

class inventaireController extends AbstractController {

    /**
     * @Route("api/inventaire/inventairestock", name="inventaire_stock")
     * @Method({"POST"})
     */
    
    public function inventaireEntetePR(Request $request,SerializerInterface $serilizer,DInventairestockligneRepository $invr ,DArticleRepository $artrep,DArtstockRepository $artsrep)

      {
        $data = $request->getContent();
        try{
            $inv= $serilizer->deserialize($data,DInventairestock::class,'json');
        
            $inv->setIsValide(0);
            $inv->setIsDate(new DateTime());
            $inv->setCbmodification(new DateTime());
            $fad=$inv->getFaCodefamille();
            if (empty($fad)==false){
             $pi=$inv->getPiIntitule();
             $cd=$inv->getDeCode();
             $art=$artrep->findBy(['faCodefamille'=>$fad]);
             foreach($art as $event)
{      $invsto= new DInventairestockligne();
        $invsto->setPiIntitule($pi);
        $invsto->setDeCode($cd);
        $ref=$event->getArRef();
        $invsto->setArRef($ref);
        $invsto->setFaCodefamille($fad);
        $desing=$event->getArDesign();
        $invsto->setArDesign($desing);
        $type=$event->getArType();
        $invsto->setArType($type);
        $invsto->setEgEnumere1("");
        $invsto->setEgEnumere2("");
        $invsto->setGamme1("");
        $invsto->setGamme2("");
        $unite=$event->getArUnite();
        $invsto->setArUnite("$unite");
        $artsto=$artsrep->findOneBy(['arRef'=>$ref,
        'deCode'=>$cd]);
        if(empty($artsto)==false){
        $qte=$artsto->getAsQtesto();
        $invsto->setIsQte($qte);
        $cmup=$artsto->getAsCmup();
        $invsto->setIsCmup($cmup);
        $iscode=$inv->getIsCode();
        $invsto->setIsCode($iscode);
        $invsto->setCbcreateur('elitex47');
        $invsto->setCbmodification(new DateTime());
 
        $em = $this->getDoctrine()->getManager();
        $em->persist($invsto);
        $em->flush();  
        }

}



            }else{ 

                $em = $this->getDoctrine()->getManager();
                $em->persist($inv);
                $em->flush();  
                return $this->json($inv,201,['message'=>'scancb']);               
            }
    $em = $this->getDoctrine()->getManager();
    $em->persist($inv);
    $em->flush();  
    return  $this->json($inv,201,['message'=>'scancb']);   
      
        } catch(NotEncodableValueException $e){ return $this->json(['status'=>400,'message'=>$e->getMessage()]);
        }
     }


      /**
     * @Route("api/inventaire/inventairestockfa", name="inventaire_stockfa")
     * @Method({"POST"})
     */
   public function inventaireSetCfa(Request $request,SerializerInterface $serilizer,DInventairestockligneRepository $invrep)
   {
    $data = $request->getContent();
    try{
    $inv= $serilizer->deserialize($data,DInventairestockligne::class,'json');
    $codeinv=$inv->getIsCode();
    $pi=$inv->getPiIntitule();
    $ref=$inv->getArRef();
    $qtea=$inv->getIsQtea();
    $prix=$inv->getIsPrixa();
    $stockl=$invrep->findOneBy(['arRef'=>$ref,
    'piIntitule'=>$pi,
    'isCode'=>$codeinv]);
    $qte=$stockl->getIsQte();
    $stockl->setIsQtea($qtea);
    $stockl->setIsPrixa($prix);
    $cmupd=$stockl->getIsCmup();
    $stockl->setIsDifferenceqte($qte-$qtea);
    $stockl->setIsDifferenceprix($cmupd-$prix);
    $em = $this->getDoctrine()->getManager();
    $em->persist($stockl);
    $em->flush();  
    return  $this->json($stockl,201,['message'=>'scancb']);   
    }catch(NotEncodableValueException $e){ return $this->json(['status'=>400,'message'=>$e->getMessage()]);
    }
 
 }








/**
     * @Route("api/inventaire/inventairestockbc", name="inventaire_stockba")
     * @Method({"POST"})
     */
    public function inventaireSetbybacode(Request $request,SerializerInterface $serilizer,DInventairestockligneRepository $invrep)
    {
     $data = $request->getContent();
     try{
     $inv= $serilizer->deserialize($data,DInventairestockligne::class,'json');
     $qtea=$inv->getIsQtea();
     $prix=$inv->getIsPrixa();
     $em = $this->getDoctrine()->getManager();
     $em->persist($inv);
     $em->flush();  
     return  $this->json($inv,201,['message'=>'scancb']);   
     }catch(NotEncodableValueException $e){ return $this->json(['status'=>400,'message'=>$e->getMessage()]);
     }
  
  }









}

