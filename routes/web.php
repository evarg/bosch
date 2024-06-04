<?php

use App\Http\Controllers\ImportController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HistoryController;
use App\Http\Controllers\xsdController;
use App\Models\AutoDetBase;
use App\Models\LSNDeviceBase;

Route::get('/import/config', [ImportController::class, 'config']);
Route::get('/import/xsd', [xsdController::class, 'index']);

Route::get('/', function () {
    // nadrzedny
    $a = LSNDeviceBase::create([]);

    $b = AutoDetBase::create([]);

    $a->lsnable()->save($b);

    var_dump($a);

});



Route::get('/history/xml', [HistoryController::class, 'index']);
