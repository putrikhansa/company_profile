@extends('layouts.admin')
@section('content')
    <div class="page-inner">
        <div class="row">
            <div class="col-md-12">
                <div class="card card-round">
                    <div class="card-header">Edit Data Dosen </div>
                    <div class="card-body">
                        <form action="{{ route('dosen.update', $dosen->id) }}" method="POST" enctype="multipart/form-data">
                            @csrf
                            @method('PUT')
                            <div class="mb-2">
                                <label for="">Nama Dosen </label>
                                <input type="text" name="nama_dosen" class="form-control"
                                    value="{{ $dosen->nama_dosen }}" required>
                            </div>
                            <div class="mb-2">
                                <label for="">Telepon </label>
                                <input type="text" name="telepon" class="form-control" value="{{ $dosen->telepon }}"
                                    required>
                            </div>
                            <div class="mb-2">
                                <label for="">Email </label>
                                <input type="text" name="email" class="form-control" value="{{ $dosen->email }}"
                                    required>
                            </div>
                            <div class="mb-2">
                                <label for="">Jabatan </label>
                                <select name="jabatan" id="" class="form-control" value="{{ $dosen->jabatan }}"
                                    required>
                                    <option value="Asisten Ahli" {{ $dosen->jabatan == 'Asisten Ahli' ? 'selected' : '' }}>
                                        Asisten Ahli
                                    </option>
                                    <option value="Lektor" {{ $dosen->jabatan == 'Lektor' ? 'selected' : '' }}>Lektor
                                    </option>
                                    <option value="Lektor Kepala"
                                        {{ $dosen->jabatan == 'Lektor Kepala' ? 'selected' : '' }}>Lektor Kepala
                                    </option>
                                    <option value="Professor" {{ $dosen->jabatan == 'Professor' ? 'selected' : '' }}>
                                        Professor
                                    </option>
                                </select>
                            </div>
                            <div class="mb-2">
                                <label for="">Status </label>
                                <select name="status" id="" class="form-control">
                                    <option value="Dosen Tetap" {{ $dosen->status == 'Dosen Tetap' ? 'selected' : '' }}>
                                        Dosen Tetap
                                    </option>
                                    <option value="Dosen Tidak Tetap" {{ $dosen->status == 'Dosen Tidak Tetap' ? 'selected' : '' }}>Dosen Tidak Tetap
                                    </option>
                                </select>
                            </div>
                            <div class="form-group">
                                <label>foto</label>
                                <img src="{{ asset('storage/dosen/' . $dosen->foto) }}" alt="" width="100">
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
@endsection
