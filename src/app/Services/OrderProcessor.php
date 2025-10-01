<?php

declare(strict_types=1);

namespace App\Services;

use App\MenuItem\Orderable;

class OrderProcessor {
    public function processOrder(Orderable $itemOrdered) {
        return $itemOrdered->order() . PHP_EOL;
    }
}