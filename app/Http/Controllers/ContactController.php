<?php

namespace App\Http\Controllers;

use App\Models\contact;
use Illuminate\Http\Request;

class ContactController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function contact()
    {
        $contacts = contact::all();
        return view('admin.contact', compact('contacts'));
    }
    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.tambah_contact', compact('contact'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'no_tlpn' => 'required',
            'email' => 'required',
            'lokasi' => 'required',

        ]);

        contact::create([

            'no_tlpn' => $request->no_tlpn,
            'email' => $request->email,
            'lokasi' => $request->lokasi,
        ]);



        return redirect()->route('admin.contact')->with('success', 'Data Dudi Berhasil di Tambah.');
    }

    /**
     * Display the specified resource.
     */
    public function show(contact $contact)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(contact $contact)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, contact $contact)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(contact $contact)
    {
        //
    }
}
