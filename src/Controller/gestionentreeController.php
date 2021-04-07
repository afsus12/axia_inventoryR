<?php 

namespace App\Controller;

use App\Entity\DArticle;
use App\Entity\DArtstock;
use App\Entity\DDepot;
use App\Entity\DMouvementmobil;
use App\Entity\DProtusers;
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


class gestionentreeController extends AbstractController {
/**
* @Route("api/articlebar/entré")
*@Method({"POST"})
*/
public function entrestock(Request $request,SerializerInterface $serilizer,ValidatorInterface $validator,DArtstockRepository $arrepo,DDepotRepository $deprep)
{   
   
    $data = $request->getContent();
    try{
        $mouvemnt= $serilizer->deserialize($data,DMouvementmobil::class,'json');
        $mouvemnt->setCbmodification(new \DateTime());
        $mouvemnt->setMbCreatedat(new \DateTime());
        $mouvemnt->setMbType('entrée');
        $mouvemnt->setMbQtetrans(0);
        $mouvemnt->setMbQtesortie(0);
        $ref=$mouvemnt->getArRef();
        $cd=$mouvemnt->getDeCode();
        $art=$arrepo->findOneBy(['arRef'=>$ref,
        'deCode'=>$cd]);
        $dep=$deprep->findOneBy(['deCode'=>$cd]);
        $intitu=$dep->getDeIntitule();
        $mouvemnt->setDeIntitule($intitu);
        $prot=$mouvemnt->getProtUser();
        $mouvemnt->setCbcreateur($prot);
        $vl1=$art->getAsQtesto();
        $mouvemnt->setMbQteancien($vl1);
        $vl2=$mouvemnt->getMbQteentre();
        $res=$vl1+$vl2;
        $mouvemnt->setAsQtesto($res);
        $art->setAsQtesto($res);
        $prix=$art->getAsCmup();
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




