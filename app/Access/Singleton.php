<?php

namespace App\Access;

class Singleton
{

    private static $instance;

    private function __construct()
    {

    }

    public static function getInstance()
    {
        if (!isset(self::$instance)) {
            self::$instance = new self();
        }

        return self::$instance;
    }

    public function fly()
    {
        dd("Flyyyyyyyyyyyyyyyy");
    }

}
