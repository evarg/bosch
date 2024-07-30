<?php

namespace App\Http\Controllers\BoschFPA5000;

use App\Http\Controllers\Controller;
use App\Models\Import\BoschFPA5000\CONFIG_NETWORK;
use App\Models\Import\BoschFPA5000\NODE;
use Illuminate\Http\Request;

class NODE_Controller extends Controller
{
    public function index(Request $request)
    {
        if($request->has('config_network')) {
            $cn = CONFIG_NETWORK::with('HEADER')->with('NETWORK_NODES')->find($request->config_network);
            $breadCrumps = 'NODES of ' . $cn->HEADER->filename;
            $nodes = $cn->NETWORK_NODES;
        }
        else {
            $breadCrumps = 'All NODES';
            $nodes = NODE::all();
        }
        return view('BoschFPA5000\NODE.index', compact('nodes', 'breadCrumps'));
    }

}
