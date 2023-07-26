<?php

namespace App\Http\Controllers;

use Illuminate\Routing\Controller as BaseController;
use Illuminate\Http\Request;

class LokasiController extends BaseController
{
    public function index()
    {
        return view('pages.lokasi.index', [
            "title" => "Lokasi"
        ]);
    }
}
