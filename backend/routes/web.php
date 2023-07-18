<?php

use App\Http\Controllers\DashboardController;
use App\Http\Controllers\KalibrasiController;
use App\Http\Controllers\LapKalibrasiController;
use App\Http\Controllers\MonitoringController;
use App\Http\Controllers\AlatController;
use App\Http\Controllers\LokasiController;
use App\Http\Controllers\PermintaanController;
use Illuminate\Support\Facades\Route;

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

Route::get('/', [DashboardController::class, 'index'])
    ->name('home');

Route::get('/datakalibrasi', [KalibrasiController::class, 'datakalibrasi'])
    ->name('datakalibrasi');

Route::get('/tambahdatakalibrasi', [KalibrasiController::class, 'tambah'])
    ->name('tambah');

Route::get('/lap_kalibrasi', [LapKalibrasiController::class, 'lap_kalibrasi'])
    ->name('lap_kalibrasi');

Route::get('/monitoring', [MonitoringController::class, 'monitoring'])
    ->name('monitoring');

Route::get('/alat', [AlatController::class, 'index'])
    ->name('alat');

Route::get('/lokasi', [LokasiController::class, 'lokasi'])
    ->name('lokasi');

Route::get('/permintaan', [PermintaanController::class, 'permintaan'])
    ->name('permintaan');
