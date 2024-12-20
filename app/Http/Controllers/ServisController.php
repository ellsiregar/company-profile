<?php

namespace App\Http\Controllers;

use App\Models\servis;
use Illuminate\Http\Request;

class ServisController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function servis()
    {
        $servis = servis::all();
        return view('Admin.servis', compact('servis'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('Admin.servis_tambah');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'fasilitas'=> 'required',
            'deskripsi' => 'nullable',

        ]);

        servis::create([
            'fasilitas'=> $request->fasilitas,
            'deskripsi' => $request->deskripsi,

        ]);

        return redirect()->route('admin.servis')->with('success','Data servis Berhasil di Tambah');
    }

    /**
     * Display the specified resource.
     */
    public function show(servis $servis)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(servis $servis ,$id)
    {
        $servis = servis::find($id);
        if(!$servis) {
            return back();
        }
        return view('Admin.servis_edit', compact('servis'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, servis $servis, $id)
    {
        $servis = servis::find($id);

        $request->validate([
            'fasilitas' => 'required',
            'deskripsi' => 'nullable',
        ]);
        $servis->update([
            'fasilitas' => $request->fasilitas,
            'deskripsi' => $request->deskripsi,

        ]);

        return redirect()->route('admin.servis')->with('success', "Data Servis Berhasil di Edit");
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(servis $servis, $id)
    {
        $servis = servis::findOrFail($id);
        $servis->delete();

        return redirect()->route('admin.servis')->with('success', 'servis berhasil dihapus!');
    }
}
