<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LandingPageController extends Controller
{
    public function index()
    {
        return view('index');
    }

    public function staffAugmentation()
    {
        return view('pages.staffAugmentationServices');
    }

    public function aboutUs()
    {
        return view('pages.aboutUs');
    }

    public function blog(){
        return view('pages.blog');
    }

    public function contact(){
        return view('pages.contact');
    }
}
