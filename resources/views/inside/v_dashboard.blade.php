@extends('layout.v_template')
@section('title', 'Dashboard')
@section('content')
<div class="sales-report-area sales-style-two">
    <div class="row">
        <div class="col-xl-4 col-ml-3 col-md-6 mt-5">
            <div class="single-report">
                <div class="s-sale-inner pt--30 mb-3">
                    <div class="s-report-title d-flex justify-content-between">
                        <h4 class="header-title mb-0">Pendaftar Magang Keseluruhan</h4>
                        <h4 class="header-title mb-0">{{$peserta}}</h4>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-xl-4 col-ml-3 col-md-6 mt-5">
            <div class="single-report">
                <div class="s-sale-inner pt--30 mb-3">
                    <div class="s-report-title d-flex justify-content-between">
                        <h4 class="header-title mb-0">Pendaftar Magang Lolos Seleksi</h4>
                        <h4 class="header-title mb-0">{{$lolos}}</h4>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-xl-4 col-ml-3 col-md-6 mt-5">
            <div class="single-report">
                <div class="s-sale-inner pt--30 mb-3">
                    <div class="s-report-title d-flex justify-content-between">
                        <h4 class="header-title mb-0">Pendaftar Magang Gagal Lolos Seleksi</h4>
                        <h4 class="header-title mb-0">{{$tidak_lolos}}</h4>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-xl-6 col-ml-3 col-md-6 mt-5">
            <div class="single-report">
                <div class="s-sale-inner pt--30 mb-3">
                    <div class="s-report-title d-flex justify-content-between">
                        <h4 class="header-title mb-0">Asal Instansi ( Kampus / Sekolah )</h4>
                        <h4 class="header-title mb-0">{{$instansi}}</h4>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-xl-6 col-ml-3 col-md-6  mt-5">
            <div class="single-report">
                <div class="s-sale-inner pt--30 mb-3">
                    <div class="s-report-title d-flex justify-content-between">
                        <h4 class="header-title mb-0">Penempatan Magang</h4>
                        <h4 class="header-title mb-0">{{$penempatan}}</h4>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-xl-4 col-ml-3 col-md-6 mt-5">
            <div class="single-report">
                <div class="s-sale-inner pt--30 mb-3">
                    <div class="s-report-title d-flex justify-content-between">
                        <h4 class="header-title mb-0">Peserta Magang Fresh Graduate</h4>
                        <h4 class="header-title mb-0">{{$fresh}}</h4>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-xl-4 col-ml-3 col-md-6 mt-5">
            <div class="single-report">
                <div class="s-sale-inner pt--30 mb-3">
                    <div class="s-report-title d-flex justify-content-between">
                        <h4 class="header-title mb-0">Peserta Magang Mahasiswa</h4>
                        <h4 class="header-title mb-0">{{$mahasiswa}}</h4>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-xl-4 col-ml-3 col-md-6  mt-5">
            <div class="single-report">
                <div class="s-sale-inner pt--30 mb-3">
                    <div class="s-report-title d-flex justify-content-between">
                        <h4 class="header-title mb-0">Peserta Magang Siswa</h4>
                        <h4 class="header-title mb-0">{{$siswa}}</h4>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-xl-6 col-ml-3 col-md-6 mt-5">
            <div class="single-report">
                <div class="s-sale-inner pt--30 mb-3">
                    <div class="s-report-title d-flex justify-content-between">
                        <h4 class="header-title mb-0">Peserta Hadir Magang</h4>
                        <h4 class="header-title mb-0">??</h4>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-xl-6 col-ml-3 col-md-6  mt-5">
            <div class="single-report">
                <div class="s-sale-inner pt--30 mb-3">
                    <div class="s-report-title d-flex justify-content-between">
                        <h4 class="header-title mb-0">Peserta Tidak Hadir Magang</h4>
                        <h4 class="header-title mb-0">??</h4>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<br><br>
    <div class="card">
        <div class="card-body bg1">
            <h4 class="header-title text-white">What They Say</h4>
            <div class="testimonial-carousel owl-carousel">
                <div class="tst-item">
                    <div class="tstu-img">
                        <img src="assets/images/team/team-author2.jpg" alt="author image">
                    </div>
                    <div class="tstu-content">
                        <h4 class="tstu-name">Abel Franecki</h4>
                        <span class="profsn">Designer</span>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Vitae laborum ut nihil numquam a aliquam alias necessitatibus ipsa soluta quam!</p>
                    </div>
                </div>
                <div class="tst-item">
                    <div class="tstu-img">
                        <img src="assets/images/team/team-author3.jpg" alt="author image">
                    </div>
                    <div class="tstu-content">
                        <h4 class="tstu-name">Abel Franecki</h4>
                        <span class="profsn">Designer</span>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Vitae laborum ut nihil numquam a aliquam alias necessitatibus ipsa soluta quam!</p>
                    </div>
                </div>
                <div class="tst-item">
                    <div class="tstu-img">
                        <img src="assets/images/team/team-author3.jpg" alt="author image">
                    </div>
                    <div class="tstu-content">
                        <h4 class="tstu-name">Abel Franecki</h4>
                        <span class="profsn">Designer</span>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Vitae laborum ut nihil numquam a aliquam alias necessitatibus ipsa soluta quam!</p>
                    </div>
                </div>
                <div class="tst-item">
                    <div class="tstu-img">
                        <img src="assets/images/team/team-author3.jpg" alt="author image">
                    </div>
                    <div class="tstu-content">
                        <h4 class="tstu-name">Abel Franecki</h4>
                        <span class="profsn">Designer</span>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Vitae laborum ut nihil numquam a aliquam alias necessitatibus ipsa soluta quam!</p>
                    </div>
                </div>
                <div class="tst-item">
                    <div class="tstu-img">
                        <img src="assets/images/team/team-author3.jpg" alt="author image">
                    </div>
                    <div class="tstu-content">
                        <h4 class="tstu-name">Abel Franecki</h4>
                        <span class="profsn">Designer</span>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Vitae laborum ut nihil numquam a aliquam alias necessitatibus ipsa soluta quam!</p>
                    </div>
                </div>
                <div class="tst-item">
                    <div class="tstu-img">
                        <img src="assets/images/team/team-author3.jpg" alt="author image">
                    </div>
                    <div class="tstu-content">
                        <h4 class="tstu-name">Abel Franecki</h4>
                        <span class="profsn">Designer</span>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Vitae laborum ut nihil numquam a aliquam alias necessitatibus ipsa soluta quam!</p>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection

