@extends('layouts.frontend')
@section('content')
    <div class="hero-wrap hero-wrap-2"
        style="background-image: url('frontend/images/bg_2.jpg'); background-attachment:fixed;">
        <div class="overlay"></div>
        <div class="container">
            <div class="row no-gutters slider-text align-items-center justify-content-center" data-scrollax-parent="true">
                <div class="col-md-8 ftco-animate text-center">
                    <p class="breadcrumbs"><span class="mr-2"><a href="/">Home</a></span> <span>Artikel</span></p>
                    <h1 class="mb-3 bread">Artikel</h1>
                </div>
            </div>
        </div>
    </div>

    <section class="ftco-section">
        <div class="container">
            <div class="row">
                @foreach ($artikel as $data)
                    <div class="col-md-4 d-flex ftco-animate">
                        <div class="course align-self-stretch">
                            <img src="{{ asset('storage/artikel/' . $data->foto) }}" alt="" width="100"
                                class="block-20">
                            <div class="text p-3">
                                <h4 class="fw-bolder">{{ $data->judul }}</h4>
                                <p class="">{{ $data->isi }}</p>
                                {{-- <p><a href="#" class="btn btn-primary">Enroll now!</a></p> --}}
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </section>
@endsection
