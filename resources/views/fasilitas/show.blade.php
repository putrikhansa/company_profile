@extends('layouts.admin')
@section('content')
    <div class="container">
        <div class="page-inner">
            <div class="row">
                <div class="col-md-12">
                    <div class="card card-round">
                        <div class="card-header">Show Data fasilitas</div>

                        <div class="card-body">

                            <form action="{{ route('fasilitas.update', $fasilitas->id) }}" method="post"
                                enctype="multipart/form-data">
                                @csrf
                                @method('PUT')
                                <div class="form-group">
                                    <label>Nama Fasilitas</label>
                                    <input type="text" class="form-control" name="nama_fasilitas"
                                        value="{{ $fasilitas->nama_fasilitas }}" disabled>
                                </div>
                                <div class="form-group">
                                    <label>foto</label>
                                    @if ($fasilitas->foto)
                                        <div>
                                            <img src="{{ Storage::url('fasilitas/' . $fasilitas->foto) }}"
                                                alt="Foto fasilitas" class="img-thumbnail" width="150">
                                        </div>
                                    @endif
                                    <input type="file" class="form-control @error('foto') is-invalid @enderror"
                                        name="foto" value="{{ $fasilitas->foto }}" disabled>
                                    @error('foto')
                                        <div class="invalid-feedback">{{ $message }}</div>
                                    @enderror
                                </div>
                                <br>
                                <a href="{{ route('fasilitas.index') }}" class="btn btn-primary">Kembali</a>
                            </form>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
