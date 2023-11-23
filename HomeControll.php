<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeControll extends Controller
{
    public function index()
    {
        $judul = "Welcomeeeee";
        // $kasir = DB::table('')->get();
        return view('home', ['TextJudul' => $judul]);
    }
}
