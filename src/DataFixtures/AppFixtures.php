<?php

namespace App\DataFixtures;

use App\Entity\Animal;
use Doctrine\Persistence\ObjectManager;
use Doctrine\Bundle\FixturesBundle\Fixture;

class AppFixtures extends Fixture
{
    public function load(ObjectManager $manager): void
    {
        $a1 = new Animal();
        $a1->setName('Chien')
          ->setDescription("Un animal domestique");
          $manager->persist($a1);

        $a2 = new Animal();
        $a2->setName('Cochon')
          ->setDescription("Un animal qui peut manger un être humain en 45 min quand il n'a pas manger depuis 29  jours");
          $manager->persist($a2);

        $a3 = new Animal();
        $a3->setName('Serpent')
          ->setDescription("Un animal qui peut être venimeux");
          $manager->persist($a3);

        $manager->flush();
    }
}
