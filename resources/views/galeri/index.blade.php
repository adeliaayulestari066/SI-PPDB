@extends('layouts.appuser')
@section('content')
<div class="container-xxl pt-5 pb-3">
    <div class="container" style="margin-bottom: 20px;"> <!-- Tambahkan margin-bottom -->
        <div class="text-center mx-auto  wow fadeInUp" data-wow-delay="0.1s" style="max-width: 600px;">
            <h1 class="mb-3">Galeri</h1>
        </div>
    </div>
</div>
<section id="projects" class="projects">
    <style>
        .img-container {
            position: relative;
            overflow: hidden;
            margin-bottom: 20px; /* Tambahkan margin bottom pada setiap gambar */
        }

        .img-container img {
            transition: transform 0.3s ease; /* Efek transisi */
        }

        .img-container:hover img {
            transform: scale(1.1); /* Perbesar gambar saat hover */
        }

        .img-container .overlay {
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background: rgba(0, 0, 0, 0.7);
            opacity: 0;
            transition: opacity 0.3s ease;
        }

        .img-container:hover .overlay {
            opacity: 1;
        }

        .img-container .description {
            position: absolute;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
            text-align: center;
            color: #fff;
            width: 100%;
            padding: 20px;
        }
    </style>
    <div class="row row-cols-3 m-4">
        @foreach($galeri as $item)
        <div class="col">
            <div class="img-container">
                <img src="/Foto Galeri/{{ $item->gambar }}" alt="Foto Guru" class="img-fluid rounded mb-3">
                <div class="overlay">
                    <div class="description">
                        <p>{{ $item->deskripsi }}</p>
                    </div>
                </div>
            </div>
        </div>
        @endforeach
    </div>
</section>
@endsection
