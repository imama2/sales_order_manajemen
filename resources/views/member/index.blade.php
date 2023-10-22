@extends('layouts.master')

@section('content')
  <div class="container">
    <h1 class="text-center">Input Data Member</h1>

    <form action="/member/store" method="POST">
      @csrf
      <div class="my-3">
        <label class="form-label">Nama Member</label>
        <input type="text" name="nama_member" class="form-control" required>
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
      <div class="my-3">
        <label class="form-label">Tanggal Aktif</label>
        <input type="date" name="tanggal_aktif" class="form-control" required>
      </div>
      <button type="submit" class="btn btn-primary mb-3">Tambah</button>
    </form>

    @if (count($member) > 0)
        <table class="table table-hover">
        <tr>
            <th>Nama Member</th>
            <th>Alamat</th>
            <th>No HP</th>
            <th>Email</th>
            <th>Tanggal Aktif</th>
            <th>Aksi</th>
        </tr>
        @foreach ($member as $m)
          <tr>
            <td>{{$m->nama_member}}</td>
            <td>{{$m->alamat}}</td>
            <td>{{$m->no_hp}}</td>
            <td>{{$m->email}}</td>
            <td>{{$m->tanggal_aktif}}</td>
            <td>
              <div class="btn-group" role="group" aria-label="Basic Example">
                <a  class="btn btn-warning" href="/member/{{$m->id_member}}/edit">Edit</a>
                <div class="p-2"></div>
                <form action="/member/{{$m->id_member}}" method="POST">
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