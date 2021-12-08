<?php

declare(strict_types=1);

namespace App\Animals;

class Turtle extends Animal
{
    public function getName(): string
    {
        return $this->name;
    }

    public function getAge(): int
    {
        return $this->age;
    }
}