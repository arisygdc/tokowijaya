<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\View\View;

class TokoController extends Controller
{
    public function index(): View
    {
        return view('toko.index');
    }

    public function category(): View
    {
        return view('toko.category');
    }

    public function items(): View
    {
        return view('toko.item');
    }

    public function keranjang_index(): View {
        return view('toko.checkout');
    }
}
