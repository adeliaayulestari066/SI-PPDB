@extends('layouts.admin')

@section('title', 'Tambah Data Galeri')

@section('main')
    <h4 class="fw-bold py-3 mb-4"><span class="text-muted fw-light">Data Galeri/</span> Tambah Data Galeri</h4>
    <!-- Basic Layout -->

    <div class="col-xl mx-auto" style="max-width: 700px">
        <div class="card mb-4">
            <div class="card-header d-flex justify-content-between align-items-center">
                <h5 class="mb-0">Form Pengisian Data Galeri</h5>
            </div>
            <div class="card-body">
                <form method="post" action="{{ route('data-galeri-simpan')}}" enctype="multipart/form-data">
                    @csrf
                    @method('POST')
                    <div class="mb-3">
                        <div class="form-floating">
                            <input name="gambar" type="file" class="form-control" id="gambar" placeholder="Gambar"
                                aria-describedby="floatingInputHelp" />
                            <label for="gambar">Gambar</label>
                        </div>
                    </div>
                    <div class="mb-3">
                        <div class="form-floating">
                            <input name="deskripsi" type="text" class="form-control" id="deskripsi" placeholder="Deskripsi"
                                aria-describedby="floatingInputHelp" />
                            <label for="deskripsi">Deskripsi</label>
                        </div>
                    </div>
                    <button type="submit" class="btn btn-primary">Simpan</button>
                </form>
            </div>
        </div>
    </div>
@endsection
