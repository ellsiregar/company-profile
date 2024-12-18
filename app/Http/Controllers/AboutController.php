<?php

namespace App\Http\Controllers;

use App\Models\about;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class AboutController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function about()
    {
        $abouts = about::all();
        return view('admin.about', compact('abouts'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.tambah_about');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'judul'=>'required',
            'deskripsi'=> 'required',
            'foto'=> 'required|image|mimes:jpeg,jpg,png,gif|max:2048',

        ]);

        $foto = null;

        if($request->hasFile('foto')){
            $uniqueField = uniqid() . '_' . $request->file('foto')->getClientOriginalName();

            $request->file('foto')->storeAs('foto_about', $uniqueField, 'public');

            $foto = 'foto_about/' . $uniqueField;
        }

        about::create([
            'judul'=> $request->judul,
            'deskripsi'=> $request->deskripsi,
            'foto' => $foto,
        ]);

        return redirect()->route('admin.about')->with('success','Data photo Berhasil di Tambah');
    }

    /**
     * Display the specified resource.
     */
    public function show(about $about)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(about $about, $id)
    {
        $about = about::find($id);
        if(!$about) {
            return back();
        }
        return view('Admin.edit_about', compact('about'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, about $about, $id)
    {
        $about = about::find($id);

        $request->validate([
            'judul' => 'required',
            'deskripsi' => 'required',
            'foto' => 'nullable|image|mimes:jpeg,jpg,png,gif|max:2048',
        ]);
        $foto = $about->foto;

        if ($request->hasFile('foto')) {
            if ($foto) {
                Storage::disk('public')->delete($foto);
            }
            $uniqueField = uniqid() . '_' . $request->file('foto')->getClientOriginalName();

            $request->file('foto')->storeAs('foto_about', $uniqueField, 'public');
            $foto = 'foto_about/'. $uniqueField;
        }
        $about->update([
            'judul' => $request->judul,
            'deskripsi' => $request->deskripsi,
            'foto' => $foto,
        ]);

        return redirect()->route('admin.about')->with('success', "Data about Berhasil di Edit");

    }


    public function delete(about $about, $id)
    {

        $about = about::findOrFail($id);

        // Hapus file foto
        if ($about->foto && Storage::exists('public/' . $about->foto)) {
            Storage::delete('public/' . $about->foto);
        }

        $about->delete();

        return redirect()->route('admin.about')->with('success', 'about berhasil dihapus!');

    }
}
