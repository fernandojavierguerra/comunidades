<?php

namespace App\DataFixtures;

use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Persistence\ObjectManager;
use App\Entity\Comunidad;


class AppFixtures extends Fixture
{
    public function load(ObjectManager $manager): void
    {
        // $product = new Product();
        // $manager->persist($product);

        $comunidad1 = new Comunidad();
        $comunidad1->setComunidad('Comunidad 1');
        $manager->persist($comunidad1);

        $manager->flush();
    }
}
