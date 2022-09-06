@extends('layout.v_template')
@section('title', 'Jenis Magang')
@section('content')
<!-- This is what you need -->
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
            <!-- Large modal -->
            <button type="button" class="btn btn-primary btn-lg btn-block" data-toggle="modal" data-target=".bd-example-modal-lg">Masukkan Divisi Departemen Magang</button>
            <div class="modal fade bd-example-modal-lg">
                <div class="modal-dialog modal-dialog-centered">
                    <div class="modal-content">
                        <div class="card">
                    <div class="card-body">
                        <form action="/insert_magang" method="POST" enctype="multipart/form-data">
                            @csrf
                        <div class="form-group">
                            <label for="jenis_magang" class="col-form-label"><b>Jenis Magang</b></label>
                            <input type="text" name="jenis_magang" id="jenis_magang" class="form-control" value="{{old('jenis_magang')}}">
                            <div class="text-danger">
                                @error('jenis_magang')
                                    {{$message}}
                                @enderror
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="ket" class="col-form-label"><b>Keterangan</b></label>
                            <input type="ket" name="ket" id="ket" class="form-control" value="{{old('ket')}}">
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
<!-- table primary start -->
    <div class="col-lg-12 mt-5">
        <div class="card">
            <div class="card-body">
                <h4 class="header-title">Data Pendaftar </h4>
                <div class="single-table">
                    <div class="table-responsive">
                        <table id="table-datatables" class="table text-center">
                            <thead class="text-uppercase bg-primary">
                                <tr class="text-white">
                                    <th>Jenis Magang</th>
                                    <th>Keterangan</th>
                                    <th>Created At</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($magang as $data)
                                <tr>
                                    <td>{{$data->jenis_magang}}</td>
                                    <td>{{$data->ket}}</td>
                                    <td>{{$data->created_at}}</td>
                                    <td>
                                        <button class="btn btn-warning btn-xs mb-3" data-toggle="modal" data-target="#update{{ $data->id_magang}}">Update</button>
                                        <button class="btn btn-danger btn-xs mb-3" data-toggle="modal" data-target="#delete{{ $data->id_magang}}">Delete</button>
                                    </td>
                                </tr>
                                @endforeach
                                @foreach ($magang as $data)
                                <div class="modal fade" id="update{{ $data->id_magang}}">
                                    <div class="modal-dialog modal-dialog-centered" role="document">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <div class="modal-body">
                                                    <form action="/update_magang/{{ $data->id_magang}}" method="POST" enctype="multipart/form-data">
                                                        @csrf
                                                    <div class="form-group">
                                                        <label for="magang" class="col-form-label"><b>Jenis Magang</b></label>
                                                        <input type="text" name="jenis_magang" id="jenis_magang" class="form-control" value="{{$data->jenis_magang}}">
                                                        <div class="text-danger">
                                                            @error('jenis_magang')
                                                                {{$message}}
                                                            @enderror
                                                        </div>
                                                    </div>
                                                    <div class="form-group">
                                                        <label for="ket" class="col-form-label"><b>Keterangan</b></label>
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
                                @foreach ($magang as $data)
                                <div class="modal fade" id="delete{{ $data->id_magang}}">
                                    <div class="modal-dialog modal-dialog-centered" role="document">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h5 class="modal-title">Hapus Jenis Magang</h5>
                                                <button type="button" class="close" data-dismiss="modal"><span>&times;</span></button>
                                            </div>
                                            <div class="modal-body">
                                                <p>Apakah anda yakin ingin menghapus <b>{{$data->magang}}</b>???</p>
                                            </div>
                                            <div class="modal-footer">
                                                <a href="/delete_magang/{{ $data->id_magang}}" class="btn btn-success pull-left">Yes</a>
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
<!-- table primary end -->

<script src="sweetalert2.all.min.js"></script>
<script src="sweetalert2.min.js"></script>
<link rel="stylesheet" href="sweetalert2.min.css">
<script>
document.querySelector('.sweet-3').onclick = function(){
swal("Saved Changed!", "You clicked the button!", "success");
};
</script>
@endsection
