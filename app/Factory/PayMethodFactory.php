<?php

namespace App\Factory;

use App\Access\CreditCardPayMethod;
use App\Access\PaypalPayMethod;

class PayMethodFactory
{

    public static function getPaymentMethodInstance($method)
    {

        if($method == 'paypal'){
            return new PaypalPayMethod();
        }else if($method == 'creditCard'){
            return new CreditCardPayMethod();
        }

    }

}
