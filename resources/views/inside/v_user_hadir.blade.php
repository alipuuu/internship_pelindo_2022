@extends('layout.v_template')
@section('title', 'Data Absensi Hadir')
@section('content')
<!-- table primary start -->
    <div class="col-lg-12 mt-5">
        <div class="card">
            <div class="card-body">
                <h4 class="header-title">Data Hadir Magang </h4>
                <div class="single-table">
                    <div class="table-responsive">
                        <table id="table-datatables" class="table text-center">
                            <thead class="text-uppercase bg-success">
                                <tr class="text-white">
                                    <th>Nama</th>
                                    <th>Jenis Absensi</th>
                                    <th>Datang / Pulang</th>
                                    <th>Check Clock</th>
                                    <th>Bukti Kehadiran</th>
                                    <th>Jadwal WFH</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <th scope="row">Alifah Armansyah Putri</th>
                                    <td>WFO ( Work From Office )</td>
                                    <td>Datang</td>
                                    <td>2022-07-04 07:37:54</td>
                                    <td><a href=""><span class="ti-eye"></span><span class="icon-name">Lihat</span></a></td>
                                    <td>none</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
<!-- table primary end -->
@endsection
