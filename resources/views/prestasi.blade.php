@extends('layouts.frontend')
@section('content')
    <div class="hero-wrap hero-wrap-2"
        style="background-image: url('frontend/images/download.jpg'); background-attachment:fixed;">
        <div class="overlay"></div>
        <div class="container">
            <div class="row no-gutters slider-text align-items-center justify-content-center" data-scrollax-parent="true">
                <div class="col-md-8 ftco-animate text-center">
                    <p class="breadcrumbs"><span class="mr-2"><a href="/">Beranda</a></span> <span>Prestasi</span></p>
                    <h1 class="mb-3 bread">Prestasi</h1>
                </div>
            </div>
        </div>
    </div>

    <section class="ftco-section">
        <div class="container">
            <div class="row">
                @foreach ($prestasi as $data)
                    <div class="col-md-4 d-flex ftco-animate">
                        <div class="blog-entry align-self-stretch">
                            <img src="{{ asset('storage/prestasi/' . $data->foto) }}" alt="" width="100" class="block-20"> 
                            <div
                                class="text p-4 d-block">
                            {{-- <div class="meta mb-3">
                                    <div><a href="#">Sep. 10, 2018</a></div>
                                    <div><a href="#">Admin</a></div>
                                    <div><a href="#" class="meta-chat"><span class="icon-chat"></span> 3</a></div>
                                </div> --}}
                            <h5 class="fw-bolder">{{ $data->nama_prestasi }}</h5>
                            <p class="fw-bolder">{{ $data->jenis }}</p>
                            <p class="fw-bolder">{{ $data->deskripsi }}</p>
                        </div>
                    </div>
            </div>
            @endforeach
        </div>
        </div>
    </section>
@endsection
