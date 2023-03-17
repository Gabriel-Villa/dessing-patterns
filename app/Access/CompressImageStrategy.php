<?php

namespace App\Access;

use App\Contracts\IImage;

class CompressImageStrategy implements IImage
{

    public function process()
    {
        dd("Process to compress the image");
    }

}
