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

    function tampil_produk()
    {

        $isi = "Tambah Produk";

        return view('tambahproduk', ['isi' => $isi]);
    }

    function proses_tambah_produk(Request $request)
    {

        // return Auth::user();

        // $isi_pengaduan = $_POST['isi_laporan'];
        $isi_produk = $request->isi_laporan;

        DB::table('produk')->insert([
            'ProdukID' =>Auth::user()->ID,
            'Nama_Produk' => Auth::user()->nik,
            'Harga' => $isi_produk,
            'Stok' => '0'
        ]);
        return redirect('/produk');
    }

    function hapus($id)
    {
        $deleted=DB::table('produk')->where('ProdukID', $id)->delete();
        if($deleted){
            return redirect()->back();
        }
    }

    function detail_pengaduan($id)
    {
        $data = DB::table('kasir')
            ->where('ProdukID', '=', $id)
            ->first();

        $produk = DB::where('ProdukID', $id)->first();
        // $tanggapan = Tanggapan::where('id_pengaduan', $id)->get();
        // $tanggapan = DB::table('tanggapan')
        //     ->join('petugas', 'petugas.id', '=', 'tanggapan.id_petugas')
        //     ->where('tanggapan.id_pengaduan', $id)
        //     ->get();
        // return $tanggapan;
        
        return view("detailP", ["data" => $produk]);
    }
}