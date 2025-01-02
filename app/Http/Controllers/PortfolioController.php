<?php

namespace App\Http\Controllers;

use App\Models\kategori;
use App\Models\portfolio;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class PortfolioController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function portfolio()
    {
        $portfolios =portfolio::all();
        return view('Admin.portfolio', compact('portfolios'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $kategoris = kategori::all();
        return view('Admin.portfolio_tambah', compact('kategoris'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'id_kategori' => 'required',
            'nama_portfolio' => 'required',
            'foto' => 'nullable|image|mimes:jpeg,jpg,png,gif|max:2048',
            'deskripsi' => 'nullable',
        ]);

        $foto = null;

        if ($request->hasFile('foto')) {
            $uniqueField = uniqid() . '-' . $request->file('foto')->getClientOriginalName();

            $request->file('foto')->storeAs('foto_portfolio', $uniqueField, 'public');

            $foto = 'foto_portfolio/' . $uniqueField;
        }

        portfolio::create([
            'id_kategori' => $request->id_kategori,
            'nama_portfolio' => $request->nama_portfolio,
            'deskripsi' => $request->deskripsi,
            'foto' => $foto,
        ]);
        return redirect()->route('admin.portfolio')->with('success', 'portfolio berhasil ditambahkan!');
    }

    /**
     * Display the specified resource.
     */
    public function show(portfolio $portfolio)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(portfolio $portfolio, $id)
    {
        $portfolio = portfolio::find($id);
        $kategoris = kategori::all();
        if(!$portfolio) {
            return back();
        }
        return view('Admin.portfolio_edit', compact('portfolio', 'kategoris'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, portfolio $portfolio, $id)
    {
        $portfolio = portfolio::find($id);

        $request->validate([
            'id_kategori' => 'required',
            'nama_portfolio' => 'required',
            'deskripsi' => 'nullable',
            'foto' => 'nullable|image|mimes:jpeg,jpg,png,gif|max:2048',
        ]);
        $foto = $portfolio->foto;

        if ($request->hasFile('foto')) {
            if ($foto) {
                Storage::disk('public')->delete($foto);
            }
            $uniqueField = uniqid() . '_' . $request->file('foto')->getClientOriginalName();

            $request->file('foto')->storeAs('foto_portfolio', $uniqueField, 'public');
            $foto = 'foto_portfolio/'. $uniqueField;
        }
        $portfolio->update([
            'id_kategori' => $request->id_kategori,
            'nama_portfolio' => $request->nama_portfolio,
            'deskripsi' => $request->deskripsi,
            'foto' => $foto,
        ]);

        return redirect()->route('admin.portfolio')->with('Success', "Data portfolio Berhasil di Edit");

    }



    /**
     * Remove the specified resource from storage.
     */
    public function delete(portfolio $portfolio, $id)
    {

        $portfolio = portfolio::findOrFail($id);

        // Hapus file foto
        if ($portfolio->foto && Storage::exists('public/' . $portfolio->foto)) {
            Storage::delete('public/' . $portfolio->foto);
        }

        $portfolio->delete();

        return redirect()->route('admin.portfolio')->with('success', 'portfolio berhasil dihapus!');

    }
}
