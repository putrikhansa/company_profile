@extends('layouts.admin')
@section('content')
    <div class="container">
        <div class="page-inner">
            <div class="row">
                <div class="col-md-12">
                    <div class="card card-round">
                        <div class="card-header">Data Fakultas
                            <a href="{{ route('fakultas.create') }}" class="btn btn-outline-primary"
                                style="float: right">Tambah</a>
                        </div>
                        <div class="card-body">
                            @if (session('success'))
                                <div class="alert alert-success alert-dismissible fade show" role="alert">
                                    {{ session('success') }}
                                    <button type="button" class="btn-close" data-bs-dismiss="alert"
                                        aria-label="Close"></button>
                                </div>
                            @endif

                            <table class="table">
                                <thead>
                                    <tr>
                                        <th scope="col">No</th>
                                        <th scope="col">Nama Fakultas</th>
                                        <th scope="col">Deskripsi</th>
                                        <th scope="col">Foto</th>
                                        <th scope="col">Aksi</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @php $no = 1; @endphp
                                    @foreach ($fakultas as $data)
                                        <tr>
                                            <td scope="row">{{ $no++ }}</td>
                                            <td scope="row">{{ $data->nama_fakultas }}</td>
                                            <td scope="row">{{ $data->deskripsi }}</td>
                                            <td scope="row"><img src="{{ asset('storage/fakultas/' . $data->foto) }}"
                                                    alt="" width="100">
                                            </td>
                                            <th>
                                                <form action="{{ route('fakultas.destroy', $data->id) }}" method="POST">
                                                    @csrf
                                                    @method('DELETE')
                                                    <a href="{{ route('fakultas.edit', $data->id) }}"
                                                        class="btn btn-success"><i class="bi bi-pencil-square"></i></a>
                                                    <a href="{{ route('fakultas.show', $data->id) }}"
                                                        class="btn btn-warning"><i class="bi bi-card-text"></i></a>
                                                    <button type="submit" class="btn btn-danger"
                                                        onclick="return confirm('Apakah Anda Yakin?')"><i
                                                            class="bi bi-trash3"></i></button>
                                                </form>
                                            </th>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
