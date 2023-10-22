@extends('layouts.master')

@section('content')
  <div class="container">
    <h1 class="text-center">Input Data Barang</h1>

    <form action="/barang/store" method="POST">
      @csrf
      <div class="my-3">
        <label class="form-label">Nama Barang</label>
        <input type="text" name="nama_barang" class="form-control" required>
      </div>
      <div class="my-3">
        <label class="form-label">Keterangan</label>
        <input type="text" name="keterangan" class="form-control" required>
      </div>
      <div class="my-3">
        <label class="form-label">Satuan</label>
        <input type="number" name="satuan" class="form-control" required>
      </div>
      <button type="submit" class="btn btn-primary mb-3">Tambah</button>
    </form>

    @if (count($barang) > 0)
        <table class="table table-hover">
        <tr>
            <th>Nama Barang</th>
            <th>Keterangan</th>
            <th>Satuan</th>
            <th>Aksi</th>
        </tr>
        @foreach ($barang as $b)
          <tr>
            <td>{{$b->nama_barang}}</td>
            <td>{{$b->keterangan}}</td>
            <td>{{$b->satuan}}</td>
            <td>
              <div class="btn-group" role="group" aria-label="Basic Example">
                <a  class="btn btn-warning" href="/barang/{{$b->id_barang}}/edit">Edit</a>
                <div class="p-2"></div>
                <form action="/barang/{{$b->id_barang}}" method="POST">
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
        <p>Tidak ada data Pembelian</p>
    @endif
  </div>
@endsection