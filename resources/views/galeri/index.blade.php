@extends('layouts.appuser')
@section('content')
<div class="container-xxl py-5">
    <div class="container">
        <div class="text-center mx-auto mb-5 wow fadeInUp" data-wow-delay="0.1s" style="max-width: 600px;">
            <h1 class="mb-3">Galeri</h1>
        </div>
    </div>
</div>
<section id="projects" class="projects">
  <div class="row row-cols-3">
      @foreach($galeri as $item)
          <div class="col">
              <div class="card">
                  <img src="{{ $item->gambar }}" class="card-img-top" alt="{{ $item->gambar }}" style="max-width: 100%; height: auto;">
                  <div class="card-body">
                      <p class="card-text">{{ $item->deskripsi }}</p>
                  </div>
              </div>
          </div>
      @endforeach
  </div>
</section>


@endsection