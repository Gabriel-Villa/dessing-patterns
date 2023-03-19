<?php

namespace App\Access;

use App\Contracts\IState;

class Paid implements IState
{

    public function handle()
    {
        dd("Pay");
    }

}
