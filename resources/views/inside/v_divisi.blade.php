@extends('layout.v_template')
@section('title', 'Divisi Departemen Magang')
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
                        <form action="/insert_divisi" method="POST" enctype="multipart/form-data">
                            @csrf
                        <div class="form-group">
                            <label for="divisi" class="col-form-label"><b>Divisi</b></label>
                            <input type="text" name="divisi" id="divisi" class="form-control" value="{{old('divisi')}}">
                            <div class="text-danger">
                                @error('divisi')
                                    {{$message}}
                                @enderror
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="departemen" class="col-form-label"><b>Departemen</b></label>
                            <input type="text" name="departemen" id="departemen" class="form-control" value="{{old('departemen')}}">
                            <div class="text-danger">
                                @error('departemen')
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
                                    <th scope="col">Divisi</th>
                                    <th scope="col">Departemen</th>
                                    <th scope="col">Created At</th>
                                    <th scope="col">Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($divisi as $data)
                                <tr>
                                    <td>{{$data->divisi}}</td>
                                    <td>{{$data->departemen}}</td>
                                    <td>{{$data->created_at}}</td>
                                    <td>
                                        <button class="btn btn-warning btn-xs mb-3" data-toggle="modal" data-target="#update{{ $data->id}}">Update</button>
                                        <button class="btn btn-danger btn-xs mb-3" data-toggle="modal" data-target="#delete{{ $data->id}}">Delete</button>
                                    </td>
                                </tr>
                                @endforeach
                                @foreach ($divisi as $data)
                                <div class="modal fade" id="update{{ $data->id}}">
                                    <div class="modal-dialog modal-dialog-centered" role="document">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <div class="modal-body">
                                                    <form action="/update_divisi/{{ $data->id}}" method="POST" enctype="multipart/form-data">
                                                        @csrf
                                                    <div class="form-group">
                                                        <label for="divisi" class="col-form-label"><b>Divisi</b></label>
                                                        <input type="text" name="divisi" id="divisi" class="form-control" value="{{$data->divisi}}">
                                                        <div class="text-danger">
                                                            @error('divisi')
                                                                {{$message}}
                                                            @enderror
                                                        </div>
                                                    </div>
                                                    <div class="form-group">
                                                        <label for="departemen" class="col-form-label"><b>Departemen</b></label>
                                                        <input type="text" name="departemen" id="departemen" class="form-control" value="{{$data->departemen}}">
                                                        <div class="text-danger">
                                                            @error('departemen')
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
                                @foreach ($divisi as $data)
                                <div class="modal fade" id="delete{{ $data->id}}">
                                    <div class="modal-dialog modal-dialog-centered" role="document">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h5 class="modal-title">Hapus Divisi Departemen</h5>
                                                <button type="button" class="close" data-dismiss="modal"><span>&times;</span></button>
                                            </div>
                                            <div class="modal-body">
                                                <p>Apakah anda yakin ingin menghapus <b>{{$data->divisi}}</b>???</p>
                                            </div>
                                            <div class="modal-footer">
                                                <a href="/delete_divisi/{{ $data->id}}" class="btn btn-success pull-left">Yes</a>
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
