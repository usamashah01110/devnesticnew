<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PortfolioController extends Controller
{
    public function viewDeveloperPorfolio()
    {
        return view('pages.developer_portfolio');
    }
}
