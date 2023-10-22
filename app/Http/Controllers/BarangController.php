<?php

namespace App\Http\Controllers;

use App\Models\Barang;
use Illuminate\Http\Request;

class BarangController extends Controller
{
    public function index()
    {
        $barang = Barang::get();
        return view('barang.index', compact(['barang']));
    }

    public function store(Request $request)
    {

        $data = [
            'nama_barang' => $request->input('nama_barang'),
            'keterangan' => $request->input('keterangan'),
            'satuan' => $request->input('satuan'),
        ];


        // Simpan data ke database
        Barang::create($data);

        // Redirect ke halaman index dengan pesan sukses
        return redirect('/barang')->with('success', 'Data Barang berhasil ditambahkan!');
    }

    public function edit($id)
    {
        // Ambil data pengguna dari database berdasarkan id_pengguna
        $barang = Barang::findOrFail($id);

        return view('barang.edit', compact(['barang']));
    }

    public function update($id, Request $request)
    {
        $barang = Barang::findOrFail($id);

        $data = [
            'nama_barang' => $request->input('nama_barang'),
            'keterangan' => $request->input('keterangan'),
            'satuan' => $request->input('satuan'),
        ];

        // Update data pengguna ke database
        $barang->update($data);

        // Redirect ke halaman index dengan pesan sukses
        return redirect('/barang')->with('success', 'Data Barang berhasil diupdate!');
    }

    public function destroy($id)
    {
        $barang = Barang::findOrFail($id);
        $barang->delete();
        return redirect('/barang');
    }
}
