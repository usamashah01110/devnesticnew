<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\DeveloperEducation;

class DeveloperEducationController extends Controller
{
    public function index()
    {
        $developerEducation = DeveloperEducation::all();
        return view('pages.developer_portfolio', compact('developerEducation'));
    }

    public function showDatatoTableInSectionNine() {}
}
