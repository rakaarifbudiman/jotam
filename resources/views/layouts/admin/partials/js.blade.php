<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"
    integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous">
</script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.min.js"
    integrity="sha384-mQ93GR66B00ZXjt0YO5KlohRA5SY2XofN4zfuZxLkoj1gXtW8ANNCe9d5Y3eG5eD" crossorigin="anonymous">
</script>
{{-- <!-- feather icon js--> --}}
<script src="{{ asset('assets/js/icons/feather-icon/feather.min.js') }}"></script>
<script src="{{ asset('assets/js/icons/feather-icon/feather-icon.js') }}"></script>
{{-- <!-- Sidebar jquery--> --}}
<script src="{{ asset('assets/js/sidebar-menu.js') }}"></script>
<script src="{{ asset('assets/js/config.js') }}"></script>
{{-- <!-- Theme js--> --}}
<script src="{{ asset('assets/js/script.js') }}"></script>
<script src="{{ asset('assets/js/iccs/header.js') }}"></script>
{{-- <!-- Plugin used--> --}}

{{-- <!-- Vendor JS Files --> --}}
<script src="{{ asset('assets_old/vendor/tinymce/tinymce.min.js') }}"></script>
<script src="{{ asset('assets_old/vendor/simple-datatables/simple-datatables.js') }}"></script>
{{-- <!-- Template Main JS File --> --}}
<script src="{{ asset('assets_old/js/main.min.js') }}"></script>
{{-- <!-- Plugins JS start--> --}}
@stack('scripts')
{{-- <!-- Plugins JS Ends--> --}}
<script>
    $(document).ready(function() {
        $(".preloader").fadeOut()
        //toggle side bar
        $nav = $('.main-nav');
        $header = $('.page-main-header');
        $nav.toggleClass('close_icon');
        $header.toggleClass('close_icon');
    });
</script>
