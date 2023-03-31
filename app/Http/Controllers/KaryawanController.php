<?php

namespace App\Http\Controllers;

use App\Models\Barang;
use App\Models\DetTransaksi;
use App\Models\Karyawan;
use App\Models\Pengguna;
use App\Models\Transaksi;
use App\Models\User;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\View\View;

class KaryawanController extends Controller
{
    public function index(): View
    {
        $karyawan = DB::table('karyawan')->leftJoin('users', 'karyawan.user_id', '=', 'users.id')->get();
        return view('dasboard.karyawan')->with('karyawan', $karyawan);
    }

    public function barang(): View
    {
        $barang = Barang::all();
        return view('dasboard.barang')->with('barang',  $barang);
    }

    public function pelanggan(): View
    {
        $pelanggan = DB::table('pengguna')->leftJoin('users', 'pengguna.kode_pengguna', '=', 'users.id')->get();
        return view('dasboard.pelanggan')->with('pelanggan',  $pelanggan);
    }

    public function transaksi_index(Request $request): View
    {;
        if (!is_null($request->get('id'))) {
            $dt = DetTransaksi::select('barang.nama_barang as barang', 'detail_transaksi.jumlah')
            ->leftJoin('barang', 'detail_transaksi.kode_barang', '=', 'barang.id')
            ->where('kode_transaksi', $request->get('id'))
            ->get();
            return view('dasboard.detail_transaksi')->with(['transaksi_id' => $request->get('id'), 'detail_transaksi' => $dt]);
        }

        $transaksi = Transaksi::select('transaksi.id', 'users.name', 'transaksi.tanggal')
        ->where('status', 1)
        ->leftJoin('users', 'transaksi.kode_pengguna', '=', 'users.id')
        ->get();

        return view('dasboard.transaksi')->with('transaksi',  $transaksi);
    }

    public function insert_barang_index(): View {
        return view('dasboard.input_barang');
    }

    public function kirim_barang(Request $request) {
        if (is_null($request->get('id'))) {
            abort(404);
        }

        $id = $request->get('id');
        $tt = Transaksi::find($id);
        $tt->status = 2;
        $tt->save();
        return redirect()->intended('/karyawan/transaksi');
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

    public function insert_karyawan_index(): View {
        return view('dasboard.input_karyawan');
    }

    public function insertPelanggan_index(): View {
        return view('dasboard.input_pelanggan');
    }

    public function insert_karyawan(Request $request) {
        DB::beginTransaction();
        $users_param = new User;
        $users_param->nik = $request->nik;
        $users_param->name = $request->nama;
        $users_param->level = "Karyawan";
        $users_param->alamat = $request->alamat;
        $users_param->jk = $request->jk;
        $users_param->telephone = $request->telephone;
        $users_param->password = bcrypt($request->password);

        $kar_param = new Karyawan;
        $kar_param->kode_karyawan = $request->kode_karyawan;

        if (!$users_param->save()) {
            DB::rollBack();
            return back()->withErrors(['msg' => 'sepertinya terjadi masalah']);
        }

        $id = $users_param->id;
        $kar_param->user_id = $id;

        if (!$kar_param->save()) {
            DB::rollBack();
            return back()->withErrors(['msg' => 'sepertinya terjadi masalah']);
        }

        DB::commit();
        return redirect()->intended('/karyawan/insert');
    }

    public function insertPelanggan(Request $request) {
        DB::beginTransaction();
        $users_param = new User;
        $users_param->nik = $request->nik;
        $users_param->name = $request->nama;
        $users_param->level = "Pengguna";
        $users_param->alamat = $request->alamat;
        $users_param->jk = $request->jk;
        $users_param->telephone = $request->telephone;
        $users_param->password = bcrypt($request->password);

        
        if (!$users_param->save()) {
            DB::rollBack();
            return back()->withErrors(['msg' => 'sepertinya terjadi masalah']);
        }
        
        $peng_param = new Pengguna();
        $peng_param->kode_pengguna = $users_param->id;
        $peng_param->tgl_lahir = $request->tgl_lahir;
        $peng_param->pekerjaan = $request->pekerjaan;

        if (!$peng_param->save()) {
            DB::rollBack();
            return back()->withErrors(['msg' => 'sepertinya terjadi masalah']);
        }

        DB::commit();
        return redirect()->intended('/karyawan/insert');
    }
}
