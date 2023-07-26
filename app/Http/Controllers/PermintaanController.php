<?php

namespace App\Http\Controllers;

use Illuminate\Routing\Controller as BaseController;
use Illuminate\Http\Request;

class PermintaanController extends BaseController
{
    public function index()
    {
        return view('pages.permintaan-alat.index', [
            "title" => "Permintaan"
        ]);
    }
}
