<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\DeveloperEducation;
use App\Models\DeveloperContact;
use App\Models\DeveloperExperiance;

class PortfolioController extends Controller
{
    public function viewDeveloperPorfolio()
    {
        $developerEducation = DeveloperEducation::all();
        $developerContact = DeveloperContact::latest()->first();
        $developerExperiance = DeveloperExperiance::all();

        

        return view(
            'pages.developer_portfolio',
            compact(
                'developerEducation',
                'developerContact',
                'developerExperiance'
            )
        );
    }
}
