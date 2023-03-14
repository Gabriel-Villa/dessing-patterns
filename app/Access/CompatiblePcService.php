<?php

namespace App\Access;

use App\Contracts\PCInterface;

class CompatiblePcService
{

    public function isBuildeable(PCInterface $pc)
    {
        return !empty($pc->getCpu())
            && !empty($pc->getModel())
            && !empty($pc->getRam());
    }

}
