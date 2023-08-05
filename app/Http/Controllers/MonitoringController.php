<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Routing\Controller;

class MonitoringController extends Controller
{
    public function index()
    {
        $data = DB::table('monitoring')
            ->join('tools', 'monitoring.id', '=', 'tools.id')
            ->get();

        return view('pages.monitoring.index', [
            'title' => 'Monitoring'
        ])->with('data', $data);
    }
}
