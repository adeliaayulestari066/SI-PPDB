@extends('layouts.appuser')

@section('content')
    <main id="main">
        <div class="text-center mx-auto mb-5 wow fadeInUp" data-wow-delay="0.1s" style="max-width: 600px;">
            <h1 class="mb-3">Edit Formulir</h1>
            <p class="text-center">Edit profil yang anda lakukan</p>
        </div>

        <section id="riwayat-transaksi" class="p-4">
            <div class="container">
                <form action="{{ route('siswa.update', $siswa->id) }}" method="POST">
                    @csrf
                    @method('PUT')

                    <div class="mb-3">
                        <label for="nama_siswa" class="form-label">Nama Siswa</label>
                        <input type="text" class="form-control" id="nama_siswa" name="nama_siswa"
                            value="{{ $siswa->nama_siswa }}" required>
                    </div>
                    <div class="mb-3">
                        <label for="umur" class="form-label">Umur</label>
                        <input type="number" class="form-control" id="umur" name="umur" value="{{ $siswa->umur }}"
                            required>
                    </div>
                    <div class="mb-3">
                        <label for="tmpt_lhr" class="form-label">Tempat Lahir</label>
                        <input type="text" class="form-control" id="tmpt_lhr" name="tmpt_lhr"
                            value="{{ $siswa->tmpt_lhr }}" required>
                    </div>
                    <div class="mb-3">
                        <label for="tgl_lhr" class="form-label">Tanggal Lahir</label>
                        <input type="date" class="form-control" id="tgl_lhr" name="tgl_lhr"
                            value="{{ $siswa->tgl_lhr }}" required>
                    </div>
                    <div class="mb-3">
                        <label for="alamat" class="form-label">Alamat</label>
                        <input type="text" class="form-control" id="alamat" name="alamat"
                            value="{{ $siswa->alamat }}" required>
                    </div>
                    <div class="mb-3">
                        <label for="agama" class="form-label">Agama</label>
                        <input type="text" class="form-control" id="agama" name="agama" value="{{ $siswa->agama }}"
                            required>
                    </div>
                    <div class="mb-3">
                        <label for="nama_ayah" class="form-label">Nama Ayah</label>
                        <input type="text" class="form-control" id="nama_ayah" name="nama_ayah"
                            value="{{ $siswa->nama_ayah }}" required>
                    </div>
                    <div class="mb-3">
                        <label for="pekerjaan_ayah" class="form-label">Pekerjaan Ayah</label>
                        <input type="text" class="form-control" id="pekerjaan_ayah" name="pekerjaan_ayah"
                            value="{{ $siswa->pekerjaan_ayah }}" required>
                    </div>
                    <div class="mb-3">
                        <label for="nama_ibu" class="form-label">Nama Ibu</label>
                        <input type="text" class="form-control" id="nama_ibu" name="nama_ibu"
                            value="{{ $siswa->nama_ibu }}" required>
                    </div>
                    <div class="mb-3">
                        <label for="pekerjaan_ibu" class="form-label">Pekerjaan Ibu</label>
                        <input type="text" class="form-control" id="pekerjaan_ibu" name="pekerjaan_ibu"
                            value="{{ $siswa->pekerjaan_ibu }}" required>
                    </div>
                    <div class="mb-3">
                        <label for="no_hp_ortu" class="form-label">No HP Orang Tua</label>
                        <input type="text" class="form-control" id="no_hp_ortu" name="no_hp_ortu"
                            value="{{ $siswa->no_hp_ortu }}" required minlength="10" maxlength="13">
                    </div>

                    <button type="submit" class="btn btn-primary">Simpan Perubahan</button>
                </form>
            </div>

            <script>
                document.getElementById("umur").addEventListener("input", function(event) {
                    let value = this.value;
                    let numericValue = value.replace(/\D/g, ""); // Menghapus semua karakter non-angka
                    this.value = numericValue; // Mengatur nilai input hanya dengan karakter angka
                });
            </script>

            <script>
                document.getElementById("no_hp_ortu").addEventListener("input", function(event) {
                    let value = this.value;
                    let numericValue = value.replace(/\D/g, ""); // Menghapus semua karakter non-angka
                    this.value = numericValue; // Mengatur nilai input hanya dengan karakter angka
                });
            </script>

            <script>
                document.getElementById("nama_siswa").addEventListener("input", function(event) {
                    let value = this.value;
                    // Mengizinkan huruf, spasi, dan titik
                    let validValue = value.replace(/[^a-zA-Z\s.]/g, "");
                    this.value = validValue; // Mengatur nilai input hanya dengan karakter yang diizinkan
                });
            </script>

            <script>
                document.getElementById("tmpt_lhr").addEventListener("input", function(event) {
                    let value = this.value;
                    let alphabeticValue = value.replace(/[^a-zA-Z\s]/g, ""); // Menghapus semua karakter non-huruf dan spasi
                    this.value = alphabeticValue; // Mengatur nilai input hanya dengan karakter huruf dan spasi
                });
            </script>

            <script>
                document.getElementById("umur").addEventListener("input", function(event) {
                    if (this.value.length > 2) {
                        this.value = this.value.slice(0, 2); // Menghapus karakter yang melebihi dua digit
                    }
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

        </section>
    </main>
@endsection
