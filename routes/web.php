<?php

use App\Http\Controllers\ImportController;
use Illuminate\Support\Facades\Route;

use App\Http\Controllers\BoschFPA5000\CONFIG_NETWORK_Controller;
use App\Http\Controllers\BoschFPA5000\MODULE_Controller;
use App\Http\Controllers\BoschFPA5000\NODE_Controller;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\EventsUploadController;
use App\Http\Controllers\FileUploadController;
use App\Http\Controllers\InstalationController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\SchrackImportSecologController;

Route::get('/import/config', [ImportController::class, 'config']);

//Route::get('/history/xml', [HistoryController::class, 'index'])->name('CONFIG_NETWORK.index');

Route::get('/', [DashboardController::class, 'index'])->name('dashboard');

Route::resource('/instalation', InstalationController::class);
Route::resource('/events_upload', EventsUploadController::class);

Route::post('/upload', [FileUploadController::class, 'upload']);

Route::get('Bosch_FPA5000/CONFIG_NETWORK', [CONFIG_NETWORK_Controller::class, 'index'])->name('BoschFPA5000.CONFIG_NETWORK.index');
Route::get('Bosch_FPA5000/NODE', [NODE_Controller::class, 'index'])->name('BoschFPA5000.NODE.index');
Route::get('Bosch_FPA5000/MODULE', [MODULE_Controller::class, 'index'])->name('BoschFPA5000.MODULE.index');

Route::get('Secolog', [SchrackImportSecologController::class, 'index'])->name('Secolog.index');

Route::get('/profile/edit', [ProfileController::class, 'edit'])->name('profile.edit');
Route::post('/profile/edit', [ProfileController::class, 'update'])->name('profile.update');
