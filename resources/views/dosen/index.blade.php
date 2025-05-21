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
                                        <h4 class="mb-0">Data Dosen</h4>
                                        <a href="{{ route('dosen.create') }}" class="btn btn-outline-primary">Tambah</a>
                                    </div>
                                    <div class="table-responsive">
                                        <table id="basic-datatables"
                                            class="table table-bordered table-head-bg-info table-bordered-bd-info mt-4">
                                            <thead>
                                                <tr>
                                                    <th scope="col">No</th>
                                                    <th scope="col">Nama Dosen</th>
                                                    {{-- <th scope="col">Telepon</th> --}}
                                                    {{-- <th scope="col">Email</th> --}}
                                                    <th scope="col">Jabatan</th>
                                                    <th scope="col">Status</th>
                                                    {{-- <th scope="col">Foto</th> --}}
                                                    <th scope="col">Aksi</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                @php $no = 1; @endphp
                                                @foreach ($dosen as $data)
                                                    <tr>
                                                        <td scope="row">{{ $no++ }}</td>
                                                        <td scope="row">{{ $data->nama_dosen }}</td>
                                                        {{-- <td scope="row">{{ $data->telepon }}</td> --}}
                                                        {{-- <td scope="row">{{ $data->email }}</td> --}}
                                                        <td scope="row">{{ $data->jabatan }}</td>
                                                        <td scope="row">{{ $data->status }}</td>
                                                        {{-- <td scope="row"><img
                                                        src="{{ asset('storage/dosen/' . $data->foto) }}"
                                                        alt="" width="100">
                                                </td> --}}
                                                        <th>
                                                            <form action="{{ route('dosen.destroy', $data->id) }}"
                                                                method="POST" class="d-flex align-items-center gap-1">
                                                                @csrf
                                                                @method('delete')
                                                                <a href="{{ route('dosen.show', $data->id) }}"
                                                                    class="btn btn-sm btn-warning mr-1">Lihat</a>
                                                                <a href="{{ route('dosen.edit', $data->id) }}"
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
