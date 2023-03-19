<?php

namespace App\Access;

use App\Contracts\ISmartPhoneBuilder;
use App\SmartPhone;

class SmartPhoneHuaveiBuilder implements ISmartPhoneBuilder
{

    public $smartPhone;

    public function __construct()
    {
        $this->smartPhone = new SmartPhone();
    }

    public function design()
    {
        $this->smartPhone->setColor("Blue");

        return $this;
    }

    public function mounting()
    {
        $this->smartPhone->setCpu("Intel");
        $this->smartPhone->setRam("2 GB");

        return $this;
    }

    public function getResult()
    {
        return $this->smartPhone;
    }
    
}
