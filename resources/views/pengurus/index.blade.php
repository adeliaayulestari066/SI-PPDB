@extends('layouts.appuser')
@section('content')
    <!-- Team Start -->
    <div class="container-xxl py-5">
        <div class="container">
            <div class="text-center mx-auto mb-5 wow fadeInUp" data-wow-delay="0.1s" style="max-width: 600px;">
                <h1 class="mb-3">Popular Teachers</h1>
                <p>Ini guru terkenal di bengkulu</p>
            </div>
            @foreach($guru as $teacher)
    <div class="col-xl-4 col-md-6">
        <div class="post-item position-relative h-100">
            <div class="post-img position-relative overflow-hidden">
                <img src="{{ $teacher->gambar }}" class="card-img-top" alt="{{ $teacher->nama_guru }}" style="max-width: 100%; height: auto;">
            </div>
            <div class="post-content d-flex flex-column">
                <h3 class="post-title">{{ $teacher->nama_guru }}</h3>
                <div class="meta d-flex align-items-center">
                    <div class="d-flex align-items-center">
                        <span>{{ $teacher->jabatan }}</span>
                    </div>
                </div>
            </div>
        </div>
    </div><!-- End post list item -->
@endforeach


        </div>
    </div>
    <!-- Team End -->
@endsection