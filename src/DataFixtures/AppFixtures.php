<?php

namespace App\DataFixtures;

use App\Entity\DProtusers;
use Symfony\Component\Security\Core\Encoder\UserPasswordEncoderInterface;
use Doctrine\Bundle\FixturesBundle\Fixture ;

use Doctrine\Persistence\ObjectManager;


class AppFixtures  extends Fixture

{private $encoder;

    public function __construct(UserPasswordEncoderInterface $encoder)
    {
        $this->encoder = $encoder;
    }
    public function load(ObjectManager $manager)
    {
        $user = new DProtusers();
        $user->setUsername('aokokgl');

        $password = $this->encoder->encodePassword($user, 'pasd1234');
        $user->setPassword($password);
        $user->setProtEmail('afsaygsdsfsdne@gmail.com');
        $manager->persist($user);
        $manager->flush();

        
    }
}
