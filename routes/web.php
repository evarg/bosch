<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HistoryController;

Route::get('/', function () {
    return view('welcome');
});



Route::get('/history/xml', [HistoryController::class, 'index']);
