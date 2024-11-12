<?php

namespace App\Http\Controllers;

use App\Models\Instalation;
use App\Http\Requests\StoreInstalationRequest;
use App\Http\Requests\UpdateInstalationRequest;

class InstalationController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //Category::where('parent_id', 0)->withCount('articles')->get();
        $instalations = Instalation::get();

        // var_dump($cns); die();
        return view('instalation.index', compact('instalations'));
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
    public function store(StoreInstalationRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(Instalation $instalation)
    {
        return view('instalation.show', compact('instalation'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Instalation $instalation)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateInstalationRequest $request, Instalation $instalation)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Instalation $instalation)
    {
        //
    }
}
