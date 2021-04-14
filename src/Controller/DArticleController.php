<?php


namespace App\Controller;



use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;  
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

use JMS\Serializer\SerializerInterface;


class DArticleController extends abstractController 
{ 
   
  public function __construct(
    SerializerInterface $serializer)
{
    $this->serialize = $serializer;
}

   /**
     * @Route("api/articles/", name="article_list")
     * @Method({"GET"})
     */ 
   public function listAction()
    {     
        $articles = $this->getDoctrine()->getRepository('App:DArticle')->findAll();
        $data = $this->serialize ->serialize($articles, 'json');

        $response = new Response($data);
        $response->headers->set('Content-Type', 'application/json');

        return $response;
    }
}
