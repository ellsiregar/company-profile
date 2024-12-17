<?php

namespace App\Http\Controllers;

use App\Models\team;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class TeamController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function team()
    {
        $teams = team::all();
        return view('admin.team', compact('teams'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.tambah_team');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'nama'=> 'required',
            'foto'=> 'required|image|mimes:jpeg,jpg,png,gif|max:2048',

        ]);

        $foto = null;

        if($request->hasFile('foto')){
            $uniqueField = uniqid() . '_' . $request->file('foto')->getClientOriginalName();

            $request->file('foto')->storeAs('foto_team', $uniqueField, 'public');

            $foto = 'foto_team/' . $uniqueField;
        }

        team::create([
            'nama'=> $request->nama,
            'foto' => $foto,
        ]);

        return redirect()->route('admin.team')->with('success','Data photo Berhasil di Tambah');
    }

    /**
     * Display the specified resource.
     */
    public function show(team $team)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(team $team, $id)
    {
        $team = team::find($id);
        if(!$team) {
            return back();
        }
        return view('Admin.edit_team', compact('team'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, team $team, $id)
    {
        $team = team::find($id);

        $request->validate([
            'nama' => 'required',
            'foto' => 'nullable|image|mimes:jpeg,jpg,png,gif|max:2048',
        ]);
        $foto = $team->foto;

        if ($request->hasFile('foto')) {
            if ($foto) {
                Storage::disk('public')->delete($foto);
            }
            $uniqueField = uniqid() . '_' . $request->file('foto')->getClientOriginalName();

            $request->file('foto')->storeAs('foto_team', $uniqueField, 'public');
            $foto = 'foto_team/'. $uniqueField;
        }
        $team->update([
            'nama' => $request->nama,
            'foto' => $foto,
        ]);

        return redirect()->route('admin.team')->with('success', "Data team Berhasil di Edit");

    }


    public function delete(team $team){
        $team = team::find();
        if ($team->foto) {
            $foto = $team->foto;

            if (Storage::disk('public')->delete($foto)) {
                Storage::disk('public')->delete($foto);
            }
        }

        $team->delete();

    return redirect()->back()->with('success', 'Data team berhasil dihapus.');

    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(team $team)
    {
        //
    }
}
