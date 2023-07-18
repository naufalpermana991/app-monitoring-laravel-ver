<?php

namespace App\Http\Controllers;

use Illuminate\Routing\Controller as BaseController;

use Illuminate\Http\Request;

class AlatController extends BaseController
{
    public function index(Request $request)
    {
        return view('pages.daftar-alat.index');
    }
}
