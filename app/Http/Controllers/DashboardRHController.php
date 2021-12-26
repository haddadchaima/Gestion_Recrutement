<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DashboardRHController extends Controller
{
    public function index()
    {
        return view('rh.dashboard-rh');
    }
}
