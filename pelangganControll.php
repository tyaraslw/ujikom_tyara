<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Auth;
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

    function tambahpel()
    {

        $isi = "Tambah Pelanggan";

        return view('tambahpelanggan', ['isi' => $isi]);
    }

    function proses_tambahpel(Request $request)
    {

        // return Auth::user();

        // $isi_pengaduan = $_POST['isi_laporan'];
        $isi_pelanggan = $request->isi_laporan;

        // DB::table('produk')->insert([
        //     'ProdukID' =>Auth::user()->ID,
        //     'Nama_Produk' => Auth::user()->nik,
        //     'Harga' => $isi_pelanggan,
        //     'Stok' => '0'
        // ]);
        return redirect('/tambah-pelanggan');
    }
}