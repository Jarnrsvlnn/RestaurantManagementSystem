<?php

declare(strict_types=1);

namespace App\Workers\WorkData;

interface Payable {
    public function calculatePay(): float;
}