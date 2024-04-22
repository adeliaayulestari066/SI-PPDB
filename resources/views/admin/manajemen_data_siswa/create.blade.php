@extends('layouts.admin')

@section('content')
    <div class="container">
        <h1>Tambah Siswa</h1>
        <form action="{{ route('manajemen_siswa.store') }}" method="post" enctype="multipart/form-data">
            @csrf
            <div class="form-group">
                <label for="nama_siswa">Nama Siswa:</label>
                <input type="text" class="form-control" name="nama_siswa" id="nama_siswa" required>
            </div>
            <div class="form-group">
                <label for="umur">Umur:</label>
                <input type="number" class="form-control" name="umur" id="umur" required>
            </div>
            <div class="form-group">
                <label for="tmpt_lhr">Tempat Lahir:</label>
                <input type="text" class="form-control" name="tmpt_lhr" id="tmpt_lhr" required>
            </div>
            <div class="form-group">
                <label for="tgl_lhr">Tanggal Lahir:</label>
                <input type="date" class="form-control" name="tgl_lhr" id="tgl_lhr" required>
            </div>
            <div class="form-group">
                <label for="alamat">Alamat:</label>
                <input type="text" class="form-control" name="alamat" id="alamat" required>
            </div>
            <div class="form-group">
                <label for="agama">Agama:</label>
                <input type="text" class="form-control" name="agama" id="agama" required>
            </div>
            <div class="form-group">
                <label for="nama_ayah">Nama Ayah:</label>
                <input type="text" class="form-control" name="nama_ayah" id="nama_ayah" required>
            </div>
            <div class="form-group">
                <label for="pekerjaan_ayah">Pekerjaan Ayah:</label>
                <input type="text" class="form-control" name="pekerjaan_ayah" id="pekerjaan_ayah" required>
            </div>
            <div class="form-group">
                <label for="nama_ibu">Nama Ibu:</label>
                <input type="text" class="form-control" name="nama_ibu" id="nama_ibu" required>
            </div>
            <div class="form-group">
                <label for="pekerjaan_ibu">Pekerjaan Ibu:</label>
                <input type="text" class="form-control" name="pekerjaan_ibu" id="pekerjaan_ibu" required>
            </div>
            <div class="form-group">
                <label for="foto_kk">Foto KK:</label>
                <input type="file" class="form-control" name="foto_kk" id="foto_kk" required>
            </div>
            <div class="form-group">
                <label for="foto_akte">Foto Akte:</label>
                <input type="file" class="form-control" name="foto_akte" id="foto_akte" required>
            </div>
            <div class="form-group">
                <label for="no_hp_ortu">Nomor HP Orang Tua:</label>
                <input type="text" class="form-control" name="no_hp_ortu" id="no_hp_ortu" required>
            </div>
            <!-- You might need to adjust the pendaftaran_id field according to your application logic -->
            <input type="hidden" name="pendaftaran_id" value="1">
            <button type="submit" class="btn btn-primary">Tambah</button>
        </form>
    </div>
@endsection
