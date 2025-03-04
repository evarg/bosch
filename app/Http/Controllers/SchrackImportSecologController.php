<?php

namespace App\Http\Controllers;

use App\Models\ShrackImportSecolog as Sec;
use App\Http\Requests\StoreShrackImportSecologRequest;
use App\Http\Requests\UpdateShrackImportSecologRequest;

class SchrackImportSecologController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $secAll = Sec::where('plan_no', 'garaz')->get();

        foreach($secAll as $key => $sec){
            print("'" . $sec->xpos_pixel . "', ");
        }


    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreShrackImportSecologRequest $request)
    {
        //
    }

}
