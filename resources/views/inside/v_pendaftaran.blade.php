@extends('layout.v_template')
@section('title', 'Form Pendaftaran')
@section('content')
<div class="row">
    <div class="col-lg-6 col-ml-12">
        <div class="row">
            <!-- Textual inputs start -->
            <div class="col-12 mt-5">
                <div class="card">
                    <div class="card-body">
                        <h4 class="header-title">Informasi Pribadi</h4>
                        <div class="form-group">
                            <label for="example-text-input" class="col-form-label"><b>Nama Lengkap (Sesuai KTP)</b></label>
                            <input class="form-control" type="text" value="" id="example-text-input">
                        </div>
                        <div class="form-group">
                            <label for="example-search-input" class="col-form-label"><b>NIK</b></label>
                            <input class="form-control" type="search" value="" id="example-search-input">
                        </div>
                        <div class="form-group">
                            <label for="example-email-input" class="col-form-label"><b>Nomor Handphone ( contoh : 08xx xxxx xxxx )</b></label>
                            <input class="form-control" type="email" value="" id="example-email-input">
                        </div>
                        <div class="form-group">
                            <label for="example-text-input" class="col-form-label"><b>Email</b></label>
                            <input class="form-control" type="text" value="" id="example-text-input">
                        </div>
                    </div>
                </div>
            </div>
            <!-- Textual inputs end -->
        </div>
    </div>
    <div class="col-lg-6 col-ml-12">
        <div class="row">
            <!-- Textual inputs start -->
            <div class="col-12 mt-5">
                <div class="card">
                    <div class="card-body">
                        <h4 class="header-title">Upload Berkas</h4>
                        <form action="#">
                            <div class="input-group mb-3">
                                <div class="input-group-prepend">
                                    <span class="input-group-text">KTP</span>
                                </div>
                                <div class="custom-file">
                                    <input type="file" class="custom-file-input" id="inputGroupFile01">
                                    <label class="custom-file-label" for="inputGroupFile01">Choose file</label>
                                </div>
                            </div>
                            <div class="input-group mb-3">
                                <div class="input-group-prepend">
                                    <span class="input-group-text">Ijazah</span>
                                </div>
                                <div class="custom-file">
                                    <input type="file" class="custom-file-input" id="inputGroupFile01">
                                    <label class="custom-file-label" for="inputGroupFile01">Choose file</label>
                                </div>
                            </div>
                            <div class="input-group mb-3">
                                <div class="input-group-prepend">
                                    <span class="input-group-text">CV dan Porto</span>
                                </div>
                                <div class="custom-file">
                                    <input type="file" class="custom-file-input" id="inputGroupFile01">
                                    <label class="custom-file-label" for="inputGroupFile01">Choose file</label>
                                </div>
                            </div>
                        </form>
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
</div>
@endsection
