<?php

namespace App\Access;

use App\Contracts\IImage;

class DegradeImageStrategy implements IImage
{

    public function process()
    {
        dd("Process to degrade the image");
    }

}
