<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthControll;
use App\Http\Controllers\HomeControll;
use App\Http\Controllers\LoginControll;
use App\Http\Controllers\LogoutControll;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/login', function () {
    return view('login');
});

// Route::get('/home', function () {
//     return 'Halaman Home';
// });

Route::get('/home', [HomeControll::class, 'index']);