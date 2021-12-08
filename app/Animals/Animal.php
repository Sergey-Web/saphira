<?php

declare(strict_types=1);

namespace App\Animals;

abstract class Animal
{
    protected string $name;

    protected int $age;

    public function __construct(string $name, int $age)
    {
        $this->name = $name;
        $this->age = $age;
    }

    abstract public function getName(): string;

    abstract public function getAge(): int;
}