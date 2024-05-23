@extends('layouts.admin')

@section('title', 'Tambah Data Siswa')

@section('main')
    <h4 class="fw-bold py-3 mb-4"><span class="text-muted fw-light">Data Siswa/</span> Tambah Data Siswa</h4>
    <!-- Basic Layout -->

    <div class="col-xl mx-auto" style="max-width: 700px">
        <div class="card mb-4">
            <div class="card-header d-flex justify-content-between align-items-center">
                <h5 class="mb-0">Form Pengisian Data Siswa</h5>
            </div>
            <div class="card-body">
                <form method="post" action="{{ route('data-siswa-simpan') }}" enctype="multipart/form-data">
                    @csrf
                    @method('post')
                    <div class="mb-3">
                        <div class="form-floating">
                            <input name="nama_siswa" type="text" class="form-control" id="nama_siswa"
                                placeholder="Nama Siswa" aria-describedby="floatingInputHelp" required />
                            <label for="floatingInput">Nama Siswa</label>
                        </div>
                    </div>
                    <div class="mb-3">
                        <div class="form-floating">
                            <input name="umur" type="number" class="form-control" id="umur" placeholder="Umur"
                                aria-describedby="floatingInputHelp" required />
                            <label for="floatingInput">Umur</label>
                        </div>
                    </div>
                    <input type="hidden" name="user_id" value="{{ Auth::id() }}">

                    <div class="mb-3">
                        <div class="form-floating">
                            <input name="tmpt_lhr" type="text" class="form-control" id="tmpt_lhr"
                                placeholder="Tempat Lahir" aria-describedby="floatingInputHelp" required />
                            <label for="floatingInput">Tempat Lahir</label>
                        </div>
                    </div>
                    <div class="mb-3">
                        <div class="form-floating">
                            <input name="tgl_lhr" type="date" class="form-control" id="tgl_lhr"
                                placeholder="Tanggal Lahir" aria-describedby="floatingInputHelp" required />
                            <label for="floatingInput">Tanggal Lahir</label>
                        </div>
                    </div>
                    <div class="mb-3">
                        <div class="form-floating">
                            <input name="alamat" type="text" class="form-control" id="floatingInput"
                                placeholder="Alamat" aria-describedby="floatingInputHelp" required />
                            <label for="floatingInput">Alamat</label>
                        </div>
                    </div>
                    <div class="mb-3">
                        <div class="form-floating">
                            <input name="agama" type="text" class="form-control" id="agama" placeholder="Agama"
                                aria-describedby="floatingInputHelp" required />
                            <label for="floatingInput">Agama</label>
                        </div>
                    </div>
                    <div class="mb-3">
                        <div class="form-floating">
                            <input name="nama_ayah" type="text" class="form-control" id="nama_ayah"
                                placeholder="Nama Ayah" aria-describedby="floatingInputHelp" required />
                            <label for="floatingInput">Nama Ayah</label>
                        </div>
                    </div>
                    <div class="mb-3">
                        <div class="form-floating">
                            <input name="pekerjaan_ayah" type="text" class="form-control" id="pekerjaan_ayah"
                                placeholder="Pekerjaan Ayah" aria-describedby="floatingInputHelp" required />
                            <label for="floatingInput">Pekerjaan Ayah</label>
                        </div>
                    </div>
                    <div class="mb-3">
                        <div class="form-floating">
                            <input name="nama_ibu" type="text" class="form-control" id="nama_ibu" placeholder="Nama Ibu"
                                aria-describedby="floatingInputHelp" required />
                            <label for="floatingInput">Nama Ibu</label>
                        </div>
                    </div>
                    <div class="mb-3">
                        <div class="form-floating">
                            <input name="pekerjaan_ibu" type="text" class="form-control" id="pekerjaan_ibu"
                                placeholder="Pekerjaan Ibu" aria-describedby="floatingInputHelp" required />
                            <label for="floatingInput">Pekerjaan Ibu</label>
                        </div>
                    </div>
                    <div class="mb-3">
                        <div class="form-floating">
                            <input name="no_hp_ortu" type="text" class="form-control" id="no_hp_ortu"
                                placeholder="No HP Orang Tua" aria-describedby="floatingInputHelp" minlength="10"
                                maxlength="13" required />
                            <label for="floatingInput">No HP Orang Tua</label>
                        </div>
                    </div>
                    <div class="mb-3">
                        <div class="form
                        <div class="form-floating">
                            <input name="foto_kk" type="file" class="form-control" id="foto_kk"
                                placeholder="Foto KK" aria-describedby="floatingInputHelp" required />
                            <label for="floatingInput">Foto KK</label>
                        </div>
                    </div>
                    <div class="mb-3">
                        <div class="form-floating">
                            <input name="foto_akte" type="file" class="form-control" id="foto_akte"
                                placeholder="Foto Akte" aria-describedby="floatingInputHelp" required />
                            <label for="floatingInput">Foto Akte</label>
                        </div>
                    </div>
                    <div class="mb-3">
                    </div>
                    <button type="submit" class="btn btn-primary">Simpan</button>
                </form>
            </div>
        </div>
    </div>

    <script>
        document.getElementById("nama_siswa").addEventListener("input", function(event) {
            let value = this.value;
            // Mengizinkan huruf, spasi, dan titik
            let validValue = value.replace(/[^a-zA-Z\s.]/g, "");
            this.value = validValue; // Mengatur nilai input hanya dengan karakter yang diizinkan
        });
    </script>

    <script>
        document.querySelector("form").addEventListener("submit", function(event) {
            let noHpOrtu = document.getElementById("no_hp_ortu").value;
            if (noHpOrtu.length < 10 || noHpOrtu.length > 13) {
                event.preventDefault(); // Mencegah pengiriman formulir
                alert("Nomor HP Orang Tua harus berjumlah antara 10 sampai 13 digit.");
            }
        });
    </script>

    <script>
        document.getElementById("tmpt_lhr").addEventListener("input", function(event) {
            let value = this.value;
            let lettersOnlyValue = value.replace(/[^a-zA-Z\s]/g, ""); // Mengizinkan hanya huruf dan spasi
            this.value = lettersOnlyValue; // Mengatur nilai input hanya dengan karakter huruf dan spasi
        });
    </script>

    <script>
        document.getElementById("agama").addEventListener("input", function(event) {
            let value = this.value;
            let lettersOnlyValue = value.replace(/[^a-zA-Z\s]/g, ""); // Mengizinkan hanya huruf dan spasi
            this.value = lettersOnlyValue; // Mengatur nilai input hanya dengan karakter huruf dan spasi
        });
    </script>

    <script>
        document.getElementById("nama_ayah").addEventListener("input", function(event) {
            let value = this.value;
            let lettersOnlyValue = value.replace(/[^a-zA-Z\s]/g, ""); // Mengizinkan hanya huruf dan spasi
            this.value = lettersOnlyValue; // Mengatur nilai input hanya dengan karakter huruf dan spasi
        });
    </script>

    <script>
        document.getElementById("pekerjaan_ayah").addEventListener("input", function(event) {
            let value = this.value;
            let lettersOnlyValue = value.replace(/[^a-zA-Z\s]/g, ""); // Mengizinkan hanya huruf dan spasi
            this.value = lettersOnlyValue; // Mengatur nilai input hanya dengan karakter huruf dan spasi
        });
    </script>

    <script>
        document.getElementById("nama_ibu").addEventListener("input", function(event) {
            let value = this.value;
            let lettersOnlyValue = value.replace(/[^a-zA-Z\s]/g, ""); // Mengizinkan hanya huruf dan spasi
            this.value = lettersOnlyValue; // Mengatur nilai input hanya dengan karakter huruf dan spasi
        });
    </script>

    <script>
        document.getElementById("pekerjaan_ibu").addEventListener("input", function(event) {
            let value = this.value;
            let lettersOnlyValue = value.replace(/[^a-zA-Z\s]/g, ""); // Mengizinkan hanya huruf dan spasi
            this.value = lettersOnlyValue; // Mengatur nilai input hanya dengan karakter huruf dan spasi
        });
    </script>

    <script>
        document.getElementById("umur").addEventListener("input", function(event) {
            if (this.value.length > 1) {
                this.value = this.value.slice(0, 1); // Menghapus karakter yang melebihi satu digit
            }
        });
    </script>

    <script>
        document.addEventListener("DOMContentLoaded", function() {
            let today = new Date().toISOString().split('T')[0];
            document.getElementById("tgl_lhr").setAttribute('max', today);
        });
    </script>

@endsection
