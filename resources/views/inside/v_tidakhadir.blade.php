@extends('layout.v_template')
@section('title', 'Tidak Hadir Magang')
@section('content')
<div class="col-lg-12 col-ml-12">
    <div class="row">
    <!-- Textual inputs start -->
        <div class="col-12 mt-5">
            <div class="card">
                <div class="card-body">
                    <h4 class="header-title">Absensi Peserta Magang Pelindo 2022 | Form Absensi <u><b>Tidak Hadir</b></u> Magang</h4>
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
                        <input type="file" name="berkas" id="berkas" class="form-control"  value="">
                        {{-- <label class="custom-file-label" for="inputGroupFile03">Choose file</label> --}}
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
