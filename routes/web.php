<?php


use App\Http\Controllers\PermintaanController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AlatController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\CalibrationController;
use App\Http\Controllers\LocationController;
use App\Http\Controllers\MonitoringController;
use App\Http\Controllers\PermintaanAlatController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', [DashboardController::class, 'index']);
Route::resource('/alat', AlatController::class);
Route::get('/getToolsDetails/{toolsid}', [AlatController::class, 'getToolsDetails'])->name('getToolsDetails');
Route::get('/getCalibrationsDetails/{cabid}', [CalibrationController::class, 'getCalibrationsDetails'])->name('getCalibrationsDetails');
Route::resource('/lokasi', LocationController::class);
Route::resource('/datakalibrasi', CalibrationController::class);
Route::resource('/permintaan-alat', PermintaanAlatController::class);
Route::get('/getToolRequestsDetails/{reqsid}', [PermintaanAlatController::class, 'getToolRequestsDetails'])->name('getToolRequestsDetails');
Route::get('/monitoring', [MonitoringController::class, 'index']);
