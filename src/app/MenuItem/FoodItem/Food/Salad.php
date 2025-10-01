<?php

declare(strict_types=1);

namespace App\MenuItem\FoodItem\Food;

use App\MenuItem\FoodItem\FoodItem;
use App\MenuItem\Orderable;

class Salad extends FoodItem implements Orderable{
    public function getCalories(): int
    {
        return rand(5, 50);
    }

    public function order(): string 
    {
        return "Salad Ordered!";
    }

    public function cancel(): string
    {
        return "Salad Order Cancelled!";
    }
}
