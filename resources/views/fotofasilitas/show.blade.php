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
                                    <div class="card-title"> Lihat Data Foto Fasilitas</div>
                                </div>
                                <div class="card-body">
                                    <form action="{{ route('fotofasilitas.store') }}" method="POST"
                                        enctype="multipart/form-data">
                                        @csrf
                                        <div class="mb-2">
                                            <label for="">foto</label>
                                            <div>
                                    <img src="{{ asset('/storage/fotofasilitas/' . $data->foto) }}"
                                                                alt="Foto {{ $data->foto }}" width="100"
                                                                class="img-fluid rounded mt-2 mb-2">  
                                                                </div>                                      
                                        <div class="card-body">
                                            <label for="">Id Fasilitas</label>
                                            <select disabled name="id_fasilitas" id=""
                                                class="form-control @error('id_fasilitas') is-invalid @enderror">
                                                @foreach ($fasilitas as $data)
                                                    <option value="{{ $data->id }}" {{ $data-> == $fotofasilitas->id_fasilitas ? 'selected' : ''}}>{{ $data->nama_fasilitas }}</option>
                                                @endforeach
                                            </select>
                                            @error('id_fasilitas')
                                                <div class="invalid-feedback">{{ $message }}</div>
                                            @enderror
                                        </div>
                                        <div class="card-action">
                                            <button class="btn btn-info" style="float: right">Simpan</button>
                                            <a href="{{ route('fotofasilitas.index') }}" class=""><i
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
