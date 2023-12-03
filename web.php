<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthControll;
use App\Http\Controllers\HomeControll;
use App\Http\Controllers\LoginControll;
use App\Http\Controllers\LogoutControll;
use App\Http\Controllers\pelangganControll;

//login
Route::get("/login", [LoginControll::class, 'login'])->name("login");
Route::post("/login", [LoginControll::class, 'proseslogin']);

//register
Route::get("/register", [AuthControll::class, 'register']);
Route::post("/register", [AuthControll::class, 'proses_register']);

//produk
Route::get('/home', [HomeControll::class, 'index']);
Route::get('/produk', [HomeControll::class, 'produk']);
//tambahproduk
Route::post('/tambah_produk', [HomeControll::class, 'proses_tambah_produk']);
Route::get('/tambah_produk', [HomeControll::class, 'tampil_produk']);

//hapus
Route::get('/hapusProduk/{id}', [HomeControll::class, 'hapus']);
//detail
Route::get('/detailProduk/{id}', [HomeControll::class, 'detail_produk']);
//update
Route::post('/update/{id}', [HomeControll::class, 'proses_update_produk']);
Route::get('/update/{id}', [HomeControll::class, 'update_produk']);

//pelanggan
Route::get('/pelanggan', [pelangganControll::class, 'pelanggan']);
Route::get('/tambah-pelanggan', [pelangganControll::class, 'proses_tambahpel']);
Route::post('/tambah-pelanggan', [pelangganControll::class, 'tambahpel']);
