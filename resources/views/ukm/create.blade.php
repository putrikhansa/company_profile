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
                                    <div class="card-title"> Tambah Data Ukm</div>
                                </div>
                                <div class="card-body">
                                    <form action="{{ route('ukm.store') }}" method="POST" enctype="multipart/form-data">
                                        @csrf
                                        <div class="mb-2">
                                            <label for="">Nama Ukm</label>
                                            <input type="text" name="nama_ukm" class="form-control" required>
                                        </div>
                                        <div class="mb-2">
                                            <label for="">Deskripsi</label>
                                            <textarea name="deskripsi" id="" class="form-control"></textarea>
                                        </div>
                                        <div class="mb-2">
                                            <label for="">Foto</label>
                                            <input type="file" name="foto" class="form-control" required>
                                        </div>
                                        <div class="card-action">
                                            <button class="btn btn-info" style="float: right">Simpan</button>
                                            <a href="{{ route('ukm.index') }}" class=""><i
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