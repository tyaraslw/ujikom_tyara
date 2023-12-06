<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Produk;
use App\Models\User;


class HomeControll extends Controller
{
    public function index()
    {
        $judul = "Welcomeeeee";
        // $kasir = DB::table('')->get();
        return view('home', ['TextJudul' => $judul]);
    }

    function produk()
    {

        $data = "Data Produk";
        $produk = DB::table('produk')->get();
 
        // $produk = Produk::where('nik', Auth::user()->nik)->get();

        return view('produk', ['TextIsi' => $data, 'produk' => $produk]);  
    }

    //tambahproduk
    function tambah_produk()
    {

        $isi = "Tambah Produk";

        return view('tambahproduk', ['isi' => $isi]);
    }
    function proses_tambah_produk(Request $request)
    {
        $tambah_produk = $request->isinama;
        $tambah_harga = $request->isiharga;
        $tambah_stok = $request->isistok;
        
        // return ([$tambah_produk, $tambah_harga, $tambah_stok]);

        DB::table('produk')->insert([
            'ProdukID' => '0',
            'NamaProduk' => $tambah_produk,
            'Harga' => $tambah_harga,
            'Stok' => $tambah_stok
        ]);
        return redirect('/produk');
    }

    //updateproduk
    function update_produk($id)
    {
        $produk = DB::table('produk')->where('ProdukID' , $id)->first();

        // return $produk;
        return view('updateproduk' , ['produk' => $produk]);
    }
    function proses_update_produk(Request $request, $id)
    {
        $isinama = $request->isinama;
        $isiharga = $request->isiharga;
        $isistok = $request->isistok;

        // return [$isinama, $isiharga, $isistok];

        DB::table('produk')
        ->where('ProdukID', $id)
        ->update(['NamaProduk' => $isinama, 'Harga' => $isiharga, 'Stok' => $isistok]);
        
        return redirect('/produk');
    }

    function hapus($id)
    {
        $deleted=DB::table('produk')->where('ProdukID', $id)->delete();
        if($deleted){
            return redirect()->back();
        }
    }

}