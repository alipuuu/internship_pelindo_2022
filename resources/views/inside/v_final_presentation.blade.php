@extends('layout.v_template')
@section('title', 'Form Final Presentation')
@section('content')
<!-- This is what you need -->
<script src="dist/sweetalert.js"></script>
<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
<link rel="stylesheet" href="dist/sweetalert.css">
<div class="row">
    <div class="col-lg-6 col-ml-12">
        <div class="row">
            <!-- Textual inputs start -->
            <div class="col-12 mt-5">
                <div class="card">
                    <div class="card-body">
                        <form action="/insert_pendaftaran" method="POST" enctype="multipart/form-data">
                            @csrf
                        <div class="form-group">
                            <label for="nama_lengkap" class="col-form-label"><b>Nama Lengkap (Sesuai KTP)</b></label>
                            <input type="text" name="nama_lengkap" id="nama_lengkap" class="form-control" value="{{old('nama_lengkap')}}">
                            <div class="text-danger">
                                @error('nama_lengkap')
                                    {{$message}}
                                @enderror
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="nik" class="col-form-label"><b>Jurusan / Prodi</b></label>
                            <input type="text" name="nik" id="nik" class="form-control" value="{{old('nik')}}">
                            <div class="text-danger">
                                @error('nik')
                                    {{$message}}
                                @enderror
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="no_telp" class="col-form-label"><b>Universitas</b></label>
                            <input type="text" name="no_telp" id="no_telp" class="form-control"  value="{{old('no_telp')}}">
                            <div class="text-danger">
                                @error('no_telp')
                                    {{$message}}
                                @enderror
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="email" class="col-form-label"><b>Tanggal Sidang</b></label>
                            <input type="text" name="email" id="email" class="form-control"  value="{{old('email')}}">
                            <div class="text-danger">
                                @error('email')
                                    {{$message}}
                                @enderror
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="berkas" class="col-form-label"><b>Berkas ( Laporan PDF dan PPT )</b></label>
                            <input type="file" name="berkas" id="berkas" class="form-control" >
                            <div class="text-danger">
                                @error('berkas')
                                    {{$message}}
                                @enderror
                            </div>
                        </div>
                        <div class="col-lg-12 mt-5">
                            <button class="btn btn-primary btn-lg btn-block sweet-3" onclick="_gaq.push(['_trackEvent', 'example', 'try', 'sweet-3']);" type="submit">Submit</button>
                        </div>
                        </form>
                    </div>
                </div>
            </div>
            <!-- Textual inputs end -->
        </div>
    </div>
    <div class="col-lg-6 col-ml-12">
        <div class="row">
            <div class="col-lg-12 mt-5">
                <p>pastikan Laporan PDF dan PPT dibuat sesuai format berikut ini : </p>
                <object
                    data="https://example.com/test.pdf#page=2"
                    type="application/pdf"
                    width="850px"
                    height="750px"
                >
                    <iframe
                        src="https://web-preview.pspdfkit.com/showcases/8.pdf#page=2"
                        width="850px"
                        height="750px"
                        style="border: none;"
                    >
                        <p>
                            Your browser does not support PDFs.
                            <a href="https://example.com/test.pdf">Download the PDF</a>
                            .
                        </p>
                    </iframe>
                </object>
            </div>
        </div>
    </div>
</div>

<script src="sweetalert2.all.min.js"></script>
<script src="sweetalert2.min.js"></script>
<link rel="stylesheet" href="sweetalert2.min.css">
<script>
document.querySelector('.sweet-3').onclick = function(){
swal("Password Changed!", "You clicked the button!", "success");
};
</script>

@endsection
