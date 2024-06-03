<?php

use App\Http\Controllers\BerandaController;
use App\Http\Controllers\DetailPinjamController;
use App\Http\Controllers\InventarisController;
use App\Http\Controllers\JenisController;
use App\Http\Controllers\PdfController;
use App\Http\Controllers\PegawaiController;
use App\Http\Controllers\PeminjamanController;
use App\Http\Controllers\PetugasController;
use App\Http\Controllers\RuangController;
use App\Models\DetailPinjam;
use App\Models\Peminjaman;
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

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/', [BerandaController::class, 'index']);

// Petugas
Route::get('/petugas', [PetugasController::class,'index']);
Route::get('/petugas/create', [PetugasController::class,'create']);
Route::post('/petugas/store', [PetugasController::class,'store']);
Route::get('/petugas/edit/{idpetugas}', [PetugasController::class,'edit']);
Route::post('/petugas/update', [PetugasController::class,'update']); 
Route::get('/petugas/hapus/{idpetugas}', [PetugasController::class,'destroy']);

// Ruang
Route::get('/ruang', [RuangController::class,'index']);
Route::get('/ruang/create', [RuangController::class,'create']);
Route::post('/ruang/store', [RuangController::class,'store']);
Route::get('/ruang/edit/{idruang}', [RuangController::class,'edit']);
Route::post('/ruang/update', [RuangController::class,'update']);
Route::get('/ruang/hapus/{idruang}', [RuangController::class,'destroy']);

// Jenis
Route::get('/jenis', [JenisController::class,'index']);
Route::get('/jenis/create', [JenisController::class,'create']);
Route::post('/jenis/store', [JenisController::class,'store']);
Route::get('/jenis/edit/{idjenis}', [JenisController::class,'edit']);
Route::post('/jenis/update', [JenisController::class,'update']);
Route::get('/jenis/hapus/{idjenis}', [JenisController::class,'destroy']);

// Inventaris
Route::get('/inventaris', [InventarisController::class,'index']);
Route::get('/inventaris/create', [InventarisController::class,'create']);
Route::post('/inventaris/store', [InventarisController::class,'store']);
Route::get('/inventaris/edit/{idinventaris}', [InventarisController::class,'edit']);
Route::post('/inventaris/update', [InventarisController::class,'update']);
Route::get('/inventaris/hapus/{idinventaris}', [InventarisController::class,'destroy']);

//Pegawai
Route::get('/pegawai', [PegawaiController::class, 'index']);
Route::get('/pegawai/create', [PegawaiController::class, 'create']);
Route::post('/pegawai/store', [PegawaiController::class, 'store']);
Route::get('/pegawai/edit/{idpegawai}', [PegawaiController::class, 'edit']);
Route::post('/pegawai/update', [PegawaiController::class, 'update']);
Route::get('/pegawai/hapus/{idpegawai}', [PegawaiController::class, 'destroy']);
