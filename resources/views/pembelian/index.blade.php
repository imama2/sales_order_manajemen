@extends('layouts.master')

@section('content')
  <div class="container">
    <h1 class="text-center">Input Data Pembelian</h1>

    <form action="/pembelian/store" method="POST">
      @csrf
      <div class="my-3">
        <label class="form-label">Jumlah Pembelian</label>
        <input type="number" name="jml_pembelian" class="form-control" required>
      </div>
      <div class="my-3">
        <label class="form-label">Harga Pembelian</label>
        <input type="number" name="harga_beli" class="form-control" required>
      </div>
      <button type="submit" class="btn btn-primary mb-3">Tambah</button>
    </form>

    @if (count($pembelian) > 0)
        <table class="table table-hover">
        <tr>
            <th>Jumlah Pembelian</th>
            <th>Harga Beli</th>
            <th>Total Harga Beli</th>
            <th>Aksi</th>
        </tr>
        @foreach ($pembelian as $p)
          <tr>
            <td>{{$p->jml_pembelian}}</td>
            <td>{{$p->harga_beli}}</td>
            <td>{{$p->total_harga_beli}}</td>
            <td>
              <div class="btn-group" role="group" aria-label="Basic Example">
                <a  class="btn btn-warning" href="/pembelian/{{$p->id_pembelian}}/edit">Edit</a>
                <div class="p-2"></div>
                <form action="/pembelian/{{$p->id_pembelian}}" method="POST">
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