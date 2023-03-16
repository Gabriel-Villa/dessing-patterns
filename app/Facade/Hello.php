<?php

namespace App\Facade;

use Illuminate\Support\Facades\Facade;

class Hello extends Facade
{

    protected static function getFacadeAccessor()
    {
        return 'hola';
    }

}
