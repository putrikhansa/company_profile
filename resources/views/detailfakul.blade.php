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
    <div class="container py-5">
        <div class="row justify-content-center">
            <div class="col-lg-8 text-center">
                <div class="mb-4">
                    <img src="{{ asset('/storage/fakultas/' . $fakultas->foto) }}" class="img-fluid rounded" alt="Foto Fakultas">
                </div>
                <h4 class="text-primary">Fakultas Universitas Gadjah Mada</h4>
                <h3 class="mb-4">{{ $fakultas->nama_fakultas }}</h3>
                <p class="text-justify">{{ $fakultas->deskripsi }}</p>
                <a href="{{ route('welcome') }}" class="btn btn-warning mt-3">Kembali</a>
            </div>
        </div>
    </div>
    <!-- About End -->
@endsection
