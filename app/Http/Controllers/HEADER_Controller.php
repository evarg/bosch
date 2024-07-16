<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\HEADER;

class HEADER_Controller extends Controller
{
    public function index()
    {
        $cns = HEADER::all();
        return view('HEADER.index', compact('cns'));
    }

    public function show($id)
    {
      $cns = HEADER::find($id);
      return view('HEADER.show', compact('cns'));
    }
}
