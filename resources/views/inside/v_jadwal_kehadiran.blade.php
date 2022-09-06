@extends('layout.v_template')
@section('title', 'Jadwal Kehadiran Magang')
@section('content')
<script src="dist/sweetalert.js"></script>
<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
<link rel="stylesheet" href="dist/sweetalert.css">
<div class="col-lg-4 mt-5">
    @if (Session::has('status'))
    <div class="alert alert-success" role="alert">
        <strong>{{Session::get('message')}}</strong>
    </div>
    @endif
    <div class="card">
        <div class="card-body">
            <button type="button" class="btn btn-primary btn-lg btn-block" data-toggle="modal" data-target=".bd-example-modal-lg">Masukkan Jadwal Kehadiran Magang</button>
            <div class="modal fade bd-example-modal-lg">
                <div class="modal-dialog modal-dialog-centered">
                    <div class="modal-content">
                        <div class="card">
                            <div class="card-body">
                                <form action="/insert_jadwal" method="POST" enctype="multipart/form-data">
                                    @csrf
                                <div class="form-group">
                                    <label for="jadwal_kehadiran" class="col-form-label"><b>jadwal kehadiran</b></label>
                                    <input type="text" name="jadwal_kehadiran" id="jadwal_kehadiran" class="form-control" value="{{old('jadwal_kehadiran')}}">
                                    <div class="text-danger">
                                        @error('jadwal_kehadiran')
                                            {{$message}}
                                        @enderror
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="ket" class="col-form-label"><b>Keterangan</b></label>
                                    <input type="text" name="ket" id="ket" class="form-control" value="{{old('ket')}}">
                                    <div class="text-danger">
                                        @error('ket')
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
        </div>
    </div>
</div>
<div class="col-lg-12 mt-5">
    <div class="card">
        <div class="card-body">
            <h4 class="header-title">Data Pendaftar </h4>
            <div class="single-table">
                <div class="table-responsive">
                    <table id="table-datatables" class="table text-center">
                        <thead class="text-uppercase bg-primary">
                            <tr class="text-white">
                                <th>jadwal_kehadiran</th>
                                <th>ket</th>
                                <th>Created At</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($jadwal as $data)
                            <tr>
                                <td>{{$data->jadwal_kehadiran}}</td>
                                <td>{{$data->ket}}</td>
                                <td>{{$data->created_at}}</td>
                                <td>
                                    <button class="btn btn-warning btn-xs mb-3" data-toggle="modal" data-target="#update{{ $data->id_jadwal}}">Update</button>
                                    <button class="btn btn-danger btn-xs mb-3" data-toggle="modal" data-target="#delete{{ $data->id_jadwal}}">Delete</button>
                                </td>
                            </tr>
                            @endforeach
                            @foreach ($jadwal as $data)
                            <div class="modal fade" id="update{{ $data->id_jadwal}}">
                                <div class="modal-dialog modal-dialog-centered" role="document">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <div class="modal-body">
                                                <form action="/update_jadwal_kehadiran/{{ $data->id_jadwal}}" method="POST" enctype="multipart/form-data">
                                                    @csrf
                                                <div class="form-group">
                                                    <label for="jadwal_kehadiran" class="col-form-label"><b>jadwal_kehadiran</b></label>
                                                    <input type="text" name="jadwal_kehadiran" id="jadwal_kehadiran" class="form-control" value="{{$data->jadwal_kehadiran}}">
                                                    <div class="text-danger">
                                                        @error('jadwal_kehadiran')
                                                            {{$message}}
                                                        @enderror
                                                    </div>
                                                </div>
                                                <div class="form-group">
                                                    <label for="ket" class="col-form-label"><b>ket</b></label>
                                                    <input type="text" name="ket" id="ket" class="form-control" value="{{$data->ket}}">
                                                    <div class="text-danger">
                                                        @error('ket')
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
                            @foreach ($jadwal as $data)
                            <div class="modal fade" id="delete{{ $data->id_jadwal}}">
                                <div class="modal-dialog modal-dialog-centered" role="document">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h5 class="modal-title">Hapus jadwal_kehadiran ket</h5>
                                            <button type="button" class="close" data-dismiss="modal"><span>&times;</span></button>
                                        </div>
                                        <div class="modal-body">
                                            <p>Apakah anda yakin ingin menghapus <b>{{$data->jadwal_kehadiran}}</b>???</p>
                                        </div>
                                        <div class="modal-footer">
                                            <a href="/delete_jadwal_kehadiran/{{ $data->id_jadwal}}" class="btn btn-success pull-left">Yes</a>
                                            <a class="btn btn-warning" data-dismiss="modal">No</a>
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

<script src="sweetalert2.all.min.js"></script>
<script src="sweetalert2.min.js"></script>
<link rel="stylesheet" href="sweetalert2.min.css">
<script>
document.querySelector('.sweet-3').onclick = function(){
swal("Saved Changed!", "You clicked the button!", "success");
};
</script>
@endsection
