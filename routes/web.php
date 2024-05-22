<?php

use App\Http\Controllers\ImportController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HistoryController;

Route::get('/import/config', [ImportController::class, 'config']);

Route::get('/', function () {
    return view('welcome');
});



Route::get('/history/xml', [HistoryController::class, 'index']);
