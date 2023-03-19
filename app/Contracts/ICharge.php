<?php

namespace App\Contracts;

interface ICharge
{

    public function setStorage(IStorage $storage);

    public function downloadFiles();

}
