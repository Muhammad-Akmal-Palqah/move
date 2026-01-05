<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Jabatan;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
    public function index()
    {
        $semua_user = User::with('jabatan')->get();
        $semua_jabatan = Jabatan::all();
        return view('admin.user.user', compact('semua_user', 'semua_jabatan'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'password' => 'required|confirmed|min:6',
            'jabatan_id' => 'required',
        ]);

        User::create([
            'name' => $request->name,
            'email' => $request->name . '@mail.com', 
            'password' => Hash::make($request->password),
            'jabatan_id' => $request->jabatan_id,
        ]);

        return redirect()->route('user.index')->with('success', 'User berhasil ditambahkan!');
    }

    // PASTIKAN NAMA FUNGSI INI ADALAH 'update' (HURUF KECIL SEMUA)
    public function update(Request $request, $id)
    {
        $user = User::findOrFail($id);
        
        $request->validate([
            'name' => 'required|string|max:255',
            'jabatan_id' => 'required',
        ]);

        $user->name = $request->name;
        $user->jabatan_id = $request->jabatan_id;

        if ($request->filled('password')) {
            $request->validate(['password' => 'confirmed|min:6']);
            $user->password = Hash::make($request->password);
        }

        $user->save();

        return redirect()->route('user.index')->with('success', 'User berhasil diperbarui!');
    }

    // PASTIKAN NAMA FUNGSI INI ADALAH 'destroy'
    public function destroy($id)
    {
        User::findOrFail($id)->delete();
        return redirect()->route('user.index')->with('success', 'User berhasil dihapus!');
    }
}