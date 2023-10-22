@extends('layouts.master')

@section('content')
<div class="container">
    <h1 class="text-center">Edit Data Pengguna</h1>

    <form action="/pengguna/{{$pengguna->id_pengguna}}" method="POST">
      @method('put')
      @csrf
      <div class="my-3">
        <label class="form-label">Nama Pengguna</label>
        <input type="text" name="nama_pengguna" class="form-control"  value="{{$pengguna->nama_pengguna}}">
      </div>
      <div class="my-3">
        <label class="form-label">Passowrd</label>
        <input type="password" name="password" class="form-control" value="{{$pengguna->password}}">
      </div>
      <div class="my-3">
        <label class="form-label">Nama Depan</label>
        <input type="text" name="nama_depan" class="form-control" value="{{$pengguna->nama_depan}}">
      </div>
      <div class="my-3">
        <label class="form-label">Nama Belakang</label>
        <input type="text" name="nama_belakang" class="form-control" value="{{$pengguna->nama_belakang}}">
      </div>
      <div class="my-3">
        <label class="form-label">No HP</label>
        <input type="number" name="no_hp" class="form-control" value="{{$pengguna->no_hp}}">
      </div>
      <div class="my-3">
        <label class="form-label">Alamat</label>
        <input type="text" name="alamat" class="form-control" value="{{$pengguna->alamat}}">
      </div>
      <button type="submit" class="btn btn-warning mb-3">Update</button>
    </form>

</div>
