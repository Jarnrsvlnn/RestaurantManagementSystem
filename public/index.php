<?php

declare(strict_types=1);

require_once __DIR__ . '/../vendor/autoload.php';

use App\Services\OrderProcessor;
use App\MenuItem\MenuItem;

use App\MenuItem\FoodItem\Food\Burger;
use App\MenuItem\FoodItem\Food\Salad;
use App\MenuItem\Beverage\Beverage;

$menuItem = new MenuItem("Haha", 100.0, 5);
$orderProcessor = new OrderProcessor();

$burger = new Burger("Cheeseburger", 5.99, 10);
$salad = new Salad("Caesar Salad", 4.99, 3);
$drink = new Beverage("Coke", 1.99, 4);

$items = [$burger, $salad, $drink];

foreach ($items as $item) {
    echo $item->order() . PHP_EOL;
}

echo '<br/>';

foreach ($items as $item) {
    echo $orderProcessor->processOrder($item);
}

