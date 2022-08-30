@extends('layout.v_template')
@section('title', 'Dashboard')
@section('content')
<!-- additional content area start -->
<div class="col-lg-12 mt-5">
    <div class="card">
        <div class="card-body">
            <h4 class="header-title">Status Magang Internship Program 2022</h4>
            <tr><a href="/datapribadi" class="btn btn-info tbn-sm">Melihat Data Anda</a></tr>
            <div class="additional-content">
                <div class="alert alert-warning" role="alert">
                    <h4 class="alert-heading">Menunggu Konfirmasi Kelolosan sebagai Peserta Magang Internship 2022</h4>
                    <p>Aww yeah, you successfully read this important alert message. This example text is going to run a bit longer so that you can see how spacing within an alert works with this kind of content.</p>
                    {{-- <hr>
                    <p class="mb-0">Whenever you need to, be sure to use margin utilities to keep things nice and tidy.</p> --}}
                </div>
                <div class="alert alert-danger" role="alert">
                    <h4 class="alert-heading">Jangan Menyerah dan Tetap Semangat ya, Anda Belum bisa lolos sebagai Peserta Magang Internship 2022.</h4>
                    <p>Aww yeah, you successfully read this important alert message. This example text is going to run a bit longer so that you can see how spacing within an alert works with this kind of content.</p>
                    {{-- <hr>
                    <p class="mb-0">Whenever you need to, be sure to use margin utilities to keep things nice and tidy.</p> --}}
                </div>
                <div class="alert alert-success" role="alert">
                    <h4 class="alert-heading">Selamat! Anda Lolos seleksi sebagai Peserta Magang Internship 2022</h4>
                    <p>Aww yeah, you successfully read this important alert message. This example text is going to run a bit longer so that you can see how spacing within an alert works with this kind of content.</p>
                    {{-- <hr>
                    <p class="mb-0">Whenever you need to, be sure to use margin utilities to keep things nice and tidy.</p> --}}
                </div>
            </div>
        </div>
    </div>
</div>
<!-- additional content area end -->
@endsection
