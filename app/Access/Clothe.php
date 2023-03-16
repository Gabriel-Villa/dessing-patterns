<?php

namespace App\Access;

use App\Contracts\IClothe;

class Clothe implements IClothe
{

    public function getName(): string
    {
        return 'Clothe start';
    }

    public function getPrice(): float
    {
        return 10;
    }

}
