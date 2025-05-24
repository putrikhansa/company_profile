@extends('layouts.admin')
@section('content')
    <div class="wrapper">
        <div class="main-panel">
            <div class="content">
                <div class="page-inner mt--8">
                    <div class="row justify-content-center ">
                        <div class="col-md-11">
                            <div class="card full-height">
                                <div class="card-header d-flex justify-content-between align-items-center">
                                    <h4 class="card-title">Data Fasilitas</h4>
                                    <a href="{{ route('fasilitas.create') }}"
                                        class="btn btn-outline-primary btn-sm">Tambah</a>
                                </div>
                                <div class="card-body">
                                    <div class="table-responsive">
                                        <table class="table table-bordered table-striped">
                                            <thead class="bg-info text-white">
                                                <tr>
                                                    <th>No</th>
                                                    <th>Nama Fasilitas</th>
                                                    <th>Foto</th> 
                                                    <th>Aksi</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                @php $no = 1; @endphp
                                                @foreach ($fasilitas as $data)
                                                    <tr>
                                                        <td>{{ $data->id }}</td>
                                                        <td>{{ $data->nama_fasilitas }}</td>
                                                         <td class="text-center">
                                                            <img src="{{ asset('/storage/fasilitas/' . $data->foto) }}"
                                                                alt="Foto {{ $data->nama_fasilitas }}" width="100"
                                                                class="img-fluid rounded mt-2 mb-2">
                                                        </td> 
                                                        <td>
                                                            <div class="d-flex flex-wrap gap-1">
                                                                <a href="{{ route('fasilitas.show', $data->id) }}"
                                                                    class="btn btn-sm btn-warning mr-1">Lihat</a>
                                                                <a href="{{ route('fasilitas.edit', $data->id) }}"
                                                                    class="btn btn-sm btn-success mr-1">Ubah</a>
                                                                <form action="{{ route('fasilitas.destroy', $data->id) }}"
                                                                    method="POST"
                                                                    onsubmit="return confirm('Apakah Anda Yakin?')">
                                                                    @csrf
                                                                    @method('delete')
                                                                    <button type="submit"
                                                                        class="btn btn-sm btn-danger">Hapus</button>
                                                                </form>
                                                            </div>
                                                        </td>
                                                    </tr>
                                                @endforeach
                                            </tbody>
                                        </table>
                                        @if ($fasilitas->isEmpty())
                                            <p class="text-center mt-3">Tidak ada data fasilitas tersedia.</p>
                                        @endif
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
