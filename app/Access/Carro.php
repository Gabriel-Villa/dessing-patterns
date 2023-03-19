<?php

namespace App\Access;

class Carro
{

    public int $qty;
    public string $color;

    public function __construct()
    {

    }

    public function setQty($qty)
    {
        $this->qty = $qty;

        return $this;
    }

    public function setColor($color)
    {
        $this->color = $color;

        return $this;
    }

}
