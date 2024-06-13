<?php

use App\Http\Controllers\ImportController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\xsdController;

use App\Http\Controllers\CONFIG_NETWORK_Controller;
use App\Http\Controllers\HEADER_Controller;

Route::get('/import/config', [ImportController::class, 'config']);
Route::get('/import/xsd', [xsdController::class, 'index']);

Route::get('/', function () {
    return view('content.dashboard.dashboards-analytics');
});

//Route::get('/history/xml', [HistoryController::class, 'index'])->name('CONFIG_NETWORK.index');

Route::get('/CONFIG_NETWORK', [CONFIG_NETWORK_Controller::class, 'index'])->name('CONFIG_NETWORK.index');
Route::get('/HEADER', [HEADER_Controller::class, 'index'])->name('HEADER.index');
