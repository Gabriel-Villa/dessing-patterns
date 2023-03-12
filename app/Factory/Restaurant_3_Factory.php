<?php

namespace App\Factory;

use App\Access\Desserts;
use App\Access\Hamburguers;
use App\Access\Pizza;
use App\Contracts\IProduct;
use App\Contracts\IProductFactoryDessert;
use App\Contracts\IProductFactoryHamburguer;

class Restaurant_3_Factory implements IProductFactoryDessert, IProductFactoryHamburguer
{

    public function createHamburguer(string $name, float $price): IProduct
    {
        return new Hamburguers($name, $price);
    }

    public function createDessert(string $name, float $price): IProduct
    {
        return new Desserts($name, $price);
    }

}
