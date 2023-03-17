<?php

namespace App\Http\Controllers;

use App\Access\CompressImageStrategy;
use App\Access\DegradeImageStrategy;
use App\Access\ImageStrategyContext;
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

}
