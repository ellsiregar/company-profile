<?php

namespace App\Http\Controllers;

use App\Models\Contact; // Pastikan model Contact ada
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class ContactController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function contact()
    {
        $contacts = Contact::all();
        return view('admin.contact', compact('contacts'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $contact = Contact::first();
        if ($contact) {
            return redirect()->back();
        } else {
            return view('admin.tambah_contact');
        }
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'no_tlpn' => 'required',
            'email' => 'required|email',
            'lokasi' => 'required',
        ]);

        Contact::create([
            'no_tlpn' => $request->no_tlpn,
            'email' => $request->email,
            'lokasi' => $request->lokasi,
        ]);

        return redirect()->route('admin.contact')->with('success', 'Data Contact Berhasil Ditambahkan.');
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $contact = Contact::findOrFail($id);
        return view('admin.edit_contact', compact('contact'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        $request->validate([
            'no_tlpn' => 'required',
            'email' => 'required|email',
            'lokasi' => 'required',
        ]);

        $contact = Contact::findOrFail($id);

        $contact->update([
            'no_tlpn' => $request->no_tlpn,
            'email' => $request->email,
            'lokasi' => $request->lokasi,
        ]);

        return redirect()->route('admin.contact')->with('success', 'Data Contact Berhasil Diperbarui.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function delete(contact $contact, $id)
    {

        $contact = contact::findOrFail($id);

        // Hapus file foto
        if ($contact->foto && Storage::exists('public/' . $contact->foto)) {
            Storage::delete('public/' . $contact->foto);
        }

        $contact->delete();

        return redirect()->route('admin.contact')->with('Success', 'contact berhasil dihapus!');
    }
}
