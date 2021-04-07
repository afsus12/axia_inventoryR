<?php


namespace App\Controller;

use App\Entity\DProtusers;
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
        $users= $serilizer->deserialize($data,DProtusers::class,'json');
        $users->setCbmodification();
      
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
}