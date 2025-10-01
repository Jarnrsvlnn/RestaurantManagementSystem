<?php

declare(strict_types=1);

namespace App\Workers\Waiter;

use App\Workers\Staff\Staff;
use App\Workers\WorkData\Payable;
use App\Workers\WorkData\Reportable;

class Waiter extends Staff implements Payable, Reportable{
    public function introduce()
    {
        echo 'Im serving!';
    }

    public function calculatePay(): float
    {
        return 20.9;
    }

    public function generateReport(): string
    {
        return "Served 20 Meals!";
    }
}