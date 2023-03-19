<?php

namespace App\Access;

use App\Contracts\IStorageDirectory;
use App\Contracts\IStorageManager;

class FilesViewer implements IStorageManager
{

    public function __construct(public IStorageDirectory $storage) {}
  
    public function getAllFilesFromStorage()
    {
        $this->storage->getFiles();
    }

}
