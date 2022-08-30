<!doctype html>
<html class="no-js" lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Register</title>
    <link rel="icon" href="images/logo-tok.png" type="image/icon type">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="shortcut icon" type="image/png" href="assets/images/icon/favicon.ico">
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/css/font-awesome.min.css">
    <link rel="stylesheet" href="assets/css/themify-icons.css">
    <link rel="stylesheet" href="assets/css/metisMenu.css">
    <link rel="stylesheet" href="assets/css/owl.carousel.min.css">
    <link rel="stylesheet" href="assets/css/slicknav.min.css">
    <!-- amchart css -->
    <link rel="stylesheet" href="https://www.amcharts.com/lib/3/plugins/export/export.css" type="text/css" media="all" />
    <!-- others css -->
    <link rel="stylesheet" href="assets/css/typography.css">
    <link rel="stylesheet" href="assets/css/default-css.css">
    <link rel="stylesheet" href="assets/css/styles.css">
    <link rel="stylesheet" href="assets/css/responsive.css">
    <!-- modernizr css -->
    <script src="assets/js/vendor/modernizr-2.8.3.min.js"></script>
    <script src='https://www.google.com/recaptcha/api.js'></script>
</head>

<body>
    <div class="login-area login-bg">
        <div class="container">
            <div class="login-box ptb--100">
                <form method="POST" action="{{ route('register') }}">
                    @if (Session::has('success'))
                        <div class="alert alert-success">{{Session::get('success')}}</div>
                    @endif
                    @if (Session::has('fail'))
                        <div class="alert alert-danger">{{Session::get('fail')}}</div>
                    @endif
                    @csrf
                    <div class="login-form-head">
                        <a href="/">
                                <img src="images/logo-tok.png" alt="" width="100" height="100">
                        </a><br><br>
                        <h4>Daftar | Internship Program Pelindo Regional 3</h4>
                        <p></p>
                    </div>
                    <div class="login-form-body">
                        <div class="form-gp">
                            <label for="exampleInputName1">Full Name</label>
                            <input type="text" id="exampleInputName1"class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>
                            @error('name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                            @enderror
                            <div class="text-danger"></div>
                        </div>
                        <div class="form-gp">
                            <label for="exampleInputEmail1">Email address</label>
                            <input type="email" id="exampleInputEmail1"class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email">
                            @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                            @enderror
                            <div class="text-danger"></div>
                        </div>
                        <div class="form-gp">
                            <label for="exampleInputPassword1">Password</label>
                            <input type="password" id="exampleInputPassword1" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">
                            @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                            @enderror
                            <div class="text-danger"></div>
                        </div>
                        <div class="form-gp">
                            <label for="exampleInputPassword2">Confirm Password</label>
                            <input type="password" id="exampleInputPassword2" class="form-control" name="password_confirmation" required autocomplete="new-password">
                            <div class="text-danger"></div>
                        </div>
                        <div class="form-gp" hidden>
                            <label for="nik">NIK</label>
                            <input type="text" id="nik"class="form-control" name="nik" value="-" >
                            @error('nik')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                            @enderror
                            <div class="text-danger"></div>
                        </div>
                        <div class="form-gp" hidden>
                            <label for="instansi">Instansi</label>
                            <input type="text" id="instansi"class="form-control" name="instansi" value="-" required autocomplete="instansi" autofocus>
                            @error('instansi')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                            @enderror
                            <div class="text-danger"></div>
                        </div>
                        <div class="form-gp" hidden>
                            <label for="no_telp">No Telepon</label>
                            <input type="text" id="no_telp"class="form-control" name="no_telp" value="-" required autocomplete="no_telp" autofocus>
                            @error('no_telp')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                            @enderror
                            <div class="text-danger"></div>
                        </div>
                        <div class="form-gp" hidden>
                            <label for="berkas">Berkas</label>
                            <input type="text" id="berkas"class="form-control" name="berkas"  value="-" required autocomplete="berkas" autofocus>
                            @error('berkas')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                            @enderror
                            <div class="text-danger"></div>
                        </div>
                        <div class="form-gp" hidden>
                            <label for="status">Status</label>
                            <input type="text" id="status"class="form-control" name="status"  value="0" required autocomplete="status" autofocus>
                            @error('status')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                            @enderror
                            <div class="text-danger"></div>
                        </div>
                        <div class="form-gp" hidden>
                            <label for="level">Level</label>
                            <input type="text" id="level"class="form-control" name="level"  value="2" required autocomplete="level" autofocus>
                            @error('level')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                            @enderror
                            <div class="text-danger"></div>
                        </div>
                        <div class="form-gp" hidden>
                            <label for="penempatans">Pennempatans</label>
                            <input type="text" id="penempatans"class="form-control" name="penempatans"  value="-" required autocomplete="penempatans" autofocus>
                            @error('penempatans')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                            @enderror
                            <div class="text-danger"></div>
                        </div>
                        <div class="form-gp" hidden>
                            <label for="divisis">Divisis</label>
                            <input type="text" id="divisis"class="form-control" name="divisis" value="-" required autocomplete="divisis" autofocus>
                            @error('divisis')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                            @enderror
                            <div class="text-danger"></div>
                        </div>
                        <div class="form-gp" hidden>
                            <label for="jenis_magang">Jenis Magang</label>
                            <input type="text" id="jenis_magang"class="form-control" name="jenis_magang" value="-" required autocomplete="jenis_magang" autofocus >
                            @error('jenis_magang')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                            @enderror
                            <div class="text-danger"></div>
                        </div>
                        <div class="submit-btn-area">
                            <button id="form_submit" type="submit">Submit <i class="ti-arrow-right"></i></button>
                        </div>
                        <div class="form-footer text-center mt-5">
                            <p class="text-muted">Already have an account? <a href="{{ route('login') }}">Sign in</a></p>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <!-- login area end -->

    <!-- jquery latest version -->
    <script src="assets/js/vendor/jquery-2.2.4.min.js"></script>
    <!-- bootstrap 4 js -->
    <script src="assets/js/popper.min.js"></script>
    <script src="assets/js/bootstrap.min.js"></script>
    <script src="assets/js/owl.carousel.min.js"></script>
    <script src="assets/js/metisMenu.min.js"></script>
    <script src="assets/js/jquery.slimscroll.min.js"></script>
    <script src="assets/js/jquery.slicknav.min.js"></script>

    <!-- others plugins -->
    <script src="assets/js/plugins.js"></script>
    <script src="assets/js/scripts.js"></script>
</body>

</html>
