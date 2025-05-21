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
                                    <div class="card-title"> Tambah Data Artikel</div>
                                </div>
                                <div class="card-body">
                                    <form action="{{ route('artikel.store') }}" method="post"
                                        enctype="multipart/form-data">
                                        @csrf
                                        <div class="form-group">
                                            <label>Judul</label>
                                            <input type="text" class="form-control" name="judul">
                                        </div>
                                        <div class="form-group">
                                            <label>Isi</label>
                                            <textarea name="isi" id="" class="form-control"></textarea>
                                        </div>
                                        <div class="form-group">
                                            <label>foto</label>
                                            <input type="file" class="form-control" name="foto">
                                        </div>
                                        <br>
                                        <div class="card-action">
                                            <button class="btn btn-info" style="float: right">Simpan</button>
                                            <a href="{{ route('artikel.index') }}" class=""><i
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
