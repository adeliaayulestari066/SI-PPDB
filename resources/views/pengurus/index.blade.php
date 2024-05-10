@extends('layouts.appuser')
@section('content')
    <!-- Team Start -->
    <div class="container-xxl py-5">
        <div class="container">
            <div class="text-center mx-auto mb-5 wow fadeInUp" data-wow-delay="0.1s" style="max-width: 600px;">
                <h1 class="mb-3">Pengajar TK Al-Muchlis</h1>
                <p class="text-center">Para pengajar ???</p>
            </div>
            <div class="row">
                @php $count = 0; @endphp
                @foreach($guru as $teacher)
                    @if($count % 3 == 0)
                        </div><div class="row"><!-- Close and reopen row after every 3rd image -->
                    @endif
                    <div class="col-xl col-md-6 mb-4">
                        <div class="post-item position-relative h-100">
                            <div class="post-img position-relative overflow-hidden text-center">
                                <img src="/Foto Guru/{{asset($teacher->gambar)}}" alt="Foto Guru" class="img-fluid rounded mb-3" style="max-width: 250px;">
                            </div>
                            <div class="post-content d-flex flex-column">
                                <h3 class="post-title text-center">{{ $teacher->nama_guru }}</h3>
                                <div class="meta d-flex align-items-center justify-content-center">
                                    <div class="text-center">
                                        <span>{{ $teacher->jabatan }}</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    @php $count++; @endphp
                @endforeach
            </div><!-- Close row -->
        </div>
    </div>
    <!-- Team End -->
    <style>
        .post-img img {
            margin-bottom: 15px;
        }
    </style>
@endsection
