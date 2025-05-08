@extends('layouts.admin')
@section('content')
    <div class="container">
        <div class="page-inner">
            <div class="row">
                <div class="col-md-12">
                    <div class="card card-round">
                        <div class="card-header">Tambah Artikel </div>
                        <div class="card-body">
                            <form action="{{ route('artikel.store') }}" method="POST" enctype="multipart/form-data">
                                @csrf
                                <div class="mb-2">
                                    <label for="">Judul</label>
                                    <input type="text" name="judul" class="form-control" required>
                                </div>
                                <div class="mb-2">
                                    <label for="">isi</label>
                                    <textarea name="isi" id="" class="form-control"></textarea>
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
