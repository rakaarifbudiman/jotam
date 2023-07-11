@extends('layouts.admin.master')
@section('title', 'List Customers')
@push('css')
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/prism.css') }}">
    <style>
        body {
            overflow-y: hidden;
        }
    </style>
@endpush
@section('content')
    <div class="pagetitle mb-0">
        @component('components.breadcrumb')
            @slot('breadcrumb_title')
                <h3>List Customers</h3>
            @endslot
            <li class="breadcrumb-item"><a href="{{ route('customers.dashboard') }}">Dashboard</a></li>
            <li class="breadcrumb-item"><a href="{{ route('customers.create') }}">Add New</a></li>
        @endcomponent
    </div><!-- End Page Title -->
    <div class="row">
        <div class="table-responsive-lg">
            <table id="list-customers-table" class="table table-sm table-bordered table-hover datatable">
                <thead>
                    <?php $no = 1; ?>
                    <tr style="background-color: rgb(230, 230, 230);">
                        <th>No</th>
                        <th>Industries</th>
                        <th>Company</th>
                        <th>First Name</th>
                        <th>Last Name</th>
                        <th>Email</th>
                        <th style="text-align: center">#</th>
                    </tr>
                </thead>
                <tbody>
                    @forelse ($customers as $customer)
                        <tr data-idx="{{ $customer->id }}">
                            <td>{{ $no++ }}</td>
                            <td>{{ $customer->industries }}</td>
                            <td>{{ $customer->company }}</td>
                            <td>{{ $customer->first_name }}</td>
                            <td>{{ $customer->last_name }}</td>
                            <td>{{ $customer->email }}</td>
                            <td style="width: 100px">
                                @if (Auth::user()->level > 1)
                                    <a href="#" class="btn btn-success btn-xs" data-bs-toggle="modal"
                                        id="btn-editcustomer-js" data-bs-target="#modaleditcustomer-js" title="Edit"><i
                                            class="fa-sharp fa-solid fa-edit"></i></a>
                                    <a href="#" class="btn btn-danger btn-xs" data-bs-toggle="modal"
                                        id="btn-deletecustomer-js" data-bs-target="#modaldeletecustomer-js" title="Delete"><i
                                            class="fa-sharp fa-solid fa-trash"></i></a>                                   
                                @endif
                            </td>
                        </tr>
                        
                    @empty
                    @endforelse
                </tbody>
            </table>
        </div>
    </div>
    {{ $customers->links() }}
    <div
        class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-1 pb-1 mb-1 border-bottom border-danger">
    </div>
    <div class="row">
        <form action="{{ route('customers.import') }}" class="row g-3" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="col-md-3">
                <input type="file" name="file">
                @error('file')
                    <div class="text-danger">{{ $message }}</div>
                @enderror
            </div>
            <div class="col-md-9">
                <button type="submit" class="btn btn-success">Import Data from Excel</button>
            </div>
        </form>
    </div>
    @includeIf('customers.modal.modaledit')
@stop
@push('scripts')
    <script src="https://code.jquery.com/ui/1.9.2/jquery-ui.js"></script>
    <script>
        $(document).ready(function() {
            $(document).on('click', '#btn-editcustomer-js', function() {
                var row = $(this).closest("tr");
                var idx = row.data("idx");
                actionurl = "/customers-update/" + idx + "/update/";
                $('#frm-modaleditcustomer-js').attr('action', actionurl);
                $.ajax({
                    type: "get",
                    url: "/customers-get/" + idx + "/js/",
                    success: function(data) {
                        $('#modaledit_id').val(data.customer.id);
                        $('#modaledit_entry_at').val(data.customer.entry_at ? $.datepicker
                            .formatDate('yy-mm-dd', new Date(data.customer.entry_at)) : null
                            );
                        $('#modaledit_industries').val(data.customer.industries);
                        $('#modaledit_data_form').val(data.customer.data_form);
                        $('#modaledit_telephone').val(data.customer.telephone);
                        $('#modaledit_company').val(data.customer.company);
                        $('textarea#modaledit_address').val(data.customer.address);
                        $('#modaledit_first_name').val(data.customer.first_name);
                        $('#modaledit_last_name').val(data.customer.last_name);
                        $('#modaledit_position').val(data.customer.position);
                        $('#modaledit_email').val(data.customer.email);
                        $('#modaledit_handphone').val(data.customer.handphone);
                        $('#modaledit_sales').val(data.customer.sales);
                        $('#modaledit_area').val(data.customer.area);
                        $('#modaledit_produk').val(data.customer.produk);
                        $('textarea#modaledit_desc').val(data.customer.desc);
                        $('textarea#modaledit_input').val(data.customer.input);
                    }
                });
            });

            $(document).on('click', '#btn-deletecustomer-js', function() {
                var row = $(this).closest("tr");
                var idx = row.data("idx");
                actionurl = "/customers-destroy/" + idx + "/destroy";
                $('#frm-modaldeletecustomer-js').attr('action', actionurl);
                $.ajax({
                    type: "get",
                    url: "/customers-get/" + idx + "/js/",
                    success: function(data) {
                        $('#modaldelete_id').val(data.customer.id);
                    }
                });
            });
        });
    </script>
@endpush
