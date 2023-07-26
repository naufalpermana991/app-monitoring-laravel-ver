<?php

namespace App\Http\Controllers;

use App\Models\Calibration;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller as BaseController;
use App\Models\Tool;

class DashboardController extends BaseController
{
    public function index()
    {
        $alat = Tool::count();
        $kalibrasi = Calibration::count();
        return view(
            'pages.dashboard',
            compact('alat', 'kalibrasi'),
            [
                "title" => "Beranda"
            ]
        );
    }
}
