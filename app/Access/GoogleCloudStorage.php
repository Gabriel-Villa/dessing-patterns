<?php

namespace App\Access;
use App\Contracts\IStorage;

class GoogleCloudStorage implements IStorage
{

    public function download()
    {
        dd("Login to download files from google cloud");
    }

}
