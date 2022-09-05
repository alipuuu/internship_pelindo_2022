@extends('layout.v_template')
@section('title', 'Data Pendaftar')
@section('content')
    <div class="col-lg-12 mt-5">
        @if (Session::has('status'))
        <div class="alert alert-success" role="alert">
            <strong>{{Session::get('message')}}</strong>
        </div>
        @endif
        <div class="card">
            <div class="card-body">
                <h4 class="header-title">Data Pendaftar </h4>
                <div class="single-table">
                    <div class="table-responsive">
                        <table id="table-datatables" class="table text-center">
                            <thead class="text-uppercase bg-primary">
                                <tr class="text-white">
                                    {{-- <th class="text-center">No</th> --}}
                                    <th>Nama Lengkap</th>
                                    <th>Email</th>
                                    <th>NIK</th>
                                    <th>Instansi</th>
                                    <th>No HP</th>
                                    <th>Berkas</th>
                                    <th>Tgl Daftar</th>
                                    <th>Action</th>
                                    <th>Jenis Magang</th>
                                    <th>Penempatan</th>
                                    <th>Divisi</th>
                                </tr>
                            </thead>
                            <tbody>

                                @foreach ($users as $data)
                                <tr>
                                    <td>{{ $data->name }}</td>
                                    <td>{{ $data->email }}</td>
                                    <td>{{ $data->nik }}</td>
                                    <td>{{ $data->instansi }}</td>
                                    <td>{{ $data->no_telp }}</td>
                                    <td><a href="{{ $data->berkas }}" target="_blank" download><span class="fa fa-download"></span><span class="icon-name"> {{ $data->berkas }}</a></span></td>
                                    <td>{{ $data->created_at}}</td>
                                    <td>
                                        <?php if($data->status == '1'){ ?>
                                        <a href="{{url('/update_pendaftaran',$data->id_users)}}" class="btn btn-success btn-xs mb-3">Lolos Seleksi</a>
                                        <?php }else{ ?>
                                        <a href="{{url('/update_pendaftaran',$data->id_users)}}" class="btn btn-danger btn-xs mb-3">Belum Lolos Seleksi</a>
                                        <?php } ?>
                                        <button class="btn btn-info btn-xs mb-3" data-toggle="modal" data-target="#edit{{ $data->id_users}}">Edit Data</button>
                                    </td>
                                    <td>{{ $data->jenis_magang}}</td>
                                    <td>{{ $data->lokasi }}</td>
                                    <td>{{ $data->departemen}}</td>
                                </tr>
                                @endforeach
                                @foreach ($users as $data)
                                <div class="modal fade" id="edit{{ $data->id_users}}">
                                    <div class="modal-dialog modal-dialog-centered" role="document">
                                        <div class="modal-content bg-info">
                                            <div class="modal-header">
                                                <div class="modal-body">
                                                    <form action="/edit_data_peserta/{{ $data->id_users }}" method="POST" enctype="multipart/form-data">
                                                        @csrf
                                                    <div class="form-group" hidden>
                                                        <label for="nik" class="col-form-label"><b>NIK</b></label>
                                                        <input type="text" name="nik" id="nik" class="form-control" value="{{ $data->nik }}" >
                                                    </div>
                                                    <div class="form-group" hidden>
                                                        <label for="instansi" class="col-form-label"><b>Sekolah / Kampus</b></label>
                                                        <input type="text" name="instansi" id="instansi" class="form-control"  value="{{ $data->instansi }}" >
                                                    </div>
                                                    <div class="form-group" hidden>
                                                        <label for="no_telp" class="col-form-label"><b>Nomor Handphone</b></label>
                                                        <input type="text" name="no_telp" id="no_telp" class="form-control"  value="{{ $data->no_telp }}" >
                                                    </div>
                                                     <div class="form-group" hidden>
                                                        <label for="berkas" class="col-form-label"><b>Berkas</b></label>
                                                        <input type="text" name="berkas" id="berkas" class="form-control"  value="{{ $data->berkas }}" hidden>
                                                    </div>
                                                    <div class="form-group">
                                                        <label for="id_penempatan" class="col-form-label"><b>Penempatan Magang</b></label>
                                                        <select name="id_penempatan" class="custom-select">
                                                            <option selected="selected">Pilih sesuai Penempatan Magang</option>
                                                            @foreach ($tempat as $data )
                                                            @if ($data->id_penempatan == $data->lokasi)
                                                            <option value="{{$data->id_penempatan}}">{{$data->lokasi}}></option>
                                                            @else
                                                            <option value="{{ $data->id_penempatan }}">{{ $data->lokasi}}</option>
                                                            @endif
                                                            @endforeach
                                                        </select>
                                                        <div class="text-danger">
                                                            @error('id_penempatan')
                                                                {{$message}}
                                                            @enderror
                                                        </div>
                                                    </div>
                                                    <div class="form-group">
                                                        <label for="id_divisi" class="col-form-label"><b>Divisi Departemen</b></label>
                                                        <select name="id_divisi" class="custom-select">
                                                            <option selected="selected">Pilih sesuai Divisi Departemen</option>
                                                            @foreach ($depart as $data )
                                                            @if ($data->id_divisi == $data->departemen)
                                                            <option value="{{$data->id_divisi}}">{{$data->departemen}} </option>
                                                            @else
                                                            <option value="{{ $data->id_divisi }}">{{ $data->departemen}}</option>
                                                            @endif
                                                            @endforeach
                                                        </select>
                                                        <div class="text-danger">
                                                            @error('id_divisi')
                                                                {{$message}}
                                                            @enderror
                                                        </div>
                                                    </div>
                                                    <div class="form-group">
                                                        <label for="id_magang" class="col-form-label"><b>Jenis Magang</b></label>
                                                        <select name="id_magang" class="custom-select">
                                                            <option selected="selected">Pilih sesuai Jenis Magang</option>
                                                            @foreach ($magang as $data )
                                                            @if ($data->id_magang == $data->id_magang)
                                                            <option value="{{$data->id_magang}}">{{$data->jenis_magang}} </option>
                                                            @else
                                                            <option value="{{ $data->id_magang }}">{{ $data->jenis_magang}}</option>
                                                            @endif
                                                            @endforeach
                                                        </select>
                                                        <div class="text-danger">
                                                            @error('id_magang')
                                                                {{$message}}
                                                            @enderror
                                                        </div>
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
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
