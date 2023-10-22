@extends('layouts.master')

@section('content')
  <div class="container">
    <h1 class="text-center">Input Data Pengguna</h1>

    <form action="/pengguna/store" method="POST">
      @csrf
      <div class="my-3">
        <label class="form-label">Nama Pengguna</label>
        <input type="text" name="nama_pengguna" class="form-control" required>
      </div>
      <div class="my-3">
        <label class="form-label">Password</label>
        <input type="password" name="password" class="form-control" required>
      </div>
      <div class="my-3">
        <label class="form-label">Nama Depan</label>
        <input type="text" name="nama_depan" class="form-control" required>
      </div>
      <div class="my-3">
        <label class="form-label">Nama Belakang</label>
        <input type="text" name="nama_belakang" class="form-control" required>
      </div>
      <div class="my-3">
        <label class="form-label">No HP</label>
        <input type="number" name="no_hp" class="form-control" required>
      </div>
      <div class="my-3">
        <label class="form-label">Alamat</label>
        <input type="text" name="alamat" class="form-control" required>
      </div>
      <button type="submit" class="btn btn-primary mb-3">Tambah</button>
    </form>

    @if (count($pengguna) > 0)
        <table class="table table-hover">
        <tr>
            <th>Nama Pengguna</th>
            <th>Password</th>
            <th>Nama Depan</th>
            <th>Nama Belakang</th>
            <th>No Hp</th>
            <th>Alamat</th>
            <th>Proses</th>
        </tr>
        @foreach ($pengguna as $p)
          <tr>
            <td>{{$p->nama_pengguna}}</td>
            <td>{{$p->password}}</td>
            <td>{{$p->nama_depan}}</td>
            <td>{{$p->nama_belakang}}</td>
            <td>{{$p->no_hp}}</td>
            <td>{{$p->alamat}}</td>
            <td>
              <div class="btn-group" role="group" aria-label="Basic Example">
                <a  class="btn btn-warning" href="/pengguna/{{$p->id_pengguna}}/edit">Edit</a>
                <div class="p-2"></div>
                <form action="/pengguna/{{$p->id_pengguna}}" method="POST">
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
        <p>Tidak ada data Pengguna</p>
    @endif
  </div>
@endsection