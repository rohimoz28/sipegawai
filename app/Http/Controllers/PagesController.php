<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    // Halaman Utama
    public function home()
    {
        return view('index');
    }
}
