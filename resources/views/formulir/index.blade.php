@extends('layouts.appuser')
@section('content')
    <div class="container">
      <h1>Pendaftaran Peserta Didik Baru TK</h1>
      <form action="#" method="POST" class="my-5">
        <div class="form-group">
          <label for="nama" class="mb-2">Nama Siswa:</label>
          <input type="text" id="nama" name="nama" class="form-control" required>
        </div>
        <div class="form-group">
          <label for="umur" class="mb-2">Umur:</label>
          <input type="number" id="umur" name="umur" class="form-control" required>
        </div>
        <div class="form-group">
          <label for="jenis_kelamin" class="mb-2">Jenis Kelamin:</label>
          <select id="jenis_kelamin" name="jenis_kelamin" class="form-select" required>
            <option value="Laki-laki">Laki-laki</option>
            <option value="Perempuan">Perempuan</option>
          </select>
        </div>
        <div class="form-group">
          <label for="alamat" class="mb-2">Alamat:</label>
          <textarea id="alamat" name="alamat" class="form-control" required></textarea>
        </div>
        <div class="form-group">
          <button type="submit" class="btn btn-primary">Daftar</button>
        </div>
      </form>
    </div>
@endsection