<?php

namespace App\Http\Controllers;

use App\Models\SectionOne;
use App\Models\Sectiontwo;
use App\Models\SectionThree;
use Illuminate\Http\Request;

class MainController extends Controller
{
    public function index()
    {

        $sectionOne = SectionOne::latest()->first();
        $sectionTwo = Sectiontwo::first();
        $sectionThree = SectionThree::first();

        return view(
            'layouts.main',
            compact(
                'sectionOne',
                'sectionTwo'
            )
        );
    }
}
