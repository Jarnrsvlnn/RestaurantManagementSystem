<?php

declare(strict_types=1);

namespace App;

use App\Customer\Customer;
use App\MenuItem\MenuItem;
use App\MenuItem\Orderable;

class Restaurant {
    public $menuItems = [];
    public $customers = [];
    public $staffs = [];

    public function addItem(MenuItem ...$menuItem) {
        $this->menuItems[] = $menuItem;
    }

    public function registerCustomer(Customer $customer) {
        $this->customers[] = $customer;
    }

    public function takeOrder(Customer $customer, Orderable $order) {
        foreach($this->customers as $customers) {
            if ($customers->getCustomerName() === $customer->getCustomerName()) {
                $customer->takeOrder($order);
                return;
            }
        }

        echo 'Customer not found! Have you registered this customer yet?';
        echo '<br/>';
    }
}