<?php

declare(strict_types=1);

namespace App\Workers\Waiter;

use App\Workers\Staff\Staff;

class Waiter extends Staff {
    public function introduce()
    {
        echo 'Im serving!';
    }
}