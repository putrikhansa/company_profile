@extends('layouts.admin')
@section('content')
    <div class="container">
        <div class="page-inner">
            <div class="row">
                <div class="col-md-12">
                    <div class="card card-round">
                        <div class="card-header">Show Data artikel</div>

                        <div class="card-body">

                            <form action="{{ route('artikel.update', $artikel->id) }}" method="post"
                                enctype="multipart/form-data">
                                @csrf
                                @method('PUT')
                                <div class="form-group">
                                    <label>Judul</label>
                                    <input type="text" class="form-control" name="judul" value="{{ $artikel->judul }}"
                                        disabled>
                                </div>
                                <div class="form-group">
                                    <label>Isi</label>
                                    <textarea name="isi" id="" class="form-control" disabled>{{ $artikel->judul }} </textarea>
                                </div>
                                <div class="form-group">
                                    <label>foto</label>
                                    @if ($artikel->foto)
                                        <div>
                                            <img src="{{ Storage::url('artikel/' . $artikel->foto) }}" alt="Foto artikel"
                                                class="img-thumbnail" width="150">
                                        </div>
                                    @endif
                                    <input type="file" class="form-control @error('foto') is-invalid @enderror"
                                        name="foto" value="{{ $artikel->foto }}" disabled>
                                    @error('foto')
                                        <div class="invalid-feedback">{{ $message }}</div>
                                    @enderror
                                </div>

                                <br>
                                <a href="{{ route('artikel.index') }}" class="btn btn-primary">Kembali</a>
                            </form>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
