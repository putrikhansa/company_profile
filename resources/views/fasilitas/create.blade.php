@extends('layouts.admin')
@section('content')
    <div class="container">
        <div class="page-inner">
            <div class="row">
                <div class="col-md-12">
                    <div class="card card-round">
                        <div class="card-header">Tambah Fasilitas </div>
                        <div class="card-body">
                            <form action="{{ route('fasilitas.store') }}" method="POST" enctype="multipart/form-data">
                                @csrf
                                <div class="mb-2">
                                    <label for="">Nama Fasilitas</label>
                                    <input type="text" name="nama_fasilitas" class="form-control" required>
                                </div>
                                <div class="mb-2">
                                    <label for="">Foto</label>
                                    <input type="file" name="foto" class="form-control" required>
                                </div>
                                <div class="mb-2">
                                    <button class="btn btn-primary" type="submit">
                                        Simpan
                                    </button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
