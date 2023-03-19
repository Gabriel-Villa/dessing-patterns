<?php

namespace App\Factory;

use App\Access\CreditCardPayMethod;
use App\Access\PaypalPayMethod;

class PayMethodFactory
{

    public static function getPaymentMethodInstance($method)
    {

        return match(true)
        {
            $method == 'paypal' => new PaypalPayMethod(),
            $method == 'creditcard' => new CreditCardPayMethod
        };

    }

}
