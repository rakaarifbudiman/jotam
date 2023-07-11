@extends('layouts.admin.auth-master')
@section('title', 'Login')
@push('css')
    <!-- Google Fonts -->
    <link href="https://fonts.gstatic.com" rel="preconnect">
    <link
        href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Nunito:300,300i,400,400i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i"
        rel="stylesheet">

    <!-- Vendor CSS Files -->
    <link href="{{ asset('assets_old/vendor/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet">


    <!-- Template Main CSS File -->
    <link href="{{ asset('assets_old/css/style.css') }}" rel="stylesheet">
    <style>
      #toggler{
        position: absolute;
        z-index: 9;
        right: 20px;
        top: 50%;
        transform: translateY(-50%);
        cursor: pointer;
      }
      .icon-reload{
        cursor: pointer;
      }
    </style>
@endpush
@section('content')
    <section class="section register min-vh-100 d-flex flex-column align-items-center justify-content-center py-4">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-4 col-md-6 d-flex flex-column align-items-center justify-content-center">

                    <div class="card mb-3">

                        <div class="card-body">

                            <div class="pt-4 pb-2">
                                <div class="d-flex justify-content-center py-1">
                                    <a href="/" class="logo d-flex align-items-center w-auto">
                                        <img src="{{ asset('assets/images/logo/cropped-logo-jotam-new-180x180.png') }}"
                                            alt="">
                                        <span class="d-none d-lg-block">{{config('app.name')}}</span>
                                    </a>
                                </div><!-- End Logo -->
                                <h5 class="card-title text-center pb-0 fs-4">Login to Your Account</h5>
                            </div>

                            <form class="row g-3" action="{{ route('login.store') }}" method="POST">
                                @csrf
                                <div class="form-group mb-0">
                                    <label>Email</label>
                                    <div class="input-group has-validation">
                                        <span class="input-group-text"><i class="fa-solid fa-user"></i></span>
                                        <input type="text" name="email" class="form-control" id="yourEmail"
                                            placeholder="Enter Your Email" autofocus required value={{ old('email') }}>
                                        <div class="invalid-feedback">Please enter your email.</div>
                                    </div>
                                </div>
                                <div class="form-group mb-0">
                                    <label>Password</label>
                                    <div class="input-group">
                                        <span class="input-group-text"><i class="fa-solid fa-lock"
                                                id="btn-password"></i></span>
                                        <input type="password" name="password" class="form-control" id="Password"
                                            placeholder="Enter Your Password" minlength="8">
                                        <span><i class="fa fa-eye font-danger" id="toggler"></i></span>
                                    </div>
                                    <div class="invalid-feedback">Please enter your password!</div>
                                </div>
                                <div class="col-12">
                                    <button class="btn-login w-100" type="submit" name="Login">Login</button>
                                </div>
                                <div class="col-12">
                                    @if (Route::has('password.request'))
                                        <a class="btn-link" href="{{ route('password.request') }}">
                                            {{ __('Forgot your password?') }}
                                        </a>
                                    @endif
                                </div>
                                <div class="col-12">
                                    <p class="small mb-0">Don't have account ? <a class="btn-link"
                                            href="{{ route('register') }}">Create an account</a></p>
                                </div>
                            </form>
                        </div>
                    </div>
                    <div class="credits">
                        Designed by <a href="" class="text-danger">{{ config('app.name') }}</a>
                    </div>
                    <div class="credits">
                        Version - {{ config('app.version') }} - {{ config('app.env') }}
                    </div>
                </div>
            </div>
        </div>
    </section>
@stop
@push('scripts')
    <script src="{{ asset('assets/js/auth/login.js') }}"></script>
@endpush
