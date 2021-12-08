<?php

declare(strict_types=1);

use App\Animals\{Cat,Dog,Turtle};
use App\AnimalShelter;

require __DIR__.'/vendor/autoload.php';

$animalShelter = new AnimalShelter();

$cat1 = new Cat('Sharik', 10);
$cat2 = new Cat('Knopka', 4);
$cat3 = new Cat('Rembo', 11);

$dog1 = new Dog('Marsik', 1);
$dog2 = new Dog('Lilu', 2);
$dog3 = new Dog('Beethoven', 3);

$turtle1 = new Turtle('Sonya', 4);
$turtle2 = new Turtle('Jem', 5);
$turtle3 = new Turtle('Hip-Hop', 6);


$animalShelter->add($cat1);
$animalShelter->add($cat2);
$animalShelter->add($cat3);
$animalShelter->add($dog1);
$animalShelter->add($dog2);
$animalShelter->add($dog3);
$animalShelter->add($turtle1);
$animalShelter->add($turtle2);
$animalShelter->add($turtle3);

var_dump($animalShelter->show('turtle'));