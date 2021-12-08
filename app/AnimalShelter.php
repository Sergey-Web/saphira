<?php

declare(strict_types=1);

namespace App;

use App\Animals\{Animal, Cat, Dog, Turtle};
use Exception;

class AnimalShelter implements AddAnimal, ShowAnimals, GiveAnimal
{
    private array $animals = [];

    private array $types = [
        'cat' => Cat::class,
        'dog' => Dog::class,
        'turtle' => Turtle::class,
    ];

    /**
     * @throws Exception
     */
    public function give(string $type = null): Animal
    {
        $animals = $this->findAnimalsByType($type);

        return $animals[array_key_first($animals)];
    }

    /**
     * @throws Exception
     */
    public function show(string $type = null): array
    {
        $animals = $this->findAnimalsByType($type);

        return $this->sortAnimals($animals);
    }

    /**
     * @throws Exception
     */
    public function add(Animal $animal): void
    {
        $this->checkAnimalByType($animal);

        $this->animals[] = $animal;
    }

    /**
     * @throws Exception
     */
    private function findAnimalsByType(string $type): array
    {
        $animals = [];

        if ($type !== null) {
            $this->checkType($type);
            foreach ($this->animals as $animal) {
                /** @var Animal $animal */
                if ($this->types[$type] === get_class($animal)) {
                    $animals[] = $animal;
                }
            }
        } else {
            $animals = $this->animals;
        }

        return $animals;
    }

    /**
     * @throws Exception
     */
    private function checkType(string $type): void
    {
        if (array_key_exists($type, $this->types) === false) {
            throw new Exception(
                'The shelter does not accept such animals, only accepts'
            );
        }
    }

    private function checkAnimalByType(Animal $animal): void
    {
        if (array_search(get_class($animal), $this->types) === false) {
            throw new Exception(
                'The shelter does not accept such animals, only accepts'
            );
        }
    }

    private function sortAnimals(array $animals): array
    {
        uasort($animals, function ($a, $b) {
            return $a->getName() <=> $b->getName();
        });

        return $animals;
    }
}