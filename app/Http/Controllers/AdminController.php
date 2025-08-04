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
    public function font()
    {
        return view('pages.dashboardPages.icons.font-awesome');
    }
    public function button()
    {
        return view('pages.dashboardPages.ui-features.buttons');
    }
    public function dropdown()
    {
        return view('pages.dashboardPages.ui-features.dropdowns');
    }
    public function typography()
    {
        return view('pages.dashboardPages.ui-features.typography');
    }
    public function table()
    {
        return view('pages.dashboardPages.tables.basic-table');
    } 
    public function blank() {
        return view('pages.dashboardPages.samples.blank-page');
    }
    public function error_404() {
        return view('pages.dashboardPages.samples.error-404');
    }
    public function error_500() {
        return view('pages.dashboardPages.samples.error-500');
    }
    public function loginPage() {
        return view('pages.dashboardPages.samples.login');
    }
    public function registerPage() {
        return view('pages.dashboardPages.samples.register');
    }
    public function indexPage() {
        return view('pages.dashboardPages.samples.indexPage');
    }
    public function documentation() {
        return view('docs.documentation');
    }
}
