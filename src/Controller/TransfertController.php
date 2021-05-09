<?php 

namespace App\Controller;

use App\Entity\DArticle;
use App\Entity\DArtstock;
use App\Entity\DMouvementmobile;

use App\Repository\DArtstockRepository;
use App\Repository\DDepotRepository;
use DateTime;
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


class TransfertController extends AbstractController {
/**
* @Route("api/articlebar/transfert")
*@Method({"POST"})
*/
public function transfertstock(Request $request,SerializerInterface $serilizer,ValidatorInterface $validator,DArtstockRepository $arrepo,DArtstockRepository $arrepo2,DDepotRepository $deprep,DDepotRepository $deprep2)
{   
   
    $data = $request->getContent();
    try{
        $mouvemnt= $serilizer->deserialize($data,DMouvementmobile::class,'json');
        $mouvemnt->setCbmodification(new \DateTime());
        $mouvemnt->setMbCreatedat(new \DateTime());
        $mouvemnt->setMbType('transfert');
        $mouvemnt->setMbQtesortie(0);
        $mouvemnt->setMbQteentre(0);
        $ref=$mouvemnt->getArRef();
        $cd=$mouvemnt->getDeCode();
        $art=$arrepo->findOneBy(['arRef'=>$ref,
        'deCode'=>$cd]);
        $cd2=$mouvemnt->getMbDecodedes();
        $deporg=$deprep->findOneBy(['deCode'=>$cd]);
        $depdes=$deprep2->findOneBy(['deCode'=>$cd2]);
        $intitudes=$depdes->getDeIntitule();
        $intitu=$deporg->getDeIntitule();
        $mouvemnt-> setMbDeintitudes($intitudes);
        $mouvemnt->setMbDeintituorig($intitu);
        $mouvemnt->setDeIntitule($intitu);
        $prot=$mouvemnt->getProtmUser();
        $mouvemnt->setCbcreateur($prot);
        $vl1=$art->getAsQtesto();
        $mouvemnt->setMbQteancien($vl1);
        $vl2=$mouvemnt->getMbQtetrans();
        $res=$vl1-$vl2;
        $mouvemnt->setAsQtesto($res);
        $art->setAsQtesto($res);
        $prix=$art->getAsCmup();
        $art2=$arrepo2->findOneBy(['arRef'=>$ref,
        'deCode'=>$cd2]);
        if ( empty($art2)==false){
          $val4=$art2->getAsQtesto();
          $res2=$val4+$vl2;
           $art2->setAsQtesto($res2);
          $art2->setAsMontsto($res2*$prix);
          $em3 = $this->getDoctrine()->getManager();
          $em3->persist($art2);
          $em3->flush();

          
        }else{
            $art5 = new DArtstock();
            $art5->setArRef($ref);
            $art5->setAsQtesto($vl2);
            $art5->setAsMontsto($prix*$vl2);
            $art5->setAsCmup($prix);
            $art5->setDeCode($cd2);
            $em1 = $this->getDoctrine()->getManager();
            $em1->persist($art5);
            $em1->flush();

        
        
        }
          
         


        $montant=$res*$prix;
        $mouvemnt->setAsMontsto($montant);
        $art->setAsMontsto($montant);

        $em = $this->getDoctrine()->getManager();
        $em->persist($mouvemnt,$art);
        $em->flush();

return $this->json($mouvemnt,200,[]);
    } catch(NotEncodableValueException $e){ return $this->json(['status'=>400,'message'=>$e->getMessage()]);
    }
 }
 



}




