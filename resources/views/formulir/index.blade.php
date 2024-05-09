@extends('layouts.appuser')
@section('content')
<div class="container">
  <h1 class="text-center">Pendaftaran Peserta Didik Baru TK</h1>
  {{-- ini bagian form --}}
  <form action="{{ route('formulir.simpan')}}" method="POST" enctype="multipart/form-data">
      @csrf
      <div class="row">
        {{-- <div class="mb-3">
          <label for="user_id">Pendaftaran ID</label>
          <input type="number" class="form-control" name="user_id" id="user_id" placeholder="Pendaftaran" required>
        </div> --}}
          <div class="mb-3">
              <label for="nama_siswa">Nama Siswa</label>
              <input type="text" class="form-control" name="nama_siswa" id="nama_siswa" placeholder="Nama Siswa" required>
          </div>
          <div class="mb-3">
              <label for="umur">Umur</label>
              <input type="number" class="form-control" name="umur" id="umur" placeholder="Umur" required>
          </div>
          <div class="mb-3">
              <label for="tmpt_lhr">Tempat Lahir</label>
              <input type="text" class="form-control" name="tmpt_lhr" id="tmpt_lhr" placeholder="Tempat Lahir" required>
          </div>
          <div class="mb-3">
              <label for="tgl_lhr">Tanggal Lahir</label>
              <input type="date" class="form-control" name="tgl_lhr" id="tgl_lhr" placeholder="Tanggal Lahir" required>
          </div>
          <div class="mb-3">
            <label for="alamat">Alamat</label>
            <input type="text" class="form-control" name="alamat" id="alamat" placeholder="Alamat" required>
        </div>
        <div class="mb-3">
          <label for="agama">Agama</label>
          <input type="text" class="form-control" name="agama" id="agama" placeholder="Agama" required>
      </div>
      <div class="mb-3">
        <label for="nama_ayah">Nama Ayah</label>
        <input type="text" class="form-control" name="nama_ayah" id="nama_ayah" placeholder="Nama Ayah" required>
      </div>
      <div class="mb-3">
        <label for="pekerjaan_ayah">Pekerjaan Ayah</label>
        <input type="text" class="form-control" name="pekerjaan_ayah" id="pekerjaan_ayah" placeholder="Pekerjaan Ayah" required>
      </div>
      <div class="mb-3">
        <label for="nama_ibu">Nama Ibu</label>
        <input type="text" class="form-control" name="nama_ibu" id="nama_ibu" placeholder="Nama Ibu" required>
      </div>
      <div class="mb-3">
        <label for="pekerjaan_ibu">Pekerjaan Ibu</label>
        <input type="text" class="form-control" name="pekerjaan_ibu" id="pekerjaan_ibu" placeholder="Pekerjaan Ibu" required>
      </div>
      <div class="mb-3">
        <label for="no_hp_ortu">No HP Orang Tua</label>
        <input type="text" class="form-control" name="no_hp_ortu" id="no_hp_ortu" placeholder="No HP Orang Tua" required>
      </div>
      <div class="mb-3">
        <label for="foto_kk">Foto Kartu Keluarga</label>
        <input type="file" class="form-control" name="foto_kk" id="foto_kk" >
      </div>
      <div class="mb-3">
        <label for="foto_akte">Foto Akte Kelahiran</label>
        <input type="file" class="form-control" name="foto_akte" id="foto_akte">
      </div>
      </div>

      <hr class="mb-4">
      <button type="submit" class="btn btn-primary btn-block">Daftar</button>
  </form>
</div>

@endsection