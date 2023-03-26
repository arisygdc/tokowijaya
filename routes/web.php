<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\KaryawanController;
use App\Http\Middleware\KaryawanRole;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TokoController;
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

Route::get('/', [TokoController::class, 'index']);
Route::get('/category', [TokoController::class, 'category_page']);
Route::get('/login', [AuthController::class, 'index_login']);
Route::post('/login', [AuthController::class, 'login']);
Route::get('/logout', [AuthController::class, 'logout']);

Route::middleware([KaryawanRole::class])->group(function() {
    Route::get('/karyawan', [KaryawanController::class, 'index']);
    Route::get('/karyawan/barang', [KaryawanController::class, 'barang']);
    Route::get('/karyawan/pelanggan', [KaryawanController::class, 'pelanggan']);
    Route::get('/karyawan/transaksi', [KaryawanController::class, 'transaksi']);
    Route::get('/karyawan/barang/insert', [KaryawanController::class, 'insert_barang_index']);
    Route::post('/karyawan/barang/insert', [KaryawanController::class, 'insert_barang']);
    Route::get('/karyawan/insert', [KaryawanController::class, 'insert_karyawan_index']);
    Route::post('/karyawan/insert', [KaryawanController::class, 'insert_karyawan']);
});

Route::get('/logout', [AuthController::class, 'logout']);
Route::get('/keranjang', [TokoController::class, 'keranjang_index']);
Route::post('/keranjang', [TokoController::class, 'keranjang']);
Route::post('/checkout', [TokoController::class, 'checkout']);
Route::get('/category/{category}', [TokoController::class, 'category_items']);
Route::get('/keranjang', [TokoController::class, 'keranjang_index']);
