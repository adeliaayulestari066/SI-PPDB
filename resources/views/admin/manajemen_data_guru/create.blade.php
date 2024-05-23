@extends('layouts.admin')

@section('title', 'Tambah Data Guru')

@section('main')
    <h4 class="fw-bold py-3 mb-4"><span class="text-muted fw-light">Data Guru/</span> Tambah Data Guru</h4>
    <!-- Basic Layout -->

    <div class="col-xl mx-auto" style="max-width: 700px">
        <div class="card mb-4">
            <div class="card-header d-flex justify-content-between align-items-center">
                <h5 class="mb-0">Form Pengisian Data Guru</h5>
            </div>
            <div class="card-body">
                <form id="guruForm" method="post" action="{{ route('data-guru-simpan') }}" enctype="multipart/form-data">
                    @csrf
                    @method('POST')
                    <div class="mb-3">
                        <div class="form-floating">
                            <input name="nama_guru" type="text" class="form-control" id="nama_guru"
                                placeholder="Nama Guru" aria-describedby="floatingInputHelp" required />
                            <label for="floatingInput">Nama Guru</label>
                        </div>
                    </div>
                    <div class="mb-3">
                        <div class="form-floating">
                            <input name="jabatan" type="text" class="form-control" id="jabatan"
                                placeholder="Jabatan" aria-describedby="floatingInputHelp" required />
                            <label for="floatingInput">Jabatan</label>
                        </div>
                    </div>
                    <div class="mb-3">
                        <div class="form-floating">
                            <input name="nip_nuptk" type="text" class="form-control" id="nip_nuptk"
                                placeholder="NIP/NUPTK" aria-describedby="floatingInputHelp" minlength="16" maxlength="18"
                                nullable />
                            <label for="floatingInput">NIP/NUPTK</label>
                            <small id="nip_nuptk_error" class="text-danger"></small>
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
                            <input name="no_hp" type="text" class="form-control" id="no_hp" placeholder="Nomor HP"
                                aria-describedby="floatingInputHelp" minlength="10" maxlength="13" required />
                            <label for="floatingInput">Nomor HP</label>
                            <small id="no_hp_error" class="text-danger"></small>
                        </div>
                    </div>
                    <div class="mb-3">
                        <div class="form-floating">
                            <input name="status_kepegawaian" type="text" class="form-control" id="status_kepegawaian"
                                placeholder="Status Kepegawaian" aria-describedby="floatingInputHelp" required />
                            <label for="floatingInput">Status Kepegawaian</label>
                        </div>
                    </div>
                    <div class="mb-3">
                        <div class="form-floating">
                            <input name="gambar" type="file" class="form-control" id="floatingInput"
                                placeholder="Foto Guru" aria-describedby="floatingInputHelp" accept=".jpg, .jpeg, .png"
                                required />
                            <label for="floatingInput">Foto Guru</label>
                        </div>
                    </div>
                    <button type="submit" class="btn btn-primary">Simpan</button>
                </form>
            </div>
        </div>
    </div>

    <script>
        document.getElementById("guruForm").addEventListener("submit", function(e) {
            let isValid = true;

            // Validasi Nomor HP
            let noHp = document.getElementById("no_hp").value;
            if (!(/^\d+$/.test(noHp)) || noHp.length < 10 || noHp.length > 13) {
                e.preventDefault(); // Mencegah pengiriman formulir
                document.getElementById("no_hp_error").innerText =
                    "Nomor HP harus berupa angka dan berjumlah antara 10 sampai 13 digit.";
                isValid = false;
            } else {
                document.getElementById("no_hp_error").innerText = ""; // Menghapus pesan error jika valid
            }

            // Validasi NIP/NUPTK
            let nipNuptk = document.getElementById("nip_nuptk").value;
            if (nipNuptk && (!(/^\d+$/.test(nipNuptk)) || nipNuptk.length < 16 || nipNuptk.length > 18)) {
                e.preventDefault(); // Mencegah pengiriman formulir
                document.getElementById("nip_nuptk_error").innerText =
                    "NIP/NUPTK harus berupa angka dan berjumlah antara 16 sampai 18 digit.";
                isValid = false;
            } else {
                document.getElementById("nip_nuptk_error").innerText = ""; // Menghapus pesan error jika valid
            }

            if (!isValid) {
                e.preventDefault();
            }
        });

        document.getElementById("nip_nuptk").addEventListener("input", function(event) {
            let value = this.value;
            let numericValue = value.replace(/\D/g, ""); // Menghapus semua karakter non-angka
            this.value = numericValue; // Mengatur nilai input hanya dengan karakter angka
        });

        document.getElementById("no_hp").addEventListener("input", function(event) {
            let value = this.value;
            let numericValue = value.replace(/\D/g, "");
            this.value = numericValue; // Mengatur nilai input hanya dengan karakter angka
        });

        document.getElementById("nama_guru").addEventListener("input", function(event) {
            let value = this.value;
            // Mengizinkan huruf, spasi, dan titik
            let validValue = value.replace(/[^a-zA-Z\s.]/g, "");
            this.value = validValue; // Mengatur nilai input hanya dengan karakter yang diizinkan
        });

        document.getElementById("jabatan").addEventListener("input", function(event) {
            let value = this.value;
            let lettersOnlyValue = value.replace(/[^a-zA-Z\s]/g, ""); // Mengizinkan hanya huruf dan spasi
            this.value = lettersOnlyValue; // Mengatur nilai input hanya dengan karakter huruf dan spasi
        });

        document.getElementById("status_kepegawaian").addEventListener("input", function(event) {
            let value = this.value;
            let validValue = value.replace(/[^a-zA-Z\s()]/g, ""); // Mengizinkan huruf, spasi, dan tanda kurung
            this.value = validValue; // Mengatur nilai input hanya dengan karakter yang diizinkan
        });

        document.getElementById("simpan").addEventListener("click", function(event) {
            // Mendapatkan semua input dalam form
            let inputs = document.querySelectorAll("#form input[type='text']");
            let isValid = true;
            let messages = [];

            // Memeriksa setiap input kecuali nip_nuptk
            inputs.forEach(function(input) {
                if (input.id !== "nip_nuptk" && input.value.trim() === "") {
                    isValid = false;
                    messages.push(input.placeholder + " tidak boleh kosong");
                }
            });

            // Menampilkan pesan jika ada input yang kosong
            if (!isValid) {
                alert(messages.join("\n"));
            } else {
                // Lakukan penyimpanan data di sini
                alert("Data berhasil disimpan!");
            }
        });
    </script>
@endsection
