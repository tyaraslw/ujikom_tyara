<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class LoginControll extends Controller
{
    function login(){
        //  return Hash::make("111");
        return view('/login');
    }

    function proseslogin(Request $request){
        $data = $request->only("username", "password");
            if(Auth::attempt($data)){
                return redirect('/home');
            }else{
                return redirect('/login')->with("erorr", "username atau password salah");
            }
    }

    function logout(){
        Auth::logout();

        return redirect('/login');
    }
}