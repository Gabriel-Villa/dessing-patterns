<?php

namespace App\Access;
use App\Contracts\IStorageDirectory;
class ManagementStorage implements IStorageDirectory
{

    public function getFiles() 
    {
        dd("Logic to get files management");
	}

}
