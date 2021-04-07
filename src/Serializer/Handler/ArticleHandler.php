<?php
/*
namespace App\Serializer\Handler;
use App\Entity\DArticle;
use JMS\Serializer\GraphNavigator;
use JMS\Serializer\Handler\SubscribingHandlerInterface;
use AppBundle\Entity\Article;
use JMS\Serializer\JsonSerializationVisitor;
use JMS\Serializer\JsonDeserializationVisitor;
use JMS\Serializer\SerializationContext as Context;

class ArticleHandler implements SubscribingHandlerInterface
{
    public static function getSubscribingMethods()
    {
        return 
            [
                'direction' => GraphNavigator::DIRECTION_SERIALIZATION,
                'format' => 'json',
                'type' => 'App\Entity\DArticle',
                'method' => 'serialize',
            ];
            }
            public function serialize(JsonSerializationVisitor $visitor, DArticle $article, array $type, Context $context)
            {
                $date = new \Datetime();
           return 
               [
                    'ArDesign' => $article->getArDesign(),
                    'ArRef' => $article->getArRef(),
                    'delivered_at' => $date->format('l jS \of F Y h:i:s A'),
                ];
        
            }
        
}  
*/