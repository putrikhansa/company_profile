@extends('layouts.admin')
@section('content')
    <div class="container">
        <div class="page-inner">
            <div class="row">
                <div class="col-md-12">
                    <div class="card card-round">
                        <div class="card-header">Tambah Data </div>
                        <div class="card-body">
                            <form action="{{ route('fakultas.store') }}" method="POST" enctype="multipart/form-data">
                                @csrf
                                <div class="mb-2">
                                    <label for="">Nama Fakultas </label>
                                    <input type="text" name="nama_fakultas" class="form-control" required>
                                </div>
                                <div class="mb-2">
                                    <label for="">Deskripsi </label>
                                    <textarea name="deskripsi" class="form-control" id="" required></textarea>
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
