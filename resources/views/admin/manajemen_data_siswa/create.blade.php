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
                            <input name="nama_siswa" type="text" class="form-control" id="floatingInput" placeholder="Nama Siswa"
                                aria-describedby="floatingInputHelp" />
                            <label for="floatingInput">Nama Siswa</label>
                        </div>
                    </div>
                    <div class="mb-3">
                        <div class="form-floating">
                            <input name="umur" type="number" class="form-control" id="floatingInput" placeholder="Umur"
                                aria-describedby="floatingInputHelp" />
                            <label for="floatingInput">Umur</label>
                        </div>
                    </div>
                    <div class="mb-3">
                        <div class="form-floating">
                            <input name="tmpt_lhr" type="text" class="form-control" id="floatingInput" placeholder="Tempat Lahir"
                                aria-describedby="floatingInputHelp" />
                            <label for="floatingInput">Tempat Lahir</label>
                        </div>
                    </div>
                    <div class="mb-3">
                        <div class="form-floating">
                            <input name="tgl_lhr" type="date" class="form-control" id="floatingInput" placeholder="Tanggal Lahir"
                                aria-describedby="floatingInputHelp" />
                            <label for="floatingInput">Tanggal Lahir</label>
                        </div>
                    </div>
                    <div class="mb-3">
                        <div class="form-floating">
                            <input name="alamat" type="text" class="form-control" id="floatingInput" placeholder="Alamat"
                                aria-describedby="floatingInputHelp" />
                            <label for="floatingInput">Alamat</label>
                        </div>
                    </div>
                    <div class="mb-3">
                        <div class="form-floating">
                            <input name="agama" type="text" class="form-control" id="floatingInput" placeholder="Agama"
                                aria-describedby="floatingInputHelp" />
                            <label for="floatingInput">Agama</label>
                        </div>
                    </div>
                    <div class="mb-3">
                        <div class="form-floating">
                            <input name="nama_ayah" type="text" class="form-control" id="floatingInput" placeholder="Nama Ayah"
                                aria-describedby="floatingInputHelp" />
                            <label for="floatingInput">Nama Ayah</label>
                        </div>
                    </div>
                    <div class="mb-3">
                        <div class="form-floating">
                            <input name="pekerjaan_ayah" type="text" class="form-control" id="floatingInput" placeholder="Pekerjaan Ayah"
                                aria-describedby="floatingInputHelp" />
                            <label for="floatingInput">Pekerjaan Ayah</label>
                        </div>
                    </div>
                    <div class="mb-3">
                        <div class="form-floating">
                            <input name="nama_ibu" type="text" class="form-control" id="floatingInput" placeholder="Nama Ibu"
                                aria-describedby="floatingInputHelp" />
                            <label for="floatingInput">Nama Ibu</label>
                        </div>
                    </div>
                    <div class="mb-3">
                        <div class="form-floating">
                            <input name="pekerjaan_ibu" type="text" class="form-control" id="floatingInput" placeholder="Pekerjaan Ibu"
                                aria-describedby="floatingInputHelp" />
                            <label for="floatingInput">Pekerjaan Ibu</label>
                        </div>
                    </div>
                    <div class="mb-3">
                        <div class="form-floating">
                            <input name="no_hp_ortu" type="text" class="form-control" id="floatingInput" placeholder="No HP Orang Tua"
                                aria-describedby="floatingInputHelp" />
                            <label for="floatingInput">No HP Orang Tua</label>
                        </div>
                    </div>
                    <div class="mb-3">
                        <div class="form-floating">
                            <input name="foto_kk" type="file" class="form-control" id="floatingInput" placeholder="Foto KK"
                                aria-describedby="floatingInputHelp" />
                            <label for="floatingInput">Foto KK</label>
                        </div>
                    </div>
                    <div class="mb-3">
                        <div class="form-floating">
                            <input name="foto_akte" type="file" class="form-control" id="floatingInput" placeholder="Foto Akte"
                                aria-describedby="floatingInputHelp" />
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
@endsection
