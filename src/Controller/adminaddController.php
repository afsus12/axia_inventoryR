<?php


namespace App\Controller;

use App\Entity\DDepotutilisateurmobile;
use App\Entity\DMataccessmobile;
use App\Entity\DProtusers;
use App\Entity\DProtusersmobile;
use App\Entity\PPreferencesmobile;
use App\Repository\DDepotutilisateurmobileRepository;
use App\Repository\DMataccessmobileRepository;
use App\Repository\DProtusersmobileRepository;
use App\Repository\DProtusersRepository;
use DateTime;
use Doctrine\DBAL\Types\DateTimeType;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;  
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Security\Core\Encoder\UserPasswordEncoderInterface;
use symfony\Component\Serializer;

use Symfony\Component\Serializer\Exception\NotEncodableValueException;
use Symfony\Component\Serializer\SerializerInterface;
use Symfony\Component\Validator\Validator\ValidatorInterface;

class adminaddController extends abstractController 
{ 
   /**
     * @Route("api/users/add", name="user_create")
     * @Method({"POST"})
     */
    public function createAction(Request $request,SerializerInterface $serilizer,ValidatorInterface $validator,UserPasswordEncoderInterface $encoder,)
    { 
        $data = $request->getContent();
    try{
        $users= $serilizer->deserialize($data,DProtusersmobile::class,'json');
        $users->setCbmodification(new \DateTime());
     
       


        $errors=$validator->validate($users);
        if (count($errors)>0){
            return $this->json($errors,400);
        }
        
        $dcode=  $users->getDeCode();
        $prot=  $users->getProtmUser();
        $crea= $users->getCbcreateur();
        
          $pref=new PPreferencesmobile(); 
          $pref->setProtmUser($prot);
          $pref->setCbcreateur($crea);
          $pref->setCbmodification(new \DateTime());
          $pref->setPmImages(true);
          $pref->setPmDate(new \DateTime('-7 days'));
          $em1 = $this->getDoctrine()->getManager();
          $em1->persist($pref);
          $em1->flush();
          if($users->getProtmAdministrator()==1){
              $dmat=new DMataccessmobile();
              $users->setProtmRight(true);
              $dmat->setProtmUser($prot);
              $dmat->setMaAccessconsultaiton(true);
              $dmat->setMaAccessentree(true);
              $dmat->setMaAccessgestionutil(true);
              $dmat->setMaAccessinventaire(true);
              $dmat->setMaAccesssortie(true);
              $dmat->setMaAccesstransfert(true);
              $dmat->setMaCreatedat(new \DateTime());
              $dmat->setCbcreateur($crea);
              $dmat->setCbmodification(new \DateTime());
              $em2 = $this->getDoctrine()->getManager();
              $em2->persist($dmat);
              $em2->flush();
          }
        $em3 = $this->getDoctrine()->getManager();
        $hash=$encoder->encodePassword($users,$users->getPassword());
        $users->setPassword($hash);
        $em3->persist($users);
        $em3->flush();

        return $this->json($users,201,[]);
    } catch(NotEncodableValueException $e){ return $this->json(['status'=>400,'message'=>$e->getMessage()]);
    }
 }

   /**
     * @Route("api/users/editpwd/{protmUser}/{Crea}", name="prot_edit")
     * @Method({"POST"})
     */
    
    public function editpwd(Request $request,SerializerInterface $serilizer,ValidatorInterface $validator,UserPasswordEncoderInterface $encoder,DProtusersmobile $prots ,DProtusersmobileRepository $rep,$Crea)

      {
        $data = $request->getContent();
        try{ $d=$prots->getProtmUser();
            $protuserme=$rep->findOneBy(['protmUser'=>$d]);
            $users= $serilizer->deserialize($data,DProtusersmobile::class,'json');
              
            $hash=$encoder->encodePassword($users,$users->getPassword());

            $protuserme->setPassword($hash);
            $protuserme->setCbmodification(new \DateTime());
            $protuserme->setCbcreateur($Crea);
            $em = $this->getDoctrine()->getManager();
            $em->persist($protuserme);
            $em->flush();   
    
            return $this->json($protuserme,201,[]);
        } catch(NotEncodableValueException $e){ return $this->json(['status'=>400,'message'=>$e->getMessage()]);
        }
     }
     
      /**
     * @Route("api/users/protright/{protmUser}/{Crea}", name="prot_right_edit")
     * @Method({"POST"})
     */
    
    public function protmright(Request $request,SerializerInterface $serilizer,ValidatorInterface $validator,UserPasswordEncoderInterface $encoder,DProtusersmobile $prots ,DProtusersmobileRepository $rep,$Crea,DMataccessmobileRepository $reps)

    {
      $data = $request->getContent();
      try{ $d=$prots->getProtmUser();
          $protuserme=$rep->findOneBy(['protmUser'=>$d]);
          $users= $serilizer->deserialize($data,DProtusersmobile::class,'json');
            
         if($users->getProtmAdministrator()==1){

            $mat=$reps->findOneBy(["protmUser"=>$d]);
       
            $mat->setMaAccessentree(true);
            $mat->setMaAccesssortie(true);
            $mat->setMaAccesstransfert( true);
          
            $mat->setMaAccessconsultaiton(true);
            $mat->setMaAccessinventaire(true);
            $mat->setMaAccessgestionutil(true);
            $protuserme->setProtmRight( true);
          $protuserme->setProtmAdministrator($users->getProtmAdministrator());
          $protuserme->setCbmodification(new \DateTime());
          $protuserme->setCbcreateur($Crea);
            $mat->setCbmodification(new \DateTime());
            $mat->setMaCreatedat(new \DateTime());
            $mat->setCbcreateur($Crea);
            $em = $this->getDoctrine()->getManager();
            $em->persist($mat);
            $em->flush();   
         }else{
            $protuserme->setProtmAdministrator(false);
            $protuserme->setProtmRight(  $users->getProtmRight());
            $protuserme->setCbmodification(new \DateTime());
            $protuserme->setCbcreateur($Crea);
         }
        
         
         
         
          $em = $this->getDoctrine()->getManager();
          $em->persist($protuserme);
          $em->flush();   
  
          return $this->json($protuserme,201,[]);
      } catch(NotEncodableValueException $e){ return $this->json(['status'=>400,'message'=>$e->getMessage()]);
      }
   }

       /**
     * @Route("api/users/getright/{protmUser}", name="users_get_rights" )
     * @Method({"GET"})
     */


    public function getuserrights(Request $request,SerializerInterface $serilizer,ValidatorInterface $validator,UserPasswordEncoderInterface $encoder,DProtusersmobile $prots ,DProtusersmobileRepository $rep)
    { $d=$prots->getProtmUser();
        $protuserme=$rep->findOneBy(['protmUser'=>$d]);
        try{
        $data = $serilizer->serialize($protuserme,'json');
    
        $response = new Response($data);
        $response->headers->set('Content-Type', 'application/json');
    
        return $response;
    } catch(NotEncodableValueException $e){ return $this->json(['status'=>400,'message'=>$e->getMessage()]);
    }}
    
 

    /**
     * @Route("api/users/addroles", name="user_roles")
     * @Method({"POST"})
     */
    
    public function rolesAdd(Request $request,SerializerInterface $serilizer)

      {
        $data = $request->getContent();
        try{
            $users= $serilizer->deserialize($data,DMataccessmobile::class,'json');
            $users->setCbmodification(new \DateTime());
            $users->setMaCreatedat(new \DateTime());
            $em = $this->getDoctrine()->getManager();
            $em->persist($users);
            $em->flush();   
    
            return $this->json($users,201,[]);
        } catch(NotEncodableValueException $e){ return $this->json(['status'=>400,'message'=>$e->getMessage()]);
        }
     }
       /**
     * @Route("api/users/editroles", name="user_roles_edit")
     * @Method({"POST"})
     */
    
    public function rolesedit(Request $request,SerializerInterface $serilizer,DMataccessmobileRepository $rep)

    { 
      $data = $request->getContent();
      try{
          $users= $serilizer->deserialize($data,DMataccessmobile::class,'json');

          $mat=$rep->findOneBy(["protmUser"=>$users->getProtmUser()]);
          $mat->setCbcreateur($users->getCbcreateur()); 
          $mat->setMaAccessentree($users->getMaAccessentree());
          $mat->setMaAccesssortie($users->getMaAccesssortie());
          $mat->setMaAccesstransfert( $users->getMaAccesstransfert());
        
          $mat->setMaAccessconsultaiton($users->getMaAccessconsultaiton());
          $mat->setMaAccessinventaire($users->getMaAccessinventaire());
          $mat->setMaAccessgestionutil($users->getMaAccessgestionutil());
          
          

          $mat->setCbmodification(new \DateTime());
          $mat->setMaCreatedat(new \DateTime());
          $em = $this->getDoctrine()->getManager();
          $em->persist($mat);
          $em->flush();   
  
          return $this->json($users,201,[]);
      } catch(NotEncodableValueException $e){ return $this->json(['status'=>400,'message'=>$e->getMessage()]);
      }
   }
    /**
     * @Route("api/depot/deleterow/{deCode}/{protmUser}", name="depot_delete" )
     * @Method({"GET"})
     */


    public function deleterow(DDepotutilisateurmobileRepository $repac,DDepotutilisateurmobile  $depd)
    {    
        $dcode=$depd->getDeCode();

        $prot=$depd->getProtmUser();

       $repac->deletear($dcode,$prot);

       $intiu=$repac->findby(["protmUser"=>$prot]);
           
        return $this->json(['status'=>400,'message'=>'success']);
    
    }
/**
     * @Route("api/depot/userrow/{protmUser}", name="user_delete" )
     * @Method({"GET"})
     */


    public function deleterowuser(DDepotutilisateurmobileRepository $repac,DProtusersmobile  $depd)
    {    
        

        $prot=$depd->getProtmUser();

       $repac->deletear1($prot);
       $repac->deletear2($prot);
       $repac->deletear3($prot);
       $repac->deletear4($prot);

       $intiu=$repac->findby(["protmUser"=>$prot]);
           
        return $this->json(['status'=>400,'message'=>'success']);
    
    }

 /**
     * @Route("api/depot/adddepedit/{dcode}/{prot}/{crea}", name="depot_edit1" )
     * @Method({"POST"})
     */
    public function edit_adddep(DDepotutilisateurmobileRepository $repac,$dcode,  $prot, $crea)
    {   try{  
          

       $intiu=$repac->findOneby(["protmUser"=>$prot,"deCode"=>$dcode]);

       if(empty( $intiu)==true)
       {
          $bb= new DDepotutilisateurmobile();
          $bb->setProtmUser($prot);
          $bb->setDeCode($dcode);
          $bb->setCbcreateur($crea);
          $bb->setCbmodification(new \DateTime());
          $em = $this->getDoctrine()->getManager();
          $em->persist($bb);
          $em->flush();   
       }else{
        return $this->json(['status'=>400,'message'=>'already done']);
       }
    
        return $this->json($bb,201,[]);
    } catch(NotEncodableValueException $e){ return $this->json(['status'=>400,'message'=>$e->getMessage()]);
    }
    }
    


    /**
     * @Route("api/prot/edit_prot/{dcode}/{prot}/{crea}", name="depot_edit" )
     * @Method({"POST"})
     */
    public function edit_prot(DDepotutilisateurmobileRepository $repac,$dcode,  $prot, $crea)
    {   
        
        
        try{  
          

       $intiu=$repac->findOneby(["protmUser"=>$prot,"deCode"=>$dcode]);

       if(empty( $intiu)==true)
       {
          $bb= new DDepotutilisateurmobile();
          $bb->setProtmUser($prot);
          $bb->setDeCode($dcode);
          $bb->setCbcreateur($crea);
          $bb->setCbmodification(new \DateTime());
          $em = $this->getDoctrine()->getManager();
          $em->persist($bb);
          $em->flush();   
       }else{
        return $this->json(['status'=>400,'message'=>'already done']);
       }
    
        return $this->json($bb,201,[]);
    } catch(NotEncodableValueException $e){ return $this->json(['status'=>400,'message'=>$e->getMessage()]);
    }
    }


    /**
     * @Route("api/users/getusers/{protmUser}", name="users_all" )
     * @Method({"GET"})
     */


public function showAllusers(DMataccessmobileRepository $dep,SerializerInterface $serilizer,DProtusersmobile $protm,DProtusersRepository $repp)
{ $prot=  $protm->getProtmUser();
  
    $intitu = $dep->findOneBy(['protmUser'=>$prot]);  
    try{
    $data = $serilizer->serialize($intitu,'json');

    $response = new Response($data);
    $response->headers->set('Content-Type', 'application/json');

    return $response;
} catch(NotEncodableValueException $e){ return $this->json(['status'=>400,'message'=>$e->getMessage()]);
}}




    /**
     * @Route("api/users/depotutil", name="user_depotadd")
     * @Method({"POST"})
     */
    
    public function depotAdd(Request $request,SerializerInterface $serilizer)

      {
        $data = $request->getContent();
        try{
            $users= $serilizer->deserialize($data,DDepotutilisateurmobile::class,'json');
            $users->setCbmodification(new \DateTime());
            $em = $this->getDoctrine()->getManager();
            $em->persist($users);
            $em->flush();   
    
            return $this->json($users,201,[]);
        } catch(NotEncodableValueException $e){ return $this->json(['status'=>400,'message'=>$e->getMessage()]);
        }
     }
  
      

 }







