<?php

namespace App\Http\Controllers;

use App\Models\about;
use App\Models\company;
use App\Models\contact;
use App\Models\kategori;
use App\Models\portfolio;
use App\Models\Review;
use App\Models\servis;
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
        $company = company::first();
        $servis = servis::all();
        $services = servis::all();
        $kategoris = kategori::all();
        $review = Review::all();

        $lokasi = $contact->lokasi; // Ambil nama lokasi dari field 'lokasi'
        return view('user.home', compact('contact', 'teams','portfolios','about','company', 'servis', 'kategoris', 'lokasi', 'services','review'));
    }

    public function detailServis($id)
    {
        $servis = servis::find($id);
        $contact = contact::first();
        $services = servis::all();
        $about = about::first();
        return view('user.detail_servis', compact('servis','contact','services','about'));
    }

    public function detailportfolio($id)
    {
        $portfolio = portfolio::find($id);
        $contact = contact::first();
        $services = servis::all();
        $about = about::first();
        $portfolios = portfolio::all();
        $kategoris = kategori::all();
        return view('user.detail_portfolio', compact('portfolio','contact','services','about','portfolios','kategoris'));
    }
}
