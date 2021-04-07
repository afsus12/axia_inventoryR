<?php
namespace App\Controller;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use App\Entity\DProtusers;
use Symfony\Component\HttpFoundation\Response;
class SecurityController extends AbstractController
{
 /**
  * @Route("/login",name="app_login",methods={"POST"})
  */
 public function Login()
 {
    if (!$this->isGranted('IS_AUTHENTICATED_FULLY')) {
        return $this->json([
            'error' => 'Invalid login request: check that the Content-Type header is "application/json".',
           ], 400);
 } else { $name=$this->getUser()->getUsername();
 
        return $this->json(["content"=>'bienvenue '.$name,
        "result"=>"true",
        'status'=>'1',
        'status_text'=>'login success'],200);
 }}

    /**
     * @Route("/logout", name="app_logout")
     */
    public function logout()
    {
        throw new \Exception('should not be reached');
    }
}

 