<?php

declare(strict_types=1);

require_once __DIR__ . '/../vendor/autoload.php';

use App\Customer\Customer;
use App\Services\OrderProcessor;
use App\MenuItem\MenuItem;
use App\Restaurant;

use App\MenuItem\FoodItem\Food\Burger;
use App\MenuItem\FoodItem\Food\Salad;
use App\MenuItem\Beverage\Beverage;

$menuItem = new MenuItem("Haha", 100.0, 5);
$orderProcessor = new OrderProcessor();
$restaurantAdmin = new Restaurant();

$burger = new Burger("Cheeseburger", 5.99, 10);
$salad = new Salad("Caesar Salad", 4.99, 3);
$drink = new Beverage("Coke", 1.99, 4);

$items = [$burger, $salad, $drink];

$customerOne = new Customer('John', 1);
$customerTwo = new Customer('Joirene', 2);
$customerThree = new Customer('Alice', 3);

$customers = [$customerOne, $customerTwo, $customerThree];

foreach ($items as $item) {
    $restaurantAdmin->addItem($item);
}

echo '<br/>';
echo '<br/>';

foreach($customers as $customer) {
    $restaurantAdmin->registerCustomer($customer);
}

echo '<br/>';
echo '<br/>';

$restaurantAdmin->takeOrder($customerTwo, $burger);

echo '<pre>';
print_r($customerTwo->customerOrders());     
echo '<pre/>';