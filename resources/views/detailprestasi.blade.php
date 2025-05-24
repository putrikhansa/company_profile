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
            <h1 class="display-4 mb-5 mt-5 pt-3 pb-3 text-center ">Prestasi {{ $prestasi->jenis }}</h1>
            <div class="rounded bg-white p-4 text-center">
                <img src="{{ asset('/storage/prestasi/' . $prestasi->foto) }}" class="img-fluid rounded" alt="">

            </div>
            <div class="col-12 wow fadeInUp" data-wow-delay="0.4s">
                <div class="about-item-content bg-white rounded p-5">
                    <h4 class="text-primary">Prestasi Universitas Gadjah Mada</h4>
                    <h3 class="display-8 mb-4">{{ $prestasi->nama_prestasi }}</h3>
                    <p>{{ $prestasi->deskripsi }}</p>
                    <a href="{{ url('/prestasi') }}" class="btn btn-secondary">← Kembali</a>
                </div>
            </div>
        </div>
    </div>

    <!-- About End -->
@endsection
