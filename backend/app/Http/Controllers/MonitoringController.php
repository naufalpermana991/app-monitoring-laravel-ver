<?php

namespace App\Http\Controllers;

use Illuminate\Routing\Controller as BaseController;
use Illuminate\Http\Request;

class MonitoringController extends BaseController
{
    public function monitoring(Request $request)
    {
        return view('pages.monitoring.index');
    }
}
