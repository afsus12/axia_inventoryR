
<?php
/*
namespace App\Serializer\Listener;
use JMS\Serializer\EventDispatcher\PreSerializeEvent;
use JMS\Serializer\EventDispatcher\Events;
use JMS\Serializer\EventDispatcher\PreDeserializeEvent;
use JMS\Serializer\EventDispatcher\EventSubscriberInterface;
use JMS\Serializer\EventDispatcher\ObjectEvent;  
use JMS\Serializer\JsonSerializationVisitor;
use JMS\Serializer\SerializationContext as Context;

use JMS\Serializer\Metadata\StaticPropertyMetadata as StaticPropertyMetadata;
use phpDocumentor\Reflection\Types\Null_;

class DArticleListener implements EventSubscriberInterface
{
    public static function getSubscribedEvents()
    {
        return [
            [
                'event' => Events::POST_SERIALIZE,
                'format' => 'json',
                'class' => 'App\Entity\DArticle',
                'method' => 'onPostSerialize',
            ]
        ];
    }
    public static function onPostSerialize(ObjectEvent $event)
    {
    $visitor = $event->getVisitor();

        $date = new \Datetime();
        $date->format('l jS \of F Y h:i:s A');

    
    }


}
*/