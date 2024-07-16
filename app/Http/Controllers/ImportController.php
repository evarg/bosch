<?php

namespace App\Http\Controllers;

use App\Models\CONFIG_NETWORK;
use App\Models\ConfigNetwork;
use App\Models\Header;
use App\Models\MODULE;
use App\Models\NetworkInfo;
use App\Models\Node;
use App\Models\PANEL;
use App\Services\CONFIG_NETWORK_Element;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Saloon\XmlWrangler\XmlReader;
use SimpleXMLElement;

class ImportController extends Controller
{

    public $cn;
    public $reader;

    public function config()
    {
        $xmlElement = new SimpleXMLElement(file_get_contents(storage_path('B5.xml')));
        $cn = new CONFIG_NETWORK_Element($xmlElement);
        return view('IMPORT_CONFIG.index');


        $this->cn = new CONFIG_NETWORK();
        $this->cn->save();

        $this->cn->HEADER()->save(new Header($this->reader->value('HEADER')->sole()));

        // $config_network->NetworkInfo()->save(new NetworkInfo($reader->value('NETWORK_INFO')->sole()));

        $nodes = $this->reader->value('NODES')->sole();
        if (array_key_exists('NODE', $nodes)) {
            foreach ($nodes['NODE'] as $key => $xNODE) {
                $node = new Node($xNODE);
                $this->cn->NODES()->save($node);

                if (array_key_exists('CONFIG_DATA', $xNODE)) {
                    if (array_key_exists('LOCAL_CONFIGURATION', $xNODE['CONFIG_DATA'])) {
                        $xPANEL = $xNODE['CONFIG_DATA']['LOCAL_CONFIGURATION']['PANEL'];
                        $panel = new PANEL($xPANEL);
                        $node->PANEL()->save($panel);

                        $this->importMODULES($panel, $xPANEL);

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

    public function importMODULES($panel, $xPANEL)
    {
        if (array_key_exists('LSN300_MODULE', $xPANEL)) {
            foreach ($xPANEL['LSN300_MODULE'] as $key => $xMODULE) {
                print('LSN300_MODULE' . gettype($xMODULE));
                $module = $panel->MODULES()->save(new MODULE($xMODULE));
            }
        }

        if (array_key_exists('LSN1500_MODULE', $xPANEL)) {
            foreach ($xPANEL['LSN1500_MODULE'] as $key => $xMODULE) {
                print('LSN1500_MODULE' . gettype($xMODULE));
                $module = $panel->MODULES()->save(new MODULE($xMODULE));
            }
        }

        if (array_key_exists('BATTERY_CONTR_MODULE', $xPANEL)) {
            foreach ($xPANEL['BATTERY_CONTR_MODULE'] as $key => $xMODULE) {
                // $module = $panel->MODULES()->save(new MODULE($xMODULE));
            }
        }

        if (array_key_exists('CITYTIE_MODULE', $xPANEL)) {
            foreach ($xPANEL['CITYTIE_MODULE'] as $key => $xMODULE) {
                // $module = $panel->MODULES()->save(new MODULE($xMODULE));
            }
        }

        if (array_key_exists('CONVENTIONAL_MODULE', $xPANEL)) {
            foreach ($xPANEL['CONVENTIONAL_MODULE'] as $key => $xMODULE) {
                // $module = $panel->MODULES()->save(new MODULE($xMODULE));
            }
        }

        if (array_key_exists('ENOT_MODULE', $xPANEL)) {
            foreach ($xPANEL['ENOT_MODULE'] as $key => $xMODULE) {
                // $module = $panel->MODULES()->save(new MODULE($xMODULE));
            }
        }

        if (array_key_exists('IO_8_MODULE', $xPANEL)) {
            foreach ($xPANEL['IO_8_MODULE'] as $key => $xMODULE) {
                // $module = $panel->MODULES()->save(new MODULE($xMODULE));
            }
        }

        if (array_key_exists('IO_S20_MODULE', $xPANEL)) {
            foreach ($xPANEL['IO_S20_MODULE'] as $key => $xMODULE) {
                // $module = $panel->MODULES()->save(new MODULE($xMODULE));
            }
        }

        if (array_key_exists('IO2_S20_MODULE', $xPANEL)) {
            foreach ($xPANEL['IO2_S20_MODULE'] as $key => $xMODULE) {
                // $module = $panel->MODULES()->save(new MODULE($xMODULE));
            }
        }

        if (array_key_exists('IO_SERIAL_MODULE', $xPANEL)) {
            foreach ($xPANEL['IO_SERIAL_MODULE'] as $key => $xMODULE) {
                // $module = $panel->MODULES()->save(new MODULE($xMODULE));
            }
        }

        if (array_key_exists('LEDINT_MODULE', $xPANEL)) {
            foreach ($xPANEL['LEDINT_MODULE'] as $key => $xMODULE) {
                // $module = $panel->MODULES()->save(new MODULE($xMODULE));
            }
        }

        if (array_key_exists('NAC_MODULE', $xPANEL)) {
            foreach ($xPANEL['NAC_MODULE'] as $key => $xMODULE) {
                print('NAC_MODULE' . gettype($xMODULE));
                // $module = $panel->MODULES()->save(new MODULE($xMODULE));
            }
        }

        if (array_key_exists('RLHV_MODULE', $xPANEL)) {
            foreach ($xPANEL['RLHV_MODULE'] as $key => $xMODULE) {
                // $module = $panel->MODULES()->save(new MODULE($xMODULE));
            }
        }

        if (array_key_exists('RLLV_MODULE', $xPANEL)) {
            foreach ($xPANEL['RLLV_MODULE'] as $key => $xMODULE) {
                // $module = $panel->MODULES()->save(new MODULE($xMODULE));
            }
        }

        if (array_key_exists('BCMB_MODULE', $xPANEL)) {
            foreach ($xPANEL['BCMB_MODULE'] as $key => $xMODULE) {
                // $module = $panel->MODULES()->save(new MODULE($xMODULE));
            }
        }

        if (array_key_exists('VAS_INTERFACE', $xPANEL)) {
            foreach ($xPANEL['VAS_INTERFACE'] as $key => $xMODULE) {
                $module = $panel->MODULES()->save(new MODULE($xMODULE));
            }
        }
    }
}
