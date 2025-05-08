@extends('layouts.frontend')
@section('content')
    <div class="hero-wrap hero-wrap-2"
        style="background-image: url('frontend/images/bg_2.jpg'); background-attachment:fixed;">
        <div class="overlay"></div>
        <div class="container">
            <div class="row no-gutters slider-text align-items-center justify-content-center" data-scrollax-parent="true">
                <div class="col-md-8 ftco-animate text-center">
                    <p class="breadcrumbs"><span class="mr-2"><a href="/">Home</a></span> <span>Dosen</span></p>
                    <h1 class="mb-3 bread">Dosen</h1>
                </div>
            </div>
        </div>
    </div>

    <section class="ftco-section bg-light">
        <div class="container">
            <div class="row justify-content-center mb-5 pb-3">
                <div class="col-md-7 heading-section ftco-animate text-center">
                    <h2 class="mb-4">Nama Nama Dosen</h2>
                </div>
            </div>
            <div class="row">
                @foreach ($dosen as $data)
                    <div class="col-lg-4 col-md-6 mb-4 ftco-animate">
                        <div class="staff">
                            <div class="d-flex mb-4">
                                <img src="{{ asset('storage/dosen/' . $data->foto) }}" alt="" width="100">
                                <div class="info ml-4">
                                    <h5 class="fw-bolder">{{ $data->nama_dosen }}</h5>
                                    <h5 class="mb-1">{{ $data->email }}</h5>
                                    <p class="mb-1">{{ $data->jabatan }}</p>
                                    <p class="mb-0">{{ $data->status }}</p>
                                </div>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </section>
@endsection
