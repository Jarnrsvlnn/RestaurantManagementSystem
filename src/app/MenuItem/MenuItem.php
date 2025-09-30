<?php

declare(strict_types=1);

namespace App\MenuItem;

class MenuItem {
    public function __construct(
        private string $name,
        private float $price, 
        private int $stock
    )
    {}

    public function orderItem() {
        if ($this->stock > 0) {
            $this->stock--;
        }
        else {
            echo 'No Stock!';
        }
    }

    public function restockItem() {
        $this->stock++;
    }

    public function getInfo(): string
}