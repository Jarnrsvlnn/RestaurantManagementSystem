<?php 

declare(strict_types=1);

namespace App\Workers\Chef;

use App\Workers\Staff\Staff;
use App\Workers\WorkData\Payable;
use App\Workers\WorkData\Reportable;

class Chef extends Staff implements Payable, Reportable {
    public function introduce()
    {
        echo 'Im cooking!';
    }
    
    public function calculatePay(): float
    {
        return 30.9;
    }

    public function generateReport(): string
    {
        return "Prepped 20 meals!";
    }
}