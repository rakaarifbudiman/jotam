@push('css')
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/prism.css') }}">
@endpush

<div class="card-body">
    @if ($message = Session::get('success'))
        <div class="alert alert-success dark alert-dismissible fade show" role="alert">
            <div>{{ $message }}</div>
            <button class="btn-close" type="button" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
    @endif
    @if ($message = Session::get('status'))
        <div class="alert alert-success dark alert-dismissible fade show" role="alert">
            <div>{{ $message }}</div>
            <button class="btn-close" type="button" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
    @endif
    @if ($message = Session::get('info'))
        <div class="alert alert-info dark alert-dismissible fade show" role="alert">
            <div>{{ $message }}</div>
            <button class="btn-close" type="button" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
    @endif
    @if ($message = Session::get('warning'))
        <div class="alert alert-warning dark alert-dismissible fade show" role="alert">
            <div>{{ $message }}</div>
            <button class="btn-close" type="button" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
    @endif
    @if ($message = Session::get('error'))
        <div class="alert alert-danger dark alert-dismissible fade show" role="alert">
            <div> {{ $message }}</div>
            <button class="btn-close" type="button" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
    @endif
    @if ($errors->any())
        <div class="alert alert-danger dark alert-dismissible fade show" role="alert">
            <div>Whoopss... Something wrong ! </div>
            <ul>
                @foreach ($errors->all() as $error)
                    <li> {{ $error }} </li>
                @endforeach
            </ul>
            {{ $message }}
            <button class="btn-close" type="button" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
    @endif
</div>

@push('scripts')
    <script src="{{ asset('assets/js/height-equal.js') }}"></script>
    <script src="{{ asset('assets/js/tooltip-init.js') }}"></script>
@endpush
