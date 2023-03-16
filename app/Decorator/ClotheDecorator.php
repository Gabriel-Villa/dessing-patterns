<?php

namespace App\Decorator;

use App\Contracts\IClothe;

abstract class ClotheDecorator implements IClothe
{
    
    public IClothe $clote;

    public function __construct(IClothe $clote)
    {
        $this->clote = $clote;
    }

}
