<?php

namespace App\Access;

abstract class Prototype
{

    abstract public function __clone();

    public function getPrototypeMessage(): string
    {
        dd('Prototype Pattern');
    }

}
