<?php

declare(strict_types=1);

namespace App\MenuItem\FoodItem;

abstract class FoodItem {
    abstract public function getCalories(): int;
    public string $name;
}