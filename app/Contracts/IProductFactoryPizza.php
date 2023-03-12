<?php

namespace App\Contracts;

interface IProductFactoryPizza
{
    public function createPizza(string $name, float $price);
}
