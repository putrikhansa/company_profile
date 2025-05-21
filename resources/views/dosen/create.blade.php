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
                                    <div class="card-title"> Tambah Data Dosen</div>
                                </div>
                                <div class="card-body ">
                                    <form action="{{ route('dosen.store') }}" method="POST" enctype="multipart/form-data">
                                        @csrf
                                        <div class="mb-2">
                                            <label for="">Nama Dosen </label>
                                            <input type="text" name="nama_dosen" class="form-control" required>
                                        </div>
                                        <div class="mb-2">
                                            <label for="">Telepon</label>
                                            <input type="text" name="telepon" class="form-control" required>
                                        </div>
                                        <div class="mb-2">
                                            <label for="">Emaill</label>
                                            <input type="email" name="email" class="form-control" required>
                                        </div>
                                        <div class="mb-2">
                                            <label for="">Jabatan</label>
                                            <select name="jabatan" id="" class="form-control">
                                                <option value="Asisten Ahli">Asisten Ahli</option>
                                                <option value="Lektor">Lektor</option>
                                                <option value="Lektor Kepala">Lektor Kepala</option>
                                                <option value="Professor">Professor</option>
                                            </select>
                                        </div>
                                        <div class="mb-2">
                                            <label for="">Status</label>
                                            <select name="status" id="" class="form-control">
                                                <option value="Dosen Tetap">Dosen Tetap</option>
                                                <option value="Dosen Tidak Tetap">Dosen Tidak Tetap</option>
                                            </select>
                                        </div>
                                        <div class="mb-2">
                                            <label for="">Foto</label>
                                            <input type="file" name="foto" class="form-control" required>
                                        </div>
                                        <div class="card-action">
                                            <button class="btn btn-info" style="float: right">Simpan</button>
                                            <a href="{{ route('dosen.index') }}" class=""><i
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
