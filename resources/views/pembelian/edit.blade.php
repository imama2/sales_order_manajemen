@extends('layouts.master')

@section('content')
<div class="container">
    <h1 class="text-center">Edit Data Pembelian</h1>

    <form action="/pembelian/{{$pembelian->id_pembelian}}" method="POST">
      @method('put')
      @csrf
      <div class="my-3">
        <label class="form-label">Jumlah Pembelian</label>
        <input type="number" name="jml_pembelian" class="form-control" value="{{$pembelian->jml_pembelian}}" required>
      </div>
      <div class="my-3">
        <label class="form-label">Harga Pembelian</label>
        <input type="number" name="harga_beli" class="form-control" value="{{$pembelian->harga_beli}}" required>
      </div>
      <button type="submit" class="btn btn-warning mb-3">Update</button>
    </form>

</div>
