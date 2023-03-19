<?php

namespace App\Http\Controllers;

use App\Access\CompressImageStrategy;
use App\Access\DegradeImageStrategy;
use App\Access\ImageStrategyContext;
use App\Access\NotPaid;
use App\Access\Sold;
use App\Access\StateContext;
use Illuminate\Http\Request;

class BehavioralPattern extends Controller
{

    public function strategy(ImageStrategyContext $strategy)
    {
        
        $strategy->setStrategy(new CompressImageStrategy());
        
        $strategy->execute();
    }
    
    public function memento()
    {
        // Save the state - recover later 
    }

    public function observer()
    {
        // Notify other objects whe event fire
    }

    public function state()
    {
        
        $state = new StateContext();
        $state->setState(new NotPaid());
        $state->setState(new Sold());
        $state->getState();

    }

}
