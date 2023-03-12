<?php

namespace App\Contracts;

interface IProductFactoryDessert
{
    public function createDessert(string $name, float $price);
}
