<?php

namespace App\Http\Controllers;

use App\Models\detailservis;
use Illuminate\Http\Request;

class DetailservisController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function detailservis()
    {
        $detailservis = detailservis::all();
        return view('Admin.detail_servis', compact('detailservis'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('Admin.detail_servis');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'deskripsi'=> 'required',

        ]);

        detailservis::create([
            'deskripsi'=> $request->deskripsi,
        ]);

        return redirect()->route('admin.detail-servis')->with('success','Data detail servis Berhasil di Tambah');
    }

    /**
     * Display the specified resource.
     */
    public function show(detailservis $detailservis)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(detailservis $detailservis, $id)
    {
        $detailservis = detailservis::find($id);
        if(!$detailservis) {
            return back();
        }
        return view('Admin.detail_servis.edit', compact('detailservis'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, detailservis $detailservis, $id)
    {

        $detailservis = detailservis::find($id);

        $request->validate([
            'deskripsi' => 'required',
        ]);
        $detailservis->update([
            'deskripsi' => $request->deskripsi,
        ]);

        return redirect()->route('admin.detail-servis')->with('success', "Data kategori Berhasil di Edit");
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(detailservis $detailservis)
    {
        //
    }
}
