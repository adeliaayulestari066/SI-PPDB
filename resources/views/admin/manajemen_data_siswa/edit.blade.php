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
                <form action="/siswa/{{ $siswa->id }}" method="POST""
                    enctype="multipart/form-data">
                    @csrf
                    @method('put')
                    <div class="mb-3">
                        <div class="form-floating">
                            <input name="nama_siswa" value="{{ $siswa->nama_siswa }}" type="text" class="form-control"
                                id="floatingInput" placeholder="Nama Siswa" aria-describedby="floatingInputHelp" />
                            <label for="floatingInput">Nama Siswa</label>
                        </div>
                    </div>
                    <div class="mb-3">
                        <div class="form-floating">
                            <input name="umur" value="{{ $siswa->umur }}" type="number" class="form-control"
                                id="floatingInput" placeholder="Umur" aria-describedby="floatingInputHelp" />
                            <label for="floatingInput">Umur</label>
                        </div>
                    </div>
                    <div class="mb-3">
                        <div class="form-floating">
                            <input name="tmpt_lhr" value="{{ $siswa->tmpt_lhr }}" type="text" class="form-control"
                                id="floatingInput" placeholder="Tempat Lahir" aria-describedby="floatingInputHelp" />
                            <label for="floatingInput">Tempat Lahir</label>
                        </div>
                    </div>
                    <div class="mb-3">
                        <div class="form-floating">
                            <input name="tgl_lhr" value="{{ $siswa->tgl_lhr }}" type="date" class="form-control"
                                id="floatingInput" placeholder="Tanggal Lahir" aria-describedby="floatingInputHelp" />
                            <label for="floatingInput">Tanggal Lahir</label>
                        </div>
                    </div>
                    <div class="mb-3">
                        <div class="form-floating">
                            <input name="alamat" value="{{ $siswa->alamat }}" type="text" class="form-control"
                                id="floatingInput" placeholder="Alamat" aria-describedby="floatingInputHelp" />
                            <label for="floatingInput">Alamat</label>
                        </div>
                    </div>
                    <div class="mb-3">
                        <div class="form-floating">
                            <input name="agama" value="{{ $siswa->agama }}" type="text" class="form-control"
                                id="floatingInput" placeholder="Agama" aria-describedby="floatingInputHelp" />
                            <label for="floatingInput">Agama</label>
                        </div>
                    </div>
                    <div class="mb-3">
                        <div class="form-floating">
                            <input name="nama_ayah" value="{{ $siswa->nama_ayah }}" type="text" class="form-control"
                                id="floatingInput" placeholder="Nama Ayah" aria-describedby="floatingInputHelp" />
                            <label for="floatingInput">Nama Ayah</label>
                        </div>
                    </div>
                    <div class="mb-3">
                        <div class="form-floating">
                            <input name="pekerjaan_ayah" value="{{ $siswa->pekerjaan_ayah }}" type="text"
                                class="form-control" id="floatingInput" placeholder="Pekerjaan Ayah"
                                aria-describedby="floatingInputHelp" />
                            <label for="floatingInput">Pekerjaan Ayah</label>
                        </div>
                    </div>
                    <div class="mb-3">
                        <div class="form-floating">
                            <input name="nama_ibu" value="{{ $siswa->nama_ibu }}" type="text" class="form-control"
                                id="floatingInput" placeholder="Nama Ibu" aria-describedby="floatingInputHelp" />
                            <label for="floatingInput">Nama Ibu</label>
                        </div>
                    </div>
                    <div class="mb-3">
                        <div class="form-floating">
                            <input name="pekerjaan_ibu" value="{{ $siswa->pekerjaan_ibu }}" type="text"
                                class="form-control" id="floatingInput" placeholder="Pekerjaan Ibu"
                                aria-describedby="floatingInputHelp" />
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
                                class="form-control" id="floatingInput" placeholder="Nomor HP Orang Tua"
                                aria-describedby="floatingInputHelp" />
                            <label for="floatingInput">Nomor HP Orang Tua</label>
                        </div>
                    </div>
                    <!-- Tambahkan input untuk atribut lainnya sesuai dengan skema tabel -->
                    <button type="submit" class="btn btn-primary">Perbarui Data</button>
                </form>
            </div>
        </div>
    </div>
@endsection
