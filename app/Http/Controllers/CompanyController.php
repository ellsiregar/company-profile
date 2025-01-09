<?php

namespace App\Http\Controllers;

use App\Models\company;
use Illuminate\Http\Request;

class CompanyController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function company()
    {
        $companys = company::all();
        return view('Admin.company', compact('companys'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $company = company::first();
        if ($company) {
            return redirect()->back();
        } else {
            return view('Admin.company_tambah');
        }

    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'nama_perusahaan' => 'required',
            'judul' => 'required',
            'deskripsi' => 'required',
        ]);

        company::create([
            'nama_perusahaan' => $request->nama_perusahaan,
            'judul' => $request->judul,
            'deskripsi' => $request->deskripsi,
        ]);

        return redirect()->route('admin.company')->with('success', 'Data Company Berhasil Ditambahkan.');
    }

    /**
     * Display the specified resource.
     */
    public function show(company $company)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(company $company, $id)
    {
        $company = company::findOrFail($id);
        return view('Admin.company_edit', compact('company'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, company $company, $id)
    {

        $request->validate([
            'nama_perusahaan' => 'required',
            'judul' => 'required',
            'deskripsi' => 'required',
        ]);

        $company = company::findOrFail($id);

        $company->update([
            'nama_perusahaan' => $request->nama_perusahaan,
            'judul' => $request->judul,
            'deskripsi' => $request->deskripsi,
        ]);

        return redirect()->route('admin.company')->with('success', 'Data Company Berhasil Diperbarui.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function delete(company $company, $id)
    {

        $company = company::findOrFail($id);

        $company->delete();

        return redirect()->route('admin.company')->with('Success', 'company berhasil dihapus!');
    }
}
