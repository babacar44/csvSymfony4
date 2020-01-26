<?php

namespace App\DataFixtures;

use App\Entity\Pays;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Common\Persistence\ObjectManager;

class AppFixtures extends Fixture
{
    public function load(ObjectManager $manager)
    {
        // $product = new Product();
        // $manager->persist($product);

        $pays = new Pays();
        $pays->setNompays('Senegal');
        $manager->persist($pays);

        $pays = new Pays();
        $pays->setNompays('Mali');
        $manager->persist($pays);

        $pays = new Pays();
        $pays->setNompays('Benin');
        $manager->persist($pays);

        $pays = new Pays();
        $pays->setNompays('Benin');
        $manager->persist($pays);

        $pays = new Pays();
        $pays->setNompays('Gabon');
        $manager->persist($pays);

        $pays = new Pays();
        $pays->setNompays('CIV');
        $manager->persist($pays);

        $pays = new Pays();
        $pays->setNompays('Niger');
        $manager->persist($pays);

        $pays = new Pays();
        $pays->setNompays('Nigeria');
        $manager->persist($pays);

        $pays = new Pays();
        $pays->setNompays('Guinee');
        $manager->persist($pays);

        


        $manager->flush();
    }
}
