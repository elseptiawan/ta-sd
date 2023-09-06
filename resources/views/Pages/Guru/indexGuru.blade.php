@extends('Layout.main')
@section('content')
    <div class="container-fluid p-0">
        <div class="d-flex justify-content-between mb-3">
            <h1 class="h4 mb-3">Guru & Staff</h1>
            <button class="btn btn-inverse-info" onclick="window.location.href='{{route('guru.create')}}'">
                <i class="bi bi-file-earmark-plus"></i> Tambah Data</button>
        </div>
        <div class="row" id="read"></div>
        <div>
            <table class="table table-bordered">
                <thead>
                    <tr class="table-primary">
                        <th scope="col">No</th>
                        <th scope="col">NUPTK</th>
                        <th scope="col">Nama</th>
                        <th scope="col">Jenis Kelamin</th>
                        <th scope="col">Tanggal Lahir</th>
                        <th scope="col">Alamat</th>
                        <th scope="col">Jabatan</th>
                        <th scope="col">Telepon</th>
                        <th scope="col">#</th>
                    </tr>
                </thead>
                <tbody>
                    @php $no = 1; @endphp
                    @foreach($guru as $item)
                    <tr>
                        <td>{{ $no++ }}</td>
                        <td>{{ $item->nuptk }}</td>
                        <td>{{ $item->nama }}</td>
                        <td>{{ $item->jenis_kelamin }}</td>
                        <td>{{ \Carbon\Carbon::parse($item->tanggal_lahir)->format('d-m-Y') }}</</td>
                        <td>{{ $item->alamat }}</td>
                        <td>{{ $item->jabatan }}</td>
                        <td>{{ $item->no_hp }}</td>
                        <td>
                            <button class="btn-success p-1 mr-1 rounded" onclick="window.location.href='{{route('guru.edit', ['id' => $item->id])}}'"><i class="bi bi-pencil-square"></i></button>
                            <button class="btn-danger p-1 mr-1 rounded" onclick="window.location.href='{{route('guru.destroy', ['id' => $item->id])}}'"><i class="bi bi-trash"></i></button>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
@endsection