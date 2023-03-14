<?php

namespace App\Adapters;

use App\Contracts\PCInterface;

class JsonAdapter implements PCInterface
{

    public object $pc;

    public function __construct($json)
    {
        $this->pc = json_decode($json);
    }

    public function getCpu()
    {
        return $this->pc->cpu;
    }

    public function getModel()
    {
        return $this->pc->modelo;
    }

    public function getRam()
    {
        return $this->pc->ram;
    }


}
