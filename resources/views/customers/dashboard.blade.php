@extends('layouts.admin.master')
@section('title', 'Dashboard Customer')
@push('css')
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/prism.css') }}">
    <style>
        body {
            height: 10%;
        }
    </style>
@endpush
@section('content')
    <div class="pagetitle mb-0">
        <div class="row">
            <div class="col-lg-6 mb-2">
                <h3 class="font-primary">Customer Dashboard <i class="font-primary star" data-feather="star"></i></h3>
            </div>
        </div>
    </div><!-- End Page Title -->
    <div class="row">
        <div class="col">
            <a href="{{ route('customers.index') }}" class="btn btn-sm btn-primary"
                onclick="return confirm('Data Customer Sangat Banyak, Hanya Menampilkan 500 Data, Lanjut ?');"> List
                Customers</a>
            <a href="#" class="btn btn-sm btn-success" data-bs-toggle="modal"
                                        data-bs-target="#modalsearchcustomer-js" title="Search Customer"><i
                                            class="fa-sharp fa-solid fa-search"></i></a>
        </div>
    </div>
@includeIf('customers.modal.modalsearch')
@stop
