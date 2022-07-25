@extends('layout.v_template')
@section('title', 'Form Absensi')
@section('content')
<div class="col-lg-12 col-ml-12">
    <div class="row">
    <!-- Textual inputs start -->
        <div class="col-12 mt-5">
            <div class="card">
                <div class="card-body">
                    <h4 class="header-title">Absensi Peserta Magang Pelindo 2022</h4>
                    <p class="text-muted font-14 mb-4">Isi data berikut secara lengkap untuk data Absensi Magang Regular Pelindo 2022.</p>
                    <div class="form-group">
                        <label class="col-form-label"><b>Nama</b></label>
                        <select class="custom-select">
                            <option selected="selected">Pilih sesuai nama</option>
                            <option value="alifah">Alifah</option>
                            <option value="aldi">Aldi</option>
                            <option value="yudis">Yudis</option>
                            <option value="lutfi">Lutfi</option>
                        </select>
                    </div>
                    <div class="form-group">
                    <form action="#">
                        <label class="col-form-label"><b>Penempatan Magang</b></label>
                        <div class="custom-control custom-radio">
                            <input type="radio" checked id="customRadio1" name="customRadio" class="custom-control-input">
                            <label class="custom-control-label" for="customRadio1">PT Terminal Petikemas</label>
                        </div>
                        <div class="custom-control custom-radio">
                            <input type="radio" id="customRadio2" name="customRadio" class="custom-control-input">
                            <label class="custom-control-label" for="customRadio2">Regional 3</label>
                        </div>
                        <div class="custom-control custom-radio">
                            <input type="radio" id="customRadio3" name="customRadio" class="custom-control-input">
                            <label class="custom-control-label" for="customRadio3">PT BIMA</label>
                        </div>
                        <div class="custom-control custom-radio">
                            <input type="radio" id="customRadio4" name="customRadio" class="custom-control-input">
                            <label class="custom-control-label" for="customRadio4">Subregional Jawa</label>
                        </div>
                        <div class="custom-control custom-radio">
                            <input type="radio" id="customRadio5" name="customRadio" class="custom-control-input">
                            <label class="custom-control-label" for="customRadio5">PT BMC</label>
                        </div>
                    </form>
                    </div>
                    <div class="form-group">
                        <label class="col-form-label"><b>Divisi Unit Kerja</b></label>
                        <select class="custom-select">
                            <option selected="selected">Pilih sesuai divisi</option>
                            <option value="umum">Departemen Head Umum</option>
                            <option value="tekno">Departemen Head Teknologi Informasi</option>
                            <option value="pemasaran">Departemen Head Pemasaran</option>
                            <option value="kapal    ">Departemen Head Pelayanan Kapal</option>
                        </select>
                    </div>
                    <div class="form-group">
                    <form action="#">
                        <label class="col-form-label"><b>Jenis Magang</b></label>
                        <div class="custom-control custom-radio">
                            <input type="radio" checked id="customRadio6" name="customRadio" class="custom-control-input">
                            <label class="custom-control-label" for="customRadio6">Siswa</label>
                        </div>
                        <div class="custom-control custom-radio">
                            <input type="radio" id="customRadio7" name="customRadio" class="custom-control-input">
                            <label class="custom-control-label" for="customRadio7">Mahasiswa</label>
                        </div>
                        <div class="custom-control custom-radio">
                            <input type="radio" id="customRadio8" name="customRadio" class="custom-control-input">
                            <label class="custom-control-label" for="customRadio8">Fresh Graduate</label>
                        </div>
                    </form>
                    </div>
                </div>
            </div>
        </div>
        <!-- Textual inputs end -->
        <!-- tab start -->
        <div class="col-lg-12 mt-5">
            <div class="card">
                <div class="card-body">
                    <ul class="nav nav-pills mb-3" id="pills-tab" role="tablist">
                        <li class="nav-item">
                            <a class="nav-link active" id="pills-home-tab" data-toggle="pill" href="#pills-home" role="tab" aria-controls="pills-home" aria-selected="true">Hadir</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" id="pills-profile-tab" data-toggle="pill" href="#pills-profile" role="tab" aria-controls="pills-profile" aria-selected="false">Tidak Hadir</a>
                        </li>
                    </ul>
                    <div class="tab-content" id="pills-tabContent">
                        <div class="tab-pane fade show active" id="pills-home" role="tabpanel" aria-labelledby="pills-home-tab">
                            <div class="form-group">
                                <form action="#">
                                    <label class="col-form-label"><b>Hadir</b></label>
                                    <div class="custom-control custom-radio">
                                        <input type="radio" checked id="customRadio9" name="customRadio" class="custom-control-input">
                                        <label class="custom-control-label" for="customRadio9">Hadir</label>
                                    </div>
                                </form>
                            </div>
                            <div class="form-group">
                                <form action="#">
                                    <label class="col-form-label"><b>Jenis Absensi</b><br>Pilih salah satu sesuai dengan jadwal yang diberikan</label>
                                    <div class="custom-control custom-radio">
                                        <input type="radio" checked id="customRadio10" name="customRadio" class="custom-control-input">
                                        <label class="custom-control-label" for="customRadio10">WFH ( Work From Home )</label>
                                    </div>
                                    <div class="custom-control custom-radio">
                                        <input type="radio" id="customRadio11" name="customRadio" class="custom-control-input">
                                        <label class="custom-control-label" for="customRadio11">WFO ( Work From Office )</label>
                                    </div>
                                    <div class="custom-control custom-radio">
                                        <input type="radio" id="customRadio12" name="customRadio" class="custom-control-input">
                                        <label class="custom-control-label" for="customRadio12">Konsinyering</label>
                                    </div>
                                </form>
                            </div>
                            <div class="form-group">
                                <form action="#">
                                    <label class="col-form-label"><b>ABSENSI Masuk / Pulang</b><br>Pilih jangan sampai salah</label>
                                    <div class="custom-control custom-radio">
                                        <input type="radio" checked id="customRadio13" name="customRadio" class="custom-control-input">
                                        <label class="custom-control-label" for="customRadio13">Datang</label>
                                    </div>
                                    <div class="custom-control custom-radio">
                                        <input type="radio" id="customRadio14" name="customRadio" class="custom-control-input">
                                        <label class="custom-control-label" for="customRadio14">Pulang</label>
                                    </div>
                                </form>
                            </div>
                            <div class="form-group">
                                <label for="example-time-input" class="col-form-label"><b>ABSENSI Check Clock Otomatis</b><br>Harap dapat hadir sebelum pukul 08.00</label>
                                <input class="form-control" id="dt" type="datetime-local">
                            </div>
                            <div class="form-group">
                                <label for="example-time-input" class="col-form-label"><b>Upload Bukti Foto (Berupa foto menggunakan aplikasi Timestamp Camera</b><br>Harap mengupload bukti sesuai dengan jam absensi.</label>
                                <div class="custom-file">
                                    <input type="file" class="custom-file-input" id="inputGroupFile01">
                                    <label class="custom-file-label" for="inputGroupFile01">Choose file</label>
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="example-time-input" class="col-form-label"><b>Upload jadwal WFH / Surat Konsinyering</b><br>Harap upload jadwal WFH / Surat Konsinyering yang sudah di setujui oleh mentor/atasan. Jika tidak melampirkan dianggap tidak hadir.</label>
                                <div class="custom-file">
                                    <input type="file" class="custom-file-input" id="inputGroupFile02">
                                    <label class="custom-file-label" for="inputGroupFile02">Choose file</label>
                                </div>
                            </div>
                        </div>
                        <div class="tab-pane fade" id="pills-profile" role="tabpanel" aria-labelledby="pills-profile-tab">
                            <div class="form-group">
                                <form action="#">
                                    <label class="col-form-label"><b>Tidak Hadir</b></label>
                                    <div class="custom-control custom-radio">
                                        <input type="radio" checked id="customRadio10" name="customRadio" class="custom-control-input">
                                        <label class="custom-control-label" for="customRadio15">Tidak Hadir</label>
                                    </div>
                                </form>
                            </div>
                            <div class="form-group">
                                <label for="example-text-input-lg" class="col-form-label"><b>Alasan Ketidakhadiran</b></label>
                                <input class="form-control form-control-lg" type="text" placeholder="tulis dengan alasan singkat dan jelas" id="example-text-input-lg">
                            </div>
                            <div class="form-group">
                                <label for="example-date-input" class="col-form-label"><b>Tanggal Awal Perizinan</b></label>
                                <input class="form-control" type="date" value="2022-01-01" id="example-date-input">
                            </div>
                            <div class="form-group">
                                <label for="example-date-input" class="col-form-label"><b>Tanggal Akhir Perizinan</b></label>
                                <input class="form-control" type="date" value="2022-01-01" id="example-date-input">
                            </div>
                            <div class="form-group">
                                <label for="example-time-input" class="col-form-label"><b>Bukti Izin Ketidakhadiran</b><br>Dapat mengupload surat izin sakit, izin surat dari kampus ataupun chat dari pembimbing.</label>
                                <div class="custom-file">
                                    <input type="file" class="custom-file-input" id="inputGroupFile03">
                                    <label class="custom-file-label" for="inputGroupFile03">Choose file</label>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- tab end -->
    </div>
    <div class="row">
            <div class="col-lg-12 mt-5">
                <button type="button" class="btn btn-primary btn-lg btn-block">Submit</button>
            </div>
        </div>
</div>
@endsection
