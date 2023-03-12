<?php

namespace App\Factory;

use App\Access\Desserts;
use App\Access\Hamburguers;
use App\Access\Pizza;
use App\Contracts\IProduct;
use App\Contracts\IProductFactoryDessert;
use App\Contracts\IProductFactoryHamburguer;
use App\Contracts\IProductFactoryPizza;

class Restaurant_1_Factory implements IProductFactoryPizza, IProductFactoryDessert, IProductFactoryHamburguer
{

    public function createPizza(string $name, float $price): IProduct
    {
        return new Pizza($name, $price);
    }

    public function createHamburguer(string $name, float $price): IProduct
    {
        return new Hamburguers($name, $price);
    }

    public function createDessert(string $name, float $price): IProduct
    {
        return new Desserts($name, $price);
    }

}
