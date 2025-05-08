@extends('layouts.admin')
@section('content')
    <div class="container">
        <div class="page-inner">
            <div class="row">
                <div class="col-md-12">
                    <div class="card card-round">
                        <div class="card-header">Show Data Fakultas</div>

                        <div class="card-body">

                            <form action="{{ route('fakultas.update', $fakultas->id) }}" method="post"
                                enctype="multipart/form-data">
                                @csrf
                                @method('PUT')
                                <div class="form-group">
                                    <label>Nama Fakultas</label>
                                    <input type="text" class="form-control" name="nama_fakultas"
                                        value="{{ $fakultas->nama_fakultas }}" disabled>
                                </div>
                                <div class="form-group">
                                    <label>Deskripsi</label>
                                    <textarea name="deskripsi" class="form-control" id="" disabled>{{ $fakultas->deskripsi }}</textarea>
                                </div>
                                <div class="form-group">
                                    <label>foto</label>
                                    @if ($fakultas->foto)
                                        <div>
                                            <img src="{{ Storage::url('fakultas/' . $fakultas->foto) }}" alt="Foto fakultas"
                                                class="img-thumbnail" width="150">
                                        </div>
                                    @endif
                                    <input type="file" class="form-control @error('foto') is-invalid @enderror"
                                        name="foto" value="{{ $fakultas->foto }}" disabled>
                                    @error('foto')
                                        <div class="invalid-feedback">{{ $message }}</div>
                                    @enderror
                                </div>

                                <br>
                                <a href="{{ route('fakultas.index') }}" class="btn btn-primary">Kembali</a>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    @endsection
