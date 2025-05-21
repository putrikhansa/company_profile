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
                                    <div class="card-title"> Ubah Data Foto Fasilitas</div>
                                </div>
                                <div class="card-body">
                                    <form action="{{ route('fotofasilitas.update', $fotofasilitas->id) }}" method="POST"
                                        enctype="multipart/form-data">
                                        @csrf
                                        @method('PUT')

                                        <div class="form-group">
                                            <label>foto</label>
                                            <img src="{{ asset('storage/fotofasilitas/' . $fotofasilitas->foto) }}"
                                                alt="" width="100">
                                            <input type="file" class="form-control @error('foto') is-invalid @enderror"
                                                name="foto">
                                            @error('foto')
                                                <div class="invalid-feedback">{{ $message }}</div>
                                            @enderror
                                        </div>
                                        <div class="card-body">
                                            <label for="">Id Fasilitas</label>
                                            <select name="id_fasilitas" id=""
                                                class="form-control @error('id_fasilitas') is-invalid @enderror">
                                                @foreach ($fasilitas as $data)
                                                    <option value="{{ $data->id == $fotofasilitas->id_fasilitas ? 'selected' : '' }}">{{ $data->nama_fasilitas }}</option>
                                                @endforeach
                                            </select>
                                            @error('id')
                                                <div class="invalid-feedback">{{ $message }}</div>
                                            @enderror
                                        </div>
                                        <div class="card-action">
                                            <button class="btn btn-info" style="float: right" type="submit">Ubah</button>
                                            <a href="{{ route('fasilitas.index') }}" class=""><i
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
