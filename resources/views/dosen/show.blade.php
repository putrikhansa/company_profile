@extends('layouts.admin')
@section('content')
    <div class="container">
        <div class="page-inner">
            <div class="row">
                <div class="col-md-12">
                    <div class="card card-round">
                        <div class="card-header">Show Data Dosen</div>
                        <div class="card-body">
                            <form action="{{ route('dosen.update', $dosen->id) }}" method="post"
                                enctype="multipart/form-data">
                                @csrf
                                @method('PUT')
                                <div class="form-group">
                                    <label>Nama Dosen</label>
                                    <input type="text" class="form-control" name="nama_dosen"
                                        value="{{ $dosen->nama_dosen }}" disabled>
                                </div>
                                <div class="form-group">
                                    <label>Telepon</label>
                                    <input type="text" class="form-control" name="telepon" value="{{ $dosen->telepon }}"
                                        disabled>
                                </div>
                                <div class="form-group">
                                    <label>Email</label>
                                    <input type="text" class="form-control" name="email" value="{{ $dosen->email }}"
                                        disabled>
                                </div>
                                <div class="form-group">
                                    <label>Jabatan</label>
                                    <input type="text" class="form-control" name="jabatan" value="{{ $dosen->jabatan }}"
                                        disabled>
                                </div>
                                <div class="form-group">
                                    <label>Status</label>
                                    <input type="text" class="form-control" name="status" value="{{ $dosen->status }}"
                                        disabled>
                                </div>
                                <div class="form-group">
                                    <label>foto</label>
                                    @if ($dosen->foto)
                                        <div>
                                            <img src="{{ Storage::url('dosen/' . $dosen->foto) }}" alt="Foto dosen"
                                                class="img-thumbnail" width="150">
                                        </div>
                                    @endif
                                    <input type="file" class="form-control @error('foto') is-invalid @enderror"
                                        name="foto" value="{{ $dosen->foto }}" disabled>
                                    @error('foto')
                                        <div class="invalid-feedback">{{ $message }}</div>
                                    @enderror
                                </div>

                                <br>
                                <a href="{{ route('dosen.index') }}" class="btn btn-primary">Kembali</a>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection