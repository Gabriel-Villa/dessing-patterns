<?php

namespace App\Access;

use App\Contracts\IImage;

class ImageStrategyContext
{

    public $strategy;

    public function __construct(IImage $strategy = null)
    {
        $this->strategy = $strategy ?? new DegradeImageStrategy();
    }

    public function execute()
    {
        $this->strategy->process();
    }

    public function setStrategy($strategy)
    {
        $this->strategy = $strategy;
    }

}
