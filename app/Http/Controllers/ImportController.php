<?php

namespace App\Http\Controllers;

use App\Models\CONFIG_NETWORK;
use App\Models\ConfigNetwork;
use App\Models\Header;
use App\Models\MODULE;
use App\Models\NetworkInfo;
use App\Models\Node;
use App\Models\PANEL;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Saloon\XmlWrangler\XmlReader;

class ImportController extends Controller
{
    public function config()
    {
        $reader = XmlReader::fromFile(storage_path('B5.xml'));

        $config_network = new CONFIG_NETWORK();
        $config_network->save();

        $config_network->HEADER()->save(new Header($reader->value('HEADER')->sole()));

        // $config_network->NetworkInfo()->save(new NetworkInfo($reader->value('NETWORK_INFO')->sole()));

        $nodes = $reader->value('NODES')->sole();
        if (array_key_exists('NODE', $nodes)) {
            foreach ($nodes['NODE'] as $key => $xNODE) {
                $node = new Node($xNODE);
                $config_network->NODES()->save($node);

                if (array_key_exists('CONFIG_DATA', $xNODE)) {
                    if (array_key_exists('LOCAL_CONFIGURATION', $xNODE['CONFIG_DATA'])) {
                        $xPANEL = $xNODE['CONFIG_DATA']['LOCAL_CONFIGURATION']['PANEL'];
                        $panel = new PANEL($xPANEL);
                        $node->PANEL()->save($panel);

                        if (array_key_exists('LSN300_MODULE', $xPANEL)) {
                            foreach ($xPANEL['LSN300_MODULE'] as $key => $xLSN300_MODULE){
                                $lsn300 = new MODULE($xLSN300_MODULE);
                                $panel->MODULES()->save($lsn300);
                            }
                        }
                        if (array_key_exists('LSN1500_MODULE', $xPANEL)) {
                            print("jest 1500");
                        }

                        // var_dump($xPANEL);
                    }
                    // foreach ($nodes['NODE'] as $key => $value) {
                    //     $node = new Node($value);
                    //     $config_network->NODES()->save($node);
                    //     //var_dump($value);
                    // }
                }
            }
        }



    }
}
