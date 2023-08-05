<?php

namespace App\Http\Controllers;

use App\Models\Calibration;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller as BaseController;
use App\Models\Tool;
use App\Models\ToolRequest;

class DashboardController extends BaseController
{
    public function index()
    {
        $alat = Tool::count();
        $kalibrasi = Calibration::count();
        $permintaan_alat = ToolRequest::count();
        return view(
            'pages.dashboard',
            compact('alat', 'kalibrasi', 'permintaan_alat'),
            [
                "title" => "Beranda"
            ]
        );
    }
}
