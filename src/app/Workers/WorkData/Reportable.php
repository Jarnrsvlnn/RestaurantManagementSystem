<?php

declare(strict_types=1);

namespace App\Workers\WorkData;

interface Reportable {
    public function generateReport(): string;
}