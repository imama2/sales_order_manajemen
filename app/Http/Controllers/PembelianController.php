<?php

namespace App\Http\Controllers;

use App\Models\Pembelian;
use Illuminate\Http\Request;

class PembelianController extends Controller
{
    public function index()
    {
        $pembelian = Pembelian::get();
        return view('pembelian.index', compact(['pembelian']));
    }

    public function store(Request $request)
    {

        $data = [
            'jml_pembelian' => $request->input('jml_pembelian'),
            'harga_beli' => $request->input('harga_beli'),
        ];

        $data['total_harga_beli'] = $data['jml_pembelian'] * $data['harga_beli'];

        // Simpan data ke database
        pembelian::create($data);

        // Redirect ke halaman index dengan pesan sukses
        return redirect('/pembelian')->with('success', 'Data Pembelian berhasil ditambahkan!');
    }

    public function edit($id)
    {
        // Ambil data pengguna dari database berdasarkan id_pengguna
        $pembelian = pembelian::findOrFail($id);

        return view('pembelian.edit', compact(['pembelian']));
    }

    public function update($id, Request $request)
    {
        $pembelian = Pembelian::findOrFail($id);

        $data = [
            'jml_pembelian' => $request->input('jml_pembelian'),
            'harga_beli' => $request->input('harga_beli'),
        ];

        $data['total_harga_beli'] = $data['jml_pembelian'] * $data['harga_beli'];

        // Update data pengguna ke database
        $pembelian->update($data);

        // Redirect ke halaman index dengan pesan sukses
        return redirect('/pembelian')->with('success', 'Data Pembelian berhasil diupdate!');
    }

    public function destroy($id)
    {
        $pembelian = Pembelian::findOrFail($id);
        $pembelian->delete();
        return redirect('/pembelian');
    }
}
