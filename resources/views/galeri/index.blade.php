@extends('layouts.appuser')
@section('content')
<div class="container-xxl py-5">
    <div class="container">
        <div class="text-center mx-auto mb-5 wow fadeInUp" data-wow-delay="0.1s" style="max-width: 600px;">
            <h1 class="mb-3">Galeri</h1>
        </div>
    </div>
</div>
  <style>
    .portfolio {
      display: flex;
      flex-wrap: wrap;
    }

    .item {
      width: 283px;
      margin: 10px;
    }

    .item img {
      width: 100%;
      height: auto;
    }

    .description {
      background-color: #f4f4f4;
      padding: 10px;
      text-align: center;
    }

    .description h2 {
      margin-top: 0;
    }

    .description p {
      margin-bottom: 0;
    }
  </style>

<body>
  <div class="portfolio">
    <div class="item">
      <img src="gambar1.jpg" alt="Deskripsi Gambar 1">
      <div class="description">
        <h2>Proyek 1</h2>
        <p>Deskripsi proyek 1.</p>
      </div>
    </div>
    <div class="item">
      <img src="gambar2.jpg" alt="Deskripsi Gambar 2">
      <div class="description">
        <h2>Proyek 2</h2>
        <p>Deskripsi proyek 2.</p>
      </div>
    </div>
    <div class="item">
        <img src="gambar2.jpg" alt="Deskripsi Gambar 2">
        <div class="description">
          <h2>Proyek 3</h2>
          <p>Deskripsi proyek 3.</p>
        </div>
    </div>
    <div class="item">
        <img src="gambar2.jpg" alt="Deskripsi Gambar 2">
        <div class="description">
          <h2>Proyek 4</h2>
          <p>Deskripsi proyek 4.</p>
        </div>
    </div>
    <div class="item">
        <img src="gambar2.jpg" alt="Deskripsi Gambar 2">
        <div class="description">
          <h2>Proyek 5</h2>
          <p>Deskripsi proyek 5.</p>
        </div>
    </div>
    <!-- Tambahkan item portofolio lainnya sesuai kebutuhan -->
  </div>
</body>

@endsection