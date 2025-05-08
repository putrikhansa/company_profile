@extends('layouts.admin')
@section('content')

    <div class="container">
        <div class="page-inner">
            <div class="row">
                <div class="col-md-12">
                    <div class="card card-round">
                        <div class="card-header">Tambah Data </div>
                        <div class="card-body">
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
                                    <input type="text" name="email" class="form-control" required>
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
