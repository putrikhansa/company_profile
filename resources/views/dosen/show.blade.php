@extends('layouts.admin')
@section('content')
    <div class="main-panel">
        <div class="content">
            <div class="page-inner mt--8">
                <div class="row justify-content-center mt-5">
                    <div class="col-md-11">
                        <div class="card full-height">
                            <div class="card-header">
                                <div class="card-title"> Show Data Dosen</div>
                            </div>
                            <div class="card-body">
                                <table class="table table-bordered">
                                    <tr>
                                        <th>Nama Dosen</th>
                                        <td>{{ $dosen->nama_dosen }}</td>
                                    </tr>
                                    <tr>
                                        <th>Telepon</th>
                                        <td>{{ $dosen->telepon }}</td>
                                    </tr>
                                    <tr>
                                        <th>Email</th>
                                        <td>{{ $dosen->email }}</td>
                                    </tr>
                                    <tr>
                                        <th>Status</th>
                                        <td>{{ $dosen->status }}</td>
                                    </tr>
                                    <tr>
                                        <th>Foto</th>
                                        <td>
                                            @if ($dosen->foto)
                                                <img src="{{ Storage::url('dosen/' . $dosen->foto) }}"
                                                    alt="Foto dosen" class="img-thumbnail" width="150">
                                            @else
                                                <p>Tidak ada foto</p>
                                            @endif
                                        </td>
                                    </tr>
                                </table>
                                <a href="{{ route('dosen.index') }}" class="btn btn-primary">Kembali</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
