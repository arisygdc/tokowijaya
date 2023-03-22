<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\View\View;
use Illuminate\Support\Facades\Auth;

class PenggunaController extends Controller
{
    public function index()
    {
        return view('toko.index');
    }
}
