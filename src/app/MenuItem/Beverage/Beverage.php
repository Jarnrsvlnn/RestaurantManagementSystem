<?php

declare(strict_types=1);

namespace App\MenuItem\Beverage;

use App\MenuItem\MenuItem;
use App\MenuItem\Orderable;

class Beverage extends MenuItem implements Orderable {
    public function getInfo(): string
    {
        return 'Drink';
    }

    public function order(): string
    {
        return "Drink Ordered!";
    }

    public function cancel(): string
    {
        return "Drink Order Cancelled!";
    }
}