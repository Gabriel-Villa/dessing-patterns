<?php

namespace App\Access;

use App\Decorator\ClotheDecorator;

class Cap extends ClotheDecorator
{

    CONST price = 120; 

    public function getName(): string
    {
        return "{$this->clote->getName()}, cap";
    }

    public function getPrice(): float
    {
        return $this->clote->getPrice() + self::price; 
    }

}
