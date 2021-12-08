<?php

declare(strict_types=1);

namespace App;

interface ShowAnimals
{
    public function show(string $type = null): array;
}