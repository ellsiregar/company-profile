<?php

namespace App\Http\Controllers;

use App\Models\contact;
use App\Models\menu;
use App\Models\team;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function home()
    {
        $contact = contact::first();
        $teams = team::all();
        $menus = menu::all();
        return view('user.home', compact('contact', 'teams','menus'));
    }
}
