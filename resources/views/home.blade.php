@extends('master')

@section('master.title', page_title(trans('page.home')))

@section('master.body')
    @include('partials/main')

    <a class="info-toggle" href="#0">
        <span class="info-menu-icon"></span>
    </a>

    @include('partials/info')

    <div id="preloader">
        <div id="loader">
            <div class="line-scale-pulse-out">
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
            </div>
        </div>
    </div>
@endsection

@push('master.style')
    <link rel="stylesheet" href="{{ css_asset('base') }}" type="text/css">
    <link rel="stylesheet" href="{{ css_asset('vendor') }}" type="text/css">
    <link rel="stylesheet" href="{{ css_asset('main') }}" type="text/css">

    <script src="{{ js_asset('modernizr') }}" type="text/javascript"></script>
    <script src="{{ js_asset('pace.min') }}" type="text/javascript"></script>
@endpush

@push('master.script')
    <script src="{{ js_asset('main') }}" type="text/javascript"></script>
@endpush