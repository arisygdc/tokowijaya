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
}
