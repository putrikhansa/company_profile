@extends('layouts.admin')
@section('content')
    <div class="wrapper">
        <div class="main-panel">
            <div class="content">
                <div class="page-inner mt--8">
                    <div class="row justify-content-center mt-5">
                        <div class="col-md-11">
                            <div class="card full-height">
                                <div class="card-body">
                                    <div class="card-header d-flex justify-content-between align-items-center">
                                        <h4 class="mb-0">Data Fakultas</h4>
                                        <a href="{{ route('fakultas.create') }}" class="btn btn-outline-primary">Tambah</a>
                                    </div>
                                    <div class="table-responsive">
                                        @if (session('success'))
                                            <div class="alert alert-success alert-dismissible fade show" role="alert">
                                                {{ session('success') }}
                                                <button type="button" class="btn-close" data-bs-dismiss="alert"
                                                    aria-label="Close"></button>
                                            </div>
                                        @endif

                                        <table class="table table-bordered table-head-bg-info table-bordered-bd-info mt-4 ">
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
                                                        <td scope="row">{{ $data->id }}</td>
                                                        <td scope="row">{{ $data->nama_fakultas }}</td>
                                                        <td scope="row">{{ Str::limit($data->deskripsi, 10) }}</td>
                                                        <td scope="row"><img
                                                                src="{{ asset('storage/fakultas/' . $data->foto) }}"
                                                                alt="" width="100" class="img-fluid rounded mb-2 mt-2">
                                                        </td>
                                                        <th>
                                                            <form action="{{ route('fakultas.destroy', $data->id) }}"
                                                                method="POST" class="d-flex align-items-center gap-1">
                                                                @csrf
                                                                @method('delete')
                                                                <a href="{{ route('fakultas.show', $data->id) }}"
                                                                    class="btn btn-sm btn-warning mr-1">Lihat</a>
                                                                <a href="{{ route('fakultas.edit', $data->id) }}"
                                                                    class="btn btn-sm btn-success mr-1">Ubah</a>
                                                                <button type="submit" class="btn btn-sm btn-danger"
                                                                    onclick="return confirm('Apakah Anda Yakin?')">Hapus</button>
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
            </div>
        </div>
    </div>
@endsection
