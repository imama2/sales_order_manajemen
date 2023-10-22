@extends('layouts.master')

@section('content')
<div class="container">
    <h1 class="text-center">Edit Data Penjualan</h1>


    <form action="/penjualan/{{$penjualan->id_penjualan}}" method="POST">
       @method('put')
      @csrf
      <div class="my-3">
        <label class="form-label">Jumlah Penjualan</label>
        <input type="number" name="jml_penjualan" class="form-control" value="{{$penjualan->jml_penjualan}}" required>
      </div>
      <div class="my-3">
        <label class="form-label">Harga Penjualan</label>
        <input type="number" name="harga_jual" class="form-control" value="{{$penjualan->harga_jual}}" required>
      </div>
      <button type="submit" class="btn btn-primary mb-3">Update</button>
    </form>
</div>
