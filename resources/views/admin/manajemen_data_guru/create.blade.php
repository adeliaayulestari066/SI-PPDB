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
                <form method="post" action="{{ route('data-guru-simpan') }}" enctype="multipart/form-data">
                    @csrf
                    @method('POST')
                    <div class="mb-3">
                        <div class="form-floating">
                            <input name="nama_guru" type="text" class="form-control" id="floatingInput"
                                placeholder="Nama Guru" aria-describedby="floatingInputHelp" />
                            <label for="floatingInput">Nama Guru</label>
                        </div>
                    </div>
                    <div class="mb-3">
                        <div class="form-floating">
                            <input name="jabatan" type="text" class="form-control" id="floatingInput"
                                placeholder="Jabatan" aria-describedby="floatingInputHelp" />
                            <label for="floatingInput">Jabatan</label>
                        </div>
                    </div>
                    <div class="mb-3">
                        <div class="form-floating">
                            <input name="nip_nuptk" type="text" class="form-control" id="nip_nuptk"
                                placeholder="NIP/NUPTK" aria-describedby="floatingInputHelp" minlength="16"
                                maxlength="18" nullable/>
                            <label for="floatingInput">NIP/NUPTK</label>
                        </div>
                    </div>
                    <div class="mb-3">
                        <div class="form-floating">
                            <input name="alamat" type="text" class="form-control" id="floatingInput"
                                placeholder="Alamat" aria-describedby="floatingInputHelp" />
                            <label for="floatingInput">Alamat</label>
                        </div>
                    </div>
                    <div class="mb-3">
                        <div class="form-floating">
                            <input name="no_hp" type="text" class="form-control" id="no_hp"
                                placeholder="Nomor HP" aria-describedby="floatingInputHelp" minlength="10" maxlength="13" />
                            <label for="floatingInput">Nomor HP</label>
                        </div>
                    </div>
                    <div class="mb-3">
                        <div class="form-floating">
                            <input name="status_kepegawaian" type="text" class="form-control" id="floatingInput"
                                placeholder="Status Kepegawaian" aria-describedby="floatingInputHelp" />
                            <label for="floatingInput">Status Kepegawaian</label>
                        </div>
                    </div>
                    <div class="mb-3">
                        <div class="form-floating">
                            <input name="gambar" type="file" class="form-control" id="floatingInput"
                                placeholder="Foto Guru" aria-describedby="floatingInputHelp" accept=".jpg, .jpeg, .png" />
                            <label for="floatingInput">Foto Guru</label>
                        </div>
                    </div>
                    <button type="submit" class="btn btn-primary">Simpan</button>
                </form>
            </div>
        </div>
    </div>

    <script>
        document.getElementById("nip_nuptk").addEventListener("input", function(event) {
            let value = this.value;
            let numericValue = value.replace(/\D/g, ""); // Menghapus semua karakter non-angka
            this.value = numericValue; // Mengatur nilai input hanya dengan karakter angka
        });
    </script>
    <script>
        document.getElementById("no_hp").addEventListener("input", function(event) {
            let value = this.value;
            let numericValue = value.replace(/\D/g, ""); 
            this.value = numericValue; // Mengatur nilai input hanya dengan karakter angka
        });
    </script>
@endsection
