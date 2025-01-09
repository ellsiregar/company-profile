<?php

namespace App\Http\Controllers;

use App\Models\admin;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Storage;

class AdminController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function dashboard()
    {
        return view('admin.dashboard');
    }

    public function logout(Request $request)
    {
        Auth::logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();
        return redirect()->route('admin.login');
    }

    public function profile()
    {
        $profile = Auth::user();
        return view('admin.profile', compact('profile'));
    }

    public function update(Request $request)
{
    $id = Auth::user()->id;
    $admin = User::find($id);

    $request->validate([
        'username' => 'required|unique:users,username,' . $id . ',id', // Validasi unik dengan pengecualian user saat ini
        'password' => 'nullable|min:6', // Password opsional
        'nama_admin' => 'required',
        'foto' => 'nullable|image|mimes:jpeg,jpg,png,gif|max:2048',
    ]);

    // Cek apakah ada file foto baru
    $foto = $admin->foto;
    if ($request->hasFile('foto')) {
        // Hapus foto lama jika ada
        if ($foto) {
            Storage::disk('public')->delete($foto);
        }
        // Simpan foto baru
        $uniqueField = uniqid() . '_' . $request->file('foto')->getClientOriginalName();
        $request->file('foto')->storeAs('foto_admin', $uniqueField, 'public');
        $foto = 'foto_admin/' . $uniqueField;
    }

    // Perbarui data admin
    $admin->update([
        'username' => $request->username,
        'password' => $request->filled('password') ? Hash::make($request->password) : $admin->password,
        'nama_admin' => $request->nama_admin,
        'foto' => $foto,
    ]);

    return redirect()->route('admin.profile')->with('success', 'Data Anda berhasil diperbarui.');
}
}
