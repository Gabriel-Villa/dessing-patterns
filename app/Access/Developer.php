<?php

namespace App\Access;
use App\Contracts\ICharge;
use App\Contracts\IStorage;

class Developer implements ICharge
{

    public $storage;

    public function setStorage(IStorage $storage)
    {
        $this->storage = $storage;
    }

    public function downloadFiles()
    {
        $this->storage->download();
    }

}
