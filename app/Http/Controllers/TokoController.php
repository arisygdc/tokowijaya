<?php

namespace App\Http\Controllers;

use App\Models\Barang;
use Illuminate\Http\Request;
use Illuminate\View\View;

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
}
