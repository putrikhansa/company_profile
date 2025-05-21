@extends('layouts.admin')
@section('content')
    <div class="main-panel">
        <div class="content">
            <div class="page-inner mt--8">
                <div class="row justify-content-center mt-5">
                    <div class="col-md-11">
                        <div class="card full-height">
                            <div class="card-header">
                                <div class="card-title"> Show Data Artikel</div>
                            </div>
                            <div class="card-body">
                                <table class="table table-bordered ">
                                    <tr>
                                        <th>Judul</th>
                                        <td>{{ $artikel->judul }}</td>
                                    </tr>
                                    <tr>
                                        <th>Isi</th>
                                        <td>{{ $artikel->isi }}</td>
                                    </tr>
                                    <tr>
                                        <th>Foto</th>
                                        <td>
                                            @if ($artikel->foto)
                                                <img src="{{ Storage::url('artikel/' . $artikel->foto) }}"
                                                    alt="Foto artikel" class="img-thumbnail" width="150">
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
