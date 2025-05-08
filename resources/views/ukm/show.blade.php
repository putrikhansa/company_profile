@extends('layouts.admin')
@section('content')
    <div class="container">
        <div class="page-inner">
            <div class="row">
                <div class="col-md-12">
                    <div class="card card-round">
                        <div class="card-header">Show Data Ukm</div>
                        <div class="card-body">
                            <form action="{{ route('ukm.update', $ukm->id) }}" method="post" enctype="multipart/form-data">
                                @csrf
                                @method('PUT')
                                <div class="form-group">
                                    <label>Nama Ukm</label>
                                    <input type="text" class="form-control" name="nama_ukm" value="{{ $ukm->nama_ukm }}"
                                        disabled>
                                </div>
                                <div class="form-group">
                                    <label>Deskripsi</label>
                                    <textarea name="deskripsi" id="" class="form-control" disabled>{{ $ukm->nama_ukm }}</textarea>
                                </div>
                                <div class="form-group">
                                    <label>foto</label>
                                    @if ($ukm->foto)
                                        <div>
                                            <img src="{{ Storage::url('ukm/' . $ukm->foto) }}" alt="Foto ukm"
                                                class="img-thumbnail" width="150">
                                        </div>
                                    @endif
                                    <input type="file" class="form-control @error('foto') is-invalid @enderror"
                                        name="foto" value="{{ $ukm->foto }}" disabled>
                                    @error('foto')
                                        <div class="invalid-feedback">{{ $message }}</div>
                                    @enderror
                                </div>

                                <br>
                                <a href="{{ route('ukm.index') }}" class="btn btn-primary">Kembali</a>
                            </form>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
