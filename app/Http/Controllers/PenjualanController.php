<?php

namespace App\Http\Controllers;

use App\Models\Penjualan;
use Illuminate\Http\Request;

class PenjualanController extends Controller
{
    public function index()
    {
        $penjualan = Penjualan::get();
        return view('penjualan.index', compact(['penjualan']));
    }

    public function store(Request $request)
    {

        $data = [
            'jml_penjualan' => $request->input('jml_penjualan'),
            'harga_jual' => $request->input('harga_jual'),
        ];

        $data['total_harga_jual'] = $data['jml_penjualan'] *  $data['harga_jual'];

        // Simpan data ke database
        penjualan::create($data);

        // Redirect ke halaman index dengan pesan sukses
        return redirect('/penjualan')->with('success', 'Data Penjualan berhasil ditambahkan!');
    }

    public function edit($id)
    {
        // Ambil data pengguna dari database berdasarkan id_pengguna
        $penjualan = Penjualan::findOrFail($id);

        return view('penjualan.edit', compact(['penjualan']));
    }

    public function update($id, Request $request)
    {
        $penjualan = Penjualan::findOrFail($id);

        $data = [
            'jml_penjualan' => $request->input('jml_penjualan'),
            'harga_jual' => $request->input('harga_jual'),
        ];

        $data['total_harga_jual'] = $data['jml_penjualan'] * $data['harga_jual'];

        // Update data pengguna ke database
        $penjualan->update($data);

        // Redirect ke halaman index dengan pesan sukses
        return redirect('/penjualan')->with('success', 'Data Penjualan berhasil diupdate!');
    }

    public function destroy($id)
    {
        $penjualan = Penjualan::findOrFail($id);
        $penjualan->delete();
        return redirect('/penjualan');
    }
}
