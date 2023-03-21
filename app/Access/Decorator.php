<?php

namespace App\Access;

use App\Contracts\IComponent;

class Decorator implements IComponent
{

    public function __construct(public IComponent $component)
    {
        
    }

    public function operation()
    {
        $this->component->operation();
    }

}
