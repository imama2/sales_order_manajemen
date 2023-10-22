<?php

namespace App\Http\Controllers;

use App\Models\Supplier;
use Illuminate\Http\Request;

class SupplierController extends Controller
{
    public function index()
    {
        $supplier = Supplier::get();
        return view('supplier.index', compact(['supplier']));
    }

    public function store(Request $request)
    {

        $data = [
            'nama_supplier' => $request->input('nama_supplier'),
            'kota' => $request->input('kota'),
            'alamat' => $request->input('alamat'),
            'no_hp' => $request->input('no_hp'),
            'email' => $request->input('email'),
        ];

        // Simpan data ke database
        Supplier::create($data);

        // Redirect ke halaman index dengan pesan sukses
        return redirect('/supplier')->with('success', 'Data Supplier berhasil ditambahkan!');
    }

    public function edit($id)
    {
        // Ambil data pengguna dari database berdasarkan id_pengguna
        $supplier = Supplier::findOrFail($id);

        return view('supplier.edit', compact(['supplier']));
    }

    public function update($id, Request $request)
    {
        $supplier = Supplier::findOrFail($id);

        $data = [
            'nama_supplier' => $request->input('nama_supplier'),
            'kota' => $request->input('kota'),
            'alamat' => $request->input('alamat'),
            'no_hp' => $request->input('no_hp'),
            'email' => $request->input('email'),
        ];


        // Update data pengguna ke database
        $supplier->update($data);

        // Redirect ke halaman index dengan pesan sukses
        return redirect('/supplier')->with('success', 'Data Supplier berhasil diupdate!');
    }

    public function destroy($id)
    {
        $supplier = Supplier::findOrFail($id);
        $supplier->delete();
        return redirect('/supplier');
    }
}
