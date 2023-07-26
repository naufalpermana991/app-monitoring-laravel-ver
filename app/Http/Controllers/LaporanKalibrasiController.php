<?php

namespace App\Http\Controllers;

use Illuminate\Routing\Controller as BaseController;
use Illuminate\Http\Request;

class LaporanKalibrasiController extends BaseController
{
    public function index()
    {
        return view('pages.laporan-kalibrasi.index', [
            "title" => "Laporan Kalibrasi"
        ]);
    }
}
