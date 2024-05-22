@extends('layouts.admin')

@section('title', 'Edit Data Galeri')

@section('main')
    <h4 class="fw-bold py-3 mb-4"><span class="text-muted fw-light">Data Galeri/</span> Edit Data Galeri</h4>
    <div class="col-xl mx-auto" style="max-width: 700px">
        <div class="card mb-4">
            <div class="card-header d-flex justify-content-between align-items-center">
                <h5 class="mb-0">Form Edit Data Galeri</h5>
            </div>
            <div class="card-body">
                <form action="/galeri/{{ $galeri->id }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    @method('PUT')
                    <div class="mb-3">
                        <div class="form-floating">
                            <input name="gambar" value="{{ $galeri->gambar }}" type="file" class="form-control" id="gambar"
                                accept=".jpg, .jpeg, .png" required />
                            <label for="gambar" class="form-label">Gambar</label>
                        </div>
                    </div>
                    <div class="mb-3">
                        <div class="form-floating">
                            <input name="deskripsi" value="{{ $galeri->deskripsi }}" type="text" class="form-control"
                                id="deskripsi" placeholder="Deskripsi" aria-describedby="floatingInputHelp" required />
                            <label for="deskripsi">Deskripsi</label>
                        </div>
                    </div>
                    <!-- Tambahkan input untuk atribut lainnya sesuai dengan skema tabel -->
                    <button type="submit" class="btn btn-primary">Perbarui Data</button>
                </form>
            </div>
        </div>
    </div>
@endsection
