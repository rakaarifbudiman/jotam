@extends('layouts.admin.master')
@section('title', 'Dashboard')
@push('css')
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/prism.css') }}">    
@endpush
@section('content')
    <div class="pagetitle mb-0">
        <div class="row">
            <div class="col-lg-6 mb-2">
                <h3 class="font-primary">Hi Welcome Back, {{ Auth::user()->name }} <i class="font-primary star"
                        data-feather="star"></i></h3>                        
            </div>
            <div class="col-lg-6 mb-2">
                <!-- Bookmark Start-->
                <div class="bookmark">
                    <ul>                        
                        <li>
                            <a href="" data-placement="bottom"                                
                                data-original-title=""><i data-feather="alert-triangle"
                                    class="text-danger"></i><span
                                    class="badge badge-light text-danger"></span>
                            </a>
                        </li>
                    </ul>
                </div>
                <!-- Bookmark Ends-->
            </div>
        </div>
    </div><!-- End Page Title -->    
    <div class="row">
        <div class="col-md-4">
            <div class="card">                
                <div class="text-center">
                    <img class="card-img-top pt-2" src="{{asset('assets\images\logo\cms-icon.png')}}" alt="CMS Icon" style="width: 10%">
                    <h5 class="card-title mb-0">CMS</h5>
                    <p class="card-text">Customer Management System</p>
                    <a href="{{route('customers.dashboard')}}" class="btn btn-primary">Go to Dashboard</a>
                </div>
            </div>
        </div>             
    </div>

@stop
