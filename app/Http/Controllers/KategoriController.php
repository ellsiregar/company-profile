<?php

namespace App\Http\Controllers;

use App\Models\kategori;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class KategoriController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function kategori()
    {
        $kategoris = kategori::all();
        return view('admin.kategori', compact('kategoris'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.tambah_kategori');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'nama_kategori'=> 'required',

        ]);

        kategori::create([
            'nama'=> $request->nama,
        ]);

        return redirect()->route('admin.kategori')->with('success','Data photo Berhasil di Tambah');
    }

    /**
     * Display the specified resource.
     */
    public function show(kategori $kategori)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(kategori $kategori, $id)
    {
        $kategori = kategori::find($id);
        if(!$kategori) {
            return back();
        }
        return view('Admin.edit_kategori', compact('kategori'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, kategori $kategori, $id)
    {
        $kategori = kategori::find($id);

        $request->validate([
            'nama' => 'required',
        ]);
        $kategori->update([
            'nama' => $request->nama,
        ]);

        return redirect()->route('admin.kategori')->with('success', "Data kategori Berhasil di Edit");

    }


    public function delete(kategori $kategori, $id)
    {

        $kategori = kategori::findOrFail($id);

        // Hapus file foto
        if ($kategori->foto && Storage::exists('public/' . $kategori->foto)) {
            Storage::delete('public/' . $kategori->foto);
        }

        $kategori->delete();

        return redirect()->route('admin.kategori')->with('success', 'kategori berhasil dihapus!');

    }
}
