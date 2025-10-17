<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\SectionOne;
use App\Models\Sectiontwo;
use App\Models\SectionThree;
use App\Models\SectionFour;
use App\Models\SectionFive;
use App\Models\SectionSix;
use App\Models\SectionSeven;
use App\Models\SectionEight;

class MainController extends Controller
{
    public function index()
    {
        return view('index');
    }
}
