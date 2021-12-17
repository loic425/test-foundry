<?php

namespace App\Story;

use App\Factory\BookFactory;
use App\Factory\PetFactory;
use Zenstruck\Foundry\Story;

final class DefaultShopStory extends Story
{
    public function build(): void
    {
        BookFactory::createMany(10);
        PetFactory::createMany(20);
    }
}
