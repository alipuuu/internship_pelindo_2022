@extends('layout.v_template')
@section('title', 'Change Password')
@section('content')
<!-- This is what you need -->
<script src="dist/sweetalert.js"></script>
<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
<link rel="stylesheet" href="dist/sweetalert.css">
<div class="container">
    <div class="login-box ptb--50">
        <form method="POST" action="/change_password">
            @csrf
            <div class="login-form-head">
                <h4>Reset Password</h4>
                <p>Hey! Reset Your Password and comeback again</p>
            </div>
            <div class="login-form-body">
                <div class="form-gp">
                    <label for="current_password">Current Password</label>
                    <input type="password" id="current_password" name="current_password" autocomplete="current-password">
                    <i class="ti-lock"></i>
                </div>
                <div class="form-gp">
                    <label for="new_password">New Password</label>
                    <input type="password" id="new_password" name="new_password" autocomplete="new_password">
                    <i class="ti-lock"></i>
                </div>
                <div class="form-gp">
                    <label for="new_confirm_password">Confirm New Password</label>
                    <input type="password" id="new_confirm_password" name="new_confirm_password" autocomplete="new_confirm_password">
                    <i class="ti-lock"></i>
                </div>
                <div class="submit-btn-area mt-5">
                    <button class=" sweet-3" id="form_submit" type="submit" onclick="_gaq.push(['_trackEvent', 'example', 'try', 'sweet-3']);">Reset <i class="ti-arrow-right"></i></button>
                </div>
            </div>
        </form>
    </div>
</div>
<script>
document.querySelector('.sweet-3').onclick = function(){
swal("Password Changed!", "You clicked the button!", "success");
};
</script>
<script>
!function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0],p=/^http:/.test(d.location)?'http':'https';if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src=p+'://platform.twitter.com/widgets.js';fjs.parentNode.insertBefore(js,fjs);}}(document, 'script', 'twitter-wjs');
</script>
@endsection
