<?php 

declare(strict_types=1);

namespace App\Workers\Chef;

use App\Workers\Staff\Staff;

class Chef extends Staff {
    public function introduce()
    {
        echo 'Im cooking!';
    }
}