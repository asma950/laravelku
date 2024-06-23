<?php

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

Route::get('/', function () {
    return view('welcome');
});

use App\Http\Controllers\PegawaiController;
use App\Http\Controllers\MalasngodingController;
use App\Http\Controllers\PegawaisController;
use App\Http\Controllers\GuruController;

use App\Http\Controllers\PenggunaController;
use App\Http\Controllers\WebController;
use App\Http\Controllers\DikiController;


Route::get('/pegawai', [PegawaiController::class, 'index']);
Route::get('/pegawai/tambah', [PegawaiController::class, 'tambah']);
Route::post('/pegawai/store', [PegawaiController::class, 'store']);
Route::get('/pegawai/edit/{id}', [PegawaiController::class, 'edit']);
Route::post('/pegawai/update', [PegawaiController::class, 'update']);
Route::get('/pegawai/hapus/{id}', [PegawaiController::class, 'hapus']);
Route::get('/pegawai/cari', [PegawaiController::class, 'cari']);

Route::get('/input', [MalasngodingController::class, 'input']);
Route::post('/proses', [MalasngodingController::class, 'proses']);

Route::get('/pegawais', [PegawaisController::class, 'index']);
Route::get('/pegawais/tambah', [PegawaisController::class, 'tambah']);
Route::post('/pegawais/store', [PegawaisController::class, 'store'])->name('pegawais.store');
Route::get('/pegawais', [PegawaisController::class, 'index']);
Route::get('/pegawais/tambah', [PegawaisController::class, 'tambah']);
Route::post('/pegawais/store', [PegawaisController::class, 'store']);
Route::get('/pegawais/edit/{id}', [PegawaisController::class, 'edit']);
Route::put('/pegawais/update/{id}', [PegawaisController::class, 'update']);
Route::get('/pegawais/hapus/{id}', [PegawaisController::class, 'delete']);

Route::get('/guru', [GuruController::class, 'index']);
Route::get('/guru/hapus/{id}', [GuruController::class, 'hapus']);
Route::get('/guru/trash', [GuruController::class, 'trash']);
Route::get('/guru/kembalikan/{id}', [GuruController::class, 'kembalikan']);
Route::get('/guru/kembalikan_semua', [GuruController::class, 'kembalikan_semua']);
Route::get('/guru/hapus_permanen/{id}', [GuruController::class, 'hapus_permanen']);
Route::get('/guru/hapus_permanen_semua', [GuruController::class, 'hapus_permanen_semua']);

Route::get('/pengguna', [PenggunaController::class, 'index']);

Route::get('/article', [WebController::class, 'index']);

Route::get('/anggota', [DikiController::class, 'index']);