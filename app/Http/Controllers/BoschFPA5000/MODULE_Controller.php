<?php

namespace App\Http\Controllers\BoschFPA5000;

use App\Http\Controllers\Controller;
use App\Models\Import\BoschFPA5000\CONFIG_NETWORK;
use App\Models\Import\BoschFPA5000\NODE;
use App\Models\Import\BoschFPA5000\PANEL_MODULES_Base;
use Illuminate\Http\Request;

class MODULE_Controller extends Controller
{
    public function index(Request $request)
    {
        if($request->has('config_network')) {
            // $cn = CONFIG_NETWORK::with('HEADER')->with('NODES')->find($request->config_network);
            $cn = CONFIG_NETWORK::find($request->config_network);
            $breadCrumps = 'NODES of ' . $cn->HEADER->filename;
            $nodes = $cn->NODES;

            dump($cn->NODES);
            die();
        }
        else {
            $breadCrumps = 'All MODULES';
            $modules = PANEL_MODULES_Base::all();
        }
        return view('BoschFPA5000\MODULE.index', compact('modules', 'breadCrumps'));
    }

}
