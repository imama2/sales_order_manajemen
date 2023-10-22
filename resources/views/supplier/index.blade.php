@extends('layouts.master')

@section('content')
  <div class="container">
    <h1 class="text-center">Input Data Penjualan</h1>

    <form action="/supplier/store" method="POST">
      @csrf
      <div class="my-3">
        <label class="form-label">Nama Supplier</label>
        <input type="text" name="nama_supplier" class="form-control" required>
      </div>
      <div class="my-3">
        <label class="form-label">Kota</label>
        <input type="text" name="kota" class="form-control" required>
      </div>
      <div class="my-3">
        <label class="form-label">Alamat</label>
        <input type="text" name="alamat" class="form-control" required>
      </div>
      <div class="my-3">
        <label class="form-label">No HP</label>
        <input type="number" name="no_hp" class="form-control" required>
      </div>
      <div class="my-3">
        <label class="form-label">Email</label>
        <input type="text" name="email" class="form-control" required>
      </div>
      <button type="submit" class="btn btn-primary mb-3">Tambah</button>
    </form>

    @if (count($supplier) > 0)
        <table class="table table-hover">
        <tr>
            <th>Nama Supplier</th>
            <th>Kota</th>
            <th>ToAlamat</th>
            <th>No HP</th>
            <th>Email</th>
            <th>Aksi</th>
        </tr>
        @foreach ($supplier as $s)
          <tr>
            <td>{{$s->nama_supplier}}</td>
            <td>{{$s->kota}}</td>
            <td>{{$s->alamat}}</td>
            <td>{{$s->no_hp}}</td>
            <td>{{$s->email}}</td>
            <td>
              <div class="btn-group" role="group" aria-label="Basic Example">
                <a  class="btn btn-warning" href="/supplier/{{$s->id_supplier}}/edit">Edit</a>
                <div class="p-2"></div>
                <form action="/supplier/{{$s->id_supplier}}" method="POST">
                  @csrf
                  @method('delete')
                  <input class="btn btn-danger" type="submit" value="Hapus">
                </form>
              </div>
            </td>
          </tr>
        @endforeach

        </table>
    @else
        <p>Tidak ada data Supplier</p>
    @endif
  </div>
@endsection