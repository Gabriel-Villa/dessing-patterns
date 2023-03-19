<?php

namespace App\Access;

use App\Contracts\IState;

class Sold implements IState
{

    public function handle()
    {
        dd("Sold");
    }

}
