<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function login()
    {
        return view('admin.login');
    }

    public function dashboard()
    {
        return view('admin.dashboard');
    }

    public function charts()
    {
        return view('pages.dashboardPages.charts.chartjs');
    }
    public function forms()
    {
        return view('pages.dashboardPages.forms/basic_elements');
    }
}
