<?php

namespace App\Http\Controllers;

use App\Models\NODE;
use Illuminate\Http\Request;

class NODE_Controller extends Controller
{
    public function index()
    {
        $nodes = NODE::all();
        return view('NODE.index', compact('nodes'));
    }

}
