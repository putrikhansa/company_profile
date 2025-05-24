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

    <!-- About Start -->
    <div class="row g-5 justify-content-center">
        <div class="col-12 wow fadeInUp" data-wow-delay="0.2s">
            <div class="rounded bg-white p-4 text-center">
                @foreach ($fotofasilitas as $data)
                    <img src="{{ asset('storage/fotofasilitas/' . $data->foto) }}" alt=""
                        class="card-img-top rounded-top w-25" style=" object-fit: cover;">
                @endforeach
            </div>
            <div class="about-item-content bg-white rounded p-5">
                <a href="{{ route('welcome') }}" class="btn btn-warning">Kembali</a>
            </div>
        </div>
    </div>

    <!-- About End -->
@endsection
