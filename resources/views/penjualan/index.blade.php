@extends('layouts.master')

@section('content')
  <div class="container">
    <h1 class="text-center">Input Data Penjualan</h1>

    <form action="/penjualan/store" method="POST">
      @csrf
      <div class="my-3">
        <label class="form-label">Jumlah Penjualan</label>
        <input type="number" name="jml_penjualan" class="form-control" required>
      </div>
      <div class="my-3">
        <label class="form-label">Harga Penjualan</label>
        <input type="number" name="harga_jual" class="form-control" required>
      </div>
      <button type="submit" class="btn btn-primary mb-3">Tambah</button>
    </form>

    @if (count($penjualan) > 0)
        <table class="table table-hover">
        <tr>
            <th>Jumlah Penjualan</th>
            <th>Harga Jual</th>
            <th>Total Harga Jual</th>
            <th>Aksi</th>
        </tr>
        @foreach ($penjualan as $p)
          <tr>
            <td>{{$p->jml_penjualan}}</td>
            <td>{{$p->harga_jual}}</td>
            <td>{{$p->total_harga_jual}}</td>
            <td>
              <div class="btn-group" role="group" aria-label="Basic Example">
                <a  class="btn btn-warning" href="/penjualan/{{$p->id_penjualan}}/edit">Edit</a>
                <div class="p-2"></div>
                <form action="/penjualan/{{$p->id_penjualan}}" method="POST">
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