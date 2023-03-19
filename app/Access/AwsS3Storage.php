<?php

namespace App\Access;
use App\Contracts\IStorage;

class AwsS3Storage implements IStorage
{

    public function download()
    {
        dd("Login to download files from aws");
    }

}
