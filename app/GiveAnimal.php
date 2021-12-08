<?php

declare(strict_types=1);

namespace App;

use App\Animals\Animal;

interface GiveAnimal
{
    public function give(string $type): Animal;
}