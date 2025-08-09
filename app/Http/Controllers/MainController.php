<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\SectionOne;
use App\Models\Sectiontwo;
use App\Models\SectionThree;
use App\Models\SectionFour;
use App\Models\SectionFive;
use App\Models\SectionSix;

class MainController extends Controller
{
    public function index()
    {

        $sectionOne = SectionOne::latest()->first();
        $sectionTwo = Sectiontwo::latest()->first();
        $sectionThree = SectionThree::all();
        $sectionFour = SectionFour::all();
        $sectionFive = SectionFive::all();
        $sectionSix = SectionSix::all();

        return view(
            'layouts.main',
            compact(
                'sectionOne',
                'sectionTwo',
                'sectionThree',
                'sectionFour',
                'sectionFive',
                'sectionSix'
            )
        );
    }
}
