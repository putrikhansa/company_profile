@extends('layouts.admin')
@section('content')
    <div class="wrapper">
        <div class="main-panel">
            <div class="content">
                <div class="page-inner mt--8">
                    <div class="row justify-content-center mt-5">
                        <div class="col-md-11">
                            <div class="card full-height">
                                <div class="card-header">
                                    <div class="card-title"> Ubah Data Fasilitas</div>
                                </div>
                                <div class="card-body">
                                    <form action="{{ route('fasilitas.update', $fasilitas->id) }}" method="POST"
                                        enctype="multipart/form-data">
                                        @csrf
                                        @method('PUT')
                                        <div class="mb-2">
                                            <label for="">Nama Fasilitas </label>
                                            <input type="text" name="nama_fasilitas" class="form-control"
                                                value="{{ $fasilitas->nama_fasilitas }}" required>
                                        </div>
                                        <div class="form-group">
                                            <label>foto</label>
                                            <img src="{{ asset('storage/fasilitas/' . $fasilitas->foto) }}" alt=""
                                                width="100">
                                            <input type="file" class="form-control @error('foto') is-invalid @enderror"
                                                name="foto">
                                            @error('foto')
                                                <div class="invalid-feedback">{{ $message }}</div>
                                            @enderror
                                        </div>
                                        <div class="card-action">
                                            <button class="btn btn-info" style="float: right" type="submit">Ubah</button>
                                            <a href="{{ route('fasilitas.index') }}" class=""><i
                                                    class="flaticon-back"></i></a>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
