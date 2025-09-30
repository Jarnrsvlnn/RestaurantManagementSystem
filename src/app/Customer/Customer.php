<?php

declare(strict_types=1);

namespace App\Customer;

class Customer {
    public function __construct(
        private string $name,
        private int $customerID
    )
    {}

    public function introduce() {
        
    }
}