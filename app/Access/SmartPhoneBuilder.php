<?php

namespace App\Access;

use App\Contracts\ISmartPhoneBuilder;
use App\SmartPhone;

class SmartPhoneBuilder
{
    public $builder;

    public function make(ISmartPhoneBuilder $builder)
    {
        return $builder->design()->mounting()->getResult();

    }

}
