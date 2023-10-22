<?php

namespace App\Http\Controllers;

use App\Models\Pengguna;
use Illuminate\Http\Request;

class PenggunaController extends Controller
{
    public function index()
    {
        $pengguna = Pengguna::get();
        return view('pengguna.index', compact(['pengguna']));
    }

    public function store(Request $request)
    {

        $data = [
            'nama_pengguna' => $request->input('nama_pengguna'),
            'password' => $request->input('password'),
            'nama_depan' => $request->input('nama_depan'),
            'nama_belakang' => $request->input('nama_belakang'),
            'no_hp' => $request->input('no_hp'),
            'alamat' => $request->input('alamat'),
        ];

        // Simpan data ke database
        Pengguna::create($data);

        // Redirect ke halaman index dengan pesan sukses
        return redirect('/pengguna')->with('success', 'Data pengguna berhasil ditambahkan!');
    }

    public function edit($id)
    {
        // Ambil data pengguna dari database berdasarkan id_pengguna
        $pengguna = Pengguna::findOrFail($id);

        return view('pengguna.edit', compact(['pengguna']));
    }

    public function update($id, Request $request)
    {
        $pengguna = Pengguna::findOrFail($id);
        $data = [
            'nama_pengguna' => $request->input('nama_pengguna'),
            'password' => $request->input('password'),
            'nama_depan' => $request->input('nama_depan'),
            'nama_belakang' => $request->input('nama_belakang'),
            'no_hp' => $request->input('no_hp'),
            'alamat' => $request->input('alamat'),
        ];

        // Update data pengguna ke database
        $pengguna->update($data);

        // Redirect ke halaman index dengan pesan sukses
        return redirect('/pengguna')->with('success', 'Data pengguna berhasil diupdate!');
    }

    public function destroy($id)
    {
        $pengguna = Pengguna::findOrFail($id);
        $pengguna->delete();
        return redirect('/pengguna');
    }
}
