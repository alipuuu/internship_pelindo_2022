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
                                    <th scope="col">Nama</th>
                                    <th scope="col">Jenis Absensi</th>
                                    <th scope="col">Datang / Pulang</th>
                                    <th scope="col">Check Clock</th>
                                    <th scope="col">Bukti Kehadiran</th>
                                    <th scope="col">Jadwal WFH</th>
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
