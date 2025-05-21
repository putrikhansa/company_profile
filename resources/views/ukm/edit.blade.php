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
                                    <div class="card-title"> Ubah Data Ukm</div>
                                </div>
                                <div class="card-body">
                                    <form action="{{ route('ukm.update', $ukm->id) }}" method="POST"
                                        enctype="multipart/form-data">
                                        @csrf
                                        @method('PUT')
                                        <div class="mb-2">
                                            <label for="">Nama Ukm </label>
                                            <input type="text" name="nama_ukm" class="form-control"
                                                value="{{ $ukm->nama_ukm }}" required>
                                        </div>
                                        <div class="mb-2">
                                            <label for="">Deskripsi </label>
                                            <textarea name="deskripsi" id="" class="form-control" required>{{ $ukm->deskripsi }}</textarea>
                                        </div>
                                        <div class="form-group">
                                            <label>foto</label>
                                            <img src="{{ asset('storage/ukm/' . $ukm->foto) }}" alt=""
                                                width="100">
                                            <input type="file" class="form-control @error('foto') is-invalid @enderror"
                                                name="foto">
                                            @error('foto')
                                                <div class="invalid-feedback">{{ $message }}</div>
                                            @enderror
                                        </div>
                                        <div class="card-action">
                                            <button class="btn btn-info" style="float: right" typw="submit">Ubah</button>
                                            <a href="{{ route('ukm.index') }}" class=""><i
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
