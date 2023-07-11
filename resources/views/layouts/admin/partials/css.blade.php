{{-- Google font --}}
<link rel="preconnect" href="https://fonts.gstatic.com">
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
<link href="{{asset('assets/fontawesome/css/all.css')}}" rel="stylesheet">
{{-- <!-- Feather icon--> --}}
<link rel="stylesheet" type="text/css" href="{{ asset('assets/css/feather-icon.css')}}">

{{-- <!-- App css--> --}}
<link rel="stylesheet" type="text/css" href="{{ asset('assets/css/style.css')}}">
<link id="color" rel="stylesheet" href="{{ asset('assets/css/color-3.css')}}" media="screen">
{{-- <!-- Responsive css--> --}}
<link rel="stylesheet" type="text/css" href="{{ asset('assets/css/responsive.css')}}">

{{-- <!-- Vendor CSS Files --> --}}
<link href="{{ asset('assets_old/vendor/simple-datatables/style.min.css')}}" rel="stylesheet">

{{-- <!-- Plugins css start--> --}}
@stack('css')
{{-- <!-- Plugins css Ends--> --}}
<!-- Template Jquery File -->
<script src="https://code.jquery.com/jquery-3.6.3.min.js"
    integrity="sha256-pvPw+upLPUjgMXY0G+8O0xUf+/Im1MZjXxxgOcBQBXU=" crossorigin="anonymous"></script>
{{-- <script src="/assets_old/js/jquery.min.js"></script> --}}
<script src="{{ asset('assets_old/js/search.min.js')}}"></script>
{{-- <script src="/assets_old/js/jqtable.min.js"></script> --}}
<script>
    $.fn.poshytip = {
        defaults: null
    }
</script>
