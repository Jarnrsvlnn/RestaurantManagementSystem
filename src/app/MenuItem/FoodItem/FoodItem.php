<?php

declare(strict_types=1);

namespace App\MenuItem\FoodItem;

use App\MenuItem\MenuItem;

abstract class FoodItem extends MenuItem {
    abstract public function getCalories(): int;
    public string $name;
}