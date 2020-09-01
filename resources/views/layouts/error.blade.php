@extends('master')

@section('master.title')
    @yield('error.title')
@endsection

@section('master.body')
    <div id="notfound">
        <div id="particles-js" class="home-particles"></div>
        <div class="notfound">
            <div class="notfound-404">@yield('error.code')</div>
            <p>@yield('error.description')</p>
            <a href="{{ locale_route('home') }}">{{ trans('page.home') }}</a>
        </div>
        <div id="particles-js" class="home-particles"></div>
    </div>
@endsection

@push('master.style')
    <link rel="stylesheet" href="{{ css_asset('error') }}" type="text/css">
@endpush