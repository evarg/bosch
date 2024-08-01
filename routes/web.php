<?php

use App\Http\Controllers\ImportController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\xsdController;

use App\Http\Controllers\BoschFPA5000\CONFIG_NETWORK_Controller;
use App\Http\Controllers\BoschFPA5000\MODULE_Controller;
use App\Http\Controllers\BoschFPA5000\NODE_Controller;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\InstalationController;

Route::get('/import/config', [ImportController::class, 'config']);
Route::get('/import/xsd', [xsdController::class, 'index']);

//Route::get('/history/xml', [HistoryController::class, 'index'])->name('CONFIG_NETWORK.index');

Route::get('/', [DashboardController::class, 'index'])->name('dashboard');

Route::resource('/instalation', InstalationController::class);

Route::get('Bosch_FPA5000/CONFIG_NETWORK', [CONFIG_NETWORK_Controller::class, 'index'])->name('BoschFPA5000.CONFIG_NETWORK.index');
Route::get('Bosch_FPA5000/NODE', [NODE_Controller::class, 'index'])->name('BoschFPA5000.NODE.index');
Route::get('Bosch_FPA5000/MODULE', [MODULE_Controller::class, 'index'])->name('BoschFPA5000.MODULE.index');
