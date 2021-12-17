<?php

namespace App\DataFixtures;

use App\Story\DefaultShopStory;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Persistence\ObjectManager;

class DefaultFixtures extends Fixture
{
    public function load(ObjectManager $manager): void
    {
        DefaultShopStory::load();
    }
}
