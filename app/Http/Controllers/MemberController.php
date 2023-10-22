<?php

namespace App\Http\Controllers;

use App\Models\Member;
use Illuminate\Http\Request;

class MemberController extends Controller
{
    public function index()
    {
        $member = Member::get();
        return view('member.index', compact(['member']));
    }

    public function store(Request $request)
    {

        $data = [
            'nama_member' => $request->input('nama_member'),
            'alamat' => $request->input('alamat'),
            'no_hp' => $request->input('no_hp'),
            'email' => $request->input('email'),
            'tanggal_aktif' => $request->input('tanggal_aktif'),
        ];

        // Simpan data ke database
        Member::create($data);

        // Redirect ke halaman index dengan pesan sukses
        return redirect('/member')->with('success', 'Data Member berhasil ditambahkan!');
    }

    public function edit($id)
    {
        // Ambil data pengguna dari database berdasarkan id_pengguna
        $member = Member::findOrFail($id);

        return view('member.edit', compact(['member']));
    }

    public function update($id, Request $request)
    {
        $member = Member::findOrFail($id);

        $data = [
            'nama_member' => $request->input('nama_member'),
            'alamat' => $request->input('alamat'),
            'no_hp' => $request->input('no_hp'),
            'email' => $request->input('email'),
            'tanggal_aktif' => $request->input('tanggal_aktif'),
        ];


        // Update data pengguna ke database
        $member->update($data);

        // Redirect ke halaman index dengan pesan sukses
        return redirect('/member')->with('success', 'Data Member berhasil diupdate!');
    }

    public function destroy($id)
    {
        $member = Member::findOrFail($id);
        $member->delete();
        return redirect('/member');
    }
}
