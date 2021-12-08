<?php

declare(strict_types=1);

namespace App;

use App\Animals\Animal;

interface AddAnimal
{
    public function add(Animal $animal): void;
}