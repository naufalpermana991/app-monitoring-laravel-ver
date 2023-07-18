<?php

namespace App\Http\Controllers;

use Illuminate\Routing\Controller as BaseController;
use Illuminate\Http\Request;

class LokasiController extends BaseController
{
    public function lokasi(Request $request)
    {
        return view('pages.lokasi.index');
    }
}
