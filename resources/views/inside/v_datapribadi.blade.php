@extends('layout.v_template')
@section('title', 'Data Pendaftar')
@section('content')
<div class="col-lg-12 mt-5">
    <div class="card">
        <div class="card-body">
            <h4 class="header-title">Data Pendaftar </h4>
            {{-- @foreach ($datapribadi as $data) --}}
            <button class="btn btn-info btn-sm mb-3" data-toggle="modal" data-target="#edit">Edit Data</button>
            {{-- @endforeach --}}
            {{-- @foreach ($datapribadi as $data) --}}
            <div class="modal fade" id="edit">
                <div class="modal-dialog modal-dialog-centered" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <div class="modal-body">
                                <form action="/update_datapribadi/{{$user->id_users}}" method="POST" enctype="multipart/form-data">
                                    @csrf
                                    @method("PUT")
                                <div class="form-group">
                                    <label for="name" class="col-form-label"><b>Nama Lengkap</b></label>
                                    <input type="text" name="name" id="name" class="form-control" value="{{ Auth::user()->name }}" >
                                </div>
                                <div class="form-group">
                                    <label for="email" class="col-form-label"><b>Email</b></label>
                                    <input type="text" name="email" id="email" class="form-control" value="{{ Auth::user()->email }}" >
                                </div>
                                    <div class="form-group">
                                    <label for="nik" class="col-form-label"><b>NIK</b></label>
                                    <input type="text" name="nik" id="nik" class="form-control" value="{{ Auth::user()->nik }}" >
                                </div>
                                <div class="form-group">
                                    <label for="instansi" class="col-form-label"><b>Instansi</b></label>
                                    <input type="text" name="instansi" id="instansi" class="form-control"  value="{{ Auth::user()->instansi }}" >
                                </div>
                                <div class="form-group">
                                    <label for="no_telp" class="col-form-label"><b>no Telepon</b></label>
                                    <input type="text" name="no_telp" id="no_telp" class="form-control"  value="{{ Auth::user()->no_telp }}" >
                                </div>
                                <div class="form-group">
                                    <label for="berkas" class="col-form-label"><b>Berkas</b></label>
                                    <input type="file" name="berkas" id="berkas" class="form-control"  value="{{ Auth::user()->berkas }}" >
                                </div>
                                <div class="form-group" hidden>
                                    <label for="id_penempatan" class="col-form-label"><b>Penempatan Lokasi Magang</b></label>
                                    <input type="text" name="id_penempatan" id="id_penempatan" class="form-control"  value="{{ Auth::user()->id_penempatan }}" >
                                </div>
                                <div class="form-group" hidden>
                                    <label for="id_divisi" class="col-form-label"><b>Divisi</b></label>
                                    <input type="text" name="id_divisi" id="id_divisi" class="form-control" value="{{ Auth::user()->id_divisi }}" >
                                </div>
                                <div class="form-group" hidden>
                                    <label for="id_magang" class="col-form-label"><b>Jenis Magang</b></label>
                                    <input type="text" name="id_magang" id="id_magang" class="form-control"  value="{{ Auth::user()->id_magang }}" >
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
            {{-- @endforeach --}}
            <table class="table">
            <tr>
            <th width="150px">Nama Lengkap</th>
            <th width="50px">:</th>
            <th>{{ Auth::user()->name }}</th>
            </tr>
            <tr>
            <th width="150px">Email</th>
            <th width="50px">:</th>
            <th>{{ Auth::user()->email }}</th>
            </tr>
            <tr>
            <th width="150px">NIK</th>
            <th width="50px">:</th>
            <th>{{ Auth::user()->nik }}</th>
            </tr>
            <tr>
            <th width="150px">Instansi</th>
            <th width="50px">:</th>
            <th>{{ Auth::user()->instansi}}</th>
            </tr>
            <tr>
            <th width="150px">no Telepon</th>
            <th width="50px">:</th>
            <th>{{ Auth::user()->no_telp }}</th>
            </tr>
            <tr>
            <th width="150px">Berkas</th>
            <th width="50px">:</th>
            <th>{{ Auth::user()->berkas }}</th>
            </tr>
            <tr>
            {{--  --}}
            <th width="150px">Penempatan Lokasi Magang</th>
            <th width="50px">:</th>
            <th>{{ $user->penempatan->lokasi }}</th>
            </tr>
            <tr>
            <th width="150px">Divisi Departemen</th>
            <th width="50px">:</th>
            <th>{{ $user->divisi->departemen }}</th>
            </tr>
            <tr>
            <th width="150px">Jenis Magang</th>
            <th width="50px">:</th>
            <th>{{ $user->magang->jenis_magang }}</th>
            {{--  --}}
            </tr>
            </table>
        </div>
    </div>
</div>
@endsection
