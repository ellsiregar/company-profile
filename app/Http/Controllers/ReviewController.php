<?php

namespace App\Http\Controllers;

use App\Models\Review;
use Illuminate\Http\Request;

class ReviewController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function review(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'email' => 'required',
            'rating' => 'required',
            'pesan' => 'required'
        ]);

        review::create([
            'name' => $request->name,
            'email' => $request->email,
            'rating' => $request->rating,
            'pesan' => $request->pesan,
        ]);
        return redirect()->route('home')->with('success', 'review berhasil ditambahkan!');

    }

    /**
     * Show the form for creating a new resource.
     */
    public function reviews()
    {
        $reviews = Review::all();
        return view('Admin.reviews', compact('reviews'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(Review $review)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Review $review)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Review $review)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function delete(Review $reviews, $id)
    {

        $reviews = Review::findOrFail($id);
        $reviews->delete();

        return redirect()->route('admin.reviews')->with('success', 'Reviews berhasil dihapus!');

    }
}
