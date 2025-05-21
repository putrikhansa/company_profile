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
                                    <div class="card-title"> Ubah Data Fakultas</div>
                                </div>
                                <div class="card-body">
                                    <form action="{{ route('fakultas.update', $fakultas->id) }}" method="POST"
                                        enctype="multipart/form-data">
                                        @csrf
                                        @method('PUT')
                                        <div class="mb-2">
                                            <label for="">Nama Fakultas </label>
                                            <input type="text" name="nama_fakultas" class="form-control"
                                                value="{{ $fakultas->nama_fakultas }}" required>
                                        </div>
                                        <div class="mb-2">
                                            <label for="">Deskripsi </label>
                                            <textarea name="deskripsi" class="form-control" id="" required>{{ $fakultas->deskripsi }}</textarea>
                                        </div>
                                        <div class="form-group">
                                            <label>foto</label>
                                            <img src="{{ asset('storage/fakultas/' . $fakultas->foto) }}" alt=""
                                                width="100">
                                            <input type="file" class="form-control @error('foto') is-invalid @enderror"
                                                name="foto">
                                            @error('foto')
                                                <div class="invalid-feedback">{{ $message }}</div>
                                            @enderror
                                        </div>
                                        <div class="card-action">
                                            <button class="btn btn-info" style="float: right" type="submit">Ubah</button>
                                            <a href="{{ route('fakultas.index') }}" class=""><i
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
