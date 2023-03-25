<?php

namespace App\Http\Controllers;

use App\Models\Barang;
use App\Models\DetTransaksi;
use App\Models\Transaksi;
use Illuminate\Http\Request;
use Illuminate\Support\Carbon;
use Illuminate\View\View;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class TokoController extends Controller
{
    public function index(): View
    {
        return view('toko.index');
    }

    public function category_page(): View
    {
        return view('toko.category');
    }

    public function category_items(Request $request, string $category): View
    {
        $barangByCategory = Barang::where('jenis_barang', $category)->get();
        return view('toko.item')->with(['barangs' => $barangByCategory, 'kategori' => $category]);
    }

    public function keranjang_index(): View {
        return view('toko.checkout');
    }

    public function keranjang(Request $request) {
        if (Auth::user() == null) {
            redirect()->intended('/404');
        }

        $id = Auth::user()->id;
        $ker = Transaksi::where('kode_pengguna', $id)
                ->where('status', 0)->first();

        if ($ker->count() < 1) {
            $ker = new Transaksi;
            $ker->kode_pengguna = $id;
            $ker->status = 0;
            $ker->tanggal = now();
            $ker->save();
        }

        DB::beginTransaction();
        $deTr = new DetTransaksi;
        $deTr->kode_transaksi = $ker->id;
        $deTr->kode_barang = $request->barang;
        $deTr->jumlah = $request->quantity;
        $deTr->save();
        if (!$deTr->save()) {
            DB::rollBack();
        }

        if (!Barang::where('id', $request->barang)->decrement('stock', $request->quantity)) {
            DB::rollBack();
        }

        DB::commit();
        return back()->with(['msg' => 'ok']);
    }
}
