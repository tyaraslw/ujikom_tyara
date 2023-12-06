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

    function proses_register(Request $request)
    {
         // var_dump($request->all());

        $data = DB::table("user")->insert([
            'id_user' => $request->id_user,
            'nama' => $request->nama,
            'username' => $request->username,
            'password' => Hash::make($request->password),
            'level' => "",
        ]);
        return redirect('/user');
    }
    function hapus($id)
    {
        $deleted=DB::table('user')->where('id_user', $id)->delete();
        if($deleted){
            return redirect()->back();
        }
    }
    function update($id)
    {
        $user = DB::table('user')->where('id_user' , $id)->first();

        // return $produk;
        return view('updateuser' , ['user' => $user]);
    }
    function proses_update(Request $request, $id)
    {
        $isinama = $request->isinama;
        $isiuser = $request->isiuser;
        $isipass = $request->isipass;  
        $level = $request->level;   

        // return [$isinama, $isiuser, $isipass];

        DB::table('user')
        ->where('id_user', $id)
        ->update([
            'Nama' => $isinama, 
            'Username' => $isiuser, 
            'Password' => Hash::make($request->password),
            'level' => ""
        ]);
        
        return redirect('/user');
    }

}