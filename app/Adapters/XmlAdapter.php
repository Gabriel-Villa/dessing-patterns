<?php

namespace App\Adapters;

use App\Access\XmlElement;
use App\Contracts\PCInterface;

class XmlAdapter implements PCInterface
{

    private $xml;

    public function __construct($apiResponseXml)
    {
        $this->xml = simplexml_load_string($apiResponseXml);
    }

    public function getCpu()
    {
        return $this->xml->cpu;
    }

    public function getModel()
    {
        return $this->xml->modelo;
    }

    public function getRam()
    {
        return $this->xml->ram;
    }

}
