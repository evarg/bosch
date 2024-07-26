<?php

namespace App\Http\Controllers\BoschFPA5000;

use App\Http\Controllers\Controller;
use App\Models\Import\BoschFPA5000\CONFIG_NETWORK;

class CONFIG_NETWORK_Controller extends Controller
{
    public function index()
    {
        //Category::where('parent_id', 0)->withCount('articles')->get();
        $cns = CONFIG_NETWORK::withCount('NODES as numberOfNodes')->with('HEADER')->get();

        // var_dump($cns); die();
        return view('BoschFPA5000\CONFIG_NETWORK.index', compact('cns'));
    }

    public function show($id)
    {
      $cns = CONFIG_NETWORK::find($id);
      return view('BoschFPA5000\CONFIG_NETWORK.show', compact('cns'));
    }
}
