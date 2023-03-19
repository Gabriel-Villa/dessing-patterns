<?php

namespace App\Access;
use App\Contracts\IStorageDirectory;

class MarketerStorage implements IStorageDirectory
{

    public function getFiles() 
    {
        dd("Logic to get files marketer");
	}

}
