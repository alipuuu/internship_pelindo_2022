@extends('layout.v_template')
@section('title', 'Change Password')
@section('content')
<div class="container">
    <div class="login-box ptb--50">
        <form>
            <div class="login-form-head">
                <h4>Reset Password</h4>
                <p>Hey! Reset Your Password and comeback again</p>
            </div>
            <div class="login-form-body">
                <div class="form-gp">
                    <label for="exampleInputPassword1">Old Password</label>
                    <input type="password" id="exampleInputPassword1">
                    <i class="ti-lock"></i>
                </div>
                <div class="form-gp">
                    <label for="exampleInputPassword2">New Password</label>
                    <input type="password" id="exampleInputPassword2">
                    <i class="ti-lock"></i>
                </div>
                <div class="submit-btn-area mt-5">
                    <button id="form_submit" type="submit">Reset <i class="ti-arrow-right"></i></button>
                </div>
            </div>
        </form>
    </div>
</div>
@endsection
