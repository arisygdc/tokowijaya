<?php

namespace App\Http\Controllers;

use App\Models\Barang;
use App\Models\Transaksi;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use Illuminate\View\View;
// use Illuminate\Support\Facades\Auth;

class KaryawanController extends Controller
{
    public function index(Request $request): View
    {
        $karyawan = DB::table('karyawan')->leftJoin('users', 'karyawan.user_id', '=', 'users.id')->get();
        return view('dasboard.karyawan')->with('karyawan', $karyawan);
    }

    public function barang(Request $request): View
    {
        $barang = Barang::all();
        return view('dasboard.barang')->with('barang',  $barang);
    }

    public function pelanggan(Request $request): View
    {
        $pelanggan = DB::table('pengguna')->leftJoin('users', 'pengguna.kode_pengguna', '=', 'users.id')->get();
        return view('dasboard.pelanggan')->with('pelanggan',  $pelanggan);
    }

    public function transaksi(Request $request): View
    {
        $transaksi = Transaksi::all();
        return view('dasboard.transaksi')->with('transaksi',  $transaksi);
    }

    public function insert_barang_index(): View {
        return view('dasboard.input_barang');
    }

    public function insert_barang(Request $request) {
        $barang_param = new Barang;
        $barang_param->nama_barang = $request->nama_produk;
        $barang_param->stock = $request->jumlah;
        $barang_param->jenis_barang = $request->jenis;
        $barang_param->harga = $request->harga;
        if (!$barang_param->save()) {
            return back()->withErrors(['msg' => 'sepertinya terjadi masalah']);
        }
        return redirect()->intended('/karyawan/barang/insert');
    }
}
