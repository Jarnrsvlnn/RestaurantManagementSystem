<?php

declare(strict_types=1);

namespace App\MenuItem\FoodItem\Food;

use App\MenuItem\FoodItem\FoodItem;
use App\MenuItem\Orderable;

class Burger extends FoodItem implements Orderable {
    public function getCalories(): int
    {
        return 30;
    }

    public function order(): string
    {
        return "Burger Ordered!";
    }
    public function cancel(): string
    {
        return "Burger Order Cancelled!";
    }
}
