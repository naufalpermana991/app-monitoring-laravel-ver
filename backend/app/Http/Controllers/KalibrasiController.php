<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Routing\Controller as BaseController;

class KalibrasiController extends BaseController
{
    public function datakalibrasi(Request $request)
    {
        return view('pages.data-kalibrasi.index');
    }

    public function tambah(Request $request)
    {
        return view('pages.data-kalibrasi.tambah');
    }
}
