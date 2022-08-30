@extends('layout.v_template')
@section('title', 'Data Absensi Tidak Hadir')
@section('content')
<!-- table primary start -->
<div class="col-lg-12 mt-5">
    <div class="card">
        <div class="card-body">
            <h4 class="header-title">Data Tidak Hadir Absensi Magang </h4>
            <div class="single-table">
                <div class="table-responsive">
                    <table id="table-datatables-2" class="table text-center">
                        <thead class="text-uppercase bg-danger">
                            <tr class="text-white">
                                <th scope="col">Nama</th>
                                <th scope="col">Alasan Ketidakhadiran</th>
                                <th scope="col">Tanggal Awal Perizinan</th>
                                <th scope="col">Tanggal Akhir Perizinan</th>
                                <th scope="col">Bukti Izin Ketidakhadiran</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <th scope="row">Aditya Yudhistira</th>
                                <td>Mules</td>
                                <td>01/01/2022</td>
                                <td>01/01/2022</td>
                                <td><a href=""><span class="ti-eye"></span><span class="icon-name">Lihat</span></a></td>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- table primary end -->
@endsection
