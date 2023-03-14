<?php

namespace App\Http\Controllers;

use App\Access\PrototypeSon;
use App\Access\Singleton;
use App\Factory\PayMethodFactory;

use App\Factory\Restaurant_1_Factory;
use App\Factory\Restaurant_2_Factory;
use App\Factory\Restaurant_3_Factory;


class CreationalPattern extends Controller
{
    
    public function singleton()
    {
        Singleton::getInstance()->fly();
    }

    public function factory()
    {
        $payMethodInstance = PayMethodFactory::getPaymentMethodInstance('paypal');
        $payMethodInstance->pay();
    }

    public function abstractFactory(Restaurant_3_Factory $restaurant)
    {
        $restaurant->createDessert("My Dessert", 12)->getResumeDessert();
    }

    public function prototype(PrototypeSon $prototypeSon)
    {
        $prototypeSon->color = 'red';

        $copy = clone $prototypeSon;

        dd($copy);

    }

}
