<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthControll;
use App\Http\Controllers\HomeControll;
use App\Http\Controllers\LoginControll;
use App\Http\Controllers\LogoutControll;
use App\Http\Controllers\pelangganControll;
use App\Http\Controllers\penjualanControll;

//login
Route::get("/login", [LoginControll::class, 'login'])->name("login");
Route::post("/login", [LoginControll::class, 'proseslogin']);

Route::middleware(['auth'])->group(function () { 
//produk
Route::get('/home', [HomeControll::class, 'index']);
Route::get('/produk', [HomeControll::class, 'produk']);
//tambahproduk
Route::post('/tambah_produk', [HomeControll::class, 'proses_tambah_produk']);
Route::get('/tambah_produk', [HomeControll::class, 'tambah_produk']);
//hapus
Route::get('/hapusProduk/{id}', [HomeControll::class, 'hapus']);
//detail
Route::get('/detailProduk/{id}', [HomeControll::class, 'detail_produk']);
//update
Route::post('/updateProduk/{id}', [HomeControll::class, 'proses_update_produk']);
Route::get('/updateProduk/{id}', [HomeControll::class, 'update_produk']);
});

//pelanggan
Route::get('/pelanggan', [pelangganControll::class, 'pelanggan']);
Route::post('/pelanggan/tambah', [pelangganControll::class, 'proses_tambahpel']);
Route::get('/pelanggan/tambah', [pelangganControll::class, 'tambahpel']);
Route::get('/hapusPelanggan/{id}', [pelangganControll::class, 'hapus']);
Route::get('/updatePelanggan/{id}', [pelangganControll::class, 'update']);
Route::post('/updatePelanggan/{id}', [pelangganControll::class, 'proses_update_pelanggan']);

//penjualan
Route::get('/penjualan', [penjualanControll::class, 'penjualan']);
 Route::get('penjualan/detailPenjualan/{id}', [penjualanControll::class, 'detailpenjualan']);
 Route::post('penjualan/detailPenjualan/{id}', [penjualanControll::class, 'proses_detailpenjualan']);

 //user
 Route::get('/user', [LoginControll::class, 'user']);
//registeruser
Route::get("user/register", [AuthControll::class, 'register']);
Route::post("user/register", [AuthControll::class, 'proses_register']);
Route::get('/hapusUser/{id}', [AuthControll::class, 'hapus']);
Route::get('/updateUser/{id}', [AuthControll::class, 'update']);
Route::post('/updateUser/{id}', [AuthControll::class, 'proses_update']);

//logout
Route::get("/logout", [LogoutControll::class, 'logout']);
Route::get("petugas/logout", [LogoutControll::class, 'logout']);