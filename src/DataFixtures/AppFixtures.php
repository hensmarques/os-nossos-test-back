<?php

namespace App\DataFixtures;

use App\Entity\User;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Persistence\ObjectManager;

class AppFixtures extends Fixture
{
    public function load(ObjectManager $manager): void
    {
        for ($i = 0; $i < 20; $i++) {
            $user = new User();
            $user->setName('Nome '.$i);
            $user->setEmail('email'.mt_rand(10, 100).'@osnossos.com');
            $user->setBirthday(date_create('1990-01-01'));
            $user->setGender('M');
            $manager->persist($user);
        }

        $manager->flush();
    }
}
