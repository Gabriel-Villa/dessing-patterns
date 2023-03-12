<?php

namespace App\Factory;

use App\Access\Pizza;
use App\Contracts\IProduct;
use App\Contracts\IProductFactoryPizza;

class Restaurant_2_Factory implements IProductFactoryPizza
{

    public function createPizza(string $name, float $price): IProduct
    {
        return new Pizza($name, $price);
    }

}
