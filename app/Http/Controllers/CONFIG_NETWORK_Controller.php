<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\CONFIG_NETWORK;

class CONFIG_NETWORK_Controller extends Controller
{
    public function index()
    {
        $cns = CONFIG_NETWORK::all();
        return view('CONFIG_NETWORK.index', compact('cns'));
    }

    public function show($id)
    {
      $cns = CONFIG_NETWORK::find($id);
      return view('CONFIG_NETWORK.show', compact('cns'));
    }
}
