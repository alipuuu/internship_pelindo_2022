@extends('layout.v_template')
@section('title', 'Form Absensi Hadir')
@section('content')
<div class="col-12 mt-5">
    <div class="card">
        <div class="card-body">
            <button class="btn btn-info btn-sm mb-3" data-toggle="modal" data-target="#edit">Isi Data Absensi</button>
            <div class="modal fade" id="edit">
                <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <div class="modal-body">
                            <h4 class="header-title">Absensi Peserta Magang Pelindo 2022 | Form Absensi <u><b>Hadir</b></u> Magang</h4>
                            <p class="text-muted font-14 mb-4">Isi data berikut secara lengkap untuk data Absensi Magang Regular Pelindo 2022.</p>
                                <form action="/update_hadir/" method="POST" enctype="multipart/form-data">
                                    @csrf
                                    {{-- @method("POST") --}}
                                <div class="form-group">
                                    <label for="name" class="col-form-label">Nama Lengkap</label>
                                    <input type="text" name="name" id="name" class="form-control" value="{{ Auth::user()->name }}" readonly>
                                </div>
                                <div class="form-group">
                                    <label class="col-form-label">Jadwal Kehadiran</label>
                                    <select class="custom-select">
                                        <option selected="selected">Pilih Jadwal Kehadiran</option>
                                        <option value="Work From Home">Work From Home</option>
                                        <option value="Work From Office">Work From Office</option>
                                        <option value="Konsinyering">Konsinyering</option>
                                    </select>
                                </div>
                                <div class="form-group">
                                        <label class="col-form-label">Jenis Kehadiran</label>
                                        <select class="custom-select">
                                            <option selected="selected">Pilih Jenis Absensi</option>
                                            <option value="Datang">Datang</option>
                                            <option value="Pulang">Pulang</option>
                                            <option value="Setengah Hari">Setengah Hari</option>
                                        </select>
                                </div>
                                <div class="form-group">
                                    <label for="example-time-input" class="col-form-label">Upload Bukti Foto (Berupa foto menggunakan aplikasi Timestamp Camera</label>
                                    <input type="file" name="berkas" id="berkas" class="form-control"  value="">
                                </div>
                                <div class="form-group">
                                    <label for="example-time-input" class="col-form-label">Upload jadwal WFH / Surat Konsinyering</label>
                                    <input type="file" name="berkas" id="berkas" class="form-control"  value="">
                                    {{-- <label class="custom-file-label" for="inputGroupFile02">Choose file</label> --}}
                                </div>
                                <div class="col-lg-12 mt-5">
                                    <button class="btn btn-primary btn-lg btn-block sweet-3" onclick="_gaq.push(['_trackEvent', 'example', 'try', 'sweet-3']);" type="submit">Submit</button>
                                </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        <table class="table">
        <tr>
            <th>Nama Lengkap</th>
            <th>:</th>
            <th>{{ Auth::user()->name }}</th>
            </tr>
            <tr>
            <th>Jadwal Kehadiran</th>
            <th>:</th>
            @if (Auth::user()->id_jadwal == Auth::user()->jadwal_kehadiran)
                <th> Mohon diisi </th>
            @else
                <th>{{ $user->jadwal?->jadwal_kehadiran ??'Belum ditentukan' }}</th>
            @endif
            </tr>
            <tr>
            <th>Jenis Kehadiran</th>
            <th>:</th>
            @if (Auth::user()->id_kehadiran == Auth::user()->jenis_kehadiran)
                <th> Mohon diisi </th>
            @else
                <th>{{ $user->kehadiran?->jenis_kehadiran ??'Belum ditentukan' }}</th>
            @endif
            </tr>
            <tr>
            <th>Bukti Foto</th>
            <th>:</th>
            <th>{{ Auth::user()->instansi}}</th>
            </tr>
            <tr>
            <th>Jadwal</th>
            <th>:</th>
            <th>{{ Auth::user()->no_telp }}</th>
            </tr>
        </table>
    </div>
</div>
@endsection
