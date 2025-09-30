<?php

declare(strict_types=1);

namespace App\MenuItem\FoodItem\Food\Salad;

use App\MenuItem\FoodItem\FoodItem;

class Salad extends FoodItem {
    public function getCalories(): int
    {
        return rand(5, 50);
    }
}
