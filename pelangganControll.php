<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\pelanggan;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Produk;
use App\Models\User;

class pelangganControll extends Controller
{
    function pelanggan()
    {

        $data = "Data Pelanggan";
        $pelanggan = DB::table('pelanggan')->get();
 
        // $produk = Produk::where('nik', Auth::user()->nik)->get();

        return view('pelanggan', ['TextIsi' => $data, 'pelanggan' => $pelanggan]);  
    }

    function hapus($id)
    {
        $deleted=DB::table('pelanggan')->where('PelangganID', $id)->delete();
        if($deleted){
            return redirect()->back();
        }
    }

    function update($id)
    {
        $pelanggan = DB::table('pelanggan')->where('pelangganID' , $id)->first();
        return view('updatepelanggan' , ['pelanggan' => $pelanggan]);
    }

    function proses_update_pelanggan(Request $request, $id)
    {
        $isi_pelanggan = $request->isi_pelanggan;

        return $isi_pelanggan;

        // DB::table('pelanggan')
        // ->where('pelangganID', $id)
        // ->update(['isi_pelanggan' => $isi_pelanggan]);
        
        // return redirect('/pelanggan');
    }

    function tambahpel()
    {

        $isi = "Tambah Pelanggan";

        return view('/tambahpelanggan', ['isi' => $isi]);
    }
}