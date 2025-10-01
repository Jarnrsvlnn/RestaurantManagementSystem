<?php

declare(strict_types=1);

namespace App\Customer;

use App\MenuItem\Orderable;

class Customer {

    private $orders = [];

    public function __construct(
        private string $name,
        private int $customerID
    )
    {}

    public function getCustomerName(): string {
        return $this->name;
    }

    public function getCustomerID(): int {
        return $this->customerID;
    }

    public function takeOrder(Orderable $order) {
        $this->orders[] = $order;
    }

    public function customerOrders(): array {
        return $this->orders;
    }
}