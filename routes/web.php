<?php

use App\Http\Controllers\ImportController;
use Illuminate\Support\Facades\Route;

Route::get('/import/config', [ImportController::class, 'config']);

Route::get('/', function () {
    return view('welcome');
});
