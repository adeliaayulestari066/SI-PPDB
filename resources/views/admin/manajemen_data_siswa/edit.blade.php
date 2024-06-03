@extends('layouts.admin')

@section('title', 'Edit Data Siswa')

@section('main')
    <h4 class="fw-bold py-3 mb-4"><span class="text-muted fw-light">Data Siswa/</span> Edit Data Siswa</h4>
    <div class="col-xl mx-auto" style="max-width: 700px">
        <div class="card mb-4">
            <div class="card-header d-flex justify-content-between align-items-center">
                <h5 class="mb-0">Form Edit Data Siswa</h5>
            </div>
            <div class="card-body">
                <form id="editForm" action="/siswa/{{ $siswa->id }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    @method('put')
                    <div class="mb-3">
                        <div class="form-floating">
                            <input name="nama_siswa" value="{{ $siswa->nama_siswa }}" type="text" class="form-control"
                                id="nama_siswa" placeholder="Nama Siswa" aria-describedby="floatingInputHelp" required />
                            <label for="floatingInput">Nama Siswa</label>
                        </div>
                    </div>
                    <div class="mb-3">
                        <div class="form-floating">
                            <input name="umur" value="{{ $siswa->umur }}" type="number" class="form-control"
                                id="umur" placeholder="Umur" aria-describedby="floatingInputHelp" required />
                            <label for="floatingInput">Umur</label>
                        </div>
                    </div>
                    <div class="mb-3">
                        <div class="form-floating">
                            <input name="tmpt_lhr" value="{{ $siswa->tmpt_lhr }}" type="text" class="form-control"
                                id="tmpt_lhr" placeholder="Tempat Lahir" aria-describedby="floatingInputHelp" required />
                            <label for="floatingInput">Tempat Lahir</label>
                        </div>
                    </div>
                    <div class="mb-3">
                        <div class="form-floating">
                            <input name="tgl_lhr" value="{{ $siswa->tgl_lhr }}" type="date" class="form-control"
                                id="tgl_lhr" placeholder="Tanggal Lahir" aria-describedby="floatingInputHelp" required />
                            <label for="floatingInput">Tanggal Lahir</label>
                        </div>
                    </div>
                    <div class="mb-3">
                        <div class="form-floating">
                            <input name="alamat" value="{{ $siswa->alamat }}" type="text" class="form-control"
                                id="alamat" placeholder="Alamat" aria-describedby="floatingInputHelp" required />
                            <label for="floatingInput">Alamat</label>
                        </div>
                    </div>
                    <div class="mb-3">
                        <div class="form-floating">
                            <input name="agama" value="{{ $siswa->agama }}" type="text" class="form-control"
                                id="agama" placeholder="Agama" aria-describedby="floatingInputHelp" required />
                            <label for="floatingInput">Agama</label>
                        </div>
                    </div>
                    <div class="mb-3">
                        <div class="form-floating">
                            <input name="nama_ayah" value="{{ $siswa->nama_ayah }}" type="text" class="form-control"
                                id="nama_ayah" placeholder="Nama Ayah" aria-describedby="floatingInputHelp" required />
                            <label for="floatingInput">Nama Ayah</label>
                        </div>
                    </div>
                    <div class="mb-3">
                        <div class="form-floating">
                            <input name="pekerjaan_ayah" value="{{ $siswa->pekerjaan_ayah }}" type="text"
                                class="form-control" id="pekerjaan_ayah" placeholder="Pekerjaan Ayah"
                                aria-describedby="floatingInputHelp" required />
                            <label for="floatingInput">Pekerjaan Ayah</label>
                        </div>
                    </div>
                    <div class="mb-3">
                        <div class="form-floating">
                            <input name="nama_ibu" value="{{ $siswa->nama_ibu }}" type="text" class="form-control"
                                id="nama_ibu" placeholder="Nama Ibu" aria-describedby="floatingInputHelp" required />
                            <label for="floatingInput">Nama Ibu</label>
                        </div>
                    </div>
                    <div class="mb-3">
                        <div class="form-floating">
                            <input name="pekerjaan_ibu" value="{{ $siswa->pekerjaan_ibu }}" type="text"
                                class="form-control" id="pekerjaan_ibu" placeholder="Pekerjaan Ibu"
                                aria-describedby="floatingInputHelp" required />
                            <label for="floatingInput">Pekerjaan Ibu</label>
                        </div>
                    </div>
                    <div class="mb-3">
                        <label for="foto_kk" class="form-label">Foto Kartu Keluarga</label>
                        <input name="foto_kk" class="form-control" type="file" id="foto_kk"
                            accept=".jpg, .jpeg, .png" />
                    </div>
                    <div class="mb-3">
                        <label for="foto_akte" class="form-label">Foto Akte Kelahiran</label>
                        <input name="foto_akte" class="form-control" type="file" id="foto_akte"
                            accept=".jpg, .jpeg, .png" />
                    </div>
                    <div class="mb-3">
                        <div class="form-floating">
                            <input name="no_hp_ortu" value="{{ $siswa->no_hp_ortu }}" type="text"
                                class="form-control" id="no_hp_ortu" placeholder="Nomor HP Orang Tua"
                                aria-describedby="floatingInputHelp" minlength="10" maxlength="13" required />
                            <label for="floatingInput">Nomor HP Orang Tua</label>
                            <small id="no_hp_ortu_error" class="text-danger"></small>
                        </div>
                    </div>
                    <!-- Tambahkan input untuk atribut lainnya sesuai dengan skema tabel -->
                    <button type="submit" class="btn btn-primary">Perbarui Data</button>
                </form>
            </div>
        </div>
    </div>

    <script>
        document.getElementById("editForm").addEventListener("submit", function(e) {
            let noHp = document.getElementById("no_hp_ortu").value;
            let noHpError = document.getElementById("no_hp_ortu_error");

            if (!(/^\d+$/.test(noHp)) || noHp.length < 10 || noHp.length > 13) {
                e.preventDefault(); // Mencegah pengiriman formulir
                noHpError.textContent = "Nomor HP harus berupa angka dan berjumlah antara 10 sampai 13 digit.";
            } else {
                noHpError.textContent = ""; // Menghapus pesan error jika valid
            }
        });

        document.getElementById("no_hp_ortu").addEventListener("input", function(event) {
            let value = this.value;
            let numericValue = value.replace(/\D/g, ""); // Menghapus semua karakter non-angka
            this.value = numericValue; // Mengatur nilai input hanya dengan karakter angka
        });

        document.getElementById("nama_siswa").addEventListener("input", function(event) {
            let value = this.value;
            let validValue = value.replace(/[^a-zA-Z\s.]/g, ""); // Mengizinkan huruf, spasi, dan titik
            this.value = validValue;
        });

        document.getElementById("tmpt_lhr").addEventListener("input", function(event) {
            let value = this.value;
            let lettersOnlyValue = value.replace(/[^a-zA-Z\s]/g, ""); // Menghapus semua karakter non-huruf dan spasi
            this.value = lettersOnlyValue;
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

        document.getElementById("umur").addEventListener("input", function(event) {
            if (this.value.length > 1) {
                this.value = this.value.slice(0, 1); // Mengatur input untuk maksimal dua digit
            }
        });

        document.addEventListener("DOMContentLoaded", function() {
            let today = new Date();
            let currentYear = today.getFullYear();
            let maxYear = currentYear;
            let minYear = currentYear - 7;
            
            let minDate = new Date(minYear, 0, 1).toISOString().split('T')[0];
            let maxDate = new Date(maxYear, 11, 31).toISOString().split('T')[0];
            
            document.getElementById("tgl_lhr").setAttribute('min', minDate);
            document.getElementById("tgl_lhr").setAttribute('max', maxDate);
        });
    </script>
@endsection
