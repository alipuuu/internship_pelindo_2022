@extends('layout.v_template')
@section('title', 'Data Absensi Magang')
@section('content')
<!-- table primary start -->
    <div class="col-lg-12 mt-5">
        <div class="card">
            <div class="card-body">
                <h4 class="header-title">Data Hadir Absensi Magang </h4>
                <div class="single-table">
                    <div class="table-responsive">
                        <table id="example2" class="table text-center">
                            <thead class="text-uppercase bg-success">
                                <tr class="text-white">
                                    <th scope="col">Nama</th>
                                    <th scope="col">Penempatan Magang</th>
                                    <th scope="col">Divisi Unit Kerja</th>
                                    <th scope="col">Jenis Magang</th>
                                    <th scope="col">Kehadiran</th>
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
                                    <td>Regional 3</td>
                                    <td>Mahasiswa</td>
                                    <td>Departemen Head Teknologi Informasi</td>
                                    <td>Hadir</td>
                                    <td>WFO ( Work From Office )</td>
                                    <td>Datang</td>
                                    <td>2022-07-04 07:37:54</td>
                                    <td><span class="ti-eye"></span><span class="icon-name"> Lihat</span></td>
                                    <td>-</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="col-lg-12 mt-5">
        <div class="card">
            <div class="card-body">
                <h4 class="header-title">Data Tidak Hadir Absensi Magang </h4>
                <div class="single-table">
                    <div class="table-responsive">
                        <table id="example2" class="table text-center">
                            <thead class="text-uppercase bg-danger">
                                <tr class="text-white">
                                    <th scope="col">Nama</th>
                                    <th scope="col">Penempatan Magang</th>
                                    <th scope="col">Divisi Unit Kerja</th>
                                    <th scope="col">Jenis Magang</th>
                                    <th scope="col">Kehadiran</th>
                                    <th scope="col">Alasan Ketidakhadiran</th>
                                    <th scope="col">Tanggal Awal Perizinan</th>
                                    <th scope="col">Tanggal Akhir Perizinan</th>
                                    <th scope="col">Bukti Izin Ketidakhadiran</th>
                                </tr>
                            </thead>
                            <tbody>
                               <tr>
                                    <th scope="row">Aditya Yudhistira</th>
                                    <td>Regional 3</td>
                                    <td>Mahasiswa</td>
                                    <td>Departemen Head Teknologi Informasi</td>
                                    <td>Tidak Hadir</td>
                                    <td>01/01/2022</td>
                                    <td>01/01/2022</td>
                                    <td>created at database</td>
                                    <td><span class="ti-eye"></span><span class="icon-name"> Lihat</span></td>
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
