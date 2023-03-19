<?php

namespace App\Access;

use App\Contracts\IState;

class StateContext
{

    private $state;

    public function setState(IState $state ) 
    {
        $this->state = $state;
    }

    public function getState() 
    {
        $this->state->handle();
    }

}
