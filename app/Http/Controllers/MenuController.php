<?php

namespace App\Http\Controllers;

use App\Models\menu;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class MenuController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function menu()
    {
        $menus =menu::all();
        return view('Admin.menu', compact('menus'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('Admin.menu_tambah');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'nama_menu' => 'required',
            'foto' => 'nullable|image|mimes:jpeg,jpg,png,gif|max:2048',
        ]);

        $foto = null;

        if ($request->hasFile('foto')) {
            $uniqueField = uniqid() . '-' . $request->file('foto')->getClientOriginalName();

            $request->file('foto')->storeAs('foto_menu', $uniqueField, 'public');

            $foto = 'foto_menu/' . $uniqueField;
        }

        menu::create([
            'nama_menu' => $request->nama_menu,
            'foto' => $foto,
        ]);
        return redirect()->route('admin.menu')->with('success', 'menu berhasil ditambahkan!');
    }

    /**
     * Display the specified resource.
     */
    public function show(menu $menu)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(menu $menu, $id)
    {
        $menu = menu::find($id);
        if(!$menu) {
            return back();
        }
        return view('Admin.menu_edit', compact('menu'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, menu $menu, $id)
    {
        $menu = menu::find($id);

        $request->validate([
            'nama_menu' => 'required',
            'foto' => 'nullable|image|mimes:jpeg,jpg,png,gif|max:2048',
        ]);
        $foto = $menu->foto;

        if ($request->hasFile('foto')) {
            if ($foto) {
                Storage::disk('public')->delete($foto);
            }
            $uniqueField = uniqid() . '_' . $request->file('foto')->getClientOriginalName();

            $request->file('foto')->storeAs('foto_menu', $uniqueField, 'public');
            $foto = 'foto_menu/'. $uniqueField;
        }
        $menu->update([
            'nama_menu' => $request->nama_menu,
            'foto' => $foto,
        ]);

        return redirect()->route('admin.menu')->with('success', "Data menu Berhasil di Edit");

    }



    /**
     * Remove the specified resource from storage.
     */
    public function delete(menu $menu, $id)
    {

        $menu = Menu::findOrFail($id);

        // Hapus file foto
        if ($menu->foto && Storage::exists('public/' . $menu->foto)) {
            Storage::delete('public/' . $menu->foto);
        }

        $menu->delete();

        return redirect()->route('admin.menu')->with('success', 'Menu berhasil dihapus!');

    }
}
