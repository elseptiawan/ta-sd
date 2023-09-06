@extends('Layout.main')
@section('content')
    <div class="container-fluid p-0">
        <div class="d-flex justify-content-between mb-3">
            <h1 class="h4 mb-3">Form Input</h1>
        </div>
        <div class="row" id="read"></div>
        <div>
            <form action="/guru/{{ $guru->id }}/update" method="post">
                @csrf
                <div class="row">
                    <div class="col-6 mb-3">
                        <label class="form-label" for="nama">Nama</label>
                        <input class="form-control" id="nama" name="nama" required type="text" value="{{ $guru->nama }}">
                    </div>
                    <div class="col-6 mb-3">
                        <label class="form-label" for="email">Email</label>
                        <input class="form-control" id="email" name="email" required type="email" value="{{ $guru->user->email }}">
                    </div>
                    <div class="col-6 mb-3">
                        <label class="form-label" for="nuptk">NUPTK</label>
                        <input class="form-control" id="nuptk" name="nuptk" required type="text" value="{{ $guru->nuptk }}">
                    </div>
                    <div class="col-6 mb-3">
                        <label class="form-label" for="jabatan">Jabatan</label>
                        <input class="form-control" id="jabatan" name="jabatan" required type="text" value="{{ $guru->jabatan }}">
                    </div>
                    <div class="col-6 mb-3">
                        <label class="form-label" for="tanggal_lahir">Tanggal Lahir</label>
                        <input class="form-control" id="tanggal_lahir" name="tanggal_lahir" required type="text" value="{{ $guru->tanggal_lahir }}">
                    </div>

                    <div class="col-6 mb-3">
                        <label class="form-label" for="jenis_kelamin">Jenis Kelamin</label>
                        <select class="form-control" id="jenis_kelamin" name="jenis_kelamin" required>
                            <option value="" selected disabled hidden>Pilih Jenis Kelamin</option>
                            <option value="Laki-laki" {{ $guru->jenis_kelamin === "Laki-laki" ? 'selected' : '' }}>Laki-laki</option>
                            <option value="Perempuan" {{ $guru->jenis_kelamin === "Perempuan" ? 'selected' : '' }}>Perempuan</option>
                        </select>
                    </div>
                    <div class="col-6 mb-3">
                        <label class="form-label" for="agama">Agama</label>
                        <input class="form-control" id="agama" name="agama" required type="text" value="{{ $guru->agama }}">
                    </div>
                    <div class="col-6 mb-3">
                        <label class="form-label" for="alamat">Alamat</label>
                        <input class="form-control" id="alamat" name="alamat" required type="text" value="{{ $guru->alamat }}">
                    </div>
                    <div class="col-6 mb-3">
                        <label class="form-label" for="no_hp">Telepon</label>
                        <input class="form-control" id="no_hp" name="no_hp" required type="text" value="{{ $guru->no_hp }}">
                    </div>
                </div>
                <button class="btn btn-primary" type="submit">Submit</button>
                <button class="btn btn-secondary" onClick="cancel()" type="button">Batal</button>
            </form>
        </div>
    </div>
@endsection
{{-- <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.js"></script> --}}
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.5.0/js/bootstrap-datepicker.js"></script>
<script>
    $(function() {
        $('#tanggal_lahir').datepicker({
            format: 'dd-mm-yyyy  '
        });
    });
</script>
