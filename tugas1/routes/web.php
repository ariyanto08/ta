<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\KelolaData\AnggotaController;
use App\Http\Controllers\KelolaData\KeluargaController;
use App\Http\Controllers\KelolaData\PendudukController;
use App\Http\Controllers\Sirkulasi\KelahiranController;
use App\Http\Controllers\Sirkulasi\MeninggalController;

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

Route::get('/', [HomeController::class, 'index']);
Route::get('mati', [HomeController::class, 'indexmati']);
Route::get('miskin', [HomeController::class, 'indexmiskin']);
Route::get('su-mati', [HomeController::class, 'cetakmati']);
Route::get('su-miskin', [HomeController::class, 'cetakmiskin']);
Route::resource('kelahiran',KelahiranController::class);
Route::resource('kematian',MeninggalController::class);
Route::resource('admin',UserController::class);
Route::resource('penduduk',PendudukController::class);
Route::resource('keluarga',KeluargaController::class);

// Route::resource('anggota', AnggotaController::class);

Route::get('anggota/{keluarga}', [AnggotaController::class, 'index']);
Route::post('anggota/store', [AnggotaController::class, 'store']);
Route::get('anggota/{anggota}/edit', [AnggotaController::class, 'edit']);
Route::put('anggota/{keluarga}/update', [AnggotaController::class, 'update']);
Route::delete('anggota/{keluarga}', [AnggotaController::class, 'destroy']);




