<?php

namespace App\Access;

use App\Contracts\IState;

class NotPaid implements IState
{

    public function handle()
    {
        dd("Not paid");
    }

}
