@extends('layouts.admin')
@section('content')
    <div class="container">
        <div class="page-inner">
            <div class="row">
                <div class="col-md-12">
                    <div class="card card-round">
                        <div class="card-header">Data Artikel
                            <a href="{{ route('artikel.create') }}" class="btn btn-outline-primary"
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
                            <div class="table-responsive">
                                <table class="table">
                                    <thead>
                                        <tr>
                                            <th scope="col">No</th>
                                            <th scope="col">Judul</th>
                                            <th scope="col">Isi</th>
                                            <th scope="col">Foto</th>
                                            <th scope="col">Aksi</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @php $no = 1; @endphp
                                        @foreach ($artikel as $data)
                                            <tr>
                                                <td scope="row">{{ $no++ }}</td>
                                                <td scope="row">{{ $data->judul }}</td>
                                                <td scope="row">{{ $data->isi }}</td>
                                                <td>
                                                    <img src="{{ asset('/storage/artikel/' . $data->foto) }}" width="100"
                                                        alt="">
                                                </td>
                                                <th>
                                                    <form action="{{ route('artikel.destroy', $data->id) }}" method="POST">
                                                        @csrf
                                                        @method('DELETE')
                                                        <a href="{{ route('artikel.edit', $data->id) }}"
                                                            class="btn btn-success"><i class="bi bi-pencil-square"></i></a>
                                                        <a href="{{ route('artikel.show', $data->id) }}"
                                                            class="btn btn-warning"><i class="bi bi-card-text"></i></a>
                                                        <button type="submit" class="btn btn-danger"
                                                            onclick="return confirm('Apakah Anda Yakin?')"><i class="bi bi-trash3"></i></button>
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
@endsection
