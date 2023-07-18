<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Http\Request;

class DashboardController extends BaseController
{
    use AuthorizesRequests, ValidatesRequests;
    public function index(Request $request)
    {
        return view('pages.dashboard');
    }
}
