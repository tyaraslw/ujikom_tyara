<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Masyarakat;
use App\Models\Pengaduan;

use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;


class LogoutControll extends Controller
{
    function logout(){
        Auth::logout();

        return redirect('/login');
    }
}