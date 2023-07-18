<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Routing\Controller as BaseController;

class PermintaanController extends BaseController
{
    public function permintaan(Request $request)
    {
        return view('pages.permintaan-alat.index');
    }
}
