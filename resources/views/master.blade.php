<!DOCTYPE html>
<html lang="{{ current_language() }}">
    <head>
        @if (env('APP_ENV') === 'production')
            <!-- Global site tag (gtag.js) - Google Analytics -->
            <script async src="https://www.googletagmanager.com/gtag/js?id=G-GVCGCKJ5NG"></script>
            <script>
                window.dataLayer = window.dataLayer || [];
                function gtag(){dataLayer.push(arguments);}
                gtag('js', new Date());

                gtag('config', 'G-GVCGCKJ5NG');
            </script>
        @endif
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="description" content={{ seo_description() }}>
        <meta name="keywords" content={{ seo_keywords() }}>
        <meta name="author" content="Alex NGOMBOL">

        <title>@yield('master.title')</title>
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <link rel="apple-touch-icon" sizes="57x57" href="{{ favicon_img_asset('apple-icon-57x57') }}">
        <link rel="apple-touch-icon" sizes="60x60" href="{{ favicon_img_asset('apple-icon-60x60') }}">
        <link rel="apple-touch-icon" sizes="72x72" href="{{ favicon_img_asset('apple-icon-72x72') }}">
        <link rel="apple-touch-icon" sizes="76x76" href="{{ favicon_img_asset('apple-icon-76x76') }}">
        <link rel="apple-touch-icon" sizes="114x114" href="{{ favicon_img_asset('apple-icon-114x114') }}">
        <link rel="apple-touch-icon" sizes="120x120" href="{{ favicon_img_asset('apple-icon-120x120') }}">
        <link rel="apple-touch-icon" sizes="144x144" href="{{ favicon_img_asset('apple-icon-144x144') }}">
        <link rel="apple-touch-icon" sizes="152x152" href="{{ favicon_img_asset('apple-icon-152x152') }}">
        <link rel="apple-touch-icon" sizes="180x180" href="{{ favicon_img_asset('apple-icon-180x180') }}">
        <link rel="icon" type="image/png" sizes="192x192" href="{{ favicon_img_asset('android-icon-192x192') }}">
        <link rel="icon" type="image/png" sizes="32x32" href="{{ favicon_img_asset('favicon-32x32') }}">
        <link rel="icon" type="image/png" sizes="96x96" href="{{ favicon_img_asset('favicon-96x96') }}">
        <link rel="icon" type="image/png" sizes="16x16" href="{{ favicon_img_asset('favicon-16x16') }}">
        <link rel="manifest" href="{{ favicon_file_asset('manifest') }}">
        <meta name="msapplication-TileColor" content="#ffffff">
        <meta name="msapplication-TileImage" content="/ms-icon-144x144.png">
        <meta name="theme-color" content="#ffffff">

        @stack('master.style')
        <link rel="stylesheet" href="{{ css_asset('master') }}" type="text/css">

        <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@200;500&display=swap" rel="stylesheet">
    </head>

    <body>
        @yield('master.body')
        <script src="{{ js_asset('jquery-3.2.1.min') }}" type="text/javascript"></script>
        <script src="{{ js_asset('plugins') }}" type="text/javascript"></script>
        <script src="{{ js_asset('polygons') }}" type="text/javascript"></script>
        @stack('master.script')
    </body>
</html>
