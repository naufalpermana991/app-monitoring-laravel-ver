<?php

namespace App\Http\Controllers;

use Illuminate\Routing\Controller as BaseController;

use Illuminate\Http\Request;

class LapKalibrasiController extends BaseController
{
    public function lap_kalibrasi(Request $request)
    {
        return view('pages.laporan-kalibrasi.index');
    }
}
