<?php

namespace App\Http\Controllers;

use App\Models\about;
use App\Models\company;
use App\Models\contact;
use App\Models\portfolio;
use App\Models\team;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function home()
    {
        $contact = contact::first();
        $teams = team::all();
        $portfolios = portfolio::all();
        $about = about::first();
        $companys = company::all();
        return view('user.home', compact('contact', 'teams','portfolios','about','companys'));
    }
}
