@extends('layouts.master')

@section('content')
<div class="container">
    <h1 class="text-center">Edit Data Member</h1>


    <form action="/member/{{$member->id_member}}" method="POST">
       @method('put')
      @csrf
      <div class="my-3">
        <label class="form-label">Nama Member</label>
        <input type="text" name="nama_member" class="form-control" value="{{$member->nama_member}}" required>
      </div>
      <div class="my-3">
        <label class="form-label">Alamat</label>
        <input type="text" name="alamat" class="form-control" value="{{$member->alamat}}" required>
      </div>
      <div class="my-3">
        <label class="form-label">No HP</label>
        <input type="number" name="no_hp" class="form-control" value="{{$member->no_hp}}" required>
      </div>
      <div class="my-3">
        <label class="form-label">Email</label>
        <input type="text" name="email" class="form-control" value="{{$member->email}}" required>
      </div>
      <div class="my-3">
        <label class="form-label">Tanggal Aktif</label>
        <input type="date" name="tanggal_aktif" class="form-control" value="{{$member->tanggal_aktif}}" required>
      </div>
      <button type="submit" class="btn btn-primary mb-3">Update</button>
    </form>
</div>
