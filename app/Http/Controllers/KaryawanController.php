<?php

namespace App\Http\Controllers;

use App\Models\Barang;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use Illuminate\View\View;
use Illuminate\Support\Facades\Auth;

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
}
