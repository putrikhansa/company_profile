@extends('layouts.admin')
@section('content')
    <div class="container">
        <div class="page-inner">
            <div class="row">
                <div class="col-md-12">
                    <div class="card card-round">
                        <div class="card-header">Edit Data Fasilitas </div>
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
                                <div class="mb-2">
                                    <button class="btn btn-primary" type="submit">
                                        Ubah
                                    </button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
