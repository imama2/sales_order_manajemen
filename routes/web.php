<?php

use App\Http\Controllers\BarangController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\MemberController;
use App\Http\Controllers\PembelianController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PenggunaController;
use App\Http\Controllers\PenjualanController;
use App\Http\Controllers\SupplierController;

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

// Pengguna
Route::get('/pengguna', [PenggunaController::class,'index']);
Route::post('/pengguna/store', [PenggunaController::class,'store']);
Route::get('/pengguna/{id_pengguna}/edit', [PenggunaController::class,'edit']);
Route::put('/pengguna/{id}', [PenggunaController::class,'update']);
Route::delete('/pengguna/{id}', [PenggunaController::class,'destroy']);

// Pembelian
Route::get('/pembelian', [PembelianController::class,'index']);
Route::post('/pembelian/store', [PembelianController::class,'store']);
Route::get('/pembelian/{id_pembelian}/edit', [PembelianController::class,'edit']);
Route::put('/pembelian/{id}', [PembelianController::class,'update']);
Route::delete('/pembelian/{id}', [PembelianController::class,'destroy']);

// Penjualan
Route::get('/penjualan', [PenjualanController::class,'index']);
Route::post('/penjualan/store', [PenjualanController::class,'store']);
Route::get('/penjualan/{id_penjualan}/edit', [PenjualanController::class,'edit']);
Route::put('/penjualan/{id}', [PenjualanController::class,'update']);
Route::delete('/penjualan/{id}', [PenjualanController::class,'destroy']);

// Barang
Route::get('/barang', [BarangController::class,'index']);
Route::post('/barang/store', [BarangController::class,'store']);
Route::get('/barang/{id_barang}/edit', [BarangController::class,'edit']);
Route::put('/barang/{id}', [BarangController::class,'update']);
Route::delete('/barang/{id}', [BarangController::class,'destroy']);

// Supplier
Route::get('/supplier', [SupplierController::class,'index']);
Route::post('/supplier/store', [SupplierController::class,'store']);
Route::get('/supplier/{id_supplier}/edit', [SupplierController::class,'edit']);
Route::put('/supplier/{id}', [SupplierController::class,'update']);
Route::delete('/supplier/{id}', [SupplierController::class,'destroy']);

// Member
Route::get('/member', [MemberController::class,'index']);
Route::post('/member/store', [MemberController::class,'store']);
Route::get('/member/{id_member}/edit', [MemberController::class,'edit']);
Route::put('/member/{id}', [MemberController::class,'update']);
Route::delete('/member/{id}', [MemberController::class,'destroy']);

// Dashboard
Route::get('/dashboard', [DashboardController::class,'index']);