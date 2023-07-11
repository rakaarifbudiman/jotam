@extends('layouts.admin.master')
@section('title', 'Add New Customer')
@push('css')
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/prism.css') }}">
    <style>
        body{
            overflow-y: hidden;
        }
        
    </style>
@endpush
@section('content')
    <div class="pagetitle mb-0">
        @component('components.breadcrumb')
            @slot('breadcrumb_title')
                <h3>Add New Customer</h3>
            @endslot
            <li class="breadcrumb-item"><a href="{{ route('customers.dashboard') }}">Dashboard</a></li>
            <li class="breadcrumb-item"><a href="{{ route('customers.index') }}">List Customers</a></li>
            <li class="breadcrumb-item"><a href="{{ route('customers.create') }}">Add New</a></li>
        @endcomponent
    </div><!-- End Page Title -->
    <div class="row">
        <div class="col-12">
            <form class="row g-3" action="{{ route('customers.store') }}" method="POST">
                @csrf
                <div class="col-md-4">
                    <label for="entry_at" class="form-label">Tanggal Entry</label>
                    <input type="date" class="form-control" name="entry_at"
                        value="{{ old('entry_at', Carbon\Carbon::parse(now())->format('Y-m-d')) }}">
                </div>
                <div class="col-md-4">
                    <label class="form-label">Industries</label>
                    <input name="industries" type="text" list="listindustries" class="form-control @error('industries') is-invalid @enderror" id="industries" value="{{ old('industries') }}"/>                      
                      <datalist id="listindustries">   
                        @forelse ($industries as $industry)
                          <option value="{{$industry->name}}">{{$industry->name}}</option>       
                        @empty                          
                        @endforelse   
                      </datalist>
                </div>       
                <div class="col-md-4">
                    <label for="data_form" class="form-label">Data Form</label>
                    <input type="text" class="form-control" name="data_form"
                        value="{{ old('data_form') }}">
                </div>         
                <div class="col-md-4">
                    <label for="visit_at" class="form-label">Visit Date</label>
                    <input type="date" class="form-control" name="visit_at"
                        value="{{ old('visit_at') }}">
                </div>  
                <div class="col-md-4">
                    <label for="telephone" class="form-label">Telephone</label>
                    <input type="text" class="form-control" name="telephone"
                        value="{{ old('telephone') }}">
                </div>  
                <div class="col-md-4">
                    <label for="company" class="form-label">Company</label>
                    <input type="text" class="form-control" name="company"
                        value="{{ old('company') }}">
                </div> 
                <div class="col-md-12">
                    <label for="address" class="form-label">Address</label>
                    <textarea class="form-control" name="address" id="address" rows="3">{{ old('address') }}</textarea>                    
                </div>  
                <div class="col-md-6">
                    <label for="first_name" class="form-label">First Name</label>
                    <input type="text" class="form-control" name="first_name"
                        value="{{ old('first_name') }}">
                </div> 
                <div class="col-md-6">
                    <label for="last_name" class="form-label">Last Name</label>
                    <input type="text" class="form-control" name="last_name"
                        value="{{ old('last_name') }}">
                </div> 
                <div class="col-md-6">
                    <label for="position" class="form-label">Position</label>
                    <input type="text" class="form-control" name="position"
                        value="{{ old('position') }}">
                </div> 
                <div class="col-md-6">
                    <label for="email" class="form-label">Email</label>
                    <input type="email" class="form-control" name="email"
                        value="{{ old('email') }}" required>
                </div> 
                <div class="col-md-6">
                    <label for="handphone" class="form-label">Handphone</label>
                    <input type="text" class="form-control" name="handphone"
                        value="{{ old('handphone') }}">
                </div> 
                <div class="col-md-6">
                    <label for="sales" class="form-label">ID Sales</label>
                    <input type="text" class="form-control" name="sales"
                        value="{{ old('sales') }}">
                </div> 
                <div class="col-md-6">
                    <label for="area" class="form-label">Area</label>
                    <input type="text" class="form-control" name="area"
                        value="{{ old('area') }}">
                </div> 
                <div class="col-md-6">
                    <label for="produk" class="form-label">Produk</label>
                    <input type="text" class="form-control" name="produk"
                        value="{{ old('produk') }}">
                </div>
                 
                <div class="col-md-6">
                    <label for="desc" class="form-label">Desc</label>
                    <textarea class="form-control" name="desc" id="desc" rows="3">{{ old('desc') }}</textarea>                    
                </div>  
                <div class="col-md-6">
                    <label for="input" class="form-label">Input</label>
                    <textarea class="form-control" name="input" id="input" rows="3">{{ old('input') }}</textarea>                    
                </div>  
                <div class="col-12">
                    <button type="submit" class="btn btn-primary">Save</button>
                </div>
            </form>

        </div>
    </div>
@stop
