@extends('layouts.admin')
@section('content')
    <div class="main-panel">
        <div class="content">
            <div class="page-inner mt--8">
                <div class="row justify-content-center mt-5">
                    <div class="col-md-11">
                        <div class="card full-height">
                            <div class="card-header">
                                <div class="card-title"> Lihat Data Prestasi</div>
                            </div>
                            <div class="card-body">
                                <table class="table table-bordered">
                                    <tr>
                                        <th>Nama Prestasi</th>
                                        <td>{{ $prestasi->nama_prestasi }}</td>
                                    </tr>
                                    <tr>
                                        <th>Jenis</th>
                                        <td>{{ $prestasi->jenis }}</td>
                                    </tr>
                                    <tr>
                                        <th>Deskripsi</th>
                                        <td>{{ $prestasi->deskripsi }}</td>
                                    </tr>
                                    <th>Foto</th>
                                    <td>
                                        @if ($prestasi->foto)
                                            <img src="{{ Storage::url('prestasi/' . $prestasi->foto) }}" alt="Foto prestasi"
                                                class="img-thumbnail" width="150">
                                        @else
                                            <p>Tidak ada foto</p>
                                        @endif
                                    </td>
                                    </tr>
                                </table>
                                <a href="{{ route('prestasi.index') }}" class="btn btn-primary">Kembali</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
