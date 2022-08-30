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
                                    <th scope="col">Nama Lengkap</th>
                                    <th scope="col">NIK</th>
                                    <th scope="col">Nomor Handphone</th>
                                    <th scope="col">Email</th>
                                    <th scope="col">Berkas</th>
                                    <th class="text-center">Created At</th>
                                    <th scope="col">Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                {{-- <?php $no=1; ?>
                                @foreach ($pendaftaran as $data)
                                <tr>
                                    <td class="text-center">{{$no++}}</td>
                                    <th scope="row">{{ $data->nama_lengkap }}</th>
                                    <td>{{ $data->nik }}</td>
                                    <td>{{ $data->no_telp }}</td>
                                    <td>{{ $data->email }}</td>
                                    <td><a href="{{ $data->berkas }}"  target="_blank" download><span class="fa fa-download"></span><span class="icon-name"> {{ $data->berkas }}</a></span></td>
                                    <td class="text-center">{{ $data->created_at}}</td>
                                    <td class="text-center">
                                        <?php if($data->status == '1'){ ?>
                                        <a href="{{url('/update_pendaftaran',$data->id)}}" class="btn btn-success btn-xs mb-3">Lolos Seleksi</a>
                                        <?php }else{ ?>
                                        <a href="{{url('/update_pendaftaran',$data->id)}}" class="btn btn-danger btn-xs mb-3">Belum Lolos Seleksi</a>
                                        <?php } ?>
                                    </td>
                                </tr>
                                @endforeach --}}
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
<!-- table primary end -->

@endsection
