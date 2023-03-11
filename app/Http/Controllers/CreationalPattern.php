<?php

namespace App\Http\Controllers;

use App\Access\Singleton;
use App\Factory\PayMethodFactory;
use Illuminate\Http\Request;

class CreationalPattern extends Controller
{
    
    public function singleton()
    {
        $singleton = Singleton::getInstance()->fly();
    }

    public function factory()
    {
        $payMethodInstance = PayMethodFactory::getPaymentMethodInstance('paypal');
        $payMethodInstance->pay();
    }

}
