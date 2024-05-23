@extends('layouts.admin')

@section('title', 'Edit Data Guru')

@section('main')
    <h4 class="fw-bold py-3 mb-4"><span class="text-muted fw-light">Data Guru/</span> Edit Data Guru</h4>
    <div class="col-xl mx-auto" style="max-width: 700px">
        <div class="card mb-4">
            <div class="card-header d-flex justify-content-between align-items-center">
                <h5 class="mb-0">Form Edit Data Guru</h5>
            </div>
            <div class="card-body">
                <form id="guruForm" action="/guru/{{ $guru->id }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    @method('PUT')
                    <div class="mb-3">
                        <div class="form-floating">
                            <input required name="nama_guru" value="{{ $guru->nama_guru }}" type="text"
                                class="form-control" id="nama_guru" placeholder="Nama Guru"
                                aria-describedby="floatingInputHelp" />
                            <label for="floatingInput">Nama Guru</label>
                        </div>
                    </div>
                    <div class="mb-3">
                        <div class="form-floating">
                            <input name="jabatan" value="{{ $guru->jabatan }}" type="text" class="form-control"
                                id="jabatan" placeholder="Jabatan" aria-describedby="floatingInputHelp" required />
                            <label for="floatingInput">Jabatan</label>
                        </div>
                    </div>

                    <div class="mb-3">
                        <div class="form-floating">
                            <input name="nip_nuptk" value="{{ $guru->nip_nuptk }}" type="text" class="form-control"
                                id="nip_nuptk" placeholder="NIP/NUPTK" aria-describedby="floatingInputHelp" minlength="16"
                                maxlength="18" />
                            <label for="floatingInput">NIP/NUPTK</label>
                        </div>
                        <div id="nip_nuptk_error" class="text-danger mt-2"></div>
                    </div>

                    <div class="mb-3">
                        <div class="form-floating">
                            <input name="alamat" value="{{ $guru->alamat }}" type="text" class="form-control"
                                id="floatingInput" placeholder="Alamat" aria-describedby="floatingInputHelp" required />
                            <label for="floatingInput">Alamat</label>
                        </div>
                    </div>
                    <div class="mb-3">
                        <div class="form-floating">
                            <input name="no_hp" value="{{ $guru->no_hp }}" type="text" class="form-control"
                                id="no_hp" placeholder="Nomor HP" aria-describedby="floatingInputHelp" minlength="10"
                                maxlength="13" required />
                            <label for="floatingInput">Nomor HP</label>
                            <div id="no_hp_error" class="text-danger mt-2"></div>
                        </div>
                    </div>
                    <div class="mb-3">
                        <div class="form-floating">
                            <input name="status_kepegawaian" value="{{ $guru->status_kepegawaian }}" type="text"
                                class="form-control" id="status_kepegawaian" placeholder="Status Kepegawaian"
                                aria-describedby="floatingInputHelp" required />
                            <label for="floatingInput">Status Kepegawaian</label>
                        </div>
                    </div>
                    <div class="mb-3">
                        <label for="gambar" class="form-label">Gambar</label>
                        <input name="gambar" class="form-control" type="file" id="gambar"
                            accept=".jpg, .jpeg, .png" />
                    </div>
                    <!-- Tambahkan input untuk atribut lainnya sesuai dengan skema tabel -->
                    <button type="submit" class="btn btn-primary">Perbarui Data</button>
                </form>
            </div>
        </div>
    </div>

    <script>
        document.getElementById("guruForm").addEventListener("submit", function(e) {
            // Memeriksa panjang nomor HP
            let noHp = document.getElementById("no_hp").value;
            if (!(/^\d+$/.test(noHp)) || noHp.length < 10 || noHp.length > 13) {
                e.preventDefault(); // Mencegah pengiriman formulir
                document.getElementById("no_hp_error").innerText =
                    "Nomor HP harus berupa angka dan berjumlah antara 10 sampai 13 digit.";
            } else {
                document.getElementById("no_hp_error").innerText = ""; // Menghapus pesan error jika valid
            }

            // Memeriksa panjang NIP/NUPTK jika tidak kosong
            let nipNuptk = document.getElementById("nip_nuptk").value;
            if (nipNuptk && (!(/^\d+$/.test(nipNuptk)) || nipNuptk.length < 16 || nipNuptk.length > 18)) {
                e.preventDefault(); // Mencegah pengiriman formulir
                document.getElementById("nip_nuptk_error").innerText =
                    "NIP/NUPTK harus berupa angka dan berjumlah antara 16 sampai 18 digit.";
            } else {
                document.getElementById("nip_nuptk_error").innerText = ""; // Menghapus pesan error jika valid
            }

            // Menambahkan modal untuk konfirmasi ulang jika NIP/NUPTK awalnya terisi dan sekarang menjadi kosong
            let nipNuptkBefore = "{{ $guru->nip_nuptk }}"; // Nilai NIP/NUPTK sebelumnya
            if (nipNuptkBefore && !nipNuptk) {
                // Tampilkan modal konfirmasi jika NIP/NUPTK awalnya terisi dan sekarang menjadi kosong
                $('#confirmationModal').modal('show');
                e.preventDefault(); // Mencegah pengiriman formulir
            }
        });
    </script>

    <script>
        document.getElementById("nama_guru").addEventListener("input", function(event) {
            let value = this.value;
            // Mengizinkan huruf, spasi, dan titik
            let validValue = value.replace(/[^a-zA-Z\s.]/g, "");
            this.value = validValue; // Mengatur nilai input hanya dengan karakter yang diizinkan
        });
    </script>

    <script>
        document.getElementById("no_hp").addEventListener("input", function(event) {
            let value = this.value;
            let numericValue = value.replace(/\D/g, "");
            this.value = numericValue; // Mengatur nilai input hanya dengan karakter angka
        });

        // Memastikan hanya angka yang diterima untuk input NIP/NUPTK
        document.getElementById("nip_nuptk").addEventListener("input", function(event) {
            let value = this.value;
            let numericValue = value.replace(/\D/g, "");
            this.value = numericValue; // Mengatur nilai input hanya dengan karakter angka
        });
    </script>

    <script>
        document.getElementById("jabatan").addEventListener("input", function(event) {
            let value = this.value;
            let lettersOnlyValue = value.replace(/[^a-zA-Z\s]/g, ""); // Mengizinkan hanya huruf dan spasi
            this.value = lettersOnlyValue; // Mengatur nilai input hanya dengan karakter huruf dan spasi
        });
    </script>

    <script>
        document.getElementById("status_kepegawaian").addEventListener("input", function(event) {
            let value = this.value;
            let validValue = value.replace(/[^a-zA-Z\s()]/g, ""); // Mengizinkan huruf, spasi, dan tanda kurung
            this.value = validValue; // Mengatur nilai input hanya dengan karakter yang diizinkan
        });
    </script>

    <!-- Modal -->
    <div id="confirmationModal" class="modal" tabindex="-1" role="dialog">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">Konfirmasi</h5>
                </div>
                <div class="modal-body">
                    Data NIP/NUPTK yang sebelumnya ada isi akan kosong, apakah anda yakin akan memperbarui data ini?
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal" id="btnNo">Tidak</button>
                    <button type="button" class="btn btn-primary" id="btnYes">Ya</button>
                </div>
            </div>
        </div>
    </div>

    <script>
        // Ambil tombol "Tidak" pada modal
        var btnNo = document.getElementById("btnNo");

        // Tambahkan event listener untuk tombol "Tidak"
        btnNo.addEventListener("click", function() {
            // Sembunyikan modal
            $('#confirmationModal').modal('hide');
            // Kembali ke halaman sebelumnya
            window.location.href = previousPageURL;
        });

        // Ambil tombol "Ya" pada modal
        var btnYes = document.getElementById("btnYes");

        // Tambahkan event listener untuk tombol "Ya"
        btnYes.addEventListener("click", function() {
            // Lakukan tindakan yang diperlukan saat pengguna menekan tombol "Ya"
            // Contoh: Kirimkan formulir atau jalankan fungsi untuk menyimpan perubahan
            // Setelah itu, sembunyikan modal
            document.getElementById("guruForm").submit(); // contoh: mengirimkan formulir
            $('#confirmationModal').modal('hide'); // sembunyikan modal
            // Hapus modal dari DOM setelah ditutup
            $('#confirmationModal').on('hidden.bs.modal', function(e) {
                $(this).remove();
            });
        });
    </script>

@endsection
