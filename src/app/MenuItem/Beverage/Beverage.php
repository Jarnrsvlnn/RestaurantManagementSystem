<?php

declare(strict_types=1);

namespace App\MenuItem\Beverage;

use App\MenuItem\MenuItem;

class Beverage extends MenuItem {
    public function getInfo(): string
    {
        echo 'Drink';
    }
}