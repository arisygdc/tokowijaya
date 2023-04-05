<?php

namespace App\Http\Controllers;

use App\Models\Barang;
use App\Models\DetTransaksi;
use App\Models\Pengguna;
use App\Models\Transaksi;
use Illuminate\Http\Request;
use Illuminate\View\View;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class TokoController extends Controller
{
    private function isLevelPengguna()
    {

        if(is_null(Auth::user())) {
            return false;
        }

        if(Auth::user()->level == 'Pengguna') {
            return true;
        }

        return false;
    }
    public function index(): View
    {
        if (!$this->isLevelPengguna()) {
            $b = Barang::limit(2)->get();
            return view('toko.index', ['b' => $b]);
        }

        $pengguna = Pengguna::select(DB::raw('YEAR(now()) - YEAR(tgl_lahir) as old'), 'pekerjaan')->where('kode_pengguna', Auth::user()->id)->first();

        $b = $this->getRecomendation($pengguna->pekerjaan, $pengguna->old);
        return view('toko.index', ['b' => $b]);
    }

    private function getRecomendation(string $pekerjaan, string $usia): array
    {
        $b = DB::table('barang')
        ->where('id' , '=', DB::raw("(select kode_barang from recomendation where pekerjaan = '$pekerjaan')"))
        ->orWhere('id', '=', DB::raw("(select kode_barang from recomendation where usia = $usia)"))
        ->get();
        return [$b[0], $b[1]];
    }

    public function category_page(): View
    {
        if (!$this->isLevelPengguna()) {
            $b = Barang::limit(2)->get();
            return view('toko.category', ['b' => $b]);
        }

        $pengguna = Pengguna::select(DB::raw('YEAR(now()) - YEAR(tgl_lahir) as old'), 'pekerjaan')->where('kode_pengguna', Auth::user()->id)->first();
        $b = $this->getRecomendation($pengguna->pekerjaan, $pengguna->old);
        return view('toko.category', ['b' => $b]);
    }

    public function category_items(Request $request, string $category): View
    {
        $barangByCategory = Barang::where('jenis_barang', $category)->get();
        return view('toko.item')->with(['barangs' => $barangByCategory, 'kategori' => $category]);
    }

    public function keranjang_index(): View {
        if (!$this->isLevelPengguna()) {
            abort(403);
        }

        $id = Auth::user()->id;
        $transaksi = Transaksi::where('kode_pengguna', $id)
                ->where('status', 0)->first();
        if (is_null($transaksi)) {
            return view('toko.checkout')->with(['keranjang'=> [],'count' => 0]);
        }

        $keranjang = DB::table('detail_transaksi')
                    ->select('detail_transaksi.jumlah as jumlah', 'barang.nama_barang as nama_barang', 'barang.harga as harga')
                    ->leftJoin('barang', 'detail_transaksi.kode_barang', '=', 'barang.id')
                    ->where('kode_transaksi', $transaksi->id)
                    ->get();
        return view('toko.checkout')->with(['keranjang' => $keranjang, 'count' => $keranjang->count()]);
    }

    public function keranjang(Request $request) {
        if (!$this->isLevelPengguna()) {
            abort(403);
        }

        $id = Auth::user()->id;
        $ker = Transaksi::where('kode_pengguna', $id)
                ->where('status', 0)->first();

        if (is_null($ker)) {
            $ker = new Transaksi;
            $ker->kode_pengguna = $id;
            $ker->status = 0;
            $ker->tanggal = now();
            $ker->save();
        }

        $deTr = new DetTransaksi;
        $deTr->kode_transaksi = $ker->id;
        $deTr->kode_barang = $request->barang;
        $deTr->jumlah = $request->quantity;
        $deTr->save();
        return back()->with(['msg' => 'ok']);
    }

    public function checkout(Request $request) {
        if (!$this->isLevelPengguna()) {
            abort(403);
        }

        if (strlen($request->alamat) < 10) {
            return back()->withErrors(['err' => 'silahkan mengisi alamat dengan benar']);
        }

        $id = Auth::user()->id;
        $ker = Transaksi::where('kode_pengguna', $id)
                ->where('status', 0)->first();

        if (is_null($ker)) {
            return back()->withErrors(['err' => 'tidak ada barang yang dipilih']);
        }

        DB::beginTransaction();
        $dts = DetTransaksi::where('kode_transaksi', $ker->id)->get();
        if (is_null($dts)) {
            DB::rollBack();
        }

        foreach ($dts as $dt) {
            if (!Barang::where('id', $dt->kode_barang)->decrement('stock', $dt->jumlah)) {
                DB::rollBack();
            }
        }

        $ker->status = 1;
        $ker->alamat = $request->alamat;
        $ker->tanggal = now();
        if (!$ker->save()) {
            DB::rollBack();
        }

        DB::commit();
        return redirect()->intended('/keranjang');
    }
}
