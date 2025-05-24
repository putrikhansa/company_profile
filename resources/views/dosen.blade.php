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
            <h4 class="text-white display-4 mb-4 wow fadeInDown" data-wow-delay="0.1s">Dosen</h4>
            <ol class="breadcrumb d-flex justify-content-center mb-0 wow fadeInDown" data-wow-delay="0.3s">
                <li class="breadcrumb-item"><a href="/" class="text-white">Beranda</a></li>
                <li class="breadcrumb-item active text-primary">Dosen</li>
            </ol>
        </div>
    </div>


    <div class="about container-fluid team pb-5">
        <div class="container pb-5">
            <div class="row d-flex">
                @foreach ($dosen as $data)
                    <div class="col-md-4 col-lg-4 col-xl-3 wow fadeInUp" data-wow-delay="0.2s">
                        <div class="team-item">
                            <div class="team-img">
                                <img src="{{ asset('storage/dosen/' . $data->foto) }}" alt=""
                                    class="rounded-top w-100">
                                <div class="team-icon">
                                    <a class="btn btn-primary" href="#">{{ $data->status }}</a>
                                    <a class="btn btn-primary mt-1" href="#">{{ $data->telepon }}</a>
                                    <a class="btn btn-primary mt-1" href="#">{{ $data->email }}</a>
                                </div>
                            </div>
                            <div class="team-title p-3">
                                <h4 class="mb-0">{{ $data->nama_dosen }}</h4>
                                <p class="mb-0">{{ $data->jabatan }}</p>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </div>
@endsection
