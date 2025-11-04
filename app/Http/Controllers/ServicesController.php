<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ServicesController extends Controller
{
    public function staffAugmentation(){
       return view('pages.staffAugmentationServices');
    }

    public function servicesDetails(){
        return view('pages.service-detail');
    }

}
