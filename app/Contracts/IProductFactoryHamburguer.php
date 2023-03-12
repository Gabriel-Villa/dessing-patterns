<?php

namespace App\Contracts;

interface IProductFactoryHamburguer
{
    public function createHamburguer(string $name, float $price);
}
