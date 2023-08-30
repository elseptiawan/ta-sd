@extends('Layout.main')
@section('content')
    <div class="container-fluid p-0">
        <div class="d-flex justify-content-between mb-3">
            <h1 class="h4 mb-3">Siswa</h1>
            <button class="btn btn-inverse-info" onClick="create()">
                <i class="bi bi-file-earmark-plus"></i> Tambah Data</button>
        </div>
        <div class="row" id="read"></div>
        <div>
            <table class="table table-bordered">
                <thead>
                    <tr class="table-primary">
                        <th scope="col">No</th>
                        <th scope="col">Nama</th>
                        <th scope="col">Jenis Kelamin</th>
                        <th scope="col">Tanggal Lahir</th>
                        <th scope="col">Alamat</th>
                        <th scope="col">Email</th>
                        <th scope="col">Jabatan</th>
                        <th scope="col">#</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>1</td>
                        <td>Siswa 1</td>
                        <td>Laki Laki</td>
                        <td>15 Januari 1999</td>
                        <td>Teluk Kuantan</td>
                        <td>siswa1@gmail.com</td>
                        <td>082112345678</td>
                        <td>
                            <button class="btn-success p-1 mr-1 rounded"><i class="bi bi-pencil-square"></i></button>
                            <button class="btn-danger p-1 mr-1 rounded"><i class="bi bi-trash"></i></button>
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
@endsection
