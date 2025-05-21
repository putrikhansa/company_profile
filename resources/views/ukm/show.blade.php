@extends('layouts.admin')
@section('content')
    <div class="main-panel">
        <div class="content">
            <div class="page-inner mt--8">
                <div class="row justify-content-center mt-5">
                    <div class="col-md-11">
                        <div class="card full-height">
                            <div class="card-header">
                                <div class="card-title"> Lihat Data Ukm</div>
                            </div>
                            <div class="card-body">
                                <table class="table table-bordered">
                                    <tr>
                                        <th>Nama Ukm</th>
                                        <td>{{ $ukm->nama_ukm }}</td>
                                    </tr>
                                    <tr>
                                        <th>Deskripsi</th>
                                        <td>{{ $ukm->deskripsi }}</td>
                                    </tr>
                                    <th>Foto</th>
                                    <td>
                                        @if ($ukm->foto)
                                            <img src="{{ Storage::url('ukm/' . $ukm->foto) }}" alt="Foto ukm"
                                                class="img-thumbnail" width="150">
                                        @else
                                            <p>Tidak ada foto</p>
                                        @endif
                                    </td>
                                    </tr>
                                </table>
                                <a href="{{ route('ukm.index') }}" class="btn btn-primary">Kembali</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
