@extends('layouts.master')

@section('content')
<div class="container">
    <h1 class="text-center">Edit Data Barang</h1>


    <form action="/barang/{{$barang->id_barang}}" method="POST">
       @method('put')
      @csrf
      <div class="my-3">
        <label class="form-label">Nama Barang</label>
        <input type="text" name="nama_barang" class="form-control" value="{{$barang->nama_barang}}" required>
      </div>
      <div class="my-3">
        <label class="form-label">Keterangan</label>
        <input type="text" name="keterangan" class="form-control" value="{{$barang->keterangan}}" required>
      </div>
      <div class="my-3">
        <label class="form-label">Satuan</label>
        <input type="number" name="satuan" class="form-control" value="{{$barang->satuan}}" required>
      </div>
      <button type="submit" class="btn btn-primary mb-3">Update</button>
    </form>
</div>
