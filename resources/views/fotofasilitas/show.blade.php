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
                                    <div class="card-title"> Lihat Foto Fasilitas</div>
                                </div>
                                <div class="card-body">

                                    <div class="form-group mb-3">
                                        <label>Nama Fasilitas</label>
                                        <select class="form-control" name="nama_fasilitas" disabled>
                                            @foreach ($fasilitas as $data)
                                                <option value="{{ $data->id }}">{{ $data->nama_fasilitas }}</option>
                                            @endforeach
                                        </select>
                                    </div>

                                    <div class="mb-3">
                                        <label for="foto" disabled>Foto</label>
                                        @if ($fotofasilitas->foto)
                                            <div class="mb-2">
                                                <img src="{{ Storage::url('fotofasilitas/' . $fotofasilitas->foto) }}"
                                                    alt="Foto Produk" class="img-thumbnail" width="150">
                                            </div>
                                        @endif

                                    </div>

                                    <a href="{{ route('fotofasilitas.index') }}" class="btn btn-primary">Kembali</a>


                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
