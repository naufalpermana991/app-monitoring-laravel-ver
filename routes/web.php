<?php


use App\Http\Controllers\PermintaanController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AlatController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\CalibrationController;
use App\Http\Controllers\LaporanKalibrasiController;
use App\Http\Controllers\LokasiController;
use App\Http\Controllers\MonitoringController;


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

Route::get('/alat', [AlatController::class, 'index']);
Route::get('/getToolsDetails/{toolsid}', [AlatController::class, 'getToolsDetails'])->name('getToolsDetails');

Route::get('/datakalibrasi', [CalibrationController::class, 'index']);
Route::get('/getCalibrationsDetails/{cabid}', [CalibrationController::class, 'getCalibrationsDetails'])->name('getCalibrationsDetails');

Route::get('/laporankalibrasi', [LaporanKalibrasiController::class, 'index']);

Route::get('/lokasi', [LokasiController::class, 'index']);

Route::get('/monitoring', [MonitoringController::class, 'index']);

Route::get('/permintaan-alat', [PermintaanController::class, 'index']);
