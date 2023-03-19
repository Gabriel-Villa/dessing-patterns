<?php

namespace App\Http\Controllers;

use App\Access\Cap;
use App\Access\Clothe;
use App\Access\CompatiblePcService;
use App\Access\Pants;
use App\Access\Sandals;
use App\Access\XmlElement;
use App\Adapters\JsonAdapter;
use App\Adapters\XmlAdapter;
use App\Access\DeveloperStorage;
use App\Access\FilesViewer;
use App\Facade\Hello;
use Illuminate\Http\Request;

class StructuralPattern extends Controller
{

    public string $xml; 
    public string $json;

    public function __construct()
    {
        $this->xml = '<computadora><ram>16GB</ram><cpu>Intel Core i7-8700K</cpu><modelo>ASUS ROG Strix Z370-E Gaming</modelo><fabricante>ASUS</fabricante></computadora>';
        $this->json = '{"ram":"16GB","cpu":"Intel Core i7-8700K","modelo":"ASUS ROG Strix Z370-E Gaming","fabricante":"ASUS"}';
    }


    public function adapter(CompatiblePcService $service)
    {
       
        $resJson = $service->isBuildeable(new JsonAdapter($this->json));
        $resXml = $service->isBuildeable(new XmlAdapter($this->xml)); 

        dd($resJson, $resXml);

    }

    public function decorator()
    {

        $clote = new Clothe();
        $clote = new Cap($clote);
        $clote = new Pants($clote);
        $clote = new Sandals($clote);

        dd("Clothes selected: {$clote->getName()}, Total price: {$clote->getPrice()}");

    }

    public function facade()
    {
        Hello::test();
    }

    public function bridge()
    {
      
        $files = new FilesViewer(new DeveloperStorage());
        $files->getAllFilesFromStorage();

    }

}
