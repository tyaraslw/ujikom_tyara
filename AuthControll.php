<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Masyarakat;
use App\Models\Pengaduan;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class AuthControll extends Controller
{
    function register(){
        return view('/register');
    }

    function proses_register(Request $request){
        // var_dump($request->all());

        $data = DB::table("user")->insert([
            'id_user' => $request->id,
            'nama' => $request->nama,
            'username' => $request->username,
            'password' => Hash::make($request->password),
            'level' => "admin",
        ]);
        return redirect('/login');
    }

}
