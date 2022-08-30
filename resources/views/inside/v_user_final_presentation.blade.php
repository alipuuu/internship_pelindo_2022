@extends('layout.v_template')
@section('title', 'Data Final Presentation')
@section('content')
<!-- table primary start -->
    <div class="col-lg-12 mt-5">
        <div class="card">
            <div class="card-body">
                <h4 class="header-title">Data Peserta Final Presentation  </h4>
                <div class="single-table">
                    <div class="table-responsive">
                        <table id="table-datatables" class="table text-center">
                            <thead class="text-uppercase bg-primary">
                                <tr class="text-white">
                                    <th scope="col">Nama Lengkap</th>
                                    <th scope="col">Jurusan / Prodi</th>
                                    <th scope="col">Universitas</th>
                                    <th scope="col">Tanggal Sidang</th>
                                    <th scope="col">File Laporan (PDF) dan PPT</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <th scope="row">Alifah Armansyah Putri</th>
                                    <td>Teknik Telekomunikasi</td>
                                    <td>Politeknik Elektronika Negeri Surabaya</td>
                                    <td>10 September 2022</td>
                                    <td><a href="#">Laporan</a></td>
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
