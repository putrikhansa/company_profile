@extends('layouts.frontend')
@section('content')
    <!-- Spinner Start -->
    <div id="spinner"
        class="show bg-white position-fixed translate-middle w-100 vh-100 top-50 start-50 d-flex align-items-center justify-content-center">
        <div class="spinner-border text-primary" style="width: 3rem; height: 3rem;" role="status">
            <span class="sr-only">Loading...</span>
        </div>
    </div>
    <!-- Spinner End -->

    <div class="container-fluid bg-breadcrumb position-relative"
        style="background-image: url('frontend/img/Introducing UGM - Universitas Gadjah Mada.jpeg'); background-size: cover; background-position: center; background-repeat: no-repeat;">

        <!-- Overlay gelap -->
        <div
            style="
        position: absolute;
        top: 0;
        left: 0;
        height: 100%;
        width: 100%;
        background: rgba(0, 0, 0, 0.5); 
        z-index: 1;">
        </div>

        <!-- Konten di atas overlay -->
        <div class="container text-center py-5 position-relative" style="max-width: 900px; z-index: 2;">
            <h4 class="text-white display-4 mb-4 wow fadeInDown" data-wow-delay="0.1s">Ukm</h4>
            <ol class="breadcrumb d-flex justify-content-center mb-0 wow fadeInDown" data-wow-delay="0.3s">
                <li class="breadcrumb-item"><a href="/" class="text-white">Beranda</a></li>
                <li class="breadcrumb-item active text-warning">Ukm</li>
            </ol>
        </div>
    </div>
    <br>
    <div class="container-fluid service py-5">
        <div class="container py-5">
            <div class="text-center mx-auto pb-5 wow fadeInUp" data-wow-delay="0.2s" style="max-width: 800px;">
            </div>
            <div class="row g-4 justify-content-center">
                @foreach ($ukm as $data)
                    <div class="col-md-6 col-lg-6 col-xl-3 wow fadeInUp" data-wow-delay="0.2s">
                        <div class="card h-100 border-0 shadow-sm rounded-4">
                            <div class="position-relative">
                                <img src="{{ asset('storage/ukm/' . $data->foto) }}" alt=""
                                    class="card-img-top rounded-top mt-2 mb-2" style="height: 200px; object-fit: cover;">
                                {{-- <div class="position-absolute top-0 end-0 m-3 bg-white rounded-circle p-2 shadow-sm">
                                    {{-- <i class="fa fa-building fa-lg text-primary"></i> --}}
                                {{-- </div>  --}}
                            </div>
                            <div class="card-body d-flex flex-column">
                                <h5 class="card-title">{{ $data->nama_ukm }}</h5>
                                <p class="card-text text-muted">
                                    {{ Str::limit(strip_tags($data->deskripsi), 120) }}
                                </p>
                                {{-- <a href="{{ url('detailfakul', $data->id) }}"
                                    class="btn btn-outline-warning mt-auto">Selengkapnya</a> --}}
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>

        </div>
    </div>
@endsection
