<?php

namespace App\Http\Controllers;

use App\Models\SectionOne;
use App\Models\Sectiontwo;
use App\Models\SectionThree;
use App\Models\SectionFour;
use Illuminate\Http\Request;

class MainController extends Controller
{
    public function index()
    {

        $sectionOne = SectionOne::latest()->first();
        $sectionTwo = Sectiontwo::latest()->first();
        $sectionThree = SectionThree::all();
        $sectionFour = SectionFour::all();

        return view(
            'layouts.main',
            compact(
                'sectionOne',
                'sectionTwo',
                'sectionThree',
                'sectionFour'
            )
        );
    }
}
