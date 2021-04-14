<?php


namespace App\Controller;

use App\Entity\DMataccessmobile;
use App\Entity\DProtusers;
use App\Entity\DProtusersmobile;
use App\Repository\DMataccessmobileRepository;
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
    public function createAction(Request $request,SerializerInterface $serilizer,ValidatorInterface $validator,UserPasswordEncoderInterface $encoder)
    { 
        $data = $request->getContent();
    try{
        $users= $serilizer->deserialize($data,DProtusersmobile::class,'json');
        $users->setCbmodification(new \DateTime());
      
        $errors=$validator->validate($users);
        if (count($errors)>0){
            return $this->json($errors,400);
        }
        
        $em = $this->getDoctrine()->getManager();
        $hash=$encoder->encodePassword($users,$users->getPassword());
        $users->setPassword($hash);
        $em->persist($users);
        $em->flush();

        return $this->json($users,201,[]);
    } catch(NotEncodableValueException $e){ return $this->json(['status'=>400,'message'=>$e->getMessage()]);
    }
 }
     

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
     * @Route("api/users/getusers", name="users_all" )
     * @Method({"GET"})
     */


public function showAllusers(DMataccessmobileRepository $dep,SerializerInterface $serilizer)
{ 
    $intitu = $dep->findAll();  
    try{
    $data = $serilizer->serialize($intitu,'json');

    $response = new Response($data);
    $response->headers->set('Content-Type', 'application/json');

    return $response;
} catch(NotEncodableValueException $e){ return $this->json(['status'=>400,'message'=>$e->getMessage()]);
}}






      

    }







