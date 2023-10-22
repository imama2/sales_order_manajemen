@extends('layouts.master')

@section('content')
<div class="container">
    <h1 class="text-center">Edit Data Penjualan</h1>


    <form action="/supplier/{{$supplier->id_supplier}}" method="POST">
       @method('put')
      @csrf
      <div class="my-3">
        <label class="form-label">Nama Supplier</label>
        <input type="text" name="nama_supplier" class="form-control" value="{{$supplier->nama_supplier}}" required>
      </div>
      <div class="my-3">
        <label class="form-label">Kota</label>
        <input type="text" name="kota" class="form-control" value="{{$supplier->kota}}" required>
      </div>
      <div class="my-3">
        <label class="form-label">Alamat</label>
        <input type="text" name="alamat" class="form-control" value="{{$supplier->alamat}}" required>
      </div>
      <div class="my-3">
        <label class="form-label">No HP</label>
        <input type="number" name="no_hp" class="form-control" value="{{$supplier->no_hp}}" required>
      </div>
      <div class="my-3">
        <label class="form-label">Email</label>
        <input type="text" name="email" class="form-control" value="{{$supplier->email}}" required>
      </div>
      <button type="submit" class="btn btn-primary mb-3">Update</button>
    </form>
</div>
