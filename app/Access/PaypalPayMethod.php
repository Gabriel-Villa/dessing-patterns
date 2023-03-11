<?php

namespace App\Access;

use App\Contracts\IPayMethod;

class PaypalPayMethod implements IPayMethod
{

    public function pay()
    {
        dd("Logic to pay with credit card");
    }

}
