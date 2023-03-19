<?php

namespace App\Access;
use App\Contracts\IStorage;

class AzureBlobStorage implements IStorage
{

    public function download()
    {
        dd("Login to download files from azure");
    }

}
