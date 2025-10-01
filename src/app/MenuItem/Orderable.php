<?php

declare(strict_types=1);

namespace App\MenuItem;

interface Orderable {
    public function order();
    public function cancel();
}