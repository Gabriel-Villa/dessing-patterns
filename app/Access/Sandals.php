<?php

namespace App\Access;

use App\Decorator\ClotheDecorator;

class Sandals extends ClotheDecorator
{

    CONST price = 80; 

    public function getName(): string
    {
        return "{$this->clote->getName()}, sandals";
    }

    public function getPrice(): float
    {
        return $this->clote->getPrice() + self::price; 
    }

}
