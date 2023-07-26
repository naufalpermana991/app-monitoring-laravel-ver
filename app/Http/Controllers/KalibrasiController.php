<?php

namespace App\Http\Controllers;

use Illuminate\Routing\Controller as BaseController;

use Illuminate\Http\Request;

class KalibrasiController extends BaseController
{
    public function index()
    {
        return view('pages.data-kalibrasi.index', [
            "title" => "Data Kalibrasi"
        ]);
    }
}
