@extends('layouts.admin.auth-master')
@section('title', 'Reset Password')
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
                                        <span class="d-none d-lg-block">{{ config('app.name') }}</span>
                                    </a>
                                </div><!-- End Logo -->
                                <h5 class="card-title text-center pb-0 fs-4">Change your password ? </h5>
                            </div>

                            <form class="row g-3" action="{{ route('password.store') }}" method="POST">
                                @csrf                                
                                <input type="hidden" name="token" value="{{ $request->route('token') }}">
                                <div class="col-12">
                                    <div class="input-group has-validation">
                                        <input type="hidden" name="email" class="form-control" id="yourUsername"
                                            placeholder="Please enter your email" required
                                            value="{{ old('email', $request->email) }}">
                                        <input type="email" name="email2" class="form-control" id="yourUsername"
                                            placeholder="Please enter your email" required
                                            value="{{ old('email', $request->email) }}" disabled>
                                        <div class="invalid-feedback">Please enter your email.</div>
                                    </div>
                                </div>
                                <div class="col-12">
                                    <div class="input-group has-validation">
                                        <input type="password" name="password" class="form-control" id="password"
                                            placeholder="New Password" autofocus required minlength="8">
                                        <div class="invalid-feedback">Please enter new password.</div>
                                    </div>
                                </div>
                                <div class="col-12">
                                    <div class="input-group has-validation">
                                        <input type="password" name="password_confirmation" class="form-control"
                                            id="password_confirmation" placeholder="Confirm Password" required
                                            minlength="8">
                                        <div class="invalid-feedback">Please enter confirm password.</div>
                                    </div>
                                </div>

                                <div class="col-12">
                                    <button class="btn-login w-100" type="submit" name="changepassword">Change
                                        Password</button>
                                </div>
                                <nav>
                                    <ol class="breadcrumb">
                                        <li class="breadcrumb-item">*Password length min.8 character, contain at least mixed
                                            case (lower, upper case, number, and symbol)</li>
                                    </ol>
                                </nav>                                
                            </form>
                            <div class="col-12">
                                <p class="small mb-0">Back to <a href="/">Login</a></p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </section>
@stop
