<?php

namespace App\Access;

use App\Contracts\IStorageDirectory;

class DeveloperStorage implements IStorageDirectory
{

	public function getFiles() 
    {
        dd("Logic to get files developer");
	}
}
