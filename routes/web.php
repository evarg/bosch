<?php

use App\Http\Controllers\ImportController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HistoryController;
use App\Http\Controllers\xsdController;

Route::get('/import/config', [ImportController::class, 'config']);
Route::get('/import/xsd', [xsdController::class, 'index']);

Route::get('/', function () {
    return view('welcome');
});



Route::get('/history/xml', [HistoryController::class, 'index']);
