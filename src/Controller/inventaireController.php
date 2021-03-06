<?php


namespace App\Controller;

use App\Entity\DArticle;
use App\Entity\DArtstock;
use App\Entity\DBontravail;
use App\Entity\DDepot;
use App\Entity\DInventairestockligne;
use App\Repository\DArticleRepository;
use App\Repository\DArtstockRepository;
use App\Repository\DInventairestockligneRepository;
use App\Entity\DInventairestock;
use App\Entity\DDocentete;
use App\Entity\DDocligne;
use App\Entity\DEmployes;
use App\Entity\DMouvementmobile;
use App\Entity\DProtusersmobile;
use App\Entity\PSouchesutilisateurs;
use App\Repository\DBontravailRepository;
use App\Repository\DDepotRepository;
use App\Repository\DEmployesRepository;
use App\Repository\DInventairestockRepository;
use App\Repository\DProtusersmobileRepository;
use App\Repository\DRessourcesRepository;
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
        
    $em = $this->getDoctrine()->getManager();
    $em->persist($inv);
    $em->flush();  
    return  $this->json($inv,201,['message'=>'scanfa']);   
      
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
    public function inventaireSetbybacode(Request $request,SerializerInterface $serilizer,DInventairestockligneRepository $invrep,DArtstockRepository $artsrep)
    {
     $data = $request->getContent();
     try{
     $inv= $serilizer->deserialize($data,DInventairestockligne::class,'json');
     $qte=$inv->getIsQte();
     $qtea=$inv->getIsQtea();
     $prix=$inv->getIsPrixa();
     $ref=$inv->getArRef();
     $cd=$inv->getDeCode();
     $artsto=$artsrep->findOneBy(['arRef'=>$ref,
     'deCode'=>$cd]);
     $cmup=$artsto->getAsCmup();
     $inv->setIsCmup($cmup);
     $inv->setIsDifferenceqte($qte-$qtea);
     $inv->setIsDifferenceprix($cmup-$prix); 
     $inv-> setCbmodification(new DateTime());
     $em = $this->getDoctrine()->getManager();
     $em->persist($inv);
     $em->flush();  
     return  $this->json($inv,201,['message'=>'scancb']);   
     }catch(NotEncodableValueException $e){ return $this->json(['status'=>400,'message'=>$e->getMessage()]);
     }
  
  }
  /**
     * @Route("api/inventaire/validation/{piIntitule}/{protmUser}/{sIntitule}", name="inventaire_validation")
     * @Method({"POST"})
     */
    public function validation(DInventairestockRepository $invenr,DBontravailRepository $brep,PSouchesutilisateurs $souchu,DEmployesRepository $ems,DRessourcesRepository $emprep,DProtusersmobileRepository $protrep,DProtusersmobile $prot,DInventairestockligneRepository $invli,DInventairestockligne $inv,Request $request,SerializerInterface $serilizer,DInventairestockligneRepository $invrep,DArticleRepository $artrep,DArtstockRepository $artsore,DArticleRepository $darticlerepm,DDepotRepository $deoo)
    {
     $data = $request->getContent();
     try{
  $pi=$inv->getPiIntitule();
   $lignes=$invli->findBy(['piIntitule'=>$pi]);
     $prtouser=$prot->getProtmUser();
     $pe=$protrep->findOneBy(['protmUser'=>$prtouser]);
     $emcode=$pe->getEmCode();
     $codesouche=$souchu->getSIntitule();
     

       $i=0000000;
    foreach ($lignes as $ligne) {
      $qtea=$ligne->getIsQtea();
      $prix=$ligne->getIsPrixa();
      $ref=$ligne->getArRef();
      $cd=$ligne->getDeCode();
      $qte=$ligne->getIsQte();
      $desing=$ligne->getArDesign();
      $dce= new DDocentete();
      $dll= new DDocligne();
      $mvms=new DMouvementmobile();
      $mvms->setMbQtesortie($qte);
      $mvms->setArRef($ref);
      $mvsa=$darticlerepm->findOneBy(['arRef'=>$ref]);
      $mvms->setArCodebarre($mvsa->getArCodebarre());
      $mvms->setCbcreateur($prtouser);
      $mvms->setCbmodification(new \DateTime());
      $mvms->setMbCreatedat(new \DateTime());
      $mvms->setMbQteentre(0);
      $mvms->setMbQtetrans(0);
      $mvms->setAsQtesto(0);
      $mvms->setMbQteancien($qte);
      $mvms->setAsMontsto(0);
      $mvms->setMbType("inventaire sortie");
      $mvms->setProtmUser($prtouser);
      $mvms->setDeCode($cd);
      $dddd=$deoo->findOneBy(["deCode"=>$cd]);
     $mvms->setDeIntitule(  $dddd->getDeIntitule());
     $em = $this->getDoctrine()->getManager();
     $em->persist($mvms);
     $em->flush(); 
      $dce->setDoDomaine(2);
      $dce->setDoType(21);
      $i=$i+1;
      if($codesouche=='PIECE'){
        $dce->setDoPiece('BS'.strval($i));
      }else{$dce->setDoPiece('BSM'.strval($i));
      }
                
      $dce->setDoSouche($codesouche);

      $dce->setDoStatut('Valider');

      $dce->setDeCode($cd);
      $dce->setEmCode($emcode);
      $emp=$emprep->findOneBy(['emCode'=>$emcode]);
      if($emp!=null){
      $rp=$emp->getRpCode();
      $dce->setRpCode($rp);
      $dce->setCbcreateur($prtouser);
  
     

      $s=$ems->findOneBy(['emCode'=>$emcode]);
    }
      $em = $this->getDoctrine()->getManager();
     $em->persist($dce);
     $em->flush(); 
     $dll->setDoDomaine(2);
     $dll->setDoType(21);
     $dll->setDoSouche($codesouche);
     if($codesouche=='PIECE'){$dll->setDoPiece('BS'.$i);}else{$dll->setDoPiece('BSM'.$i);}
     
     $dll->setDeCode($cd);
  
     
     $dll->setArRef($ref);
     $dll->setDlDesign($desing);
     $article=$artrep->findOneBy(['arRef'=>$ref]);
     $unite=$article->getArUnite();
     $pnet=$article->getArPoidsnet();
     $pbrut=$article->getArPoidsbrut();
     $plong=$article->getArLongueur();
     $plarg=$article->getArLargeur();
     $artstock1=$artsore->findOneBy(['arRef'=>$ref]);
     $artstock1->setAsQtesto(0);
     $dll->setDlQtesto(0);
     $dll->setDlUnite($unite);
     $dll->setDlPoidnet($pnet);
     $dll->setDlPoidbrut($pbrut);
     $dll->setDlLongueur($plong);
     $dll->setDlLargeur($plarg);
  
     $dll->setDlQte($qte);
     $pu=$artstock1->getAsCmup();
     $dll->setDlPrixunitaire($pu);
     $dll->setDlPuttc($pu);
     $dll->setDlMontantht($pu);
   
     $dll->setDlCmup($pu);
     $dll->setEmCode($emcode);
     $dll->setCbcreateur($prtouser);
     if($emp!=null){
     $dll->setRpCode($rp);
     $bont=$brep->findOneBy(['rpCode'=>$rp]);
     $cccode=$emp->getCcCode();
     $dll->setCcCode($cccode);}
     $dll->setDlNo($i);
     $em = $this->getDoctrine()->getManager();
     $em->persist($dll,$artstock1);
     $em->flush(); 
     $dce= new DDocentete();
     $dll= new DDocligne();
     $dce->setDoDomaine(2);
     $dce->setDoType(20);
     if($codesouche=='PIECE'){$dce->setDoPiece('BE'.$i);}else{$dce->setDoPiece('BEM'.$i);}
     $dce->setDoSouche($codesouche);
     $dce->setDoStatut('Valider');
     $dce->setDeCode($cd);
     $dce->setEmCode($emcode);
     $em=$emprep->findOneBy(['emCode'=>$emcode]);
     if($em!=null){
     $rp=$em->getRpCode();
     $dce->setRpCode($rp);}
     $dce->setCbcreateur($prtouser);
     $s=$ems->findOneBy(['emCode'=>$emcode]);
     $em = $this->getDoctrine()->getManager();
     $em->persist($dce);
     $em->flush();
     $dll->setDoDomaine(2);
     $dll->setDoType(20);
     $dll->setDoSouche($codesouche);
     if($codesouche=='PIECE'){$dll->setDoPiece('BE'.$i);}else{$dll->setDoPiece('BEM'.$i);}
     $dll->setDeCode($cd);
     
     $dll->setArRef($ref);
     $dll->setDlDesign($desing);
     $article=$artrep->findOneBy(['arRef'=>$ref]);
     $unite=$article->getArUnite();
     $pnet=$article->getArPoidsnet();
     $pbrut=$article->getArPoidsbrut();
     $plong=$article->getArLongueur();
     $plarg=$article->getArLargeur();
     $artstock1=$artsore->findOneBy(['arRef'=>$ref]);
     $artstock1->setAsQtesto($qtea);
     $dll->setDlQtesto(0);
     $dll->setDlUnite($unite);
     $dll->setDlPoidnet($pnet);
     $dll->setDlPoidbrut($pbrut);
     $dll->setDlLongueur($plong);
     $dll->setDlLargeur($plarg);
     $dll->setDlQte($qtea);
     $pu=$artstock1->getAsCmup();
     $dll->setDlPrixunitaire($prix);
     $dll->setDlPuttc($pu);
     $dll->setDlMontantht($pu);
     $dll->setDlCmup($pu);
     $dll->setEmCode($emcode);
     $dll->setCbcreateur($prtouser);
     if($emp!=null){
     $dll->setRpCode($rp);
     $bont=$brep->findOneBy(['rpCode'=>$rp]);
     $cccode=$emp->getCcCode();
     $dll->setCcCode($cccode);}
     $cupi=$artstock1->getAsCmup();
     $montan=$cupi*$qtea;
     $artstock1->setAsMontsto($montan);
     $artstock1->setAsCmup($prix);
     $article->setArPrixach($prix);
     $em = $this->getDoctrine()->getManager();
    $em->persist($article);
    $em->flush(); 
  
     $dll->setDlNo($i);
     $em = $this->getDoctrine()->getManager();
     $em->persist($dll,$artstock1);
     $em->flush();
     
     $mvms=new DMouvementmobile();
     $mvms->setMbQtesortie(0);
     $mvms->setArRef($ref);
     $mvsa=$darticlerepm->findOneBy(['arRef'=>$ref]);
     $mvms->setArCodebarre($mvsa->getArCodebarre());
     $mvms->setCbcreateur($prtouser);
     $mvms->setCbmodification(new \DateTime());
     $mvms->setMbCreatedat(new \DateTime());
     $mvms->setMbQteentre($qtea);
     $mvms->setMbQtetrans(0);
     $mvms->setAsQtesto($qtea);
     $mvms->setMbQteancien(0);
     $mvms->setAsMontsto($montan);
     $mvms->setMbType("inventaire entree");
     $mvms->setProtmUser($prtouser);
     $mvms->setDeCode($cd);
     $dddd=$deoo->findOneBy(["deCode"=>$cd]);
    $mvms->setDeIntitule(  $dddd->getDeIntitule());
    $em = $this->getDoctrine()->getManager();
    $em->persist($mvms);
    $em->flush(); 
     

      
      
    }
    $invstocks=$invenr->findOneBy(['piIntitule'=>$pi]);
     $invstocks->setIsValide(1);
     $em = $this->getDoctrine()->getManager();
     $em->persist($invstocks);
     $em->flush();
     
     return  $this->json($dce,201,['message'=>'scancb']);   
     }catch(NotEncodableValueException $e){ return $this->json(['status'=>400,'message'=>$e->getMessage()]);
     }
  
  }






















  /**
     * @Route("api/inventaire/add", name="inv_create")
     * @Method({"POST"})
     */
    public function createAction(Request $request,SerializerInterface $serilizer)
    { 
        $data = $request->getContent();
    try{
        
        $dce= new DDocentete();
        
        $dce->setDoDomaine(2);
        $dce->setDoType(21);
        $dce->setDoSouche('PIECE');
        $dce->setDoStatut('Valider');
        $dce->setDeCode('MAG06');
        $dce->setEmCode('M478');
        $dce->setRpCode('T16');
        $dce->setCbcreateur('elitex47');  
        $dce->setDoPiece('BS12');
        $em = $this->getDoctrine()->getManager();
        $em->persist($dce);
        $em->flush();

        

        return $this->json($dce,201,[]);
    } catch(NotEncodableValueException $e){ return $this->json(['status'=>400,'message'=>$e->getMessage()]);
    }
 }

    /**
     * @Route("api/inventaire/adds", name="inve_creates")
     * @Method({"POST"})
     */
    public function createActionInv(Request $request,SerializerInterface $serilizer)
    { 
        $data = $request->getContent();
    try{
        
        $dll= new DDocligne();
        
       $dll->setDoPiece('bsm4444');
     
        $em = $this->getDoctrine()->getManager();
        $em->persist($dll);
        $em->flush();

        return $this->json($dll,201,[]);
    } catch(NotEncodableValueException $e){ return $this->json(['status'=>400,'message'=>$e->getMessage()]);
    }
 }



}





