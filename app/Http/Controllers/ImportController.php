<?php

namespace App\Http\Controllers;

use App\Models\CONFIG_NETWORK;
use App\Models\ConfigNetwork;
use App\Models\Header;
use App\Models\NetworkInfo;
use App\Models\Node;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Saloon\XmlWrangler\XmlReader;

class ImportController extends Controller
{
    public function config()
    {
        $reader = XmlReader::fromFile(storage_path('B5.xml'));

        $nodes = $reader->value('NODES')->sole();

        print(gettype($nodes));
        print(sizeof($nodes));

        if (array_key_exists('NODE', $nodes)) {
            foreach ($nodes['NODE'] as $key => $value) {
                print("=======================================");
                print($key);
            }
        }

        //var_dump($nodes);
        // die();

        $config_network = new CONFIG_NETWORK();
        $config_network->save();

        $config_network->HEADER()->save(new Header($reader->value('HEADER')->sole()));
        // $config_network->NetworkInfo()->save(new NetworkInfo($reader->value('NETWORK_INFO')->sole()));

        if (array_key_exists('NODE', $nodes)) {
            foreach ($nodes['NODE'] as $key => $value) {
                // $node = new Node($key);
                // $config_network->Nodes()->save($value);
                var_dump($value);
            }
        }



    }
}
