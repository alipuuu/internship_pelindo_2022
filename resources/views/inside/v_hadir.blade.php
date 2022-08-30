@extends('layout.v_template')
@section('title', 'Hadir Magang')
@section('content')
<div class="col-lg-12 col-ml-12">
    <div class="row">
    <!-- Textual inputs start -->
        <div class="col-12 mt-5">
            <div class="card">
                <div class="card-body">
                    <h4 class="header-title">Absensi Peserta Magang Pelindo 2022 | Form Absensi <u><b>Hadir</b></u> Magang</h4>
                    <p class="text-muted font-14 mb-4">Isi data berikut secara lengkap untuk data Absensi Magang Regular Pelindo 2022.</p>
                    <div class="form-group">
                        <label class="col-form-label"><b>Nama</b></label>
                        <select class="custom-select">
                            <option selected="selected">Pilih sesuai nama</option>
                            @foreach ($daftar as $data )
                            <option value="{{ $data->id }}">{{ $data->nama_lengkap}}</option>
                            @endforeach
                        </select>
                        <div class="text-danger">
                            @error('nama_lengkap')
                                {{$message}}
                            @enderror
                        </div>
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
                        <label for="example-time-input" class="col-form-label"><b>Upload Bukti Foto (Berupa foto menggunakan aplikasi Timestamp Camera</b><br>Harap mengupload bukti sesuai dengan jam absensi.</label>
                        <input type="file" name="berkas" id="berkas" class="form-control"  value="">
                    </div>
                    <div class="form-group">
                        <label for="example-time-input" class="col-form-label"><b>Upload jadwal WFH / Surat Konsinyering</b><br>Harap upload jadwal WFH / Surat Konsinyering yang sudah di setujui oleh mentor/atasan. Jika tidak melampirkan dianggap tidak hadir.</label>
                        <input type="file" name="berkas" id="berkas" class="form-control"  value="">
                        {{-- <label class="custom-file-label" for="inputGroupFile02">Choose file</label> --}}
                    </div>
                </div>
            </div>
        </div>
        <!-- Textual inputs end -->
    </div>
    <div class="row">
            <div class="col-lg-12 mt-5">
                <button type="button" class="btn btn-primary btn-lg btn-block">Submit</button>
            </div>
        </div>
</div>
@endsection
