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
                                        <h4 class="mb-0">Data Ukm</h4>
                                        <a href="{{ route('ukm.create') }}" class="btn btn-outline-primary">Tambah</a>
                                    </div>
                                    <div class="table-responsive">

                                        <table class="table table-bordered table-head-bg-info table-bordered-bd-info mb-4">
                                            <thead>
                                                <tr>
                                                    <th scope="col">No</th>
                                                    <th scope="col">Nama Ukm</th>
                                                    <th scope="col">Deskripsi</th>
                                                    <th scope="col">Foto</th>
                                                    <th scope="col">Aksi</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                @php $no = 1; @endphp
                                                @foreach ($ukm as $data)
                                                    <tr>
                                                        <td scope="row">{{ $no++ }}</td>
                                                        <td scope="row">{{ $data->nama_ukm }}</td>
                                                        <td scope="row">{{ Str::limit($data->deskripsi, 5) }}</td>
                                                        <td>
                                                            <img src="{{ asset('/storage/ukm/' . $data->foto) }}"
                                                                width="100" alt="" class="mt-2 mb-2">
                                                        </td>
                                                        <th>
                                                            <form action="{{ route('ukm.destroy', $data->id) }}"
                                                                method="POST" class="d-flex align-items-center gap-1">
                                                                @csrf
                                                                @method('delete')
                                                                <a href="{{ route('ukm.show', $data->id) }}"
                                                                    class="btn btn-sm btn-warning mr-2">Lihat</a>
                                                                <a href="{{ route('ukm.edit', $data->id) }}"
                                                                    class="btn btn-sm btn-success mr-2">Ubah</a>
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
