<?php

namespace App\Access;

use App\Contracts\ISmartPhoneBuilder;
use App\SmartPhone;

class SmartPhoneAppleBuilder implements ISmartPhoneBuilder
{
    public $smartPhone;

    public function __construct()
    {
        $this->smartPhone = new SmartPhone();
    }

    public function design()
    {
        $this->smartPhone->setColor("Orange");

        return $this;
    }

    public function mounting()
    {
        $this->smartPhone->setCpu("Ryzen");
        $this->smartPhone->setRam("8 GB");
        $this->smartPhone->setCamera("Camera 2");
        $this->smartPhone->setScreen("Screen test");

        return $this;
    }

    public function getResult()
    {
        return $this->smartPhone;
    }

}
