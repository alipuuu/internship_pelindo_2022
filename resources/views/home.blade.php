@extends('layout.v_template')
@section('title', 'Success Login!!')
@section('content')
 <div class="col-lg-12 mt-5">
    <div class="card">
        <div class="card-body">
            <h4 class="header-title">Selamat {{ Auth::user()->name }}!!!,  Anda {{ __('Success Login') }}</h4>
            <div class="additional-content">
                @if (session('status'))
                <div class="alert alert-success" role="alert">
                    {{ session('status') }}
                </div>
                @endif
                Selamat mengakses web ini
            </div>
        </div>
    </div>
</div>
@endsection
