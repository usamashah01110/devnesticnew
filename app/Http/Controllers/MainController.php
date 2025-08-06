<?php

namespace App\Http\Controllers;

use App\Models\SectionOne;
use Illuminate\Http\Request;

class MainController extends Controller
{
    public function index(){
        $sectionOne = SectionOne::where('id',23)->first();

        return view('layouts.main', compact('sectionOne'));
    }
}
