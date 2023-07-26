<?php

namespace App\Http\Controllers;

use Illuminate\Routing\Controller as BaseController;
use Illuminate\Http\Request;

class MonitoringController extends BaseController
{
    public function index()
    {
        return view('pages.monitoring.index', [
            "title" => "Monitoring"
        ]);
    }
}
