@extends('layouts.appuser')
@section('content')
    <div class="container">
        <h1 class="text-center">Pendaftaran Peserta Didik Baru TK</h1>
        {{-- ini bagian form --}}
        <form id="pendaftaranForm" action="{{ route('formulir.simpan') }}" method="POST" enctype="multipart/form-data">
            @csrf
            @if ($errors->any())
                <div class="alert alert-danger">
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif
            <div class="row">
                <div class="mb-3">
                    <label for="nama_siswa">Nama Siswa</label>
                    <input type="text" class="form-control" name="nama_siswa" id="nama_siswa" placeholder="Nama Siswa"
                        required>
                </div>
                <div class="mb-3">
                    <label for="umur">Umur</label>
                    <input type="number" class="form-control" name="umur" id="umur" placeholder="Umur" required>
                </div>
                <div class="mb-3">
                    <label for="tmpt_lhr">Tempat Lahir</label>
                    <input type="text" class="form-control" name="tmpt_lhr" id="tmpt_lhr" placeholder="Tempat Lahir"
                        required>
                </div>
                <div class="mb-3">
                    <label for="tgl_lhr">Tanggal Lahir</label>
                    <input type="date" class="form-control" name="tgl_lhr" id="tgl_lhr" placeholder="Tanggal Lahir"
                        required>
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
                    <input type="text" class="form-control" name="nama_ayah" id="nama_ayah" placeholder="Nama Ayah"
                        required>
                </div>
                <div class="mb-3">
                    <label for="pekerjaan_ayah">Pekerjaan Ayah</label>
                    <input type="text" class="form-control" name="pekerjaan_ayah" id="pekerjaan_ayah"
                        placeholder="Pekerjaan Ayah" required>
                </div>
                <div class="mb-3">
                    <label for="nama_ibu">Nama Ibu</label>
                    <input type="text" class="form-control" name="nama_ibu" id="nama_ibu" placeholder="Nama Ibu"
                        required>
                </div>
                <div class="mb-3">
                    <label for="pekerjaan_ibu">Pekerjaan Ibu</label>
                    <input type="text" class="form-control" name="pekerjaan_ibu" id="pekerjaan_ibu"
                        placeholder="Pekerjaan Ibu" required>
                </div>
                <div class="mb-3">
                    <label for="no_hp_ortu">No HP Orang Tua</label>
                    <input type="text" class="form-control" name="no_hp_ortu" id="no_hp_ortu"
                        placeholder="No HP Orang Tua" required minlength="10" maxlength="13">
                    <small id="no_hp_ortu_error" class="text-danger"></small>
                </div>
                <div class="mb-3">
                    <label for="foto_kk">Foto Kartu Keluarga</label>
                    <input type="file" class="form-control" name="foto_kk" id="foto_kk" accept=".jpg, .jpeg, .png" required>
                </div>
                <div class="mb-3">
                    <label for="foto_akte">Foto Akte Kelahiran</label>
                    <input type="file" class="form-control" name="foto_akte" id="foto_akte" accept=".jpg, .jpeg, .png" required>
                </div>
            </div>

            <hr class="mb-4">
            {{-- <button type="button" class="btn btn-primary btn-block" id="daftarButton">Daftar</button> --}}
            <div class="d-flex justify-content-center align-items-center full-height">
                <button type="button" class="btn btn-primary" id="daftarButton">Daftar</button>
            </div>
        </form>

        <!-- Modal -->
        <div class="modal fade" id="konfirmasiModal" tabindex="-1" aria-labelledby="exampleModalLabel"
            aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Konfirmasi Pendaftaran</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        Apakah anda yakin ingin mengirim formulir ini?
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Batal</button>
                        <button type="button" class="btn btn-primary" id="konfirmasiButton">Ya, Kirim</button>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script>
        document.getElementById("daftarButton").addEventListener("click", function() {
            let form = document.getElementById("pendaftaranForm");
            let noHp = document.getElementById("no_hp_ortu").value;
            let noHpError = document.getElementById("no_hp_ortu_error");

            // Reset error message
            noHpError.textContent = "";

            if (/^\d{10,13}$/.test(noHp)) {
                // Jika nomor HP valid, tampilkan modal konfirmasi
                if (form.checkValidity()) {
                    let konfirmasiModal = new bootstrap.Modal(document.getElementById('konfirmasiModal'));
                    konfirmasiModal.show();
                } else {
                    form.reportValidity();
                }
            } else {
                // Jika nomor HP tidak valid, tampilkan pesan error
                noHpError.textContent = "Nomor HP harus berupa angka dan berjumlah antara 10 sampai 13 digit.";
            }
        });

        document.getElementById("konfirmasiButton").addEventListener("click", function() {
            document.getElementById("pendaftaranForm").submit();
        });

        document.getElementById("no_hp_ortu").addEventListener("input", function(event) {
            let value = this.value;
            let numericValue = value.replace(/\D/g, ""); // Menghapus semua karakter non-angka
            this.value = numericValue; // Mengatur nilai input hanya dengan karakter angka
        });

        document.getElementById("umur").addEventListener("input", function(event) {
            let value = this.value;
            let numericValue = value.replace(/\D/g, ""); // Menghapus semua karakter non-angka
            this.value = numericValue; // Mengatur nilai input hanya dengan karakter angka
            if (this.value.length > 1) {
                this.value = this.value.slice(0, 1); // Menghapus karakter yang melebihi satu digit
            }
        });

        document.getElementById("nama_siswa").addEventListener("input", function(event) {
            let value = this.value;
            let validValue = value.replace(/[^a-zA-Z\s.]/g, ""); // Mengizinkan huruf, spasi, dan titik
            this.value = validValue;
        });

        document.getElementById("tmpt_lhr").addEventListener("input", function(event) {
            let value = this.value;
            let alphabeticValue = value.replace(/[^a-zA-Z\s]/g, ""); // Menghapus semua karakter non-huruf dan spasi
            this.value = alphabeticValue;
        });

        document.getElementById("agama").addEventListener("input", function(event) {
            let value = this.value;
            let lettersOnlyValue = value.replace(/[^a-zA-Z\s]/g, ""); // Mengizinkan hanya huruf dan spasi
            this.value = lettersOnlyValue;
        });

        document.getElementById("nama_ayah").addEventListener("input", function(event) {
            let value = this.value;
            let lettersOnlyValue = value.replace(/[^a-zA-Z\s]/g, ""); // Mengizinkan hanya huruf dan spasi
            this.value = lettersOnlyValue;
        });

        document.getElementById("pekerjaan_ayah").addEventListener("input", function(event) {
            let value = this.value;
            let lettersOnlyValue = value.replace(/[^a-zA-Z\s]/g, ""); // Mengizinkan hanya huruf dan spasi
            this.value = lettersOnlyValue;
        });

        document.getElementById("nama_ibu").addEventListener("input", function(event) {
            let value = this.value;
            let lettersOnlyValue = value.replace(/[^a-zA-Z\s]/g, ""); // Mengizinkan hanya huruf dan spasi
            this.value = lettersOnlyValue;
        });

        document.getElementById("pekerjaan_ibu").addEventListener("input", function(event) {
            let value = this.value;
            let lettersOnlyValue = value.replace(/[^a-zA-Z\s]/g, ""); // Mengizinkan hanya huruf dan spasi
            this.value = lettersOnlyValue;
        });

        document.addEventListener("DOMContentLoaded", function() {
            let today = new Date().toISOString().split('T')[0];
            document.getElementById("tgl_lhr").setAttribute('max', today);
        });

        document.getElementById("pendaftaranForm").addEventListener("submit", function(e) {
            let noHp = document.getElementById("no_hp_ortu").value;
            let noHpError = document.getElementById("no_hp_ortu_error");

            if (!(/^\d+$/.test(noHp)) || noHp.length < 10 || noHp.length > 13) {
                e.preventDefault(); // Mencegah pengiriman formulir
                noHpError.textContent = "Nomor HP harus berupa angka dan berjumlah antara 10 sampai 13 digit.";
            } else {
                noHpError.textContent = ""; // Menghapus pesan error jika valid
            }
        });
    </script>
@endsection
