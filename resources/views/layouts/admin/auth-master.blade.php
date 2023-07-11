<!DOCTYPE html>
<html lang="en">

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="iccs">
    <meta name="keywords" content="iccs">
    <meta name="author" content="raka">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <link rel="icon" href="{{ asset('assets/images/logo/cropped-logo-jotam-new-180x180.png') }}"
        type="image/x-icon">
    <link rel="shortcut icon" href="{{ asset('assets/images/logo/cropped-logo-jotam-new-180x180.png') }}"
        type="image/x-icon">
    <title>Jotam - @yield('title', 'Page Title')</title>

    <!-- Font Awesome-->
    @includeIf('layouts.admin.partials.css')
    <noscript>
        <h1 class="justify-content-center">Please ENABLE JAVASCRIPT to access this page</h1>
    </noscript>
</head>

<body>
    <!-- page-wrapper Start-->
    <div class="page-wrapper compact-sidebar" id="pageWrapper">

        <div class="page-body mt-4">
            <!-- Container-fluid starts-->
            @include('layouts.admin.partials.sweetalert')
            @yield('content')
            <!-- Container-fluid Ends-->
        </div>
        <a href="#" class="btn-to-the-top" id="btn-to-the-top" onclick="topFunction()"><i
                class="fa-sharp fa-solid fa-arrow-up"></i></a>
    </div>
    <!-- footer start-->

    @includeIf('layouts.admin.partials.js')
    <footer style="margin:0px !important;padding: 0px !important; height:20px">
        Copyright
        {{ date('Y') }}-{{ date('Y', strtotime('+1 year')) }} © {{ config('app.name') }}
        {{ config('app.version') }} All rights reserved. <a class="text-primary" href="https://saweria.co/rakaarif"
            target="_blank">Support Admin</a>
    </footer>
</body>

</html>
