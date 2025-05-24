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
            <h4 class="text-white display-4 mb-4 wow fadeInDown" data-wow-delay="0.1s">Prestasi</h4>
            <ol class="breadcrumb d-flex justify-content-center mb-0 wow fadeInDown" data-wow-delay="0.3s">
                <li class="breadcrumb-item"><a href="/" class="text-white">Beranda</a></li>
                <li class="breadcrumb-item active text-warning">Prestasi</li>
            </ol>
        </div>
    </div>
    <div class="container-fluid feature bg-light py-5">
        <div class="container py-5">
            <div class="row g-4">
                @foreach ($prestasi as $data)
                    <div class="col-md-6 col-lg-6 col-xl-3 d-flex">
                        <div class="feature-item p-4 pt-0 w-100">
                            <div class="feature-icon text-center">
                                <img src="{{ asset('storage/prestasi/' . $data->foto) }}" alt="" width="100"
                                    class="mt-2 mb-3 rounded">
                            </div>
                            <div class="flex-grow-2">
                                <h4 class="mb-3">{{ $data->nama_prestasi }}</h4>
                                <p class="card-text text-muted">{{ Str::limit(strip_tags($data->deskripsi), 90) }}</p>
                                <a href="{{ url('detailprestasi', $data->id) }}"
                                    class="mt-auto btn btn-link text-warning p-0">
                                    SELENGKAPNYA <i class="fa fa-arrow-right"></i>
                                </a>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </div>
@endsection
