@extends('layout.v_template')
@section('title', 'What They say')
@section('content')

<!-- table primary start -->
    <div class="col-lg-12 mt-5">
        <div class="card">
            <div class="card-body">
                <h4 class="header-title">What They Say</h4>
                <div class="single-table">
                    <div class="table-responsive">
                        <table id="table-datatables" class="table text-center">
                            <thead class="text-uppercase bg-primary">
                                <tr class="text-white">
                                    <th class="text-center">No</th>
                                    <th>Nama Lengkap</th>
                                    <th>Email</th>
                                    <th>Message</th>
                                    <th>Created At</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php $no=1; ?>
                                @foreach ($theysay as $data)
                                <tr>
                                    <td>{{$no++}}</td>
                                    <th>{{ $data->name }}</th>
                                    <td>{{ $data->email }}</td>
                                    <td>{{ $data->message }}</td>
                                    <td>{{ $data->created_at}}</td>
                                    <td>
                                        <?php if($data->status == '1'){ ?>
                                        <a href="{{url('/update_theysay',$data->id)}}" class="btn btn-success btn-xs mb-3">Ditampilkan pada Dashboard</a>
                                        <?php }else{ ?>
                                        <a href="{{url('/update_theysay',$data->id)}}" class="btn btn-danger btn-xs mb-3">Tidak Ditampilkan</a>
                                        <?php } ?>
                                    </td>
                                </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
<!-- table primary end -->

@endsection
