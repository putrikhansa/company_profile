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

    <div class="container-fluid bg-breadcrumb">
        <div class="container text-center py-5" style="max-width: 900px;">
            <h4 class="text-white display-4 mb-4 wow fadeInDown" data-wow-delay="0.1s">Fasilitas </h4>
            <ol class="breadcrumb d-flex justify-content-center mb-0 wow fadeInDown" data-wow-delay="0.3s">
                <li class="breadcrumb-item"><a href="/">Beranda</a></li>
                <li class="breadcrumb-item active text-primary">Fasilitas</li>
            </ol>
        </div>
    </div>

    <br>





    <!-- Service Start -->
    <div class="container-fluid service py-5">
        <div class="container py-5">
            <div class="text-center mx-auto pb-5 wow fadeInUp" data-wow-delay="0.2s" style="max-width: 800px;">
                <h1 class="display-4 mb-4">Fasilitas</h1>
                <p class="mb-0">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Tenetur adipisci facilis
                    cupiditate recusandae aperiam temporibus corporis itaque quis facere, numquam, ad culpa deserunt sint
                    dolorem autem obcaecati, ipsam mollitia hic.
                </p>
            </div>
            <div class="row g-4 justify-content-center">
                @foreach ($fasilitas as $data)
                    <div class="col-md-6 col-lg-6 col-xl-3 wow fadeInUp" data-wow-delay="0.2s">
                        <div class="service-item">
                            <div class="service-img">
                                <img src="{{ asset('/storage/fasilitas/' . $data->foto) }}"
                                    alt="Foto {{ $data->nama_fasilitas }}" class="img-fluid rounded-top w-100">
                                {{-- <div class="service-icon p-3">
                                    <i class="fa fa-building fa-2x"></i>
                                </div> --}}
                            </div>
                            <div class="service-content p-4">
                                <div class="service-content-inner">
                                    <a href="#" class="d-inline-block h4 mb-4">{{ $data->nama_fasilitas }}</a>
                                    <p class="mb-4">{{ $data->deskripsi }}</p>
                                    {{-- <a class="btn btn-primary rounded-pill py-2 px-4" href="#">Read More</a> --}}
                                </div>
                            </div>
                        </div>
                    </div>
                @endforeach
                {{-- <div class="col-12 text-center wow fadeInUp" data-wow-delay="0.2s">
                    <a class="btn btn-primary rounded-pill py-3 px-5" href="#">More Services</a>
                </div> --}}
            </div>
        </div>
    </div>
    <!-- Service End -->
@endsection
